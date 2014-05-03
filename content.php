<?php
/**
 * This is the Content template for the Three Stirrups base theme
 *
 */

?>
<article <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
    <header class="entry-header">
    <?php if(is_singular()): ?>
        <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
    <?php else: ?>
        <h2 class="entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    <?php endif; ?>
        <p class="entry-meta"><time class="entry-time" itemprop="datePublished" datetime="<?php echo get_post_time('Y-m-dTH:i:s', true); ?>"><?php the_time('F j, Y'); ?></time> by <span class="entry-author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"><a href="<?php the_author_link(); ?> " class="entry-author-link" itemprop="url" rel="author"><span class="entry-author-name" itemprop="name"><?php the_author(); ?></span></a></span> <span class="entry-comments-link"><a href="<?php comments_link(); ?>"><?php comments_number( 'No Comments', '1 Comments', '% Comments' ); ?></a></span></p>
    </header>
    <div class="entry-content">
    <?php if(is_singular()): ?>
        <?php the_content(); ?>
    <?php else: ?>
        <?php the_excerpt(); ?>
    <?php endif; ?>
    </div>
</article>