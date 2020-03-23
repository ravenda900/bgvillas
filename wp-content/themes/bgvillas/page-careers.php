<?php


get_header(); ?>


<!-- Page Banner Section -->
<section class="hero-banner contact-banner d-table w-100" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
    <div class="container">

    </div>
</section>
<!-- // Page Banner Section -->

<section class="clearfix bg-silver">
   <div class="col-md-2"></div>
   <div class="col-md-8">
        <div class="sec-padding clearfix">
            <a href="#" class="inside-h1 ta-center sec-padding --small fc-primary ff-secondary d-block fw-normal"><?php the_field('heading'); ?></a>
            <?php echo do_shortcode('[contact-form-7 id="81" title="careers"]'); ?>

        </div>
    </div>

</section>

<?php get_footer(); ?>
