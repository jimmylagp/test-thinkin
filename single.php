<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<!-- Content -->
<section class="default">
    <div class="default__container container">
        <div class="default__row row">
            <div class="default__column column">
                <h2 class="default__title heading"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="default__row row">
            <div class="default__column column">
                <div class="default__content text">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End content -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>