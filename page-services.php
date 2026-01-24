<?php get_header(); ?>
    <div class="cover-img-services">
        <h1>Services</h1>
    </div>
    <main>
        <section class="intro-page-section">
         
            <article class="intro-page-article">
                <?php
                    $page = get_page_by_path('services'); // change slug
                    if ( $page ) : ?>
                    <h1>Get latest information about my <?php echo esc_html( get_the_title($page) ); ?></h1>
                    <div class="page-content">
                        <?php echo apply_filters('the_content', $page->post_content); ?>
                    </div>
                <?php endif; ?>
            </article>
        </section>
    </main>
<?php get_footer(); ?>
