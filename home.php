<?php get_header(); ?>
<div class="blog-cover">
    <h1 class="page-title">
      Latest News & 
      <?php
      // Title of the “Posts page”
      if (get_option('page_for_posts')) {
        echo esc_html(get_the_title(get_option('page_for_posts')));
      } else {
        echo 'Latest News & Blog';
      }
      ?>
    </h1>
</div>
<main class="blog-main">
  <div class="blog-grid">
    <aside class="blog-grid-left">

    </aside>

    <div class="blog-grid-center">
       <header class="blog-page-header">
        <h2 class="page-title">
        View All Articles
        </h2>
      </header>
      <section class="blog-section">
        <?php if (have_posts()) : ?>
          <div class="blog__grid">
            <?php while (have_posts()) : the_post(); ?>
              <article <?php post_class('post-card'); ?>>
              
                  <?php if (has_post_thumbnail()) : ?>
                      <?php $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>
                    <div class="post-img"    style="background-image: url(<?php echo esc_url($thumb_url); ?>);
                      background-position: center;
                      background-size: cover;">

                    </div>
                  <?php endif; ?>
                    <!-- <div class="post-card__thumb">
                      
                    </div> -->
                

                    <div class="post-card__content">
                      <p class="post-card__meta">
                      <i class="fa-solid fa-calendar"></i>  <?php echo esc_html(get_the_date()); ?> <i class="fa-solid fa-user"></i> By <?php the_author(); ?>
                      </p>

                      <h2 class="post-card__title"><?php the_title(); ?></h2>

                      <p class="post-card__excerpt">
                        <?php echo esc_html(wp_trim_words(get_the_content(), 45)); ?>
                      </p>
                      <a href="<?php the_permalink(); ?>" class="post-card__link btn-primary-normal">Read More</a>
                    </div>

                
              </article>
            <?php endwhile; ?>
          </div>

          <nav class="pagination">
            <?php
            // Uses the main query automatically
            echo paginate_links([
              'mid_size'  => 1,
              'prev_text' => '« Prev',
              'next_text' => 'Next »',
            ]);
            ?>
          </nav>

        <?php else : ?>
          <p>No posts found.</p>
        <?php endif; ?>
      </section>
    </div>

    <aside class="blog-grid-right">

    </aside>
  </div>
   
</main>

<?php get_footer(); ?>