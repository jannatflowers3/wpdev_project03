<?php
get_header();
?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<?php
                          if(have_posts()):
							while(have_posts()):
								the_post();
					?>
					<article>
						<?php
                           the_post_thumbnail();
						?>
						
						<h2><a href="<?php the_permalink(); ?>"><?php   the_title();?></a></h2>
						<div class="info">[By <?php  the_author(); ?> on <?php  the_time('F j,Y')?>  with <a href="<?php the_permalink();?> "> <?php comments_number('no comments','1 comments','%comments') ?>  </a>]</div>
						<!-- <p>Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater magnam aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam...</p> -->
						<?php  the_content();?>
					</article>
				
					<?php
                          endwhile;
						endif;
					?>
					<ul id="pagi">
						<li><a class="current" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">next</a></li>
					</ul>
				</div>
			</div>
		<?php
get_sidebar();
		?>
		</div>
	</div>
</section>
<?php
get_footer();
?>
<?php wp_footer(); ?>
</body></html>