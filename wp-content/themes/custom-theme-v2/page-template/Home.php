<?php /** * Template Name: Home Template */ ?>
<?php $first_section = get_field('first_section');?>

<?php get_header(); ?>
<div class="mainBanner" style="background-image: url(<?php echo $first_section['image'];?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading'];?></h1>
                    <div class="rating wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="para text-white wow fadeInUp" data-wow-delay="0.4s">
                        <?php echo $first_section['content'];?></p>
                    <a href="<?php echo $first_section['b_link'];?>" class="btn btn-primary wow fadeInUp"
                        data-wow-delay="0.5s"><?php echo $first_section['b_text'];?></a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="hero-img wow fadeInRight" data-wow-delay="0.2s">
                    <img src="<?php echo $first_section['image_2'];?>" class="w-100" alt="">
                </div>
            </div>

        </div>
    </div>
</div>

<section class="get-copy">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="get-copy-card wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class="title"><?php echo $first_section['heading_2'];?></h3>
                    <div class="btns">
                        <?php $box_list = $first_section['box_list'];?>
                        <?php foreach ($box_list as $boxlist) {?>
                        <a href="<?php echo $boxlist['b_link']; ?>"
                            class="btn btn-primary"><?php echo $boxlist['b_text']; ?></a>
                        <?php }?>
                    </div>
                    <div class="outside">
                        <p class="para"><?php echo $first_section['para'];?></p>
                        <a href="<?php echo $first_section['b_link_2'];?>"
                            class="btn-editions"><?php echo $first_section['b_text_2'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <div class="about-img wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="<?php echo $first_section['image_3'];?>" class="w-100" alt="">
                </div>

            </div>
            <div class="col-lg-6">
                <div class="content">
                    <h2 class="title wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading_3'];?></h2>
                    <p class="para1 wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['content_2'];?></p>
                    <p class="para2 wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['content_3'];?></p>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="book">
    <div class="container">

        <div class="row">
            <div class="col-lg-10">
                <h2 class="title"><?php echo $first_section['heading_4'];?></h2>
            </div>
        </div>

        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="content wow fadeInUp" data-wow-delay="0.2s">

                    <?php echo $first_section['content_4'];?>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-more wow fadeInRight" data-wow-delay="0.2s">
                    <img src="<?php echo $first_section['image_4'];?>" class="w-100" alt="">
                </div>

            </div>

        </div>
    </div>
</section>

<section class="bonus">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php $box_list = $first_section['box_list_2'];?>
                <?php foreach ($box_list as $boxlist) {?>
                <div class="icon-box  wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon"><i class="fas fa-check-circle"></i></div>
                    <div class="content">
                        <h5 class="title"><?php echo $boxlist['heading']; ?></h5>
                        <p class="para"><?php echo $boxlist['content']; ?></p>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<section class="habits" style="background-image: url(<?php echo $first_section['image_5'];?>);">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="content">
                    <h2 class="title wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading_5'];?> </h2>
                    <iframe class="wow fadeInUp" data-wow-delay="0.2s" width="730" height="410"
                        src="<?php echo $first_section['link'];?>">
                    </iframe>
                </div>
            </div>
        </div>

        <div class="compound">
            <div class="row wow fadeInRight" data-wow-delay="0.2s">
                <?php $box_list = $first_section['box_list_3'];?>
                <?php foreach ($box_list as $boxlist) {?>
                <div class="col text-center"><img src="<?php echo $boxlist['image']; ?>" alt=""> </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<section class="things">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title wow fadeInUp" data-wow-delay="0.2s"><?php echo $first_section['heading_6'];?></h2>
            </div>
        </div>

        <div class="things-book">
            <div class="row">
                <?php $box_list = $first_section['box_list_4'];?>
                <?php $x=1; foreach ($box_list as $boxlist) {?>
                <?php if ($x<=9) {?>
                <div class="col-lg-4">
                    <div class="things-count wow fadeInUp" data-wow-delay="0.2s">
                        <span class="count"><?php echo $boxlist['para']; ?></span>
                        <p><?php echo $boxlist['content']; ?></p>
                    </div>
                </div>
                <?php }else{?>
                <div class="col-lg-4">
                    <div class="things-count wow fadeInUp" data-wow-delay="0.2s">
                        <a href="<?php echo $boxlist['para']; ?>"
                            class="btn-more"><?php echo $boxlist['content']; ?></a>
                    </div>
                </div>
                <?php } $x++;}?>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="what-mind" style="background-image: url(<?php echo $first_section['image_6'];?>);">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7">
                <div class="content">
                    <h2 class="title text-white wow fadeInUp" data-wow-delay="0.2s">
                        <?php echo $first_section['heading_7'];?>
                    </h2>
                    <p class="para text-white wow fadeInUp" data-wow-delay="0.2s">
                        <?php echo $first_section['content_5'];?></p>
                    <a href="<?php echo $first_section['b_link_3'];?>" class="btn btn-primary wow fadeInUp"
                        data-wow-delay="0.2s"><?php echo $first_section['b_text_3'];?></a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="what-mind-img wow fadeInRight" data-wow-delay="0.2s">
                    <img src="<?php echo $first_section['image_7'];?>" class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="praise">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="content">
                    <h2 class="title text-center"><?php echo $first_section['heading_8'];?></h2>
                    <div class="praise-slider">
                        <div class="slider-nav">
                            <?php $box_list = $first_section['box_list_5'];?>
                            <?php $x=1; foreach ($box_list as $boxlist) {?>
                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                            <?php }?>
                        </div>
                        <div class="slider-for">
                            <?php $box_list = $first_section['box_list_6'];?>
                            <?php $x=1; foreach ($box_list as $boxlist) {?>
                            <div>
                                <p class="para"><?php echo $boxlist['content']; ?></p>

                                <div class="info">
                                    <p class="name"><?php echo $boxlist['para']; ?></p>
                                    <p class="designation"><?php echo $boxlist['para_2']; ?></p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog" style="background-image: url(<?php echo $first_section['image_8'];?>);">
    <div class="container">
        <div class="top-sec">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <span class="sub-title"><?php echo $first_section['heading_9'];?></span>
                    <h2 class="title"><?php echo $first_section['heading_10'];?></h2>
                </div>
            </div>
        </div>

        <div class="bottom-sec">
            <div class="row">
                <?php    $x=1;  $args = array( 'post_type' => 'blog' , 'posts_per_page' => '3','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
                <div class="col-lg-4">
                    <div class="blog-card">
                        <img src="<?php the_post_thumbnail_url() ;?>" class="w-100" alt="">
                        <div class="blog-content">
                            <div class="top-sec">
                                <img src="<?php echo get_field('image');?>" alt="">
                                <p class="para"><?php echo get_the_date('d F Y'); ?></p>
                            </div>
                            <h5 class="title"><?php the_title() ;?></h5>
                            <p class="para"><?php echo get_the_excerpt() ;?></p>
                            <a href="javascript:;" class="btn-blog">Read More</a>
                        </div>
                    </div>
                </div>
                <?php $x++; endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>