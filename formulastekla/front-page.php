<?php get_header()?>

<body class="ishome">
  <div id="my-page">
    <div id="my-header">
      <header class="site-header">
        <div class="callback-container">
          <div class="callback-before"></div>

          <form class="callback-header-form" method="post" action="<?php echo admin_url('admin-ajax.php')?>">
            <div class="success"><span>Спасибо за заявку!</span></div>

            <input type="hidden" name="action" value="my_action">

            <input type="hidden" name="project_name" value="Формула Стекла" />
            <input type="hidden" name="admin_email" value="example@mail.com" />
            <input type="hidden" name="form_subject" value="Заказан звонок с сайта Формула Стекла" />
            <div class="close">
              <span>×</span>
            </div>
            <div class="formhead">Заказать звонок</div>
            <label for="header-form-name">Как к вам обращаться?</label>
            <input id="header-form-name" type="text" name="client_name" placeholder="Ваше имя" />
            <label for="header-form-phone">Номер телефона</label>
            <input id="header-form-phone" type="tel" name="client_phone" placeholder="+7(XXX)XXX-XXXX" required />
            <p>
              Отправляя форму, я соглашаюсь с политикой обработки
              <a class="personal" href="#">персональных данных</a>
            </p>
            <button class="call-button">ЗАКАЗАТЬ ЗВОНОК</button>
          </form>
        </div>

        <div class="personal-container">
          <div class="personal-before"></div>

          <form class="personal-form">
            <div class="personal-close">
              <span>×</span>
            </div>
            <div class="formhead">
              Соглашение на обработку<br />персональных данных
            </div>
            <p>
              Если Вы разместили Ваши контактные данные на сайте
              http://formula-stekla.ru, то Вы автоматически согласились на
              дальнейшую передачу Ваших контактных данных менеджерам сайта и
              Вы подтверждаете свое согласие на обработку компанией
              персональных данных в соответствии с Федеральным законом №
              152-ФЗ «О персональных данных» от 27.07.2006 года: сбор,
              систематизацию, накопление, хранение, уточнение (обновление,
              изменение), использование, передачу компаниям-партнерам
              исключительно в целях обеспечения мобильности обратного
              взаимодействия с Вами при решении вопросов, связанных с Вашим
              обращением.
            </p>
            <p>
              Мы гарантируем конфиденциальность получаемой информации.
              Обработка персональных данных осуществляется в целях
              эффективного исполнения заказов, договоров и иных обязательств,
              принятых компанией.
            </p>
            <p>
              Настоящее согласие распространяется на следующие Ваши
              персональные данные: фамилия, имя и отчество, адрес электронной
              почты, контактный телефон, платёжные реквизиты.
            </p>
            <p>
              Срок действия согласия является неограниченным. Вы можете в
              любой момент отозвать настоящее согласие, направив письменное
              уведомления на адрес formula_stekla@mail.ru
            </p>
            <p>
              Обращаем ваше внимание, что отзыв согласия на обработку
              персональных данных влечёт за собой удаление Вашей учётной
              записи с Интернет-сайта http://formula-stekla.ru, а также
              уничтожение записей, содержащих ваши персональные данные, в
              системах обработки персональных данных компании.
            </p>
          </form>
        </div>

        <div class="top-line">
          <div class="container">
            <div class="row">
              <div class="col-3">
                <a href="#" class="logo"><img src="<?php echo get_template_directory_uri()?>/img/logomain.png"
                    alt="Формула стекла" />Формула стекла</a>
              </div>
              <div class="col">
                <div class="time">
                  <img src="<?php echo get_template_directory_uri()?>/img/clock.svg" alt="" />
                  ЧАСЫ РАБОТЫ:<br />пн-пт 9.00-18.00
                </div>
              </div>
              <div class="col-2">
                <div class="mail">
                  <img src="<?php echo get_template_directory_uri()?>/img/email.svg" alt="" />
                  E-MAIL<br /><a href="#">formula_stekla@mail.ru</a>
                </div>
              </div>
              <div class="col">
                <div class="phone">
                  <img src="<?php echo get_template_directory_uri()?>/img/phone.svg" alt="" />
                  ТЕЛЕФОН<br />+7(495) 617-04-29
                </div>
              </div>
              <div class="col">
                <a href="#" class="callback">ЗАКАЗАТЬ ЗВОНОК</a>
              </div>
              <div class="col">
                <a href="http://co09443-wordpress-12.tw1.ru/calculator/" class="btn-calc">Калькулятор</a>
              </div>
            </div>
          </div>
        </div>
        ⠀ <br>
        ⠀ <br>
        ⠀ <br>

        <div class="header-banner">
          <div class="header-flex">
            <div class="flex-center img">
              <div class="container">
                <div class="row">
                  <div class="col-5">
                    <div class="header-composition">
                      <h1 class="h1">
                        <?php the_title();?>
                      </h1>
                      <p>
                        <?php the_content()?>
                      </p>
                      <a href="#contact" id="header-button" class="button">ОСТАВИТЬ ЗАЯВКУ</a>
                    </div>
                  </div>
                  <div class="col-7">
                    <img id="img" src="<?php the_field("main_image")?>" alt="Формула Стекла" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>


    <div id="my-content">
      <div class="services-callback-container">
        <div class="services-callback-before"></div>

        <form class="services-callback-form">
          <div class="success"><span>Спасибо за заявку!</span></div>

          <input type="hidden" name="project_name" value="Формула Стекла" />
          <input type="hidden" name="admin_email" value="example@mail.com" />
          <input type="hidden" name="form_subject" value="Новая заявка с сайта Формула Стекла" />
          <div class="close">
            <span>×</span>
          </div>
          <div class="formhead">Оставить заявку</div>
          <label for="services-form-name">Как к вам обращаться?</label>
          <input id="services-form-name" type="text" name="Имя" placeholder="Ваше имя" />
          <label for="services-form-phone">Номер телефона</label>
          <input id="services-form-phone" type="tel" name="Телефон" placeholder="+7(XXX)XXX-XXXX" required />
          <label for="services-form-message">Что вас интересует?</label><br />
          <textarea id="services-form-message" name="Сообщение" rows="4" placeholder="Ваш вопрос"></textarea>
          <p>
            Отправляя форму, я соглашаюсь с политикой обработки
            <a class="personal" href="#my-content">персональных данных</a>
          </p>
          <button class="call-button">ОСТАВИТЬ ЗАЯВКУ</button>
        </form>
      </div>

      <section class="services">
        <div class="container">
          <h2 class="h2"><?php the_field("services_title")?></h2>
          <p class="services-text">
            <?php the_field("services_subtitile")?>
          </p>

          <div class="container services-container">
            <div class="row services-row">

              <?php		
                    global $post;

                    $query = new WP_Query( [
                      'posts_per_page' => 8,
                      'category_name'  => 'uslugi'
                    ] );

                    if ( $query->have_posts() ) {
                      while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
              <div class="col-lg-3 col-md-4 col-6 item">
                <div class="services-item">
                  <div class="img-container">
                    <div class="services-callback"></div>
                    <div class="img"
                      style="background-image: url(<?php the_field('services_image')?>); background-repeat: no-repeat; background-size: cover;">
                    </div>
                  </div>
                  <div class="service-info">
                    <p style="text-align: center;">
                      <?php the_title()?> <br>
                      <span><a href="<?php the_field("service-link")?>"
                          style="text-decoration: none !important;">Подробнее</a></span>
                    </p>
                  </div>

                </div>
              </div>
              <?php 
                      }
                    } else {
                      // Постов не найдено
                    }

                    wp_reset_postdata(); // Сбрасываем $post
                  ?>

            </div>
          </div>
        </div>
      </section>

      <section class="about">
        <div class="container about-container">
          <div class="row">
            <div class="col-md-7 col-12">
              <h2 class="h2"><?php the_field("information_about_company")?></h2>
              <p>
                <?php the_field("description_about_company")?>
              </p>
            </div>
            <div class="col-md-5 col-12 img-col">
              <img src="<?php the_field("information_image")?>" alt="Наш магазин" />
            </div>
          </div>
        </div>
      </section>

      <section class="photo">
        <div class="big-photo-container">
          <div class="close">
            <span>×</span>
          </div>
          <div class="prev">
            <span><i class="fa fa-angle-left"></i></span>
          </div>
          <div class="next">
            <span><i class="fa fa-angle-right"></i></span>
          </div>
          <div class="photo-before"></div>
          <form class="photo-form">
            <img src="" />
          </form>
        </div>
        <div class="container photo-container">
          <h2 class="h2">Примеры работ</h2>
          <div class="row img-row">
            <div class="col-lg-3 col-6 div-img">
              <div class="img-photo-container">
                <div class="shadow"></div>
                <div id="photo1" class="img"></div>
              </div>
            </div>
            <div class="col-lg-3 col-6 div-img">
              <div class="img-photo-container">
                <div class="shadow"></div>
                <div id="photo2" class="img"></div>
              </div>
            </div>
            <div class="col-lg-3 col-6 div-img">
              <div class="img-photo-container">
                <div class="shadow"></div>
                <div id="photo3" class="img"></div>
              </div>
            </div>
            <div class="col-lg-3 col-6 div-img">
              <div class="img-photo-container">
                <div class="shadow"></div>
                <div id="photo4" class="img"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <?php get_footer()?>