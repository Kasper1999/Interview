<!DOCTYPE html>
<html lang="ru">

 <?php get_header();?>

    <!-- Header -->

    

    <!-- Services -->
    
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Наша история</h2>
            <h3 class="section-subheading text-muted">Узнайте как мы начали и чего добилиль. <?php edit_post_link(__('&#9998 Измени')); ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image" data-toggle="popover-right"  title="Создание кампании"  data-content="Большинство наших сотрудников старые друзья, которые, как все после окончания вузов, искали свой дальнейший путь в жизни. В тот момент мы решили, что самое интересное в жизни это путешествия, но мы не хотели становиться очередной туристической конторой: мы хотели заводить друзей по всему миру и чтобы наша кампания стала хорошим другом для каждого клиента.">
                  <?php 

$image = get_field('step_1');

if( !empty($image) ): ?>

    <img class="rounded-circle img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <br>
                    <h4>2010-2011</h4>
                    <h4 class="subheading">Создание &nbsp <br>кампании </h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Наведи &nbsp --></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image" data-toggle="popover-left" title="Первые друзья в небе" data-content="Все же знают, что самый комфортный транспорт - это самолет. И поэтому самым удивительным событие для нас стало заключение первого договора с авиакомпанией. Мы долго трудились ради этого, и этот договор стал толчком к нашему росту. Благодаря этому событию сейчас мы уже можем предложить вам полеты на самолетах 5 авиакомпаний.">
                  <?php 

$image = get_field('step_2');

if( !empty($image) ): ?>

    <img class="rounded-circle img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <br>
                    <h4>Март 2011</h4>
                    <h4 class="subheading">Первые друзья<br>&nbsp  в небе</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><-- &nbsp Наведи </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image" data-toggle="popover-right" title="Мы в Интернете"  data-content="Начал свою работу наш сайт. Первоначально он был довольно простым, но со временем сайт становился все лучше и лучше, и превратился в то, на что вы сейчас смотрите.">
                  <?php 

$image = get_field('step_3');

if( !empty($image) ): ?>

    <img class="rounded-circle img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <p></p><br>
                    <h4>Декабрь 2012</h4>
                    <h4 class="subheading">Мы в Интернете</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Наведи &nbsp --></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image" data-toggle="popover-left"  title="Второй дом" data-content="Открылся наш второй филиал в Варшаве- это стало началом больших перемен. Сейчас у нас 6 филиалов по всему миру, и мы всегда можем приехать вам на помощь в трудной для вас ситуации.">
                  <?php 

$image = get_field('step_4');

if( !empty($image) ): ?>

    <img class="rounded-circle img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <p></p><br>
                    <h4>Июль 2014</h4>
                    <h4 class="subheading">Второй дом</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><-- &nbsp Наведи</p>
                  </div>
                </div>
              </li>
              <li >
        
              <div class="col-lg-8 mx-auto"> <div class="ssss">
                <div class="modal-body">
                	
                  <img class="rounded-circle1 img-fluid1" src="<?php bloginfo("template_directory");?>/img/about/9.jpg" alt="">
                 <p> </p>
                	 <header class="entry-header"> 
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>
                		<p>


                 
		
		
				<?php the_post();?>
				<?php the_content();?>
	</p>


                </div></div></div>


              </li>

            </ul>
           
          </div>
        </div>
      </div>
    </section>
    

    <!-- Team -->
    

    <!-- Clients -->
    

    <!-- Contact -->
   

    <!-- Footer -->
   

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
<?php get_footer();?>
