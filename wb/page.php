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
            <h3 class="section-subheading text-muted"><?php the_content();?>Наша кампания предоставляет широкий спектр услуг.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Магазин</h4>
            <p class="text-muted">Здесь можно найти все, что может понадобиться в путешествии.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Карта доступных мест</h4>
            <p class="text-muted">Для каждого в мире найдется место по душе. Места проживания, маршруты и просто кривые места.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Страховка</h4>
            <p class="text-muted">Мы всегда заботимся о Вас и вашем здоровьи. Не дадим неприятностям испортить Ваш отдых.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Доступные страны</h2>
            <h3 class="section-subheading text-muted">В данных местах работают наши филиалы.</h3>
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
              <img class="img-fluid" src="<?php bloginfo("template_directory");?>/img/portfolio/07-thumbnail.jpg" alt="Чехия">
            </a>
            <div class="portfolio-caption">
              <h4>Чехия</h4>
              <p class="text-muted">Карловы Вары</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo("template_directory");?>/img/portfolio/08-thumbnail.jpg" alt="Испания">
            </a>
            <div class="portfolio-caption">
              <h4>Испания</h4>
              <p class="text-muted">Тенерифе</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo("template_directory");?>/img/portfolio/09-thumbnail.jpg" alt="США">
            </a>
            <div class="portfolio-caption">
              <h4>США</h4>
              <p class="text-muted">Гавайи</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo("template_directory");?>/img/portfolio/14-thumbnail.jpg" alt="Новая Зеландия">
            </a>
            <div class="portfolio-caption">
              <h4>Новая Зеландия</h4>
              <p class="text-muted">Озеро Таупо</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo("template_directory");?>/img/portfolio/15-thumbnail.jpg" alt="Китай">
            </a>
            <div class="portfolio-caption">
              <h4>Китай</h4>
              <p class="text-muted">Хэму</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo("template_directory");?>/img/portfolio/13-thumbnail.jpg" alt="Швейцария">
            </a>
            <div class="portfolio-caption">
              <h4>Швейцария</h4>
              <p class="text-muted">Цюрих</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Наша история</h2>
            <h3 class="section-subheading text-muted">Узнайте как мы начали и чего добилиль.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image" data-toggle="popover-right"  title="Создание кампании"  data-content="Большинство наших сотрудников старые друзья, которые, как все после окончания вузов, искали свой дальнейший путь в жизни. В тот момент мы решили, что самое интересное в жизни это путешествия, но мы не хотели становиться очередной туристической конторой: мы хотели заводить друзей по всему миру и чтобы наша кампания стала хорошим другом для каждого клиента.">
                  <img class="rounded-circle img-fluid" src="<?php bloginfo("template_directory");?>/img/about/5.jpg" alt="">
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
                  <img class="rounded-circle img-fluid" src="<?php bloginfo("template_directory");?>/img/about/2.jpg" alt="">
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
                  <img class="rounded-circle img-fluid" src="<?php bloginfo("template_directory");?>/img/about/3.jpg" alt="">
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
                  <img class="rounded-circle img-fluid" src="<?php bloginfo("template_directory");?>/img/about/222.jpg" alt="">
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
                	
                		<p>


                 
		
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
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Наша удивительная команда</h2>
            <h3 class="section-subheading text-muted">Данная команда готова ответить на любые ваши вопросы 24 часа в сутки, в любой удобной для вас форме.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php bloginfo("template_directory");?>/img/team/5.jpg" alt="">
              <h4>Ирина Золотова</h4>
              <p class="text-muted">Член отдела транспортировки</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://twitter.com/?lang=ru">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/?hl=ru">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php bloginfo("template_directory");?>/img/team/2.jpg" alt="">
              <h4>Михаил Бирета</h4>
              <p class="text-muted">Член отдела размещения</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://twitter.com/?lang=ru">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/mi_bireta/">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?php bloginfo("template_directory");?>/img/team/3.jpg" alt="">
              <h4>Ангелина Бурш</h4>
              <p class="text-muted">Член отдела страхования</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://twitter.com/?lang=ru">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/anhel1na__bursh/">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Надеемся мы смогли вам помочь и дать ответы на все интересующие Вас вопросы. Желаем приятного отдыха и ярких впечатлений. Надеемся на дальнейшее сотрудничество.</p>
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
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Свяжитесь с нами</h2>
            <h3 class="section-subheading text-muted">Оставьте ваш комментарий или пожелание, для улучшения качества нашей работы.</h3>
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

    <!-- Footer -->
   <?php get_footer();?>

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
                  <h2 class="text-uppercase">Карловы Вары</h2>
                  <p class="item-intro text-muted">Город в Чехии.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo("template_directory");?>/img/portfolio/07-full.jpg" alt="">
                  <p>Карловы Вары – знаменитый курортный город, расположенный в исторической области Богемия Чешской республики. Этот лечебный курорт пользовался популярностью еще во времена известных русских писателей-классиков благодаря горячим источникам минеральной воды, обладающим целебными свойствами.

