<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>
<?php $third_section = get_field('third_section');?>
<?php $fourth_section = get_field('fourth_section');?>
<?php $fifth_section = get_field('fifth_section');?>
<?php $sixth_section = get_field('sixth_section');?>

<?php get_header(); ?>
<div class="mainBanner">
    <div class="container">
        <div class="banner-content">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <span class="sub-heading text-white"><?php echo $banner_section['heading'];?></span>
                    <h1 class="banner-heading text-white">
                        <?php echo $banner_section['sub_heading'];?>
                    </h1>
                    <p class="banner-text text-white">
                        <?php echo $banner_section['content'];?>
                    </p>
                    <div class="btn-wrap">
                        <a href="<?php echo $banner_section['button_link'];?>"
                            class="theme-btn"><?php echo $banner_section['button_text'];?></a>
                    </div>
                </div>
                <div class="col-lg-6 wow zoomIn">
                    <div class="banner-img">
                        <img src="<?php echo $banner_section['image'];?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="sec-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="sec1-image">
                    <img src="<?php echo $first_section['image'];?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="sec-heading">
                    <span class="sub-heading"><?php echo $first_section['heading'];?></span>
                    <h2><?php echo $first_section['sub_heading'];?></h2>
                    <p><?php echo $first_section['content'];?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <span class="sub-heading"><?php echo $second_section['heading'];?></span>
                    <h2><?php echo $second_section['sub_heading'];?></h2>
                    <p><?php echo $second_section['content'];?></p>
                </div>
            </div>
        </div>

        <div class="line-black wow fadeInUp">
            <div class="row">
                <?php $box_list = $second_section['box_list'];?>
                <?php foreach ($box_list as $boxlist) {?>
                <div class="col-lg-4 ">
                    <div class="steps-card">
                        <div class="step-icon">
                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                            <span><?php echo $boxlist['para']; ?></span>
                        </div>
                        <div class="">
                            <h3><?php echo $boxlist['heading']; ?></h3>
                            <p><?php echo $boxlist['content']; ?></p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<section class="sec-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInUp">
                <div class="sec3-image1">
                    <img src="<?php echo $third_section['image'];?>" alt="">
                </div>
                <div class="sec3-image2">
                    <img src="<?php echo $third_section['image_2'];?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="sec-heading">
                    <span class="sub-heading text-white"><?php echo $third_section['heading'];?></span>
                    <h2 class="text-white"><?php echo $third_section['sub_heading'];?></h2>
                </div>
                <div class="two-images wow zoomIn">
                    <img src="<?php echo $third_section['image_3'];?>" alt="">
                    <img src="<?php echo $third_section['image_4'];?>" alt="">
                </div>
                <div class="sec3-image3 wow zoomIn">
                    <img src="<?php echo $third_section['image_5'];?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 wow fadeInLeft">
                <div class="sec-heading">
                    <h2 class=""><?php echo $fourth_section['heading'];?></h2>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInRight">
                <div class="btn-wrap justify-content-end">
                    <a href="<?php echo $fourth_section['button_link'];?>"
                        class="theme-btn"><?php echo $fourth_section['button_text'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 wow fadeInLeft">
                <div class="sec-heading">
                    <span class="sub-heading"><?php echo $fifth_section['heading'];?></span>
                    <h2 class=""><?php echo $fifth_section['sub_heading'];?></h2>
                    <p><?php echo $fifth_section['content'];?></p>
                </div>
            </div>
            <div class="col-lg-9 wow fadeInUp">
                <div class="service-slider">

                    <?php $box_list = $fifth_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>

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
                    <?php }?>
                </div>
                <div class="slider-text">
                    <p><?php echo $fifth_section['content_2'];?></p>
                </div>
            </div>
        </div>

        <div class="row mt-md-5 padding-tp">
            <div class="col-lg-3 wow fadeInLeft">
                <div class="sec-heading">
                    <h2 class=""><?php echo $fifth_section['heading_2'];?></h2>
                    <p><?php echo $fifth_section['content_3'];?></p>
                </div>
            </div>
            <div class="col-lg-9 wow fadeInUp">
                <div class="partnership-slider">

                    <?php $box_list = $fifth_section['box_list_2'];?>
                    <?php foreach ($box_list as $boxlist) {?>

                    <div class="service-slide slider2">
                        <div class="del-wrap">
                            <div class="slide-icon">
                                <img src="<?php echo $boxlist['image']; ?>" alt="">
                            </div>
                            <h4><?php echo $boxlist['heading']; ?></h4>
                            <p><?php echo $boxlist['content']; ?></p>

                            <div class="padding">
                                <strong><?php echo $boxlist['para']; ?><i class="far fa-arrow-down"></i> </strong>
                            </div>

                            <div class="list-ul">
                                <?php echo $boxlist['list']; ?>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="btm-Div">
            <div class="row wow fadeInUp">
                <div class="col-lg-12">
                    <div class="slider-text text-center">
                        <p><?php echo $fifth_section['content_2'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-6">
    <div class="container-fluid">
        <div class="row wow fadeInUp">
            <div class="col-lg-12">
                <div class="testi-slider-2">
                    <?php $box_list = $sixth_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <div class="testi-slide">
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
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>