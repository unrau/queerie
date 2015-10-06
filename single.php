<?php get_header(); ?>

<div id="content-post" class="main-content">

  <div id="post-content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="post">
        <h2><?php the_date(); ?></h2>
        <h1><?php the_title(); ?></h1>
        <?php the_content() ?>
      </div>

      <?php endwhile; else: ?>

      <div class="error">
        <h1>This page does not exist</h1>
        <p>
          The requested URL may have been entered incorrectly or removed.
        </p>
      </div>

    <?php endif; ?>

  </div>

  <a href="<?php echo bloginfo('home'); ?>/archive" class="big-orange-button">&laquo; Back to Archive</a>

  <div id="post-about">
    <?php dynamic_sidebar( 'Archive Post About' ); ?>
  </div>

</div>

<?php get_footer(); ?>
