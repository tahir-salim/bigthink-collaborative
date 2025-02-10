<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>

<?php get_header(); ?>


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
                    <p><?php echo $first_section['content'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-2 our-process">
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
                <div class="col-lg-4">
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
<?php get_footer(); ?>