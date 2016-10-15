<?php
/*
 Template Name: Special Layout
 */


get_header();
?>

<?php
if (have_posts()) :
    while(have_posts()) : the_post();?>
        <article class="post page">
            <h2><?php the_title();?></h2>
<!--            info-box-->
            <div class="info-box">
                <h4>Some title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aliquam aperiam architecto esse,
                    facilis fuga fugiat inventore labore nesciunt odio perspiciatis quasi qui quibusdam reiciendis ullam unde! Eveniet, odio?</p>
            </div>
            <?php the_content(); ?>
        </article>
    <?php endwhile;
else:
    echo '<p> No content found </p>';
endif;
?>

<?php
get_footer();