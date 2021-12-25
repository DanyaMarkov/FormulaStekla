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
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- для div my-page -->
    </div>



    <div class="top" title="Наверх"><i class="fa fa-angle-double-up"></i></div>

    <?php wp_footer()?>
    </body>


    </html>