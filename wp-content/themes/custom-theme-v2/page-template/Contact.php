<?php /** * Template Name: Contact Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>
<section class="contact-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="sec-heading center">
                    <span class="sub-heading text-white"><?php echo $first_section['heading'];?></span>
                    <h2 class="text-white"><?php echo $first_section['heading_2'];?></h2>
                    <p class="text-white"><?php echo $first_section['heading_3'];?></p>
                </div>
                <div class="form aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
                    <?php echo do_shortcode('[contact-form-7 id="4ec4eba" title="Contact form 1"]');?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>