<?php get_header(); ?>

  <div class="wd-title-bar">
    <div class="row">
      <div class="large-12 columns wd-title-section_l">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </div>
<div class="row">

  <main id="l-main" class="row single-post">
    <div class="large-9 main column">
      <?php if (have_posts()) :
        while (have_posts()) : the_post();
          ?>
          <div class="blog-page">
            <?php the_post_thumbnail('roofing_blog-thumb'); ?>
            <div class="blog-body clearfix p-t-20">
              <?php the_content() ?>
            </div>
            <ul class="post-infos clearfix">
              <li>By: <?php the_author() ?></li>
              <?php if (has_tag()) { ?>
                <li> <?php the_tags(); ?></li>
              <?php } ?>
              <li class="comment-count"><?php comments_number('0', '1', '% responses');
                echo esc_html__(' comment', 'roofing') ?></li>
            </ul>

          </div>

          <?php if (comments_open()) {
            comments_template('', true);
          }
        endwhile;
      endif; ?>
      <?php wp_link_pages(array('before' => '<div class="page-links">' . esc_html__('Pages:', 'roofing'), 'after' => '</div>')); ?>
    </div>
    <?php get_sidebar(); ?>
  </main>
</div>

<?php get_footer(); ?>