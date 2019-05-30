<section class="courses">
	<div class="container">
			<div class="owl-carousel owl-theme">
				<?php 
					$args = array( 'post_type' => 'curso', 'posts_per_page' => -1 );
					$the_query = new WP_Query( $args ); 
					?>
					<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			    <div class="item">
			    	<?php the_post_thumbnail('related-thumb', array('class' => 'cursos-images')); ?>
			    	<div class="courses-conteudo">
				    	<h5 class="courses-titulos"><?php the_title(); ?></h5>
				    	<p class="courses-paragrafo"><?php echo the_content(); ?></p>
				    	<a class="read-me full" href="#">Saiba Mais</a>
			    	</div>
			    </div>
			    <?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else:  ?>
				<p><?php _e( 'Desculpa, não foi encontrada a imagem.' ); ?></p>
				<?php endif; ?>
			</div>
	</div>
</section>