<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta name="robots" content="noimageindex<?php if(is_404() || is_page() || is_category() || is_archive()) {?>,noindex<?php } ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<?php function showNotFoundMessage() { ?>
		<article class="post error">
			<h1 class="404"><?php esc_html_e( 'Nothing posted yet', 'less-revival' ); ?></h1>
		</article>
<?php } ?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start header
	/*-----------------------------------------------------------------------------------*/
?>

<header id="masthead" class="site-header">
	<div class="container">
		<div class="avatar">
			<img alt="" src="/wp-content/uploads/2019/11/foto_perfil.jpg" class="avatar avatar-100 photo" height="100" width="100">
		</div><!-- /author -->
		
		<div id="brand">
			<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a> &mdash; <span><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></span></span>
		</div><!-- /brand -->
	
		<nav class="site-navigation main-navigation">
			<div class="menu"><ul>
				<li class="page_item">By Sergio Monedero</li>
				<li class="page_item"> | <a href="https://www.linkedin.com/in/sergiocoder/" target="_blank">LinkedIn</a></li>
			</ul></div>
		</nav><!-- .site-navigation .main-navigation -->
		
		<div class="clear"></div>
	</div><!--/container -->
		
</header><!-- #masthead .site-header -->

<div class="container">

	<div id="primary">
		<div id="content" role="main">


<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Home loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_home() || is_archive() ) {
	
?>
			<?php if ( have_posts() ) { ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
						<div class="post-date">
							<?php the_time('d/m/Y'); ?>
						</div>
						<h1 class="title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title() ?>
							</a>
						</h1>
						
						<div class="the-content">
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php the_content( __( 'Continue reading...', 'less-revival' ) ); ?>
								
								<?php wp_link_pages(); ?>
							</div>
						</div><!-- the-content -->
						
						<div class="meta clearfix">
							<div class="category"><?php the_category(); ?></div>
							<div class="tags"><?php the_tags( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->
						
					</article>

				<?php endwhile; ?>
				
				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( __( 'Newer &raquo;', 'less-revival' ) ); ?></div>
					<div class="next-page"><?php next_posts_link( __( ' &laquo; Older', 'less-revival' ) ); ?></div>
				</div><!-- pagination -->


			<?php 
			} else {
				showNotFoundMessage();
			}
			?>

		
	<?php } //end is_home(); ?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Single loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_single() ) {
?>


			<?php if ( have_posts() ) { ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
						<div class="post-date">
							<?php the_time('d/m/Y'); ?>
						</div>
						<h1 class="title"><?php the_title() ?></h1>
						
						<div class="the-content">
							<?php the_content( __( 'Continue reading...', 'less-revival' ) ); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
						<div class="meta clearfix">
							<div class="category"><?php the_category(); ?></div>
							<div class="tags"><?php the_tags( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->						
						
					</article>

				<?php endwhile; ?>
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) {
						comments_template( '', true );
					}
				?>


			<?php 
			} else {
				showNotFoundMessage();
			}
			?>


	<?php } //end is_single(); ?>
	
<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Page loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_page()) {
?>

			<?php if ( have_posts() ) { ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title"><?php the_title() ?></h1>
						
						<div class="the-content">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
					</article>

				<?php endwhile; ?>

			<?php 
			} else {
				showNotFoundMessage();
			}
			?>

	<?php } // end is_page(); ?>


<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start 404 Page
	/*-----------------------------------------------------------------------------------*/
	
	if( is_404()) {
		showNotFoundMessage();
	}
?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Footer
	/*-----------------------------------------------------------------------------------*/
?>

<footer class="site-footer">
	<div class="site-info container">
		Content under <a href="http://creativecommons.org/licenses/by/4.0/" rel="license">Creative Commons Attribution 4.0 International</a> license<br /><br />
		<a href="https://wordpress.org/" title="<?php esc_html_e( 'A Semantic Personal Publishing Platform', 'less-revival'); ?>" rel="generator"><?php esc_html_e( 'Powered by WordPress', 'less-revival'); ?></a>
		<span class="sep"> <?php esc_html_e( 'and', 'less-revival' ); ?> </span>
		<a href="https://thingsandcode.com/less-revival.html"><?php esc_html_e('theme Less Revival', 'less-revival'); ?></a>.
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
