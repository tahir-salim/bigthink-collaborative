<?php /** * Template Name: Testimonials Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="sec-6">
    <div class="container-fluid">
        <div class="row gy-5 wow fadeInUp">

            <?php $box_list = $first_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>

            <div class="col-lg-4">
                <div class="testi-slide testi-page">
                    <p><?php echo $boxlist['content']; ?></p>
                    <div class="bottom">
                        <div class="client">
                            <img src="<?php echo $boxlist['image']; ?>" alt="" loading="lazy">
                            <div class="det">
                                <span class="name"><?php echo $boxlist['heading']; ?></span>
                                <span class="des"><?php echo $boxlist['sub_heading']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php get_footer(); ?>