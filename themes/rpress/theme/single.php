<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rPressTW
 */

get_header();
?>

	<main id="primary" class="min-h-screen">
		<?php
		while (have_posts()) :
		the_post();
		?>
		<div class="py-10 flex justify-center items-center">
			<figure>
				<div class="max-w-[15rem] max-h-[15rem]"><?php rp_post_thumbnail(); ?></div>
			</figure>
			<div class="flex flex-col h-full px-12">
				<?php
				the_title('<h1 class="entry-title text-white text-4xl font-semibold">', '</h1>');

				if ('post' === get_post_type()) :
					?>
					<span class="text-zinc-500"><?php
						rp_posted_by();
						?> ─ <?php rp_posted_on(); ?>
				</span>
				<?php endif; ?>
			</div>
		</div>
		<div class="entry-content">
			<?php
			the_content(
					sprintf(
							wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
									__('Continue reading<span> "%s"</span>', 'rpress'),
									array(
											'span' => array(
													'class' => array(),
											),
									)
							),
							wp_kses_post(get_the_title())
					)
			);

			wp_link_pages(
					array(
							'before' => '<div>' . esc_html__('Pages:', 'rpress'),
							'after' => '</div>',
					)
			);
			?>
		</div>
		<div class="">
			<?php
			the_post_navigation(
					array(
							'prev_text' => '<span>' . esc_html__('◂ Previous: ', 'rpress') . '</span> <span>%title</span>',
							'next_text' => '<span>' . esc_html__('Next:', 'rpress') . '</span> <span>%title</span>',
					)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

			endwhile; // End of the loop.
			?>
		</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
