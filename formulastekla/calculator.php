<?php get_header()?>


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
                <a href="http://co09443-wordpress-12.tw1.ru/" class="logo"><img
                    src="<?php echo get_template_directory_uri()?>/img/logomain.png" alt="Формула стекла" />Формула
                  стекла</a>
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
        <div class="header-banner pt-5">
          <!-- Калькулятор -->
          <div class="calculator mycontainer" id="calc">
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
              <div id="calculate-result" style="color: black">
                Итого: 0 руб
              </div>

            </div>
          </div>
          <!-- Калькулятор -->
        </div>
      </header>
    </div>

    <?php get_footer()?>