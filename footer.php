<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: vlad-->
<!-- * Date: 2016-10-10-->
<!-- * Time: 02:18-->
<!-- */-->
	<footer class="site-footer">

		<nav class="site-nav">

			<?php
			wp_reset_query();
			$args = array(
				'theme_Location' => 'footer'
			);

			?>

			<?php wp_nav_menu( $args ); ?>
		</nav>

		<p><?php bloginfo('name');?>  - &copy; <?php echo date('Y');?></p>
	</footer>
	<?php wp_footer(); ?>
	</div>
</html>
</body>


