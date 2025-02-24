<?php

/*
Template Name: home
*/

?>


<?php get_header(); ?>
<main>

    <header class="header" style="
                background: url(<?php the_field('header-img') ?>);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center">
        <div class="header-media">
            <video class="header-media__video" autoplay loop muted>
                <?php
                $file = get_field('mediaback');
                if ($file) : ?>
                    <source src="<?php echo $file['url']; ?>">
                <?php endif; ?>

                <!-- <source src="<?php bloginfo('template_url') ?>/assets/images/media/60aeb005d4affdcecf34045f_hero-kolder-creative-opt-transcode.webm"> -->
            </video>
        </div>
        <div class="header-wrapper">
            <p class="header-wrapper__subtitle">
                <?php the_field('text-subtitle') ?>
            </p>
            <h1 class="header-wrapper__title"><?php the_field('text-title') ?></h1>
            <p class="header-wrapper__info">
                <?php the_field('text-paragraph') ?>
            </p>
        </div>
        <div class="header-partners">
            <div class="header-partners__wrapper">

                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => -1,
                    'category_name' => 'partners',
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                ?>
                        <img class="header-partners__img" src="<?php the_post_thumbnail_url() ?>" alt="logo partner">


                <?php
                    }
                } else {
                    // Постов не найдено
                }

                wp_reset_postdata(); // Сбрасываем $post
                ?>

            </div>
        </div>
    </header>


    <section id="included" class="included">
        <div class="container">
            <h2 class="included__title title"><?php the_field('included-title') ?></h2>
        </div>

        <div class="included-slider">

            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => -1,
                'category_name' => 'slider',
            ]);

            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
            ?>
                    <div class="included-slider__wrapper">
                        <div class="included-slider__wrapper-background" style="background-image: url(<?php the_post_thumbnail_url() ?>);"></div>
                        <div class="included-slider__box">
                            <video class="included-slider__video" loop muted>
                                <source src="">
                            </video>
                        </div>
                        <div class="included-slider__content">
                            <div class="included-slider__content-box">
                                <h3 class="included-slider__subtitle"><?php the_title(); ?></h3>
                            </div>
                            <div class="included-slider__content-box">
                                <div class="included-slider__paragraph">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>


            <?php
                }
            } else {
                // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>



        </div>
    </section>

    <section class="beginner">
        <div class="container">
            <div class="beginner__lessons">
                <div class="beginner__lessons-wrapper">
                    <div class="beginner__lessons-box">
                        <span class="beginner__lessons-numbr" data-max="<?php the_field('numbr-first') ?>">0</span>
                        <p class="beginner__lessons-subtitle"><?php the_field('numbr-first-text') ?></p>
                    </div>
                    <div class="beginner__lessons-box">
                        <div class="beginner__lessons-item">
                            <span class="beginner__lessons-numbr" data-max="<?php the_field('numbr-two') ?>">0</span>
                            <span><?php the_field('beginner-span') ?></span>
                        </div>
                        <p class="beginner__lessons-subtitle"><?php the_field('numbr-two-text') ?></p>
                    </div>
                    <div class="beginner__lessons-box">
                        <div class="beginner__lessons-item">
                            <span class="beginner__lessons-numbr" data-max="<?php the_field('numbr-three') ?>">0</span>
                            <span><?php the_field('beginner-span') ?></span>
                        </div>
                        <p class="beginner__lessons-subtitle"><?php the_field('numbr-three-text') ?></p>
                    </div>
                </div>
                <p class="beginner__lessons-paragraph"><?php the_field('beginner-paragraph') ?></p>
            </div>
        </div>
    </section>


    <section id="checkout" class="checkout">
        <div class="checkout-block">

            <?php
            $block = [get_field('price-card1'), get_field('price-card2')];
            foreach ($block as $ellement)
                if ($ellement) : ?>
                <div class="checkout-block__box">
                    <div class="checkout-block__box-top">
                        <h2 class="checkout-block__title title"><?php echo $ellement['title']; ?></h2>
                        <?php echo $ellement['checkout-item']; ?>
                    </div>
                    <div class="checkout-block__wrapper">
                        <div class="checkout-block__absolute">
                            <p class="checkout-block__absolute-text"><?php echo $ellement['checkout-text']; ?></p>
                        </div>
                        <div class="checkout-block__price">
                            <p class="checkout-block__price-new"><?php echo $ellement['price-sale']; ?></p>
                            <p class="checkout-block__price-old"><?php echo $ellement['price']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <section id="questions" class="questions">
        <div class="container">
            <div class="questions-block">
                <h2 class="questions__title title">FAQ</h2>
                <div class="questions__wrapper">

                    <?php
                    global $post;

                    $myposts = get_posts([
                        'numberposts' => -1,
                        'category_name' => 'FAQ',
                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                    ?>
                            <div class="questions__items questions__items--ofsset">
                                <h4 class="questions__item-title"><?php the_title(); ?></h4>
                                <div class="block block--offset" style="height: 0;">
                                    <div class="questions__item-text questions__item-text--active">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>


                    <?php
                        }
                    } else {
                        // Постов не найдено
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                    ?>

                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>