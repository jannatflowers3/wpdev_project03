
<!--template name: myhome 
 -->
<?php
get_header();

?>
<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<?php  

							$sql =new WP_Query(array(
								'post_type'=>'sliders'
								

							)
						);
                        if($sql->have_posts()):
							while($sql->have_posts()):
								$sql->the_post();
					?>
					<li>
					<?php    the_post_thumbnail();?>
					</li>
					
                   <?php
                          endwhile;
						endif;
				   ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
					<?php  

			$sql =new WP_Query(array(
				'post_type'=>'services'
				

			)
			);
			if($sql->have_posts()):
			while($sql->have_posts()):
				$sql->the_post();
			?>
			<div class="col-1-3">
				<div class="wrap-col box">
				
					<h2>  <?php the_title();?></h2>
					<p><?php  the_content(); ?></p>
					<div class="more"><a href="#">[...]</a></div>
				
				</div>
			</div>
				
			<?php
                          endwhile;
						endif;
				   ?>
			
			<!-- <div class="col-1-3">
				<div class="wrap-col box">
					<h2>Best DJ's Ever</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div> -->
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>

           <?php 
                 $sql_post =   new WP_Query(array(
					'post_type'=>'post',
					'posts_per_page'=>5
				
				));
				if($sql_post->have_posts()):
					while($sql_post->have_posts()):
						$sql_post->the_post();
		   ?>

					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								
								<?php the_post_thumbnail();?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php  the_permalink();?>"><?php the_title(); ?></a></h2>
								<div class="info">By <?php  the_author();?> on <?php  the_time('F j,Y')?> with <a href="#"><?php comments_number('no comment','1 comment','% comment') ?></a></div>
						<?php the_excerpt(); ?>
							</div>
						</div>
					</article>
					<?php
                            endwhile;
						endif;
					?>
					<!-- <article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="<?php  echo get_template_directory_uri()?>/images/img2.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Welcome To Our Great Site</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article> -->
					<!-- <article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="images/img3.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Stereosonic Is Back Just For You</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article> -->
					<!-- <article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="<?php  echo get_template_directory_uri()?>/images/img4.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Club Galaxy White Night Show</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article> -->
				</div>
			</div>
			<!-- <div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="<?php  echo get_template_directory_uri()?>/images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<?php dynamic_sidebar('sidebar-1'); ?>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php
get_footer();
?>


</body></html>