<!DOCTYPE html>
<html lang="ru">

 <?php get_header();?>

    <!-- Header -->

    

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php the_field('services-top');?></h2>
            <h3 class="section-subheading text-muted">
<?php the_field('services-middle');?>  <?php edit_post_link(__('&#9998 Измени')); ?>
       </h3>
          </div>
        </div>


           <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><?php the_field('shop-head');?></h4>
            <p class="text-muted"><?php the_field('shop');?></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><?php the_field('map-head');?></h4>
            <p class="text-muted"><?php the_field('map');?></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><?php the_field('strah-head');?></h4>
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
            <h2 class="section-heading text-uppercase"><?php the_field('grup_head');?></h2>
            <h3 class="section-subheading text-muted"><?php the_field('inf_grup');?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <?php 

$image = get_field('im_1');

if( !empty($image) ): ?>

    <img class="mx-auto rounded-circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
              <h4><?php the_field('team1');?></h4>
              <p class="text-muted"><?php the_field('position1');?></p>
              
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
             <?php 

$image = get_field('im_2');

if( !empty($image) ): ?>

    <img class="mx-auto rounded-circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
              <h4><?php the_field('team2');?></h4>
              <p class="text-muted"><?php the_field('position2');?></p>
              
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <?php 

$image = get_field('im_3');

if( !empty($image) ): ?>

    <img class="mx-auto rounded-circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
              <h4><?php the_field('team3');?></h4>
              <p class="text-muted"><?php the_field('position3');?></p>
              
            </div>
          </div>
        </div>
        <hr align="center" width="75%">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">    
              <h3 class="section-sub text-muted"><?php the_field('team-footer');?></h3>   
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



<!--    <?php the_post();?>
        <?php the_content();?> -->