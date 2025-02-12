<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <div class="footer-logo">
                        <a class="f-logo" href="<?php echo site_url();?>"><img src="<?php echo $options['logo'];?>"
                                alt=""></a>
                    </div>
                    <div class="terms">
                        <a href="javascript:;" class="privary">Privacy & Terms of Use</a>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="contact-icons">

                        <div class="icon-box">
                            <i class="fas fa-phone"></i>
                            <a href="tel: <?php echo $options['phone_number'];?>">
                                <?php echo $options['phone_number'];?> </a>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto: <?php echo $options['email'];?>"> <?php echo $options['email'];?> </a>
                        </div>
                    </div>

                    <div class="social-icon">

                        <ul class="footer-social-icons">
                            <li>
                                <p>Follow Us :</p>
                            </li>
                            <li><a href="<?php echo $options['facebook'];?>"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li><a href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?php echo $options['twitter'];?>"><i class="fa-brands fa-x-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>



</footer>
</main>
<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>
<script>
new WOW().init();
</script>
</body>

</html>