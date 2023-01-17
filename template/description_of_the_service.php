<?php
/*
Template Name: О преподавателях
*/

add_filter('body_class','services_body_class');
function services_body_class( $classes ) {
	$classes[] = 'education';
	$classes[] = 'about';
	return $classes;
}

get_header();

the_post();
$id = get_the_ID();
$title              = get_the_title($id);
$image_id           = get_post_meta( get_the_ID(), 'cdiservices-meta-image', true );
$image_url          = wp_get_attachment_image_src( $image_id, 'large' )[0];

?>

<main class="tb-main">
    <section class="tb-service">
        <span class="tb-t" style="display: block;">t</span>
        <span class="tb-b" style="display: block;">b</span>
        <span class="tb-s" style="display: block;">s</span>
        <div class="tb-specials__content_left">
            <a href="/specpredlozheniya/tekushchie-akcii/" class="tb-specials__title specials__title--1  active">
                <span class="specials__title-num tb-specials__title-num">01</span>
                <span class="specials__title-num tb-specials__title-text">Наши<br>акции</span>
            </a>
            <a href="/specpredlozheniya/nashi-abonementy/" class="tb-specials__title specials__title--2">
                <span class="specials__title-num tb-specials__title-num">02</span>
                <span class="specials__title-num tb-specials__title-text">Наши<br>абонементы</span>
            </a>
            <a href="/sertifikaty/podarochnye-sertifikaty/" class="tb-specials__title specials__title--3">
                <span class="specials__title-num tb-specials__title-num">03</span>
                <span class="specials__title-num tb-specials__title-text">Подарки нашим<br>гостям</span>
            </a>
        </div>
        <div class="tb-wrapper-service">
            <div class="tb-service-box">
                <div class="tb-service-box__block">
                    <div class="tb-service-box__block-item">
                        <h1 class="tb-service-box__block-item-title">Традиционный тайский<br>терапевтический массаж
                        </h1>
                        <div class="tb-service-box__block-item-subtitle">
                            <p>Тайские терапевтические йога массажи</p>
                        </div>
                    </div>
                    <div class="tb-service-box__block-item">
                        <div class="tb-service__flex-3">
                            <div class="price-item">
                                <div class="price-item__box">
                                    <div class="price-item__box-content">
                                        <h2 class="price-item__box-content-title">120</h2>
                                        <span></span>
                                        <h3 class="price-item__box-content-subtitle">мин</h3>
                                    </div>
                                </div>
                                <h3 class="price-item__title">5200</h3>
                            </div>
                            <div class="price-item">
                                <div class="price-item__box">
                                    <div class="price-item__box-content">
                                        <h2 class="price-item__box-content-title">120</h2>
                                        <span></span>
                                        <h3 class="price-item__box-content-subtitle">мин</h3>
                                    </div>
                                </div>
                                <h3 class="price-item__title">5200</h3>
                            </div>
                            <div class="price-item">
                                <div class="price-item__box">
                                    <div class="price-item__box-content">
                                        <h2 class="price-item__box-content-title">120</h2>
                                        <span></span>
                                        <h3 class="price-item__box-content-subtitle">мин</h3>
                                    </div>
                                </div>
                                <h3 class="price-item__title">5200</h3>
                            </div>
                        </div>
                        <div class="tb-service-box__button">
                            <button class="button">Выбрать</button>
                        </div>
                        <div class="tb-service-box__text">
                            <p>Тайский массаж поможет в снятии мышечных<br>болей и спазмов, нарушении осанки,
                                застое<br>лимфы. Улучшит кровоток и работу мозга.<br>Снимет стресс и усталость, даст
                                прилив сил.</p>
                        </div>
                    </div>
                    <div class="tb-service-box__block-item">
                        <div class="tb-service-box__img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri()?>/assets/images/0_1.png" media="(max-width:680px)">
                                <source srcset="<?php echo get_template_directory_uri()?>/assets/images/0_01.png" media="(max-width:1080px)">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/0.png" alt="">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tb-effects">
        <div class="tb-wrapper-effects">
            <h3 class="tb-effects__title">Терапевтический тайский массаж очень эффективен:</h3>
            <div class="tb-effects-block">
                <div class="tb-icon-block">
                    <div class="tb-icon-block__item">
                        <div class="tb-icon-block__item-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/icons/0_1.svg" alt="">
                        </div>
                        <div class="tb-icon-block__item-title">
                            <p>При болях<br> в спине</p>
                        </div>
                    </div>
                    <div class="tb-icon-block__item">
                        <div class="tb-icon-block__item-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/icons/0_2.svg" alt="">
                        </div>
                        <div class="tb-icon-block__item-title">
                            <p>При спазмах<br> в мышцах</p>
                        </div>
                    </div>
                    <div class="tb-icon-block__item">
                        <div class="tb-icon-block__item-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/icons/0_3.svg" alt="">
                        </div>
                        <div class="tb-icon-block__item-title">
                            <p>Стресс</p>
                        </div>
                    </div>
                    <div class="tb-icon-block__item">
                        <div class="tb-icon-block__item-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/icons/0_4.svg" alt="">
                        </div>
                        <div class="tb-icon-block__item-title">
                            <p>Перегрузки</p>
                        </div>
                    </div>
                    <div class="tb-icon-block__item">
                        <div class="tb-icon-block__item-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/icons/0_5.svg" alt="">
                        </div>
                        <div class="tb-icon-block__item-title">
                            <p>Токсины</p>
                        </div>
                    </div>
                </div>
                <div class="tb-effects-block__content">
                    <div class="tb-effects-block__content-item">
                        <div class="tb-effects-block__content-item-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/1.png" alt="">
                        </div>
                    </div>
                    <div class="tb-effects-block__content-item">
                        <p>Если до процедур вас беспокоила хроническая усталость и депрессия, по завершении сеанса
                            силы возвращаются, появляется бодрость. За счет устранения спазма мышц и деликатного
                            вытяжения позвоночника корректируется осанка. Вас ждет массаж всего тела по классическим
                            тайским методикам, нацеленный на восстановление и омоложение организма, нормализацию
                            работы внутренних органов.</p>
                    </div>
                </div>
                <div class="tb-effects-block__content tb-effects-block__content--reverse ">
                    <div class="tb-effects-block__content-item">
                        <div class="tb-effects-block__content-item-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/2.png" alt="">
                        </div>
                    </div>
                    <div class="tb-effects-block__content-item">
                        <p>Тайский массаж эффективен в борьбе с мышечными болями, связанными с хроническими
                            перегрузками и стрессом. Улучшает мобильность суставов, стимулирует циркуляцию суставной
                            жидкости, увеличивает амплитуду движений, восстанавливает кровоток и нормализует
                            артериальное давление, улучшает работу лимфатической системы, выводит токсины, ускоряет
                            метаболизм, нормализует работу всех внутренних органов, запускает механизмы
                            восстановления и само исцеления.</p>
                    </div>
                </div>
                <div class="tb-effects-block__btn">
                    <div class="tb-effects-block__btn-item">
                        <a href="">&lt;- Назад</a>
                    </div>
                    <div class="tb-effects-block__btn-item tb-effects-block__btn-item--flex-center">
                        <button class="button">Записаться</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tb-when-do">
        <div class="tb-wrapper-when-do">
            <div class="tb-when-do-box">
                <h3 class="tb-when-do-box__subtitle">Кому и когда нужна процедура</h3>
                <h2 class="tb-when-do-box__title">Традиционный тайский<br>терапевтический массаж</h2>
                <ul class="tb-when-do-box-list">
                    <li class="tb-when-do-box-list__item">
                        <p>Быстрая утомляемость<br>Отсутствие сил<br>Недостаток энергии</p>
                    </li>
                    <li class="tb-when-do-box-list__item">
                        <p>Дискомфорт,<br>боли в спине и шее<br>Нарушение осанки<br>Спазм мышц.</p>
                    </li>
                    <li class="tb-when-do-box-list__item">
                        <p>Много сидите<br>у компьютера<br>или за руллем</p>
                    </li>
                    <li class="tb-when-do-box-list__item">
                        <p>Вам за 35,<br>хотите выглядеть<br>моложе своих лет</p>
                    </li>
                    <li class="tb-when-do-box-list__item">
                        <p>Занимаетесь<br>регулярно спортом</p>
                    </li>
                    <li class="tb-when-do-box-list__item">
                        <p>Есть лишние см и кг,<br>есть целлюлит</p>
                    </li>
                </ul>
            </div>
            <div class="tb-when-do-box__contraindications">
                <a href="">Противопоказания массажу</a>
            </div>
        </div>
    </section>
    <section class="tb-who-do">
        <div class="tb-wrapper-who-do">
            <div class="tb-who-do-block">
                <div class="tb-who-do-block__item">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/spa_left.png" alt="">
                </div>
                <div class="tb-who-do-block__item">
                    <div class="tb-who-do-box">
                        <h3 class="tb-who-do-box__title">Кто делает массаж и SPA?</h3>
                        <div class="tb-who-do-box__img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/IMG_6661-2.png" alt="">
                        </div>
                        <div class="tb-icon-block">
                            <div class="tb-icon-block__item">
                                <div class="tb-icon-block__item-img">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/icons/0_6.svg" alt="">
                                </div>
                                <div class="tb-icon-block__item-title">
                                    <p>Тайские<br> мастера</p>
                                </div>
                            </div>
                            <div class="tb-icon-block__item">
                                <div class="tb-icon-block__item-img">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/icons/0_7.svg" alt="">
                                </div>
                                <div class="tb-icon-block__item-title">
                                    <p>Стаж</p>
                                </div>
                            </div>
                            <div class="tb-icon-block__item">
                                <div class="tb-icon-block__item-img">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/icons/0_8.svg" alt="">
                                </div>
                                <div class="tb-icon-block__item-title">
                                    <p>Опыт<br> в 4-6 странах</p>
                                </div>
                            </div>
                            <div class="tb-icon-block__item">
                                <div class="tb-icon-block__item-img">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/icons/0_9.svg" alt="">
                                </div>
                                <div class="tb-icon-block__item-title">
                                    <p>Гарантия<br> качества</p>
                                </div>
                            </div>
                            <div class="tb-icon-block__item">
                                <div class="tb-icon-block__item-img">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/icons/0_10.svg" alt="">
                                </div>
                                <div class="tb-icon-block__item-title">
                                    <p>Акции</p>
                                </div>
                            </div>
                        </div>
                        <div class="tb-who-do-box__list">
                            <ul>
                                <li>Продвинутый уровень</li>
                                <li><b>Стаж более 11 лет</b></li>
                                <li>Опыт в нескольких странах</li>
                                <li>
                                    <a href=""><b>Гарантия качества</b></a>
                                </li>
                                <li>
                                    <a href="">Акции</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tb-who-do-box__choice">
                            <a href="http://">Выбрать мастера</a>
                        </div>
                    </div>
                </div>
                <div class="tb-who-do-block__item">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/spa_right.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="tb-certificates">
        <div class="tb-wrapper-certificates">
            <div class="tb-certificates-box">
                <h2 class="tb-certificates-box__title">Бессрочные сертификаты в подарок</h2>
                <a class="tb-certificates-box__link" href="http://">Подробнее -></a>
                <div class="tb-certificates-box__img">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/cert.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="tb-form-call-me">
        <div class="tb-wrapper-form-call-me">
            <div class="tb-form-call-me-box">
                <div class="tb-form-call-me-box__item">
                    <form action="" class="tb-form-call-me-box__item-form">
                        <h3 class="tb-form-call-me-box__item-form__title">Оставьте заявку<br>и мы поможем!</h3>
                        <div class="tb-form-call-me-box__item-form__subtitle">
                            <p>Подскажем мастера и процедуру,<br>которая вам понравится!</p>
                        </div>
                        <label for="">
                            <input class="tb-f-name" type="text" placeholder="Имя">
                        </label>
                        <label for="">
                            <input class="tb-f-mobile" type="text" placeholder="+7 (xxx) xxx-x-xx">
                        </label>
                        <button class="button button--call-me" type="submit">Позвоните мне</button>
                        <label for="" class="confidencial">
                            <input class="tb-checkbox" type="checkbox">
                            <div class="tb-checkbox-text">
                                <p>Я согласен с <a href="http://">политикой конфиденциальности</a></p>
                            </div>
                        </label>
                    </form>
                </div>
                <div class="tb-form-call-me-box__item tb-form-call-me-box__item--add-img">
                    <div class="tb-form-call-me-box__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/call-me.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tb-recomm">
        <div class="tb-wrapper-recomm">
            <div class="tb-recomm-box">
                <div class="tb-recomm-box__title">
                    <h3 class="tb-recomm-box__title-text">Рекомендуем<br>попробовать</h3>
                    <div class="tb-recomm-box__title-clear">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="100%" height="67px" viewBox="0 0 61 66" version="1.1">
                            <g id="surface1">
                                <path
                                    style=" stroke:none;fill-rule:nonzero;fill:rgb(69.803922%,58.823529%,36.078431%);fill-opacity:1;"
                                    d="M 57.464844 37.121094 L 49.105469 37.121094 C 48.019531 37.121094 47.183594 37.96875 47.058594 39.035156 C 45.957031 48.464844 36.8125 55.492188 26.621094 53.175781 C 20.617188 51.8125 15.738281 46.980469 14.355469 41.027344 C 11.847656 30.242188 20.082031 20.625 30.535156 20.625 L 30.535156 26.8125 C 30.535156 27.644531 31.042969 28.398438 31.820312 28.714844 C 32.597656 29.035156 33.488281 28.855469 34.089844 28.265625 L 46.566406 15.890625 C 47.375 15.085938 47.375 13.78125 46.566406 12.976562 L 34.089844 0.601562 C 33.488281 0.015625 32.597656 -0.160156 31.820312 0.15625 C 31.042969 0.472656 30.535156 1.226562 30.535156 2.0625 L 30.535156 8.25 C 14.339844 8.25 1.195312 21.425781 1.429688 37.542969 C 1.648438 52.863281 14.648438 65.765625 30.09375 65.996094 C 45.613281 66.226562 58.4375 54.347656 59.570312 39.292969 C 59.65625 38.117188 58.65625 37.121094 57.464844 37.121094 Z M 57.464844 37.121094 " />
                            </g>
                        </svg>
                        <p>Сбросить</p>
                    </div>
                </div>
                <div class="tb-recomm-box__button">
                    <button class="button button--recomm-choice">Жен</button>
                    <button class="button button--recomm-choice">Муж</button>
                    <button class="button button--recomm-choice">Пары</button>
                </div>
                <ul class="tb-recomm-box__list">
                    <li class="tb-recomm-box__list-item">
                        <div class="tb-recomm-block">
                            <h4 class="tb-recomm-block__title">Релакс массаж с применением горячего масла</h4>
                            <ul class="tb-recomm-block__list">
                                <li class="tb-recomm-block__item">
                                    <div class="tb-recomm-block__item-time">120 мин</div>
                                    <div class="tb-recomm-block__item-name">
                                        <span class="tb-recomm-name tb-recomm-name--noname"></span>
                                    </div>
                                    <div class="tb-recomm-block__item-price">5900 &#x20bd;</div>
                                </li>
                                <li class="tb-recomm-block__item">
                                    <div class="tb-recomm-block__item-time">90 мин</div>
                                    <div class="tb-recomm-block__item-name">
                                        <span class="tb-recomm-name tb-recomm-name--noname"></span>
                                    </div>
                                    <div class="tb-recomm-block__item-price">4500 &#x20bd;</div>
                                </li>
                                <li class="tb-recomm-block__item">
                                    <div class="tb-recomm-block__item-time">60 мин</div>
                                    <div class="tb-recomm-block__item-name">
                                        <span class="tb-recomm-name tb-recomm-name--noname"></span>
                                    </div>
                                    <div class="tb-recomm-block__item-price">3150 &#x20bd;</div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="tb-yandex-rating">
        <div class="tb-wrapper-yandex-rating">
            <div class="tb-yandex-rating-box">
                <div class="tb-yandex-rating-box__img">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/stars-yandex.png" alt="">
                </div>
                <div class="tb-yandex-rating-box__text">
                    <p><b>Высший рейтинг от Яндекс “5.0”</b><br>сервис, качество, цены, отзывы</p>
                </div>
            </div>
        </div>
    </section>
    <section class="tb-stop-covid19">
        <div class="tb-wrapper-stop-covid19">
            <div class="tb-stop-covid19-box">
                <div class="tb-stop-covid19-box__item tb-stop-covid19-box__item--add-img">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/stopcovid.png" alt="">
                </div>
                <div class="tb-stop-covid19-box__item">
                    <h4 class="tb-stop-covid19-box__item-title">STOP covid19</h4>
                    <div class="tb-stop-covid19-box__item-text">
                        <p>Работаем по предварительной записи</p>
                        <p>Количество посетителей ограничено</p>
                        <p>Не допускаются посетители с любыми видимыми признаками простуды, температурой выше 37</p>
                        <p>Строгий перчаточно-масочный режим</p>
                        <p>Постоянное обеззараживание воздуха и обработка поверхностей!</p>
                        <p>Вы не коснетесь необработанной дверной ручки!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="after--box"></div>
    </section>
    <section class="tb-cont">
        <div class="tb-wrapper-cont">
            <div class="tb-cont-box">
                <h3 class="tb-cont-box__title">Контакты и адрес</h3>
                <p class="tb-cont-box__text">Время работы: ЕЖЕДНЕВНО с 11 до 23</p>
                <p class="tb-cont-box__text-mobile">Время работы:<br> ЕЖЕДНЕВНО с 11 до 23</p>
                <h4 class="tb-cont-box__subtitle">ул. Дыбенко 22, кор. 1<br>м. Ховрино, г. Москва</h4>
                <h4 class="tb-cont-box__subtitle-mobile">ул. Дыбенко 22, кор. 1</h4>
                <div class="tb-cont-box__subcont">
                    <a href="">+7 (495) 451-52-62</a>
                    <a href="">+7 (901) 184-23-32</a>
                </div>
                <div class="tb-cont-box__subcont-mobile">
                    <p>Телефоны:
                        <a href="">+7 (495) 451-52-62</a>
                    </p>
                    <p>
                        <a href="">+7 (901) 184-23-32</a>
                    </p>
                    <p>Whatsapp:
                        <a href="">+7 (991) 692-27-32</a>
                    </p>
                    <p>Email:
                        <a href="">info@tbs-spa.ru</a>
                    </p>
                </div>
                <ul class="tb-cont-box__social">
                    <li class="tb-cont-box__social-link tb-cont-box__social-link--youtube">
                        <a href="http://">
                            <span></span>
                        </a>
                    </li>
                    <li class="tb-cont-box__social-link tb-cont-box__social-link--vk">
                        <a href="http://">
                            <span></span>
                        </a>
                    </li>
                    <li class="tb-cont-box__social-link tb-cont-box__social-link--insta">
                        <a href="http://">
                            <span></span>
                        </a>
                    </li>
                    <!-- <li class="tb-cont-box__social-link tb-cont-box__social-link--facebook">
                        <a href="http://">
                            <span></span>
                        </a>
                    </li> -->
                    <li class="tb-cont-box__social-link tb-cont-box__social-link--whatsapp">
                        <a href="http://">
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="tb-parking">
        <div class="tb-wrapper-parking">
            <div class="tb-parking-box">
                <h2 class="tb-parking-box__title">Бесплатная паркковка - без шлагбаума!</h2>
                <div class="tb-parking-box__img">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri()?>/assets/images/parking.png" media="(min-width:530px)">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/parking_0.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section class="tb-about-mass">
        <div class="tb-wrapper-about-mass">
            <div class="tb-about-mass-box">
                <div class="tb-about-mass-box__item tb-about-mass-box__item--add-img">
                    <div class="tb-about-mass-box__item-img">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/about-tb.png" alt="">
                    </div>
                    <div class="tb-about-mass-box__item-text">
                        <h4 class="tb-about-mass-box__item-text-title">Тайский массаж</h4>
                        <p class="tb-about-mass-box__item-text-description">Если до процедур вас беспокоила
                            хроническая усталость и депрессия, по завершении сеанса силы возвращаются, появляется
                            бодрость. За счет устранения спазма мышц и деликатного вытяжения позвоночника
                            корректируется осанка. Вас ждет массаж всего тела по классическим тайским методикам,
                            нацеленный на восстановление и омоложение организма, нормализацию работы внутренних
                            органов.</p>
                    </div>
                </div>
                <div class="tb-about-mass-box__item tb-about-mass-box__item">
                    <div class="tb-about-mass-box__item-text">
                        <h4 class="tb-about-mass-box__item-text-title">Что такое тайсккий массаж?</h4>
                        <p class="tb-about-mass-box__item-text-description">Особое внимание разработке систем
                            оздоровления уделяли цивилизации Древнего Востока. При этом мануальные техники тесно
                            переплетались с духовными практиками, медициной и философией. Свое начало техника
                            тайского массажа берет из монастырей буддистских храмов, где и по сей день обучаются
                            мастера массажа. Основоположником практики официально считается Дживака Кумар Бхаши,
                            известный также как Шиваго Компардж – личный лекарь одного из индийских царей, друг
                            Будды. Впрочем, тайский массаж настолько многогранен, что приписать создание учения
                            одному человеку сложно – скорее всего, с течением веков в нем сплетались медицинские
                            знания разных культур. В результате современный тайский массаж – это целое искусство,
                            содержащее элементы йоги, рефлексотерапии, медитации и акупрессуры.</p>
                    </div>
                </div>
                <div class="tb-about-mass-box__item tb-about-mass-box__item">
                    <div class="tb-about-mass-box__item-text">
                        <h4 class="tb-about-mass-box__item-text-title">Чем будет полезен тайский массаж?</h4>
                        <p class="tb-about-mass-box__item-text-description">Не путайте его с обычной спа-услугой.
                            Это полноценный терапевтический сеанс, причем направленный на омоложение, оздоровление
                            не только тела, но и духа, благодаря правильной настройке энергетических каналов. Даже
                            один сеанс тайского массажа даст ощутимый результат. Во время процедуры мастер уделяет
                            внимание всему организму клиента и его энергетическому состоянию. Массируется все тело,
                            от кончиков пальцев до головы, используются методы скручивания, мягкого растягивания и
                            надавливаний. Мастер работает с активными точками и меридианами. При этом главная цель
                            процедуры – добиться восстановления циркуляции жизненной энергии и баланса между 4
                            элементами человеческого организма, согласно восточной философии.</p>
                    </div>
                </div>
                <div class="tb-about-mass-box__item tb-about-mass-box__item">
                    <div class="tb-about-mass-box__item-text">
                        <h4 class="tb-about-mass-box__item-text-title">Классический тайский массаж полезен всем без
                            исключений.<br>Физиологические эффекты от сеанса:</h4>
                        <ul class="tb-about-mass-box__item-text-list">
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>улучшение кровообращения, мозговой деятельности, повышение работоспособности;</p>
                            </li>
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>расслабление и деликатное растяжение связок, улучшение их эластичности,</p>
                            </li>
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>быстрое восстановление после физических нагрузок, восстановление тонуса
                                    атрофированных мышц;</p>
                            </li>
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>нормализация работы суставов;</p>
                            </li>
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>нормализация нервной системы;</p>
                            </li>
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>корректировка осанки;</p>
                            </li>
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>выведение токсинов, шлаков;</p>
                            </li>
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>снятие стресса и усталости;</p>
                            </li>
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>нормализация работы пищеварительного тракта;</p>
                            </li>
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>снятие отечности, нормализация работы лимфатической системы, похудение;</p>
                            </li>
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>снятие напряжения, спазма мышц;</p>
                            </li>
                            <li class="tb-about-mass-box__item-text-list-item">
                                <p>усиление притока крови к коже, улучшение состояния кожи, устранение или заметное
                                    уменьшение морщин, укрепление и рост волос.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tb-about-mass-box__ending">
                    <p>Главный эффект от процедуры заключается в снятии энергетических блоков и открытии
                        энергетических каналов, настройке организма на самоисцеление, повышение настроения,
                        омоложение за счет восстановления энергетического баланса. Тайский оздоровительный массаж
                        для мужчин имеет некоторые отличия от процедуры «тайский массаж для женщин». Обо всех
                        особенностях вам расскажет мастер в салоне. Наши постоянные клиенты, проходящие сеансы
                        регулярно, выглядят заметно моложе своих сверстников. Окружающие обязательно отметят, что
                        ваша кожа выглядит свежей, отдохнувшей, осанка заметно улучшится, а настроение не зависит от
                        капризов погоды и других негативных факторов. Наши массажисты настолько компетентны, что
                        находятся в одном энергетическом потоке с каждым клиентом, буквально «считывают» состояние
                        здоровья кончиками пальцев. У нас работают мастера, познавшие суть метты, с опытом более 10
                        лет и практикой в разных странах мира. Они не только не навредят, но и гарантировано
                        помогут. Не откладывайте свое здоровье на потом – это единственное, чему в нашей жизни
                        просто нет цены!</p>
<br>
                    <p>Настоятельно рекомендуем выбирать процедуры от 90 минут, что позволит мастерам поработать и
                        по точкам, и с энергетикой, и с вашими проблемными местами!</p>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
document.addEventListener('DOMContentLoaded', ()=> {
	document.querySelector('body').style.background = 'url("https://thaibeauty.webcorptest.ru/wp-content/themes/foghorn/assets/images/layout-tb.png")';
	document.querySelector('body').style.backgroundRepeat = 'no-repeat';
   	document.querySelector('body').style.backgroundSize = 'cover';
	document.querySelector('body').style.overflowY = 'scroll';
});
</script>
<?php

wp_reset_postdata();
get_footer();