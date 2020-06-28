<?php get_header(); ?>

    <!-- Box -->
    <section class="box">
        <div class="box__secondbg"></div>
        <div class="box__container container">
            <img src="<?= get_template_directory_uri().'/dist/images/Bloggers-love-sticker_blog_your_dreams.png'; ?>" height="854" width="868" alt="<?= __('Blog your dreams', 'thinkin-smart'); ?>" class="box__tag">
            <div class="box__rounded">
                <div class="box__row row">
                    <div class="box__column box__column--left column">
                        <?php $boxPicture = get_field('front_box_picture', $page->ID); ?>
                        <img src="<?= $boxPicture['url'] ? $boxPicture['url'] : get_template_directory_uri().'/dist/images/Bloggers-love-sticker_happy_blogger.jpg'; ?>" alt="<?= $boxPicture['alt'] ? $boxPicture['alt'] : __('Blog your dreams', 'thinkin-smart'); ?>" class="box__picture">
                    </div>
                    <div class="box__column box__column--right column">
                        <h3 class="box__form-title heading--2">
                            <?= get_field('front_box_title', $post->ID) ? get_field('front_box_title', $post->ID) : __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, culpa?', 'thikin-smart'); ?>
                        </h3>
                        <p class="box__form-description heading heading--4"><?= __('GET ONE OF', 'thikin-smart'); ?> <span class="box__form-counter">100</span> <strong><?= __('FREE STICKER', 'thinkin-smart'); ?></strong> <?= __('PACKAGES', 'thinkin-smart'); ?></p>
                        <form action="" class="box__form-wrapper">
                            <div class="box__form-container">
                                <div class="box__form-row box__form-row--space-between">
                                    <div class="box__form-column">
                                        <input type="text" placeholder="Name" class="box__form-input input">
                                    </div>
                                    <div class="box__form-column">
                                        <input type="text" placeholder="Mail*" class="box__form-input input">
                                    </div>
                                </div>
                                <div class="box__form-row box__form-row--space-between">
                                    <div class="box__form-column">
                                        <input type="text" placeholder="Street" class="box__form-input input">
                                    </div>
                                    <div class="box__form-column">
                                        <input type="text" placeholder="Postal Code" class="box__form-input input">
                                    </div>
                                </div>
                                <div class="box__form-row box__form-row--space-between">
                                    <div class="box__form-column">
                                        <input type="text" placeholder="City" class="box__form-input input">
                                    </div>
                                    <div class="box__form-column">
                                        <input type="text" placeholder="State" class="box__form-input input">
                                    </div>
                                </div>
                                <div class="box__form-row">
                                    <div class="box__form-column box__form-column--full box__form-column--row">
                                        <label for="check" class="box__form-check-container check__container">
                                            <input id="check" type="checkbox" class="box__form-check check__input">
                                            <span class="box__form-checkmark check__mark"></span>
                                        </label>
                                        <small class="box__form-policy">I have read and agree to the <a href="" class="box__form-link">privacy policy</a>.</small>
                                    </div>
                                </div>
                                <div class="box__form-row">
                                    <div class="box__form-column box__form-column--full">
                                        <input type="submit" class="box__form-submit btn btn--pink" value="<?= __('GET NOW YOUR FREE STICKER PACK', 'thikin-smart'); ?>">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="box__row row">
                <div class="box__column column">
                    <p class="box__call-us"><?= __('OR SIMPLY GIVE US A CALL AT', 'thikin-smart'); ?> <a href="tel:<?php the_field('front_box_phone', $post->ID) ?>" class="box__link-phone"><?= get_field('front_box_phone', $post->ID) ? phoneFormat(get_field('front_box_phone', $post->ID)) : __('555 958 9699', 'thikin-smart'); ?></a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End box -->

    <!-- Detail -->
    <section class="detail">
        <div class="detail__container container">
            <div class="detail__row row">
                <div class="detail__column column">
                    <img src="<?= get_template_directory_uri().'/dist/images/detail-arrow.png'; ?>" alt="<?= __('Arrow', 'thikin-smart'); ?>" class="detail__arrow">
                    <h2 class="detail__title heading heading--2"><?= get_field('front_detail_title', $post->ID) ? get_field('front_detail_title', $post->ID) : __('Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'thikin-smart'); ?></h2>
                    <p class="detail__text text text--sub"><?= get_field('front_detail_text1', $post->ID) ? get_field('front_detail_text1', $post->ID) : __('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum porro, sed blanditiis excepturi voluptas repellendus ea repudiandae fugiat magni corrupti ipsum nostrum illum impedit inventore.', 'thikin-smart'); ?></p>
                    <p class="detail__text text text--sub"><?= get_field('front_detail_text2', $post->ID) ? get_field('front_detail_text2', $post->ID) : __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure inventore commodi nam dolorum sint, molestias nemo dicta aperiam quaerat possimus provident quos nihil asperiores facere doloremque, alias doloribus ipsum! Quasi natus sequi accusamus molestias tempora?', 'thikin-smart'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End detail -->

    <?php if (get_field('front_stickers', $post->ID)): ?>
    <!-- Stickers -->
    <section class="stickers">
        <div class="stickers__container container">
            <div class="stickers__row row">
                <div class="stickers__column column">
                    <div class="stickers__grid">
                        <?php
                        $stickers = get_field('front_stickers', $post->ID);

                        foreach($stickers as $sticker):
                        ?>
                        <img src="<?= $sticker['url']; ?>" alt="<?= $sticker['alt']; ?>" height="<?= $sticker['height']; ?>" width="<?= $sticker['width']; ?>" class="stickers__img">
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End stickers -->
    <?php endif; ?>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="testimonials__container container">
            <div class="testimonials__row row">
                <div class="testimonials__column column">
                    <h4 class="testimonials__subtitle text"><?= get_field('front_testimonials_subtitle', $post->ID) ? get_field('front_testimonials_subtitle', $post->ID) : __('DOLORE MAGNA ALIQUYAM ERAT', 'thikin-smart'); ?></h4>
                    <h2 class="testimonials__title heading heading--3"><?= get_field('front_testimonials_title', $post->ID) ? get_field('front_testimonials_title', $post->ID) : __('Was sagt die Community?', 'thikin-smart'); ?></h2>
                    <?php if(have_rows('front_testimonials_slider')): ?>
                    <ul class="testimonials__slider">
                        <?php while (have_rows('front_testimonials_slider')): the_row(); ?>
                        <li class="testimonials__slider-slide">
                            <p class="testimonials__description text text--sub">
                                <?php the_sub_field('testimonial_text'); ?>
                            </p>
                            <div class="testimonials__author">
                                <div class="testimonials__author-avatar">
                                <?php $avatar = get_sub_field('testimonial_avatar'); ?>
                                    <img src="<?= $avatar['url']; ?>" alt="<?= $avatar['alt']; ?>" height="<?= $avatar['height']; ?>" width="<?= $avatar['width']; ?>" class="testimonials__author-pic">
                                </div>
                                <div class="testimonials__author-detail">
                                    <p class="testimonials__author-data">
                                        <span class="testimonials__author-name"><?php the_sub_field('testimonial_name'); ?>, </span>
                                        <span class="testimonials__author-from"><?php the_sub_field('testimonial_from'); ?></span>
                                    </p>
                                    <p class="testimonials__author-data">
                                        <span class="testimonials__author-job"><?php the_sub_field('testimonial_job'); ?></span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonials -->

    <!-- Offerbox -->
    <section class="offerbox">
            <div class="offerbox__container container">
                <div class="offerbox__rounded">
                    <img src="<?= get_template_directory_uri().'/dist/images/offerbox-arrow.png'; ?>" alt="<?= __('Arrow', 'thikin-smart'); ?>" class="offerbox__arrow">
                    <div class="offerbox__row row">
                        <div class="offerbox__column column">
                            <h4 class="offerbox__title text"><?= get_field('front_offer_title', $post->ID) ? get_field('front_offer_title', $post->ID) : __('THIS OFFER IS ONLY FOR PASSIONATE BLOGGERS!', 'thikin-smart'); ?></h4>
                            <p class="offerbox__description text"><?= get_field('front_offer_description', $post->ID) ? get_field('front_offer_description', $post->ID) : __('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, non.', 'thikin-smart'); ?></p>
                        </div>
                        <div class="offerbox__column offerbox__column--pink column">
                            <a href="" class="offerbox__link btn"><?= get_field('front_offer_button_text', $post->ID) ? get_field('front_offer_button_text', $post->ID) : __('I WANT ONE OF 100 FREE STICKERS', 'thikin-smart'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End offerbox -->

<?php get_footer(); ?>