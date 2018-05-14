<?php
/**
 * The blog page.
 *
 * @package Neat
 */

get_header(); ?>

	<section id="banner">
		<?php echo do_shortcode("[rev_slider alias='home']"); ?>
	</section>

	<section id="servicos" class="container">
		<div class="row">
			<?php
				$args = array(
							'post_type'		 => 'post',
							'category'  	 => 3,
							'posts_per_page' => -1
						);
				$servicos = get_posts( $args );
				foreach ($servicos as $post) {
					$title 		= $post->post_title;
					$thumb 		= get_the_post_thumbnail_url( $post->ID, 'medium_large', true);
					$url 		= get_permalink( $post->ID );
					$resumo  	= $post->post_content;
			?>	
				<div class="col-lg-4 col-md-12">
					<img src="<?php echo $thumb?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" />
					<h3><?php echo $title; ?></h3>
					<p><?php echo $resumo; ?></p>
				</div>
			<?php
				}//endForeach servicos
			?>
		</div>
	</section>
	<section id="trabalhos">
		<div class="container">
			<div class="row">
				<h3>Trabalhos Realizados</h3>
				<p>CONFIRA OS TRABALHOS REALIZADOS <br />PELA NOSSA GRÁFICA</p>
			</div>
			<div class="row">
				<ul>
					<li><a href="#" class='btn-filtro' data-class="todos">Todos</a></li>
					<?php
						$filtros = get_terms( 'filtros', array(
								    'hide_empty' => true,
								) );
				        foreach ($filtros as $filtro) {
				       		echo "<li><a href='#' class='btn-filtro' data-class='".$filtro->slug."' >" . $filtro->name."</a></li>";
				        };
					?>
				</ul>
			</div>
			<div class="row">
				<?php
					$args = array(
								'post_type'		 => 'trabalhos_realizados',
								'posts_per_page' => -1
							);
					$trabalhos = get_posts( $args );
					foreach ($trabalhos as $post) {
						$title 		= $post->post_title;
						$thumb 		= get_the_post_thumbnail_url( $post->ID, 'medium_large', true);
						$url 		= get_permalink( $post->ID );
						$resumo  	= $post->post_content;
						$filtros 	= wp_get_post_terms( $post->ID, "filtros");
						$filtro  	= "";
						foreach ( $filtros as $v ) {	
							$filtro = $v->slug." ";	
						}
				?>	
					<div class="col-lg-3 col-md-12 item-trabalho <?php echo $filtro; ?>">
						<img src="<?php echo $thumb?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" />
					</div>
				<?php
					}//endForeach servicos
				?>
			</div>
		</div>
	</section>
	<section id="clientes">
		<div class="container">
			<h3><?php echo get_the_title( 33 ); ?></h3>
			<h4>confira as empresas que confiam <br />no nosso trabalho</h4>
			<?php echo apply_filters('the_content', get_post_field('post_content', 33)); ?> 
		</div>
	</section>
	<section id="quemsomos" >
		<div class="container">
			<h3><?php echo get_the_title( 7 ); ?></h3>
			<?php echo apply_filters('the_content', get_post_field('post_content', 7)); ?> 
		</div>
	</section>
	<section id="contato">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.5076117506737!2d-46.60874778442314!3d-23.58612146839352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5be58ab5dab9%3A0x690e2f760dfb8411!2sPortal+Graf!5e0!3m2!1spt-BR!2sbr!4v1526326285816" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div id="conteudo" class="container">
			
		</div>
	</section>
<?php get_footer(); ?>
