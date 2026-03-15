<?php get_header(); ?>

    <main id="primary" class="site-main">
        <div class="products-container">
              <?php echo do_shortcode('[woocommerce_cart]'); ?>
        </div>
      
    </main>
<?php get_footer(); ?>