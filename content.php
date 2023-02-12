<article <?php post_class(); ?>>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				
				<?php  the_post_thumbnail('roofing_blog-thumb');  ?>
				
			</a>
		</div>
		<div class="post-left">
			<div class="day">
				<?php echo get_the_date('d') ?>
			</div>
			<div class="month">
				<?php echo get_the_date('M') ?>
			</div>
		</div>
		<div class="post-right">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
			<ul class="post-infos clearfix">
				<li>
					 <?php echo esc_html__('By:','roofing'); the_author() ?>
				</li>
				
				<?php if(has_tag()){ ?>
					<li> <?php the_tags(); ?></li>
				<?php } ?>
				<li>
					 <?php  echo esc_html__('Category:','roofing'); the_category(', '); ?>
				</li>
				<li class="comment-count">
					<?php comments_number( '0', '1', '% responses' ); echo esc_html__(' comment', 'roofing') ?>
				</li>
			</ul>
			<div class="blog-body clearfix">
				<p><?php echo wp_trim_words( get_the_content(), 70 ); ?></p>
					<a href="<?php the_permalink(); ?>" class="read-more-link"><?php echo esc_html__('Read more', 'roofing') ?> &#8594;</a>
			
			</div>
		</div>
</article>
	
