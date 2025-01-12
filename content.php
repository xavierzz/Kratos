<article class="kratos-hentry clearfix">
	<div class="kratos-entry-thumb clearfix"> 
		<a href="<?php the_permalink() ?>"><?php kratos_blog_thumbnail() ?></a>
	</div>	
	<div class="kratos-post-inner">
		<header class="kratos-entry-header clearfix">
			<h1 class="kratos-entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<div class="kratos-post-meta">
				<span class="pull-left">
				<a href="#"><i class="fa fa-calendar"></i> <?php the_time('Y/n/j') ?></a>
				</span>
				<span class="visible-lg visible-md visible-sm pull-left">
				<?php $category = get_the_category(); echo '<a href="' . get_category_link($category[0] -> term_id) . '"><i class="fa fa-folder-open-o"></i> ' . $category[0] -> cat_name . '</a>'; ?>
				<a href="<?php the_permalink() ?>#respond"><i class="fa fa-commenting-o"></i> <?php echo kratos_comments_users($post->ID); ?> Comments</a>
				</span>
				<span class="pull-left">
				<a href="<?php the_permalink() ?>"><i class="fa fa-eye"></i> <?php echo kratos_get_post_views(); ?> Views</a>
				<a href="<?php the_permalink() ?>"><i class="fa fa-thumbs-o-up"></i> <?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?> Times</a>
				</span>
			</div>
		</header>
		<div class="kratos-entry-content clearfix">
		<?php $excerptphoto = wp_trim_words(get_the_excerpt(), 120); ?>
		<p><?php echo $excerptphoto ?></p>
		</div>
	</div>
</article>