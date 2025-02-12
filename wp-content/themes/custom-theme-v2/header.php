<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>

<header>

<div class="main-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 text-left">
                <a href="<?php echo site_url();?>" class="logo">
                    <img src="<?php echo $options['logo'];?>" alt="">
                </a>
            </div>
            <div class="col-lg-10 text-end">
               <div class="contact">
                <ul class="contact-info">
                    <li> <a href="tel: <?php echo $options['phone_number'];?>"><i class="fa-solid fa-phone"></i> <?php echo $options['phone_number'];?></a></li>
                    <li> <a href="mailto: <?php echo $options['email'];?>"><i class="fa-solid fa-envelope"></i> <?php echo $options['email'];?> </a></li> 
                </ul>
                <ul class="contact-social">
                       <li><p>Follow Us:</p></li>
                       <li><a href="<?php echo $options['facebook'];?>"><i class="fa-brands fa-facebook"></i></a></li>
                       <li><a href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram"></i></a></li> 
                       <li><a href="<?php echo $options['twitter'];?>"><i class="fa-brands fa-x-twitter"></i></a></li> 
                </ul>
                </div>

                <ul class="news-logos">
                    <li><img src="<?php echo get_template_directory_uri();?>/assets/images/header-img.png" alt=""></li> 
                </ul>

            </div>

        </div>
    </div>
</div>
</header>
<main>