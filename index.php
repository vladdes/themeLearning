<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 2016-10-09
 * Time: 22:40
 */

//require($_SERVER["DOCUMENT_ROOT"].'/wordpress/wp-blog-header.php' );
//require_once($_SERVER["DOCUMENT_ROOT"].'/wordpress/wp-includes/template-loader.php' );



get_header();
?>

	<?php
	if (have_posts()) :
		while(have_posts()) : the_post();?>
			<article class="post">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h2>
				<?php the_content(); ?>
			</article>
			<?php endwhile;
	else:
		echo '<p> No content found </p>';
	endif;
	?>

<?php
get_footer();