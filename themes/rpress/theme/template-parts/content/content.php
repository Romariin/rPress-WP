<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rPressTW
 */

?>
<div class="flex py-5 justify-center">
	<div class="card !rounded card-compact bg-base-100 shadow-xl">
		<figure><div class="max-w-[15rem] max-h-[15rem]"><?php rp_post_thumbnail(); ?></div></figure>
		<div class="card-body">
			<?php
				the_title('<h1 class="entry-title card-title">', '</h1>');

			if ('post' === get_post_type()) :
				?>
				<span><?php
					rp_posted_by();
					?> ─ <?php rp_posted_on(); ?>
				</span>
			<?php endif; ?>
			<div class="card-actions justify-end">
				<a href="<?php rp_post_link() ?>" class="btn bg-zinc-900 mt-2"><span class="mr-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></span>Voir le post</a>
			</div>
		</div>
	</div>
</div>
