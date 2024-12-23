<?php
/*
    Template Name: For Contacts Page
*/
?>
<?php get_header(); ?>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 position-relative">
                <iframe class="contact_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.354411819754!2d1.3633546177642741!3d52.6527900889342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9e38785c35551%3A0xf4c3001c02baa481!2sBarratt%20Homes%20-%20Woodland%20Heath!5e0!3m2!1sen!2suk!4v1732439249934!5m2!1sen!2suk" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="contact_card">
                    <h2>Our contacts</h2>
                    <div class="contact_item">
                        <span>Adress:</span><?php the_field('company_address', 'options'); ?>
                    </div>
                    <div class="contact_item">
                        <span>Phone:</span>
                        <a href="tel:<?php the_field('phone_number', 'options'); ?>"><?php the_field('phone_number', 'options'); ?></a>
                    </div>
                    <div class="contact_item">
                        <span>Email:</span> <a href="mailto:<?php the_field('company_email', 'options'); ?>"><?php the_field('company_email', 'options'); ?></a>
                    </div>
                    <div class="contact_item">
                        <span>Opening hours:</span><?php the_field('working_hours', 'options'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>