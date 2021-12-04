<?php get_header(); ?>

<!-- content -->
<div id="content">
<div class="inner">

<!-- primary -->
<main id="primary">

<?php if ( function_exists( 'bcn_display' ) ) : ?>
<!-- breadcrumb -->
<div class="breadcrumb">
<?php bcn_display(); ?>
</div><!-- /breadcrumb -->
<?php endif; ?>

<?php
if ( have_posts() ) :
while ( have_posts() ) :
the_post();
?>

<!-- entry -->
<article class="entry">
</article> <!-- /entry -->

<?php
endwhile;
endif;
?>

</main><!-- /primary -->

<?php get_sidebar(); ?>

</div><!-- /inner -->
</div><!-- /content -->

<section style='height: 500px; background-color: blue;'>
  <h1>single.php</h1>
</section>
<section style='height: 500px; background-color: green;'>
</section>
<?php get_footer(); ?>