Компания «ЦентрКурорт» предлагает всем желающим отдохнуть и пройти курс лечения в крупнейшем и известнейшем курорте Чехии — Карловых Варах. Мы рады предложить Вам уникальные индивидуальные туры с оптимальными для Вас условиями: оздоровление и лечение в Карловых Варах, цены на любой бюджет!</p>
                  <ul class="list-inline">
                    <li>Лучшее вемя: Сентябрь-Май</li>
                    <li>Цены: 5000€-50000€</li>
                    <li>Категория: Оздоровление</li>
                  </ul>
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
                  <h2 class="text-uppercase">Тенерифе</h2>
                  <p class="item-intro text-muted">Остров в Испании.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo("template_directory");?>/img/portfolio/08-full.jpg" alt="">
                  <p>Свое название остров Тенерифе получил от спящего вулкана Тейде, который аборигены гуанчи называли «снежная гора». Окруженный необыкновенными вулканическими пейзажами, Тенерифе полон контрастов: доисторические леса, бухты с пляжами из черного песка, живописные испанские деревушки, плодородные долины с растущими в них тропическими культурами, горные массивы с обрывистыми склонами, богатая разнообразием и местными особенностями канарская кухня, достопримечательности, внесенные в Список культурного наследия.</p>
                  <ul class="list-inline">
                    <li>Лучшее вемя: Март-Август</li>
                    <li>Цены: 1500€-18000€</li>
                    <li>Категория: Тихий романтический отдых</li>
                  </ul>
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
                  <h2 class="text-uppercase">Гавайи</h2>
                  <p class="item-intro text-muted">Остров в США.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo("template_directory");?>/img/portfolio/09-full.jpg" alt="">
                  <p>Гавайи — самый большой, но весьма малонаселённый остров архипелага. Основные города, которые посещают туристы — Хило (Hilo) и Каилуа-Кона (Kailua-Kona), центр западного побережья. Последний — небольшой курортный городок с кучей магазинов и развлечений. Здешнее побережье привлекает дайверов и любителей спортивного рыболовства. 
Чтобы не путать архипелаг Гавайи и остров Гавайи, американцы называют последний просто The Big Island («Большой остров»). </p>
                  <ul class="list-inline">
                    <li>Лучшее вемя: Февраль-Сентябрь</li>
                    <li>Цены: 900$-5000$</li>
                    <li>Категория: Отдых</li>
                  </ul>
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
                  <h2 class="text-uppercase">Озеро Таупо</h2>
                  <p class="item-intro text-muted">Новая Зеландия.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo("template_directory");?>/img/portfolio/14-full.jpg" alt="">
                  <p>Озеро Таупо Самое крупное и красивое озеро Новой Зеландии, располагается в центре Северного острова в кратере давно потухшего вулкана, подарившего озеру множество термальных источников в округе. Славится это место в первую очередь рыбалкой на форель, круизами по озеру, катанием на лодках и сплавами по горным рекам.</p>
                  <ul class="list-inline">
                    <li>Лучшее вемя: Круглый год</li>
                    <li>Цены: 500$-1500$</li>
                    <li>Категория: Тихий отдых </li>
                  </ul>
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
                  <h2 class="text-uppercase">Хэму</h2>
                  <p class="item-intro text-muted">Деревушка в Китае.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo("template_directory");?>/img/portfolio/15-full.jpg" alt="">
                  <p>Деревня Хэму по версии China National Geography одна самых живописных деревень Китая. Из-за долгой зимы в этом районе, для посещения туристами Hemu открыта только с июня по октябрь. Лучшее время для посещения начало июня, когда природа только просыпается, луга покрыты тысячами разноцветных цветов. Деревня Хэму находится в долине рек Канас и Хэму между величественными горами на высоте 2000 м над уровнем моря. Расположившись на территории уезда Бурчун на самом севере Синцзяна, окруженная утесами и массивными лесами, еще недавно она была полностью изолированная от внешнего мира.</p>
                  <ul class="list-inline">
                    <li>Лучшее вемя: Март-Сентябрь</li>
                    <li>Цены: 500$-5000$</li>
                    <li>Категория: Тихий романтический отдых</li>
                  </ul>
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
                  <h2 class="text-uppercase">Цюрих</h2>
                  <p class="item-intro text-muted">Город в Швейцарии.</p>
                  <img class="img-fluid d-block mx-auto" src="<?php bloginfo("template_directory");?>/img/portfolio/13-full.jpg" alt="">
                  <p>Цюрих, расположенный на северо-востоке Швейцарии, — это город точного времени и состоятельных людей. Компактный, далеко не мегаполис, но все же «глобальный» — такой статус он получил за свою значимость на мировой экономической арене. Богатый, и потому слегка заносчивый. Впрочем, этот легкий снобизм воспринимается как должное, едва перед глазами встают идеальный аэропорт, идеальные дороги, идеальное озеро, дома и магазины. 
по версии консалтинговой компании Arcadis Цюрих в 2016 г. стал лидером рейтинга 100 самых благополучных с точки зрения экологии и экономики городов мира. </p>
                  <ul class="list-inline">
                    <li>Лучшее вемя: Круглый год</li>
                    <li>Цены: 2000€-25000€</li>
                    <li>Категория: Культурный отдых</li>
                  </ul>
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

  </body>

</html>
