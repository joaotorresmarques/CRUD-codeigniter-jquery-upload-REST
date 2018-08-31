<?php $this->load->view('includes/html-header.php') ?>
<?php $this->load->view('includes/header.php') ?>
<?php $this->load->view('modal/visualizarvideo.php') ?>
<?php $this->load->view('modal/inserirvideo.php') ?>
<!-- Portfolio section start -->
<section id="portfolio" class="darker">
	<div class="container">
		<header>
			<h2>CATEGORIA</h2>
			<p>Ultimos videos adicionados</p>
		</header>
		<div class="row">
			<div class="col-md-8">
				<?php var_dump($catlist) ?>
				<!-- First Blog Post -->
				<h2>
					<a href="#">Ratinho se contorcendo ao tomar banho</a>
				</h2>
				<p class="lead">por <a href="index.php">João Marcos</a>
				</p>
				<p><span class="glyphicon glyphicon-time"></span> Postado em 25 de Janeiro de 2017 10:00</p>
				<hr>
				<img class="img-responsive" src="http://placehold.it/900x300" alt="">
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
				<hr>
			</div>
		</div>
	</div>
</section>

<!-- Portfolio section end -->
<?php $this->load->view('includes/footer.php') ?>
<?php  $this->load->view('includes/html-footer.php') ?>




