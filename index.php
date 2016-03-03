<?php get_header();?>
		<div id="main" class="container">
			<div id="posts">
				
				
				<?php 
				if(have_posts()):
				while(have_posts()):
				the_post();
				?>
				<div class="post">
					<div class="post-header">
						<h2><a href="<?php echo get_the_permalink();?>"><?php the_title();?></a></h2>
						<div class="post-meta">
							<?php echo the_date();?>【<?php the_category(',');?>】
						</div><!--post-meta-->
					</div>
					<div class="post-content">
						<div class="post-image">
							<?php if(has_post_thumbnail()):	?>
							<?php the_post_thumbnail(array(100,100));?>
							<?php else:?>
								<img src="<?php echo get_template_directory_uri();?>/img/image1.gif" width="100" height="100" alt="" />
							<?php endif;?>
							
						</div>
						<div class="post-body">
							<?php the_excerpt();?>
						</div>
					</div>
				</div><!-- post -->
				<?php 
					endwhile;
				else:

				?>
				<p>記事はありません</p>
				<?php 
				endif;
				?>
				<div class="navigation">
					<div class="prev"><?php previous_posts_link();?></div>
					<div class="next"><?php next_posts_link();?></div>
			    </div>
			</div><!-- /posts -->
			<?php get_sidebar();?>
		</div><!-- /main -->
		<?php get_footer()?>


