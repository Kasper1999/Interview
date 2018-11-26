<!DOCTYPE html>
<html lang="ru">

 <?php get_header();?>

    <!-- Header -->

    

    <!-- Services -->
    <section id="services" class="sern">
      <div class="container">
        
          <div class="col-lg-12 text-center">
            
 
 <div class="col-lg-8 mx-auto"> 
                <div class="ssss">
                  
    <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header>
                    <p>
 

        <?php the_post();?>
        <?php the_content();?> <?php edit_post_link(__('&#9998 Измени')); ?>
</p></div></div>

  </p>


         </div></div>

        
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php the_field('countries');?></h2>
            <h3 class="section-subheading text-muted"><?php the_field('countries+');?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <?php 

$image = get_field('im_place_1');

if( !empty($image) ): ?>

    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>          
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('country_1');?></h4>
              <p class="text-muted"><?php the_field('place_1');?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
             <?php 

$image = get_field('im_place_2');

if( !empty($image) ): ?>

    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('country_2');?></h4>
              <p class="text-muted"><?php the_field('place_2');?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <?php 

$image = get_field('im_place_3');

if( !empty($image) ): ?>

    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('country_3');?></h4>
              <p class="text-muted"><?php the_field('place_3');?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              
              <?php 

$image = get_field('im_place_4');

if( !empty($image) ): ?>

    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('country_4');?></h4>
              <p class="text-muted"><?php the_field('place_4');?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <?php 

$image = get_field('im_place_5');

if( !empty($image) ): ?>

    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('country_5');?></h4>
              <p class="text-muted"><?php the_field('place_5');?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
<?php 

$image = get_field('im_place_6');

if( !empty($image) ): ?>

    <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
            </a>
            <div class="portfolio-caption">
              <h4><?php the_field('country_6');?></h4>
              <p class="text-muted"><?php the_field('place_6');?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- Team -->
    <!-- Contact -->
    
    <!-- Portfolio Modals -->
    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"><?php the_field('place_1b');?></h2>
                  <p class="item-intro text-muted"><?php the_field('description_1');?></p>
                    <?php 

$image = get_field('im_place_1b');

if( !empty($image) ): ?>

    <img class="img-fluid d-block mx-auto" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                  <p>Карловы Вары – знаменитый курортный город, расположенный в исторической области Богемия Чешской республики. Этот лечебный курорт пользовался популярностью еще во времена известных русских писателей-классиков благодаря горячим источникам минеральной воды, обладающим целебными свойствами.

Компания «ЦентрКурорт» предлагает всем желающим отдохнуть и пройти курс лечения в крупнейшем и известнейшем курорте Чехии — Карловых Варах. Мы рады предложить Вам уникальные индивидуальные туры с оптимальными для Вас условиями: оздоровление и лечение в Карловых Варах, цены на любой бюджет!</p>
                  <div class="list-inline" align="center">
                    <?php the_field('good_time');?> <?php the_field('good_time_1');?><br>
                    <?php the_field('price');?> <?php the_field('price_1');?><br>
                    <?php the_field('categories');?> <?php the_field('categories_1');?><br>
                  </div>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                     Закрыть</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"><?php the_field('place_2b');?></h2>
                  <p class="item-intro text-muted"><?php the_field('description_2');?></p>
                  <?php 

$image = get_field('im_place_2b');

if( !empty($image) ): ?>

    <img class="img-fluid d-block mx-auto" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                  <p>Свое название остров Тенерифе получил от спящего вулкана Тейде, который аборигены гуанчи называли «снежная гора». Окруженный необыкновенными вулканическими пейзажами, Тенерифе полон контрастов: доисторические леса, бухты с пляжами из черного песка, живописные испанские деревушки, плодородные долины с растущими в них тропическими культурами, горные массивы с обрывистыми склонами, богатая разнообразием и местными особенностями канарская кухня, достопримечательности, внесенные в Список культурного наследия.</p>
                    <div class="list-inline" align="center">
                    <?php the_field('good_time');?> <?php the_field('good_time_2');?><br>
                    <?php the_field('price');?> <?php the_field('price_2');?><br>
                    <?php the_field('categories');?> <?php the_field('categories_2');?><br>
                  </div>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                     Закрыть</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"><?php the_field('place_3b');?></h2>
                  <p class="item-intro text-muted"><?php the_field('description_3');?></p>
                 <?php 

