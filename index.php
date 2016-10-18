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
				<p class="post-info"><?php the_time("Y, F jS"); echo " | by ";?>
					<a href="<?php echo get_author_posts_url(get_the_author_meta("ID"));?>"> <?php the_author(); ?></a> | Posted in
					<?php
					$categories = get_the_category();
					$separator = ", ";
					$output = "";

					if($categories){
						foreach ($categories as $category){

							$output .= $category->cat_name . $separator;
						}
						echo trim($output, $separator);
					}
					?>
				</p>

				<?php the_content(); ?>

			</article>
			<?php endwhile;
	else:
		echo '<p> No content found </p>';
	endif;
	?>

<?php
get_footer();