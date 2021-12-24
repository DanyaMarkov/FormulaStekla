<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8" />
  <!-- <base href="/"> -->
  <title>Формула стекла</title>
  <meta name="description" content="" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Template Basic Images Start -->
  <meta property="og:image" content="path/to/image.jpg" />

  <link rel="icon" href="<?php echo get_template_directory_uri()?>/img/favicon/logofav.ico" />

  <!-- Template Basic Images End -->

  <!-- Custom Browsers Color Start -->
  <meta name="theme-color" content="#E5E5E5" />
  <meta name="msapplication-navbutton-color" content="#E5E5E5" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#E5E5E5" />
  <!-- Custom Browsers Color End -->

  <?php wp_head()?>
</head>

<body class="ishome">
  <div id="my-page">
    <div id="my-header">
      <header class="site-header">
        <div class="callback-container">
          <div class="callback-before"></div>

          <form class="callback-header-form">
            <div class="success"><span>Спасибо за заявку!</span></div>

            <input type="hidden" name="project_name" value="Формула Стекла" />
            <input type="hidden" name="admin_email" value="example@mail.com" />
            <input type="hidden" name="form_subject" value="Заказан звонок с сайта Формула Стекла" />
            <div class="close">
              <span>×</span>
            </div>
            <div class="formhead">Заказать звонок</div>
            <label for="header-form-name">Как к вам обращаться?</label>
            <input id="header-form-name" type="text" name="Имя" placeholder="Ваше имя" />
            <label for="header-form-phone">Номер телефона</label>
            <input id="header-form-phone" type="tel" name="Телефон" placeholder="+7(XXX)XXX-XXXX" required />
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
                <a href="#calc" class="btn btn-primary btn-calc">Калькулятор</a>
              </div>
            </div>
          </div>
        </div>
        ⠀ <br>
        ⠀ <br>
        ⠀ <br>


        <!-- <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Калькулятор</a></li>
              <li class="nav-item"><a href="#" class="nav-link">О нас</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Контакты</a></li>
           
            </ul>
          </header> -->


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

          <!-- Калькулятор -->
          <!-- <div class="calculator mycontainer" id="calc" style="display: none;">
            <div class="calculator__title">
              <h2>Калькулятор стоимости работ</h2>
            </div>
            <div class="calculator__main mymain">
              <div class="mymain__item myitem">
                <h4>Выберите тип изделия</h4>

                <div class="item__choosetype">
                  <select class="custom-select" id="input-item-type" onchange="changeSelect()">
                    <option value="1" selected>Стекло</option>
                    <option value="2">Зеркало</option>
                    <option value="3">Лакобель</option>
                  </select>
                </div>
                <div class="myitem__showimg">
                  <img id="itemTypeImg" src="<?php echo get_template_directory_uri()?>/img/steklo.jpg" alt="">
                </div>

              </div>
              <div class="mymain__sizes">
                <div class="mymain__sizesel">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default"> S, м2</span>
                  </div>
                  <input id="S" value="10" type="text" class="form-control" aria-label="Default"
                    aria-describedby="inputGroup-sizing-default">
                </div>


                <div class="mymain__sizesel">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">P, м </span>
                  </div>
                  <input id="P" value="14" type="text" class="form-control" aria-label="Default"
                    aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="mymain__sizesel">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Кол-во </span>
                  </div>
                  <input id="count" value="1" type="text" class="form-control" aria-label="Default"
                    aria-describedby="inputGroup-sizing-default">
                </div>

              </div>
              <div class="main__works works">

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="checkMontage" onchange="changeSelect()">
                  <label class="form-check-label" for="flexCheckDefault">
                    Услуга монтажников
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="checkDelivery" onchange="changeSelect()">
                  <label class="form-check-label" for="flexCheckChecked">
                    Доставка
                  </label>
                </div>


                <div class="works__processing">
                  <h4>Тип обработки</h4>
                  <select class="custom-select" id="processing-type" onchange="changeSelect()">
                    <option value="1" selected>Механический</option>
                    <option value="2">Термический</option>
                    <option value="3">Химический</option>
                  </select>
                </div>

              </div>

            </div>
            <div class="calculator__result">
              <div>
                <button type="button" class="btn btn-info" onclick="calculate()">Посчитать</button>

              </div>
              <div id="calculate-result">
                Итого: 0 руб
              </div>

            </div>
          </div> -->
          <!-- Калькулятор -->


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
                  <p><?php the_title()?></p>
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

    <div id="my-footer">
      <div id="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-12">
              <h2 class="h2 h2-form">
                Оставьте заявку и мы<br />с Вами свяжемся
              </h2>
              <form class="callback-form">
                <div class="success"><span>Спасибо за заявку!</span></div>
                <input type="hidden" name="project_name" value="Формула Стекла" />
                <input type="hidden" name="admin_email" value="example@mail.com" />
                <input type="hidden" name="form_subject" value="Новая заявка с сайта Формула Стекла" />
                <div class="column">
                  <label for="name">Как к вам обращаться?</label><br />
                  <input id="name" type="text" name="Имя" placeholder="Ваше имя" /><br />
                  <label for="phone">Номер телефона</label><br />
                  <input id="phone" type="tel" name="Телефон" placeholder="+7(XXX)XXX-XXXX" required /><br />
                  <label for="email">Электронный адрес</label><br />
                  <input id="email" type="email" name="email" placeholder="e-mail" />
                  <label for="message">Что вас интересует?</label><br />
                  <textarea id="message" name="Сообщение" rows="8" placeholder="Ваш вопрос"></textarea>
                </div>
                <p>
                  Отправляя форму, я соглашаюсь с политикой обработки
                  <a class="personal" href="#contact">персональных данных</a>
                </p>
                <button class="contact-button">ОСТАВИТЬ ЗАЯВКУ</button>
              </form>
            </div>
            <div class="col-md-5 col-12 map-col">
              <h2 class="h2 h2-contact">Наши контакты</h2>
              <p class="contact-text">
                115516, г. Москва, ул. Севанская, д. 62 <br />
                Часы работы: пн-пт 9.00-18.00<br />
                Телефон : +7(495)617-0429<br />
                e-mail: <span>formula_stekla@mail.ru</span>
              </p>

              <div style="position:relative;overflow:hidden;">
                <a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
                  style="color:#eee;font-size:12px;position:absolute;top:0px;">
                  Москва
                </a>
                <a href="https://yandex.ru/maps/213/moscow/house/sevanskaya_ulitsa_62/Z04YcANiQEAOQFtvfXpzdH5gYw==/?ll=37.642959%2C55.625237&utm_medium=mapframe&utm_source=maps&z=17.09"
                  style="color:#eee;font-size:12px;position:absolute;top:24px;">
                  Севанская улица, 62 — Яндекс.Карты
                </a><iframe src="https://yandex.ru/map-widget/v1/-/CCUufHRa9C" width="560" height="218" frameborder="1"
                  allowfullscreen="true" style="position:relative;">
                </iframe>
              </div>
              <!-- <div class="map">
                  <script
                    type="text/javascript"
                    charset="utf-8"
                    async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A815b2ecf71e981ddd4682ef4b6f1715022f75d666d61ede27fdc0262d202714a&amp;width=100%&amp;height=218&amp;lang=ru_RU&amp;scroll=true"
                  ></script> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <div class="top" title="Наверх"><i class="fa fa-angle-double-up"></i></div>

  <?php wp_footer()?>
</body>


</html>