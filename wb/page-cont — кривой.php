<!DOCTYPE html>
<html lang="ru">

 <?php get_header();?>

    <!-- Header -->

    

    <!-- Services -->
    
 
    

    <!-- Team -->

    <!-- Clients -->
    

    <!-- Contact -->
   
    <section id="services">
     <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Свяжитесь с нами</h2>
            <h3 class="section-subheading text-muted">Оставьте ваш комментарий или пожелание, для улучшения качества нашей работы.</h3>
          </div>
        </div>
         <div class="col-lg-8 mx-auto"> <div class="ssss">
                <div class="modal-body">
                	
                
                	
                		<p>
                  
				<?php the_post();?>
				<?php the_content();?>
                   </p>
          </div>
        </div>
      </div>
    </section>
</section>

    <!-- Footer -->
   <?php get_footer();?>

    <!-- Portfolio Modals -->

    

    <script src="<?php bloginfo("template_directory");?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo("template_directory");?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php bloginfo("template_directory");?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php bloginfo("template_directory");?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php bloginfo("template_directory");?>/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php bloginfo("template_directory");?>/js/agency.js"></script>

  </body>

</html>
