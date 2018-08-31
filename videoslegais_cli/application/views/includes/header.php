
<div class="jumbotron home home-fullscreen" id="home">
	<div class="mask"></div>
	<a href="" class="menu-toggle" id="nav-expander"><i class="fa fa-bars"></i></a>
	<!-- Offsite navigation -->
	<nav class="menu">
		<a href="#" class="close"><i class="fa fa-close"></i></a>
		<h3>Categorias</h3>
		<ul class="nav">
			<?php foreach ($categorias as $categoria): ?>
				<li><a href="<?php echo base_url('index.php/api/visualizarvideo/') ?><?php echo $categoria->cat_id ?>"><?php echo $categoria->cat_nome ?></a></li>
			<?php endforeach ?>
		</ul>
	</nav>
	<div class="container">
		<div class="header-info">
			<h1>VIDEOS LEGAIS</h1>
			<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#inserirvideo">Envie seu video</a>
		</div>
		
	</div>
	<div class="header-button">
		<!-- js-scroll-trigger = scrollpsy do portfolio. -->
		<a href="#portfolio" class="btn btn-link btnAbout js-scroll-trigger"><i class="fa fa-angle-down fa-2x"></i></a>
	</div>
</div>