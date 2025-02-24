<?php $front_page = get_option('page_on_front') ?>
<footer id="footer" class="footer">
    <div class="container">
        <div class="footer-block">

            <div class="footer-block__left">
                <img class="footer-block__logo" src="<?php the_field('logo', $front_page) ?>" alt="logo">
                <p class="footer-block__copyrigth"><?php the_field('copyrigth', $front_page) ?></p>
                <a class="footer-block__email" href="<?php the_field('email', $front_page) ?>"><?php the_field('email') ?></a>
                <a class="footer-block__link" href="<?php the_field('instagram', $front_page) ?>">
                    <img class="footer-block__img" src="<?php bloginfo('template_url', $front_page) ?>/assets/images/insta.svg" alt="instagram">
                    <p class="footer-block__text"><?php the_field('instagram-name', $front_page) ?></p>
                </a>
            </div>

            <div class="footer-block__right">
                <div class="footer-block__right-wrapper">
                    <p class="footer-block__right-subtitle"><?php the_field('footer-menu-title', $front_page) ?></p>
                    <ul class="footer-block__right-list scroll">
                        <?php
                        $block = [get_field('text-links', $front_page)];
                        foreach ($block as $ellement)
                            if ($ellement) : ?>
                            <li class="footer-block__right-item">
                                <a class="footer-block__right-link" href="<?php if (get_page_link() != get_page_link($front_page)) : ?><?php echo get_page_link(7) . '#included' ?><?php else: ?>#included<?php endif ?>"><?php echo $ellement['text-portfolio'] ?></a>
                            </li>
                            <li class="footer-block__right-item">
                                <a class="footer-block__right-link" href="<?php if (get_page_link() != get_page_link($front_page)) : ?><?php echo get_page_link(7) . '#checkout' ?><?php else: ?>#checkout<?php endif ?>"><?php echo $ellement['text-prising'] ?></a>
                            </li>
                            <li class="footer-block__right-item">
                                <a class="footer-block__right-link" href="<?php if (get_page_link() != get_page_link($front_page)) : ?><?php echo get_page_link(7) . '#questions' ?><?php else: ?>#questions<?php endif ?>"><?php echo $ellement['text-faq'] ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="footer-block__right-wrapper">
                    <p class="footer-block__right-subtitle"><?php the_field('footer-conditions-title', $front_page) ?></p>
                    <ul class="footer-block__right-list">
                        <li class="footer-block__right-item">
                            <a class="footer-block__right-link" href="private"><?php the_field('footer-politic', $front_page) ?></a>
                        </li>
                        <li class="footer-block__right-item">
                            <a class="footer-block__right-link" href="terms-of-service"><?php the_field('footer-services', $front_page) ?></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>
</main>


</div>


<?php wp_footer(); ?>
</body>

</html>