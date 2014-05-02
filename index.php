<?php
/**
 * This is the Index template for the Three Stirrups base theme
 *
 */

get_header(); ?>


<div class="content-sidebar-wrap">
    <main class="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

    <?php get_template_part('content', 'index'); ?>

    </main><!-- end .content -->
</div><!-- end .content-sidebar-wrap -->

<?php get_footer(); ?>