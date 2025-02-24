<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>
    <?php $front_page = get_option('page_on_front') ?>

</head>

<body>

    <div class="page-content">

        <nav id="top" class="nav-course">
            <div class="nav-course__desktop">
                <div class="nav-course__logo scroll">
                    <a class="nav-course__logo-link" href="<?php if (get_page_link() != get_page_link($front_page)) : ?><?php echo get_page_link(7) . '#top' ?><?php else: ?>#top<?php endif ?>">
                        <img class="nav-course__logo-img" src="<?php the_field('logo', $front_page) ?>" alt="">
                    </a>
                </div>
                <ul class="nav-course__links scroll">

                    <?php
                    $block = [get_field('text-links' , $front_page)];
                    foreach ($block as $ellement)
                        if ($ellement) : ?>
                        <li class="nav-course__item">
                            <a href="<?php if (get_page_link() != get_page_link($front_page)) : ?><?php echo get_page_link(7) . '#included' ?><?php else: ?>#included<?php endif ?>" class="nav-course__link"><?php echo $ellement['text-portfolio'] ?></a>
                        </li>
                        <li class="nav-course__item">
                            <a href="<?php if (get_page_link() != get_page_link($front_page)) : ?><?php echo get_page_link(7) . '#checkout' ?><?php else: ?>#checkout<?php endif ?>" class="nav-course__link"><?php echo $ellement['text-prising'] ?></a>
                        </li>
                        <li class="nav-course__item">
                            <a href="<?php if (get_page_link() != get_page_link($front_page)) : ?><?php echo get_page_link(7) . '#questions' ?><?php else: ?>#questions<?php endif ?>" class="nav-course__link"><?php echo $ellement['text-faq'] ?></a>
                        </li>
                        <li class="nav-course__item">
                            <a href="<?php if (get_page_link() != get_page_link($front_page)) : ?><?php echo get_page_link(7) . '#footer' ?><?php else: ?>#footer<?php endif ?>" class="nav-course__link"><?php echo $ellement['text-footer'] ?></a>
                        </li>
                    <?php endif; ?>

                </ul>
                <button class="nav-menu__btn">
                    <span class="nav-menu__btn-line"></span>
                </button>
            </div>
        </nav>