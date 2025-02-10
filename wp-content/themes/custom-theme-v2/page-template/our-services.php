<?php /** * Template Name: Our Services Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php $box_list = $first_section['box_list'];?>
<?php $box_list_2 = $first_section['box_list_2'];?>

<?php get_header(); ?>

<section class="our-work">
    <div class="container">
        <div class="row align-items-center mb-md-5">
            <div class="col-lg-12 wow fadeInRight">
                <div class="sec-heading center">
                    <span class="sub-heading"><?php echo $first_section['heading'];?></span>
                    <h2><?php echo $first_section['sub_heading'];?></h2>
                    <p><?php echo $first_section['content'];?></p>
                </div>
            </div>
        </div>

        <?php $x=1; foreach ($box_list as $boxlist) {?>
        <div class="box-<?php echo $x;?> <?php if ($x==1) {echo 'showfirst';}?>  port-content">
            <div class="tab-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image-project">
                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-box">
                            <div class="del-wrap">
                                <div class="">
                                    <img src="<?php echo $boxlist['image_2']; ?>" alt="">
                                </div>
                                <h4><?php echo $boxlist['heading']; ?></h4>
                                <p><?php echo $boxlist['content']; ?></p>
                                <?php echo $boxlist['list']; ?>
                                <strong><?php echo $boxlist['para']; ?></strong>
                                <a href="<?php echo $boxlist['button_link']; ?>"><?php echo $boxlist['button_text']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $x++; }?>
        <div class="row">
            <div class="col-lg-12">
                <ul class="slider-tabbing">
                    <?php $x=1; foreach ($box_list_2 as $boxlist) {?>
                    <li data-targetit="box-<?php echo $x;?>" class="<?php if ($x==1) { echo 'active';}?>">
                        <div class="service-slide">
                            <div class="del-wrap">
                                <div class="white-icon">
                                    <img src="<?php echo $boxlist['image']; ?>" alt="">
                                </div>
                                <div class="slide-icon">
                                    <img src="<?php echo $boxlist['image_2']; ?>" alt="">
                                </div>
                                <h4><?php echo $boxlist['heading']; ?></h4>
                                <p><?php echo $boxlist['content']; ?></p>
                                <?php echo $boxlist['list']; ?>
                                <strong><?php echo $boxlist['para']; ?></strong>
                            </div>
                            <div class="arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </li>
                    <?php $x++; }?>
                </ul>

                <div class="slider-text text-center">
                    <p>*Prices vary based on complexity of work and needs.
                        <a href="#">Contact us</a>
                        today for a free consultation and to understand how pricing works.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>