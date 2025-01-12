$(document).ready(function () {
  const mediaQuery = window.matchMedia("(max-width: 992px)");

  $("nav.navbar .navbar-nav .nav-item").on("click", function (e) {
    if (mediaQuery.matches) {
      $(".collapse").collapse("hide");
    }
  });

  $("#review-carousel").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: [
      "<i class='fa-solid fa-less-than'></i>",
      "<i class='fa-solid fa-greater-than'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      1024: {
        items: 2,
      },
    },
    // autoplay: true,
    // autoplayTimeout: 5000,
    // autoplayHoverPause: true,
  });

  $(".animate-scroll").click(function (event) {
    event.preventDefault();
    var id = $(this).attr("href"),
      top = $(id).offset().top;
    $("body,html").animate(
      {
        scrollTop: top - 76,
      },
      1500
    );
  });

  function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      total: t,
      days: days,
      hours: hours,
      minutes: minutes,
      seconds: seconds,
    };
  }

  function initializeClock(id, endtime) {
    let clock = document.getElementById(id);
    let daysSpan = clock.querySelector(".days");
    let hoursSpan = clock.querySelector(".hours");
    let minutesSpan = clock.querySelector(".minutes");
    let secondsSpan = clock.querySelector(".seconds");
    let timeinterval = setInterval(updateClock, 1000);

    function updateClock() {
      var t = getTimeRemaining(endtime);

      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
      minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
      secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);

      if (t.total <= 0) {
        clearInterval(timeinterval);
      }
    }

    updateClock();
  }

  var deadline = new Date(Date.parse(new Date()) + 11 * 24 * 60 * 60 * 1000); // for endless timer
  initializeClock("clockdiv", deadline);

  //var deadline = "January 01 2018 00:00:00 GMT+0300"; //for time
});