$image = get_field('im_place_3b');

if( !empty($image) ): ?>

    <img class="img-fluid d-block mx-auto" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                  <p>Гавайи — самый большой, но весьма малонаселённый остров архипелага. Основные города, которые посещают туристы — Хило (Hilo) и Каилуа-Кона (Kailua-Kona), центр западного побережья. Последний — небольшой курортный городок с кучей магазинов и развлечений. Здешнее побережье привлекает дайверов и любителей спортивного рыболовства. 
Чтобы не путать архипелаг Гавайи и остров Гавайи, американцы называют последний просто The Big Island («Большой остров»). </p>
                    <div class="list-inline" align="center">
                    <?php the_field('good_time');?> <?php the_field('good_time_3');?><br>
                    <?php the_field('price');?> <?php the_field('price_3');?><br>
                    <?php the_field('categories');?> <?php the_field('categories_3');?><br>
                  </div>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                     Закрыть</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"><?php the_field('place_4b');?></h2>
                  <p class="item-intro text-muted"><?php the_field('description_4');?></p>
                  <?php 

$image = get_field('im_place_4b');

if( !empty($image) ): ?>

    <img class="img-fluid d-block mx-auto" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                  <p>Озеро Таупо Самое крупное и красивое озеро Новой Зеландии, располагается в центре Северного острова в кратере давно потухшего вулкана, подарившего озеру множество термальных источников в округе. Славится это место в первую очередь рыбалкой на форель, круизами по озеру, катанием на лодках и сплавами по горным рекам.</p>
                    <div class="list-inline" align="center">
                    <?php the_field('good_time');?> <?php the_field('good_time_4');?><br>
                    <?php the_field('price');?> <?php the_field('price_4');?><br>
                    <?php the_field('categories');?> <?php the_field('categories_4');?><br>
                  </div>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                     Закрыть</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"><?php the_field('place_5b');?></h2>
                  <p class="item-intro text-muted"><?php the_field('description_5');?></p>
                  <?php 

$image = get_field('im_place_5b');

if( !empty($image) ): ?>

    <img class="img-fluid d-block mx-auto" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                  <p>Деревня Хэму по версии China National Geography одна самых живописных деревень Китая. Из-за долгой зимы в этом районе, для посещения туристами Hemu открыта только с июня по октябрь. Лучшее время для посещения начало июня, когда природа только просыпается, луга покрыты тысячами разноцветных цветов. Деревня Хэму находится в долине рек Канас и Хэму между величественными горами на высоте 2000 м над уровнем моря. Расположившись на территории уезда Бурчун на самом севере Синцзяна, окруженная утесами и массивными лесами, еще недавно она была полностью изолированная от внешнего мира.</p>
                 <div class="list-inline" align="center">
                    <?php the_field('good_time');?> <?php the_field('good_time_5');?><br>
                    <?php the_field('price');?> <?php the_field('price_5');?><br>
                    <?php the_field('categories');?> <?php the_field('categories_5');?><br>
                  </div>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                     Закрыть</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"><?php the_field('place_6b');?></h2>
                  <p class="item-intro text-muted"><?php the_field('description_6');?></p>
                  <?php 

$image = get_field('im_place_6b');

if( !empty($image) ): ?>

    <img class="img-fluid d-block mx-auto" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
                  <p>Цюрих, расположенный на северо-востоке Швейцарии, — это город точного времени и состоятельных людей. Компактный, далеко не мегаполис, но все же «глобальный» — такой статус он получил за свою значимость на мировой экономической арене. Богатый, и потому слегка заносчивый. Впрочем, этот легкий снобизм воспринимается как должное, едва перед глазами встают идеальный аэропорт, идеальные дороги, идеальное озеро, дома и магазины. 
по версии консалтинговой компании Arcadis Цюрих в 2016 г. стал лидером рейтинга 100 самых благополучных с точки зрения экологии и экономики городов мира. </p>
                 <div class="list-inline" align="center">
                    <?php the_field('good_time');?> <?php the_field('good_time_6');?><br>
                    <?php the_field('price');?> <?php the_field('price_6');?><br>
                    <?php the_field('categories');?> <?php the_field('categories_6');?><br>
                  </div>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                     Закрыть</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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

 