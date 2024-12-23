<?php
/*
    Template Name: For About us Page
*/
?>
<?php get_header(); ?>
<section id="about">
    <div class="container">
        <div class="row">
            <h2 class="about_header"><?php the_field('about_header'); ?></h2>
            <div class="about_title">
                <?php the_field('about_title'); ?>
            </div>
            <div class="col-sm-8">
                <div class="about-left_wrapper">
                    <div class="about-left_text">
                        <ul>
                            <?php if (get_field('about_section_repeater_1')): ?>
                                <?php while (has_sub_field('about_section_repeater_1')) : ?>
                                    <li>
                                        <?php the_sub_field('about_section_new_line'); ?>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="about-right_wrapper">
                    <div class="about-right_item">
                        <div class="about-right_num">22</div>
                        <div class="about-right_text">
                            <p>Club</p>
                            <p>UK wide</p>
                        </div>
                    </div>
                    <div class="about-right_item">
                        <div class="about-right_num">978</div>
                        <div class="about-right_text">
                            <p>Permanent</p>
                            <p>Clients</p>
                        </div>
                    </div>
                    <div class="about-right_item">
                        <div class="about-right_num">74</div>
                        <div class="about-right_text">
                            <p>Best</p>
                            <p>World trainers</p>
                        </div>
                    </div>
                    <div class="about-right_item">
                        <div class="about-right_num">980</div>
                        <div class="about-right_text">
                            <p>Squares</p>
                            <p>Center area</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="about_btn" data-bs-toggle="modal" data-bs-target="#staticModal">Book Now</button>
        </div>
    </div>
</section>
<?php get_footer(); ?>