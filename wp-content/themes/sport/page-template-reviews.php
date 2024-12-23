<?php
/*
    Template Name: For Review Page
*/
?>
<?php get_header(); ?>
<section id="review" style="background-image: url(<?php the_field('review_section_background_image'); ?>);">
    <div class="container">
        <h2 class="review_header"><?php the_field('review_section_header'); ?></h2>
        <div class="review_title"><?php the_field('review_section_title'); ?></div>
        <div id="review-carousel" class="owl-carousel">
            <?php
            $slider_items = get_posts([
                'numberposts' => 30,
                'post_type' => 'slider',
                'order'       => 'ASC',
            ]);
            ?>
            <?php if (count($slider_items) > 0) : ?>
                <?php for ($i = 0; $i < count($slider_items); $i++): ?>
                    <div class="review_box">
                        <div class="review_box_annot">"</div>
                        <img class="review_box_img" src="<?php echo get_field('slider_item_image', acf_get_object_id($slider_items[$i])); ?>" />
                        <div class="text">
                            <?php echo get_field('slider_item_text', acf_get_object_id($slider_items[$i])); ?>
                        </div>
                        <div class="autor">
                            <?php echo get_field('slider_item_author', acf_get_object_id($slider_items[$i])); ?>
                            <span class="date">
                                <?php echo get_field('slider_item_date', acf_get_object_id($slider_items[$i])); ?>
                            </span>
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