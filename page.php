<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 2016-10-13
 * Time: 16:57
 */


get_header();
?>

<?php
if (have_posts()) :
    while(have_posts()) : the_post();?>
        <article class="post page">
            <nav class="site-nav children-links clearfix">
                <span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_ID());?>">
                        <?php echo get_the_title(get_top_ancestor_ID());?></a>
                </span>
                <ul>
                    <?php $args = array(
                        "child_of"  => get_top_ancestor_ID(),
                        "title_li" => ""
                    ) ?>
                    <?php wp_list_pages($args);?>
                </ul>
            </nav>
            <h2><?php the_title();?></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile;
else:
    echo '<p> No content found </p>';
endif;
?>

<?php
get_footer();