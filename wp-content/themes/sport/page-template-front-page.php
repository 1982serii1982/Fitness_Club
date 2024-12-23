<?php
/*
    Template Name: For Front Page
*/
?>
<?php get_header(); ?>
<header style="background-image: url(<?php the_field('offer_section_background_image'); ?>);">
    <div class="container d-flex flex-column justify-content-end pb-6">
        <div class="header-box">
            <h1 class="header-box_title"><?php the_field('offer_section_header'); ?></h1>
            <p class="header-box_desc">
                <?php the_field('offer_section_title'); ?>
            </p>
            <button data-bs-toggle="modal" data-bs-target="#callBackModal" class="header-box_btn">Call Back</button>
        </div>
        <div class="header-form">
            <div id="clockdiv" class="header-form_clock">
                <div class="header-form_days">
                    <span class="days">10</span>
                    <p>Days</p>
                </div>
                <div class="header-form_hours">
                    <span class="hours">23</span>
                    <p>Hours</p>
                </div>
                <div class="header-form_minutes">
                    <span class="minutes">58</span>
                    <p>Minutes</p>
                </div>
                <div class="header-form_seconds">
                    <span class="seconds">03</span>
                    <p>Seconds</p>
                </div>
            </div>
            <div class="header-form_offer">
                <?php if (have_rows('offer_section_timer')): ?>
                    <?php while (have_rows('offer_section_timer')): the_row(); ?>
                        <div class="header-form_offer_left">
                            <h3><?php the_sub_field('offer_section_timer_title'); ?></h3>
                            <div class="text">
                                <?php the_sub_field('offer_section_timer_subtitle'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="header-form_offer_right">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticModal">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="timing">
    <div class="container">
        <h2 class="timing_header"><?php the_field('timing_section_header'); ?></h2>
        <div class="timing_title"><?php the_field('timing_section_title'); ?></div>
        <ul class="nav nav-pills timing_table" id="pills-tab-timing" role="tablist">
            <?php if (get_field('timing_section_schedule_repeater_1')): $i = 0; ?>
                <?php while (has_sub_field('timing_section_schedule_repeater_1')) : ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link<?php echo $i === 0 ? ' active' : ''; ?>" id="pills-<?php echo strtolower(get_sub_field('timing_section_schedule_day')); ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo strtolower(get_sub_field('timing_section_schedule_day')); ?>" type="button" role="tab" aria-controls="pills-<?php echo strtolower(get_sub_field('timing_section_schedule_day')); ?>" aria-selected="true"><?php the_sub_field('timing_section_schedule_day'); ?></button>
                    </li>
                    <?php $i++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <div class="tab-content">
            <?php if (get_field('timing_section_schedule_repeater_1')): $i = 0; ?>
                <?php while (has_sub_field('timing_section_schedule_repeater_1')) : ?>
                    <div class="tab-pane fade<?php echo $i === 0 ? ' show active' : ''; ?>" id="pills-<?php echo strtolower(get_sub_field('timing_section_schedule_day')); ?>" role="tabpanel" aria-labelledby="pills-<?php echo strtolower(get_sub_field('timing_section_schedule_day')); ?>-tab">
                        <?php if (get_sub_field('timing_section_schedule_repeater_2')): $j = 0; ?>
                            <?php while (has_sub_field('timing_section_schedule_repeater_2')) : ?>
                                <div class="time-box">
                                    <div class="time-box_time"><?php the_sub_field('timing_section_schedule_time'); ?></div>
                                    <div class="time-box_detail">
                                        <div class="title"><?php the_sub_field('timing_section_schedule_classroom'); ?></div>
                                        <div class="name"><?php the_sub_field('timing_section_schedule_coach'); ?></div>
                                    </div>
                                </div>
                                <?php $j++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php $i++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section id="sale" style="background-image: url(<?php the_field('sale_background_image'); ?>);">
    <div class="container">
        <h2><?php the_field('sale_header'); ?></h2>
        <div class="sale_title">
            <?php the_field('sale_title'); ?>
        </div>
        <button data-bs-toggle="modal" data-bs-target="#staticModal" class="sale_button">Join Now</button>
    </div>
</section>
<section id="sport">
    <div class="container">
        <div class="row">
            <?php
            $gallery_items = get_posts([
                'numberposts' => 30,
                'post_type' => 'gallery',
                'order'       => 'ASC',
            ]);
            ?>
            <?php if (count($gallery_items) > 0) : ?>
                <?php for ($i = 0; $i < count($gallery_items); $i++):
                    switch (count($gallery_items)) {
                        case 1:
                            $col = 12;
                            break;
                        case 2:
                            if ($i == 0) {
                                $col = 8;
                            } else {
                                $col = 4;
                            }
                            break;
                        case 3:
                            if ($i == 0) {
                                $col = 8;
                            } elseif ($i == 1) {
                                $col = 4;
                            } else {
                                $col = 12;
                            }
                            break;
                        case 4:
                            if ($i == 1 || $i == 2) {
                                $col = 4;
                            } else {
                                $col = 8;
                            }
                            break;
                        case 5:
                            if ($i == 1 || $i == (count($gallery_items) - 2)) {
                                $col = 4;
                            } elseif ($i == 0 || $i == (count($gallery_items) - 1)) {
                                $col = 8;
                            } else {
                                $col = 12;
                            }
                            break;
                        case 6:
                            if ($i == 1 || $i == (count($gallery_items) - 2)) {
                                $col = 4;
                            } elseif ($i == 0 || $i == (count($gallery_items) - 1)) {
                                $col = 8;
                            } else {
                                $col = 6;
                            }
                            break;
                        case 7:
                            if ($i == 1 || $i == (count($gallery_items) - 2)) {
                                $col = 4;
                            } elseif ($i == 0 || $i == (count($gallery_items) - 1)) {
                                $col = 8;
                            } else {
                                $col = $i === 4 ? 12 : 6;
                            }
                            break;
                        default:
                            if (count($gallery_items) % 2 === 0) {
                                if ($i == 1 || $i == (count($gallery_items) - 2)) {
                                    $col = 4;
                                } elseif ($i == 0 || $i == (count($gallery_items) - 1)) {
                                    $col = 8;
                                } else {
                                    $col = 6;
                                }
                            } else {
                                if ($i == 1 || $i == (count($gallery_items) - 2)) {
                                    $col = 4;
                                } elseif ($i == 0 || $i == (count($gallery_items) - 1)) {
                                    $col = 8;
                                } elseif ($i == (count($gallery_items) - 1) / 2) {
                                    $col = 12;
                                } else {
                                    $col = 6;
                                }
                            }
                            break;
                    }
                ?>
                    <div class="col-lg-<?php echo $col; ?> col-12">
                        <div class="sport_box" style="background-image: url(<?php echo get_field('gallery_background_image_homepage', acf_get_object_id($gallery_items[$i])); ?>);">
                            <p class="sport_title"><?php echo get_field('gallery_header_homepage', acf_get_object_id($gallery_items[$i])); ?></p>
                            <p class="sport_text"><?php echo get_field('gallery_title_homepage', acf_get_object_id($gallery_items[$i])); ?></p>
                            <button class="sport_btn" data-bs-toggle="modal" data-bs-target="#staticModal"><?php echo get_field('gallery_button_text_homepage', acf_get_object_id($gallery_items[$i])); ?></button>
                        </div>
                    </div>
                <?php endfor; ?>
            <?php else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>