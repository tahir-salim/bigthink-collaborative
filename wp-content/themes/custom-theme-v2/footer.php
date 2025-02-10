<?php global $options; ?>
<?php $first_section = get_field('first_section',14);?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
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
</footer>

<div class="copyright-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright">
                    <div class="footer-sec">
                        <a href="<?php echo site_url();?>" class="logo">
                            <img src="<?php echo $options['footer-logo'];?>" alt="">
                        </a>
                    </div>

                    <ul class="f-link">
                        <li>
                            <a href="<?php echo $options['facebook'];?>"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $options['twitter'];?>"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $options['youtube'];?>"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>

                    <p><?php echo $options['copyright'];?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>

</main>
</body>

</html>