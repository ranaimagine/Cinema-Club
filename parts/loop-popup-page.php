<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">			
	<header class="article-header">
		<h4 class="page-title"><?php the_title(); ?></h4>
	</header>		
    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section>							
</article> 