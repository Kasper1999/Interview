<!DOCTYPE html>
<html lang="ru">

 <?php get_header();?>

    <!-- Header -->

    

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Услуги</h2>
            <h3 class="section-subheading text-muted">Наша кампания предоставляет широкий спектр услуг.</h3>
          </div>
        </div>




        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Магазин</h4>
            <p class="text-muted"><?php the_field('shop');?></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Карта доступных мест</h4>
            <p class="text-muted"><?php the_field('map');?></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Страховка</h4>
            <p class="text-muted"><?php the_field('strah');?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->



    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Наша удивительная команда</h2>
            <h3 class="section-subheading text-muted"> <?php the_field('inf_grup');?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php bloginfo("template_directory");?>/img/team/5.jpg" alt="">
              <h4>Ирина Золотова</h4>
              <p class="text-muted">Глава отдела транспортировки</p>
              
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php bloginfo("template_directory");?>/img/team/2.jpg" alt="">
              <h4>Михаил Бирета</h4>
              <p class="text-muted">Глава отдела размещения</p>
              
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php bloginfo("template_directory");?>/img/team/3.jpg" alt="">
              <h4>Ангелина Бурш</h4>
              <p class="text-muted">Глава отдела страхования</p>
              
            </div>
          </div>
        </div>
        <hr align="center" width="75%">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">    
            	<h3 class="section-sub text-muted">		

	
				<?php the_post();?>
				<?php the_content();?>
					
				</h3>   
	</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo("template_directory");?>/img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo("template_directory");?>/img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo("template_directory");?>/img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?php bloginfo("template_directory");?>/img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
        

    

    <!-- Portfolio Modals -->

    
    <!-- Bootstrap core JavaScript -->
    <script src="<?php bloginfo("template_directory");?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo("template_directory");?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php bloginfo("template_directory");?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php bloginfo("template_directory");?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php bloginfo("template_directory");?>/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php bloginfo("template_directory");?>/js/agency.js"></script>

 
<!-- Footer -->
   <?php get_footer();?>
