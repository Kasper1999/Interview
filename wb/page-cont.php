<!DOCTYPE html>
<html lang="ru">

 <?php get_header();?>

    <!-- Header -->

    

    <!-- Services -->
    
 
    

    <!-- Team -->

    <!-- Clients -->
    

    <!-- Contact -->
   
    <!-- Contact -->
    <section id="contact">
      <div class="container" id="services">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Свяжитесь с нами</h2>
            <h3 class="section-subheading text-muted">Оставьте ваш комментарий или пожелание, для улучшения качества нашей работы. <?php edit_post_link(__('&#9998 Измени')); ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Ваше Имя *" required data-validation-required-message="Пожалуйста введите своё имя.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Ваш Email *" required data-validation-required-message="Пожалуйста введите свой email.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Ваш телефон*" required data-validation-required-message="Пожалуйста введите свой номер телефона.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Содержание *" required data-validation-required-message="Пожалуйста введите комментарий."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">отправить письмо</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

 

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


   <!-- Footer -->
   <?php get_footer();?>