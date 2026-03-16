<?php get_header('page'); ?>
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>
</header><!-- end header-->
		<!-- Start cp_container-->
		<div class="cp_container backimage-fixed">
			<div class="cp_content flip-page">
				<?php breadcrumb(); ?>
				<!-- Start .page-contentents-wrapper ここから固定ページの内容-->
				<section class="page-contentents-wrapper" >
					<?php the_content(); ?>
				</section><!-- end .page-contentents-wrapper-->
<?php
	endwhile;
endif;
?>				
<?php get_footer('page'); ?>