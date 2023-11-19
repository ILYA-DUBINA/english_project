<?php
  include './php/databases.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>React App</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="body">
      <section class="section__header">
        <div class="section__header_background">
          <img class="background__image" src="./images/backgroundSectionOne.jpg" alt="картинка фона">
        </div>
        <div class="container">
          <header class="header">
            <div class="header__logo">
              <img class="header__logo_img" src="./images/logoTop.svg" alt="картинка логотипа">
            </div>
            <h2 class="header__title">English</h2>
          </header>
          <div class="section__header_adaptive-title">
            <h1 class="section__header_title">Вкладывайте незначительные деньги каждый день в копилку своих знаний.</h1>
          </div>
          <div class="section__header_adaptive-text">
            <h3 class="section__header_text">Следующий курс для вас будет стоить всего <span class="text__inside">178 рублей в день</span></h3>
          </div>
          <div class="section__header_stocks">
            <div class="stocks__start">
              <span class="stocks__start_number">01</span>
              <div class="stocks__stars_text">
                <h5 class="text__date">Ноября</h5>
                <p class="text__detailed">Ближайший старт</p>
              </div>
            </div>
            <div class="stocks__finish">
              <span class="stocks__finish_number">21</span>
              <div class="stocks__finish_text">
                <h5 class="text__date">Октября</h5>
                <p class="text__detailed">Конец акции</p>
              </div>
            </div>
          </div>
          <div class="section__header_buttons">
            <a id="detailed" class="buttons__detailed" href="/">
              <span class="buttons__detailed_inside">Узнать подробнее</span>
            </a>
            <a id="consultation" class="buttons__consultation" href="/">
              <span class="buttons__consultation_inside">Бесплатная консультация</span>
            </a>
          </div> 
          <div class="section__header_adaptive">
            <div class="section__header_adaptive-box"></div>
          </div>         
        </div>        
      </section>
      <section class="training">
        <div class="container">
          <h2 class="training__title" id="trainingtitle">Выберите свой вариант обучения</h2>
          <div class="training__content">
            <?php 
              $singles = get_singles_all();                          
              foreach ($singles as $single): ?>
              <?php $result = floor(-(((int)$single['oldprice'] - (int)$single['price'])/(int)$single['oldprice']) * 100) ?> 
                <div class="training__block">
                  <h3 class="training__block_title"><?php echo $single['title'] ?></h3>
                  <div class="traning__block_price">
                    <h4 class="price__current"><?php echo $single['price'] ?> ₽</h4>
                    <h6 class="price__discount"><?php echo $result ?>%</h6>
                    <h5 class="price__past"><?php echo $single['oldprice'] ?></h6>
                  </div>
                  <p class="traning__block_text">
                    <picture>
                      <source srcset="./images/birdie.svg" media="(max-width: 390px)">
                      <source srcset="./images/birdie786.svg" media="(max-width: 1230px)">
                      <source srcset="./images/birdie.svg" >
                      <img class="text__image" src="./images/birdie.svg" alt="картинка птички">
                    </picture>
                    <span class="text__description text__description-bold"><?php echo $single['months'] ?> месяца обучения</span>
                  </p>
                  <p class="traning__block_text">
                    <picture>
                      <source srcset="./images/birdie.svg" media="(max-width: 390px)">
                      <source srcset="./images/birdie786.svg" media="(max-width: 1230px)">
                      <source srcset="./images/birdie.svg">
                      <img class="text__image" src="./images/birdie.svg" alt="картинка птички">
                    </picture>
                    <span class="text__description">Грамматическая выжимка</span>
                  </p>
                  <p class="traning__block_text">
                    <picture>
                      <source srcset="./images/birdie.svg" media="(max-width: 390px)">
                      <source srcset="./images/birdie786.svg" media="(max-width: 1230px)">
                      <source srcset="./images/birdie.svg">
                      <img class="text__image" src="./images/birdie.svg" alt="картинка птички">
                    </picture>
                    <span class="text__description">Разговорный тренажёр</span>
                  </p>
                  <p class="traning__block_text">
                    <picture>
                      <source srcset="./images/birdie.svg" media="(max-width: 390px)">
                      <source srcset="./images/birdie786.svg" media="(max-width: 1230px)">
                      <source srcset="./images/birdie.svg">
                      <img class="text__image" src="./images/birdie.svg" alt="картинка птички">
                    </picture>
                    <span class="text__description">Слова с ассоциациями</span>
                  </p>
                  <p class="traning__block_text">
                    <picture>
                      <source srcset="./images/birdie.svg" media="(max-width: 390px)">
                      <source srcset="./images/birdie786.svg" media="(max-width: 1230px)">
                      <source srcset="./images/birdie.svg">
                      <img class="text__image" src="./images/birdie.svg" alt="картинка птички">
                    </picture>
                    <span class="text__description">Регулярные мини-задания</span>
                  </p>
                  <p class="traning__block_text">
                    <picture>
                      <source srcset="./images/birdie.svg" media="(max-width: 390px)">
                      <source srcset="./images/birdie786.svg" media="(max-width: 1230px)">
                      <source srcset="./images/birdie.svg">
                      <img class="text__image" src="./images/birdie.svg" alt="картинка птички">
                    </picture>
                    <span class="text__description">Персональный куратор</span>
                  </p>
                  <p class="traning__block_text">
                    <picture>
                      <source srcset="./images/birdie.svg" media="(max-width: 390px)">
                      <source srcset="./images/birdie786.svg" media="(max-width: 1230px)">
                      <source srcset="./images/birdie.svg">
                      <img class="text__image" src="./images/birdie.svg" alt="картинка птички">
                    </picture>
                    <span class="text__description">Сертификат об обучении</span>
                  </p>
                  <p class="traning__block_text">
                    <picture>
                      <source srcset="./images/birdie.svg" media="(max-width: 390px)">
                      <source srcset="./images/birdie786.svg" media="(max-width: 1230px)">
                      <source srcset="./images/birdie.svg">
                      <img class="text__image" src="./images/birdie.svg" alt="картинка птички">
                    </picture>
                    <span class="text__description">Best Teachers</span>
                  </p>
                  <p class="traning__block_text">
                    <picture>
                      <source srcset="./images/birdie.svg" media="(max-width: 390px)">
                      <source srcset="./images/birdie786.svg" media="(max-width: 1230px)">
                      <source srcset="./images/birdie.svg">
                      <img class="text__image" src="./images/birdie.svg" alt="картинка птички">
                    </picture>
                    <span class="text__description text__description-bold">Звонки от Second Teacher</span>
                  </p>
                  <h3 class="traning__block_prepayment">Предоплата</h3>
                  <h4 class="traning__block_number"><?php echo $single['prepay'] ?> ₽</h3>
                  <a class="traning__block_prepayment-rf" href="<?php echo $single['link_ru'] ?>">
                    <span class="rf_text">внести предоплату <br> из рф</span>
                  </a>
                  <a class="traning__block_prepayment-other" href="<?php echo $single['link_en'] ?>">
                    <span class="other_text">внести предоплату <br> из-за границы</span>
                  </a>
                </div>
            <?php
              endforeach;
            ?>
          </div>          
            <a class="training__gift" href="/">
              <img class="training__gift_image" src="./images/largeButton.jpg" alt="картинка акции">
              <div class="training__gift_description">
                <h2 class="description__title">подарок</h2>
                <h3 class="description__text">Спецкурс
                  <span class="description__text_inside">"Английский для эмиграции"</span>
                </h3>
                <h3 class="description__text">Спецкурс 
                  <span class="description__text_inside">"Как преодолеть языковой барьер"</span>
                </h3>
              </div>
            </a>
        </div>
      </section>
      <section class="subscribtion">
        <div class="subscribtion__content">
          <h2 class="subscribtion__content_title" id="subscribtiontitle">Еще думаете?</h2>
          <p class="subscribtion__content_freelesson">Записывайтесь на бесплатный урок и попробуйте сами, это поможет принять решение</p>
          <form class="subscribtion__content_form" id="form" name="form" method="POST" actions="#" >
            <input class="form__name req-tel name-tel" type="text" placeholder="Введите ваше имя" name="name">            
            <input class="form__phone req-tel tel" type="tel" placeholder="Введите ваш телефон" name="phone">
            <input class="form__email req-tel email-tel" type="email" placeholder="Введите ваш email" name="email">
            <p class="form__p" id="msgTel"></p>
            <button class="buttons__detailed form__button" type="submit" name='formSubmit'>записаться</button>
          </form>          
          <p class="subscribtion__content_confidentiality">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с политикой конфиденциальности</p>
        </div>
        <div class="subscribtion__success">
          <h2 class="subscribtion__success__title">Ваша заявка успешна отправлена!</h2>
        </div>
        <div class="subscribtion__error">
          <h2 class="subscribtion__error__title">Извините, но ваша заявка была отклонена из-за непредвиденных ошибок!</h2>
        </div>
      </section>
      <footer class="footer">
        <div class="footer__content">
          <div class="footer__content_logo">
            <img class="logo__image" src="./images/logoButton.svg" alt="логотип">
            <h2 class="logo__title">English</h2>
          </div>
          <ul class="footer__content_law">
            <li class="law__english_inline">
               2015 - 2021 © English. Все права защищены.  
            </li>
            <li class="law__english_inline">
               Политика конфиденциальности
            </li>
            <li class="law__english">
               Соглашение об обработке персональных данных
            </li>
          </ul>
          <address class="footer__content_address">ООО "Инглиш", юридический адрес: 000000, Санкт-Петербург, 
            ул. Улица, д. 0/00 лит. 0, пом. 0 <span class="address__block">ОГРН: 000000000000 | ИНН: 000000000 | КПП: 000000000</span> 
          </address>    
          <div class="footer__content_links">
            <a class="links__vk" href="/">
              <img class="links__vk_icon" src="./images/vk.svg" alt="vk иконка">
            </a>
            <a class="links__telegram" href="/">
              <img class="links__telegram_icon" src="./images/telegram.svg" alt="telegram иконка">
            </a>
          </div>      
        </div>
      </footer>
    </div>  
    <script src="./js/script.js"></script>
  </body>
</html>