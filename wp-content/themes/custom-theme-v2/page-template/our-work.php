<?php /** * Template Name: Our Work Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="our-work">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 wow fadeInRight">
                <div class="sec-heading">
                    <span class="sub-heading"><?php echo $first_section['heading'];?></span>
                    <h2><?php echo $first_section['sub_heading'];?></h2>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-md-4">

            <?php $box_list = $first_section['box_list'];?>
            <?php $x=1; foreach ($box_list as $boxlist) {?>
            <?php if ($x>3 && $x<8) {?>
            <div class="col-lg-3">
                <?php } else{?>
                <div class="col-lg-6">
                    <?php } ?>
                    <div class="portfolio-image">
                        <img src="<?php echo $boxlist['image'];?>" alt="">
                    </div>
                </div>
                <?php $x++; }?>
            </div>
        </div>
</section>
<?php get_footer(); ?>