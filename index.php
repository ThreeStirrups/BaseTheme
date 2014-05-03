<?php
/**
 * This is the Index template for the Three Stirrups base theme
 *
 */

get_header(); ?>


<div class="content-sidebar-wrap">
    <main class="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('content', 'index'); ?>
    <?php endwhile; ?>
    <?php else: ?>
        Sorry. No posts here.
    <?php endif; ?>

    </main><!-- end .content -->
</div><!-- end .content-sidebar-wrap -->

<?php get_footer(); ?>