<?php get_header();

	if(!(is_front_page())) {
		$roofing_page_show_title_area = get_post_meta(get_the_ID(), 'roofing_page_show_title_area', true);

		if($roofing_page_show_title_area != 'no'){
			get_template_part('titlebar');
		}
	}  ?>
  
  <!-- content  -->
	<main class="l-main">
		<div class="main row">	
		  <?php if (have_posts()) :
       while (have_posts()) : the_post(); ?>    
  			<article>
  				<div class="body field clearfix">
  					<?php the_content(); ?>
  				</div>
				<?php wp_link_pages(array('before' => '<div class="page-links">' . esc_html__('Pages:', 'roofing'), 'after' => '</div>')); ?>
  			</article>
      <?php endwhile;
      endif; ?>
<?php if (comments_open() && roofing_is_blog()){
                  comments_template( '', false );
                } ?>
		</div>  
	</main>
	<!-- /content  -->
		
	<?php get_footer(); ?>