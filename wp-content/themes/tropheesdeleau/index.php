
<?php get_header(); ?>

	<img src=""><!-- IMAGE COIN IMAGE GRIS OMBRE-->
	<main><!-- CONTENU FOND BLANC-->

		<aside>
			<?php get_sidebar(); ?>
		</aside><!-- ASIDE -->

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('content'); ?>

			<?php endwhile; ?>

				<?php // Navigation ?>

			<?php else : ?>

				<?php // No Posts Found ?>

		<?php endif; ?>



			<p>
				PAGINATION
			</p><!-- PAGINATION-->
		</section>
	</main>
<?php get_footer();
