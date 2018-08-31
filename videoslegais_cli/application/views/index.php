<?php $this->load->view('includes/html-header.php') ?>
<?php $this->load->view('includes/header.php') ?>
<?php $this->load->view('modal/visualizarvideo.php') ?>
<?php $this->load->view('modal/inserirvideo.php') ?>
<!-- Portfolio section start -->
<section id="portfolio" class="darker">
	<div class="container">
		<header>
			<h2>Adicionados recentemente</h2>
			<p>Confira abaixo.</p>
		</header>
		<div class="row">
			<?php foreach($aplicacao as $video): ?>
				<figure class="portfolio-item col-md-4 col-sm-6" >
					<img class="img-responsive" src="<?php echo base_url('assets/img/projects/project-thumbnail-1.png') ?>"/>
					<figcaption class="mask">
						<a href="#" data-videos="<?php echo strip_tags($video->vid_video) ?>" data-titulo="<?php echo $video->vid_titulo ?>" data-descricao="<?php echo $video->vid_descricao ?>" data-toggle="modal" data-target="#visualizarVideo">
							<i class="glyphicon glyphicon-play-circle"></i></a>
							<span class="text">
							<?php echo $video->vid_titulo ?></span>
					</figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Portfolio section end -->
<?php $this->load->view('includes/footer.php') ?>
<?php  $this->load->view('includes/html-footer.php') ?>




