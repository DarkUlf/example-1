<header>
    <div class="top-line">
        <div class="container">
            <div class="media">
                <div class="media-left media-middle">
                    <a href="/" class="media-object"><img src="/images/logo.png" alt="<?= config('siteName') ?>"></a>
                </div>
                <div class="media-body media-middle">
                    <div class="contact-phone pull-right">
                        <a href="tel:+<?= config('contactPhone') ?>"><?= formatPhone(config('contactPhone')) ?></a>
                        <br>
                        <a href="#order-modal" data-toggle="modal">Бесплатная консультация</a>
                    </div>

                    <div class="clearfix"></div>

                    <nav>
                        <button data-toggle="collapse" data-target="#main-menu" aria-expanded="true"
                                aria-controls="main-menu">
                            <span class="glyphicon glyphicon-menu-hamburger"></span>
                        </button>

                        <ul class="list-unstyled collapse" id="main-menu">
                            <li><a href="#">ГЛАВНАЯ</a></li>
                            <li><a href="#services">УСЛУГИ</a></li>
                            <li><a href="#about">О НАС</a></li>
                            <li><a href="#calc">РАСЧЕТ СТОИМОСТИ</a></li>
                            <li><a href="#examples">НАШИ РАБОТЫ</a></li>
                            <li><a href="#contacts">КОНТАКТЫ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <hr>
    </div>

    <div class="container">
        <h1>КУЗОВНОЙ РЕМОНТ<br>ПОКРАСКА АВТОМОБИЛЯ</h1>

        <a href="#order-modal" data-toggle="modal" data-action="Заказ услуг">Записаться</a>
    </div>
</header>

<section id="screen-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2">
                <div class="box box-1">
                    <h3>Бесплатная оценка</h3>

                    <p>
                        Попав в ДТП, водитель не всегда с первого взгляда может определить нанесенный ущерб, поэтому
                        для наших клиентов мы предлагаем бесплатную услугу по оценке ремонта после ДТП.
                    </p>
                </div>
            </div>

            <div class="clearfix mb30 visible-sm visible-xs"></div>

            <div class="col-lg-4 col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2">
                <div class="box box-2">
                    <h3>Бесплатная оценка с выездом в черте города</h3>

                    <p>
                        Суть услуги состоит в следующем: клиент оставляет заявку на сайте или по номеру
                        телефона, после чего в указанное время и место выезжает специалист фирмы.
                    </p>
                </div>
            </div>

            <div class="clearfix mb30 visible-md visible-sm visible-xs"></div>

            <div class="col-lg-4 col-lg-offset-0 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="box box-3">
                    <h3>Опыт работы более 20 лет</h3>

                    <p>
                        Уже более 20 лет занимаемся ремонтом и покраской автомобилей, но мы уверены,
                        что нет предела совершенству, и продолжаем развиваться.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="screen-1">
    <div class="screen-title">
        <div>
            <span>01</span>
            <h2>КАК МЫ РАБОТАЕМ</h2>
            <p>Краткая схема процесса нашей работы</p>
        </div>
    </div>

    <div class="tags-line">
        <div class="container text-center">
            <div class="tag tag-1 zoom">
                Заявка и запись <br>на осмотр
            </div>
            <div class="tag tag-2 zoom">
                Осмотр <br>автомобиля
            </div>
            <div class="tag tag-3 zoom">
                Составление <br>сметы на ремонт
            </div>
            <div class="tag tag-4 zoom">
                Подбор запчастей <br>на автомобиль
            </div>
            <div class="tag tag-5 zoom">
                Ремонт <br>автомобиля
            </div>
            <div class="tag tag-6 zoom">
                Сдача <br>работы
            </div>
        </div>
    </div>

    <div class="container p-r">
        <div class="col-md-offset-1 description">
            <div>
                Заявка и запись на осмотр<br>
                Шаг 1. Чтобы получить бесплатную консультацию и записаться на осмотр автомобиля, оставьте заявку на
                нашем сайте или по телефону.
            </div>
            <div>
                Осмотр автомобиля.<br>
                Шаг 2. Осмотр автомобиля проводим по нашему адресу: Сыктывкар, Дырнос 12.
                Если вы не можете к нам подъехать, то наш специалист выедет к вам (выезд по городу бесплатный).
            </div>
            <div>
                Составление сметы на ремонт.<br>
                Шаг 3. После осмотра автомобиля определяется цена и сроки ремонта.
            </div>
            <div>
                Индивидуальный подбор запчастей.<br>
                Шаг 4. Мы подбираем автозапчасти в зависимости от ваших требований (новые, б/у, оригинал, Китай).
            </div>
            <div>
                Ремонт автомобиля под ключ.<br>
                Шаг 5. Все заботы, связанные с ремонтом автомобиля, берем на себя (подбор краски, расходных материалов).
            </div>
            <div>
                Сдача работы.<br>
                Шаг 6. По окончанию ремонта сдаем полностью готовый к эксплуатации автомобиль.
            </div>
        </div>
    </div>
</section>

<div class="screen-title" id="services">
    <div>
        <span>02</span>
        <h2>НАШИ УСЛУГИ</h2>
        <p>Вы можете записаться онлайн на консультацию<br>
            по услуге которая вас заинтересовала</p>
    </div>
</div>

<section id="screen-2">
    <div class="container">
        <div class="row mb50">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box box-1">
                    <div>
                        <div>
                            <p>
                                Покраска любой сложности в малярной камере с гарантией качества. Полная покраска,
                                локальная покраска автомобиля.
                            </p>
                            <div class="text-center">
                                <a href="#order-modal" data-toggle="modal" data-action="Заказ услуг">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <h3>Покраска автомобиля</h3>
                </div>
            </div>

            <div class="clearfix mb30 visible-sm visible-xs"></div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box box-2">
                    <div>
                        <div>
                            <p>
                                Рихтовочные, сварочные работы. Восстановление зазоров после ДТП. Замена
                                деталей кузова.
                            </p>
                            <div class="text-center">
                                <a href="#order-modal" data-toggle="modal" data-action="Заказ услуг">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <h3>Кузовной ремонт</h3>
                </div>
            </div>

            <div class="clearfix mb30 visible-md visible-sm visible-xs"></div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box box-3">
                    <div>
                        <div>
                            <p>
                                Сварка пластика. Ремонт сильных изломов и трещин. Восстановление утерянных
                                фрагментов.
                            </p>
                            <div class="text-center">
                                <a href="#order-modal" data-toggle="modal" data-action="Заказ услуг">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <h3>Ремонт бамперов и пластиковых деталей</h3>
                </div>
            </div>

            <div class="clearfix mb50 visible-lg"></div>
            <div class="clearfix mb30 visible-sm visible-xs"></div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box box-4">
                    <div>
                        <div>
                            <p>
                                Точный подбор цвета автомобиля. Применяем только качественные и проверенные
                                материалы.
                            </p>
                            <div class="text-center">
                                <a href="#order-modal" data-toggle="modal" data-action="Заказ услуг">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <h3>Подбор красок и автоэмалей</h3>
                </div>
            </div>

            <div class="clearfix mb30 visible-md visible-sm visible-xs"></div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box box-5">
                    <div>
                        <div>
                            <p>
                                Подбор новых и б/у запчастей по согласованию.
                            </p>
                            <div class="text-center">
                                <a href="#order-modal" data-toggle="modal" data-action="Заказ услуг">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <h3>Подбор запчастей</h3>
                </div>
            </div>

            <div class="clearfix mb30 visible-sm visible-xs"></div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box box-6">
                    <div>
                        <div>
                            <p>
                                Вы можете обратиться к нам по любым вопросам и получить бесплатную
                                консультацию.
                            </p>
                            <div class="text-center">
                                <a href="#order-modal" data-toggle="modal" data-action="Заказ услуг">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <h3>Бесплатная консультация</h3>
                </div>
            </div>

            <div class="hidden-boxes">
                <div class="clearfix mb50 visible-lg"></div>
                <div class="clearfix mb30 visible-md visible-sm visible-xs"></div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box box-7">
                        <div>
                            <div>
                                <p>
                                    Восстановление блеска авто. Удаление мелких царапин и потертостей. Очистка
                                    поверхности
                                    авто от различных загрязнений. Полировка фар.
                                </p>
                                <div class="text-center">
                                    <a href="#order-modal" data-toggle="modal" data-action="Заказ услуг">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <h3>Полировка</h3>
                    </div>
                </div>

                <div class="clearfix mb30 visible-sm visible-xs"></div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box box-8">
                        <div>
                            <div>
                                <p>
                                    Комплекс работ по улучшению внешнего вида авто в короткие сроки.
                                </p>
                                <div class="text-center">
                                    <a href="#order-modal" data-toggle="modal" data-action="Заказ услуг">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <h3>Предпродажная подготовка</h3>
                    </div>
                </div>

                <div class="clearfix mb30 visible-md visible-sm visible-xs"></div>

                <div class="col-lg-4 col-lg-offset-0 col-md-6 col-md-offset-3 col-sm-12">
                    <div class="box box-9">
                        <div>
                            <div>
                                <p>
                                    Выявление скрытых дефектов, следов ремонта по кузову. Общая оценка состояния авто.
                                </p>
                                <div class="text-center">
                                    <a href="#order-modal" data-toggle="modal" data-action="Заказ услуг">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <h3>Помощь в покупке автомобиля</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt50 mb50">
            <a href="#" class="show-all">Смотреть все</a>
        </div>
    </div>
</section>

<div class="screen-title" id="about">
    <div>
        <span>03</span>
        <h2>О НАШЕЙ СТАНЦИИ</h2>
        <p>Почему вам стоит обратиться именно к нам</p>
    </div>
</div>

<section id="screen-3">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/35.png"></span>
                <h3>Опыт работы<br>более 20 лет</h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/36.png"></span>
                <h3>Профессиональная<br>покрасочная<br>камера</h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/37.png"></span>
                <h3>Бесплатный<br>выезд на осмотр<br>автомобиля</h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/38.png"></span>
                <h3>Бесплатная<br>оценка<br>ремонта</h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/39.png"></span>
                <h3>Ремонт<br>без задержек</h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/40.png"></span>
                <h3>Гарантия на<br>покраску -<br>12 месяцев</h3>
            </div>
            <div class="col-clf clearfix"></div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/46.png"></span>
                <h3>Охраняемый<br>бокс</h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/45.png"></span>
                <h3>Скидочная<br>система</h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/44.png"></span>
                <h3>Работаем<br>с физ. и юр.<br>лицами</h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/43.png"></span>
                <h3>Используем<br>качественные<br>материалы</h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/42.png"></span>
                <h3>Подбор запчастей,<br>с согласованием</h3>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span><img src="/images/41.png"></span>
                <h3>Индивидуальный<br>подход.</h3>
            </div>
        </div>

        <div class="box col-md-offset-1 col-md-10">
            <p>
                Кузовной ремонт в Сыктывкаре<br>
                Наша специализация - кузовной ремонт (капитальный и локальный), малярные работы любой сложности,
                восстановление
                автомобилей после ДТП, причём диагностика и оценка повреждений производится абсолютно бесплатно. Задать
                любой интересующий вас вопрос нашим специалистам можно:
            </p>

            <ul>
                <li>непосредственно в астосервисе, который расположен в м. Дырнос, 12 (за зданием "Технопарк")</li>
                <li>на нашем сайте через форму отправки обратной связи</li>
                <li>по телефону: <?= formatPhone(config('contactPhone')) ?> или с помощью электронной почты
                    (E-mail: <?= config('contactEmail') ?>)
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="screen-4">
    <div class="screen-title" id="calc">
        <div>
            <span>04</span>
            <h2>РАСЧЕТ СТОИМОСТИ</h2>
            <p>Заполните форму для расчёта стоимости ремонта</p>
        </div>
    </div>

    <div class="container">
        <div class="box text-center pull-right">
            <p>Узнайте стоимость ремонта<br>по фотографии</p>
            <a href="#calc-modal" data-toggle="modal">Рассчитать ремонт</a>
        </div>
    </div>
</section>

<div class="screen-title" id="examples">
    <div>
        <span>05</span>
        <h2>НАШИ РАБОТЫ</h2>
        <p>Примеры работ, которые мы делали</p>
    </div>
</div>

<section id="screen-examples">
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <div class="gallery">
                            <a href="/images/examples/1.1.jpg" class="fancy" rel="gallery-1">
                                <img src="/images/examples/1.1.jpg">
                            </a>
                            <div>
                                <a href="/images/examples/1.2.jpg" class="fancy" rel="gallery-1">
                                    <img src="/images/examples/1.2.jpg">
                                </a>
                                <a href="/images/examples/1.3.jpg" class="fancy" rel="gallery-1">
                                    <img src="/images/examples/1.3.jpg">
                                </a>
                                <a href="/images/examples/1.4.jpg" class="fancy" rel="gallery-1">
                                    <img src="/images/examples/1.4.jpg">
                                </a>
                                <a href="/images/examples/1.5.jpg" class="fancy" rel="gallery-1">
                                    <img src="/images/examples/1.5.jpg">
                                </a>
                            </div>
                        </div>

                        <p><b>Модель:</b> Kia Rio</p>

                        <b>Список проделанных работ:</b>
                        <ul>
                            <li>ремонт заднего крыла</li>
                            <li>ремонт крышки багажника</li>
                            <li>ремонт заднего бампера</li>
                            <li>покраска 3 элементов</li>
                        </ul>

                        <p><b>Срок выполнения работ:</b> 4 дня</p>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="gallery">
                            <a href="/images/examples/2.1.jpg" class="fancy" rel="gallery-2">
                                <img src="/images/examples/2.1.jpg">
                            </a>
                            <div>
                                <a href="/images/examples/2.2.jpg" class="fancy" rel="gallery-2">
                                    <img src="/images/examples/2.2.jpg">
                                </a>
                                <a href="/images/examples/2.3.jpg" class="fancy" rel="gallery-2">
                                    <img src="/images/examples/2.3.jpg">
                                </a>
                                <a href="/images/examples/2.4.jpg" class="fancy" rel="gallery-2">
                                    <img src="/images/examples/2.4.jpg">
                                </a>
                                <a href="/images/examples/2.5.jpg" class="fancy" rel="gallery-2">
                                    <img src="/images/examples/2.5.jpg">
                                </a>
                            </div>
                        </div>

                        <p><b>Модель:</b> Mitsubishi Galant</p>

                        <b>Список проделанных работ:</b>
                        <ul>
                            <li>восстановление зазоров после дтп</li>
                            <li>заказ нового крыла и фары</li>
                            <li>ремонт капота</li>
                            <li>ремонт переднего бампера</li>
                            <li>покраска 3 элементов</li>
                        </ul>

                        <p><b>Срок выполнения работ:</b> 5 дней</p>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="gallery">
                            <a href="/images/examples/3.1.jpg" class="fancy" rel="gallery-3">
                                <img src="/images/examples/3.1.jpg">
                            </a>
                            <div>
                                <a href="/images/examples/3.2.jpg" class="fancy" rel="gallery-3">
                                    <img src="/images/examples/3.2.jpg">
                                </a>
                                <a href="/images/examples/3.3.jpg" class="fancy" rel="gallery-3">
                                    <img src="/images/examples/3.3.jpg">
                                </a>
                                <a href="/images/examples/3.4.jpg" class="fancy" rel="gallery-3">
                                    <img src="/images/examples/3.4.jpg">
                                </a>
                                <a href="/images/examples/3.5.jpg" class="fancy" rel="gallery-3">
                                    <img src="/images/examples/3.5.jpg">
                                </a>
                            </div>
                        </div>

                        <p><b>Модель:</b> Ford Focus</p>

                        <b>Список проделанных работ:</b>
                        <ul>
                            <li>удаление ржавчины</li>
                            <li>локальная покраска заднего крыла</li>
                        </ul>

                        <p><b>Срок выполнения работ:</b> 2 дня</p>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="gallery">
                            <a href="/images/examples/4.1.jpg" class="fancy" rel="gallery-4">
                                <img src="/images/examples/4.1.jpg">
                            </a>
                            <div>
                                <a href="/images/examples/4.2.jpg" class="fancy" rel="gallery-4">
                                    <img src="/images/examples/4.2.jpg">
                                </a>
                                <a href="/images/examples/4.4.jpg" class="fancy" rel="gallery-4">
                                    <img src="/images/examples/4.4.jpg">
                                </a>
                                <a href="/images/examples/4.5.jpg" class="fancy" rel="gallery-4">
                                    <img src="/images/examples/4.5.jpg">
                                </a>
                                <a href="/images/examples/4.6.jpg" class="fancy" rel="gallery-4">
                                    <img src="/images/examples/4.6.jpg">
                                </a>
                            </div>
                        </div>

                        <p><b>Модель:</b> Toyota RAV4</p>

                        <b>Список проделанных работ:</b>
                        <ul>
                            <li>заказ нового бампера, фаркопа</li>
                            <li>ремонт крышки багажника без покраски</li>
                            <li>покраска заднего бампера</li>
                        </ul>

                        <p><b>Срок выполнения работ:</b> 3 дня</p>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="gallery">
                            <a href="/images/examples/5.1.1.jpg" class="fancy" rel="gallery-5">
                                <img src="/images/examples/5.1.1.jpg">
                            </a>
                            <div>
                                <a href="/images/examples/5.1.jpg" class="fancy" rel="gallery-5">
                                    <img src="/images/examples/5.1.jpg">
                                </a>
                                <a href="/images/examples/5.2.jpg" class="fancy" rel="gallery-5">
                                    <img src="/images/examples/5.2.jpg">
                                </a>
                                <a href="/images/examples/5.3.jpg" class="fancy" rel="gallery-5">
                                    <img src="/images/examples/5.3.jpg">
                                </a>
                                <a href="/images/examples/5.5.jpg" class="fancy" rel="gallery-5">
                                    <img src="/images/examples/5.5.jpg">
                                </a>
                            </div>
                        </div>

                        <p><b>Модель:</b> Audi Q5</p>

                        <b>Список проделанных работ:</b>
                        <ul>
                            <li>ремонт бампера</li>
                            <li>ремонт переднего крыла</li>
                            <li>покраска 2 элементов</li>
                        </ul>

                        <p><b>Срок выполнения работ:</b> 3 дня</p>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="gallery">
                            <a href="/images/examples/6.1.jpg" class="fancy" rel="gallery-6">
                                <img src="/images/examples/6.1.jpg">
                            </a>
                            <div>
                                <a href="/images/examples/6.2.jpg" class="fancy" rel="gallery-6">
                                    <img src="/images/examples/6.2.jpg">
                                </a>
                                <a href="/images/examples/6.3.jpg" class="fancy" rel="gallery-6">
                                    <img src="/images/examples/6.3.jpg">
                                </a>
                                <a href="/images/examples/6.4.jpg" class="fancy" rel="gallery-6">
                                    <img src="/images/examples/6.4.jpg">
                                </a>
                                <a href="/images/examples/6.5.jpg" class="fancy" rel="gallery-6">
                                    <img src="/images/examples/6.5.jpg">
                                </a>
                            </div>
                        </div>

                        <p><b>Модель:</b> Hyundai Sonata</p>

                        <b>Список проделанных работ:</b>
                        <ul>
                            <li>ремонт бампера (восстановление недостающих частей, сварка трещины)</li>
                            <li>покраска переднего бампера</li>
                        </ul>

                        <p><b>Срок выполнения работ:</b> 2 дня</p>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="gallery">
                            <a href="/images/examples/7.1.jpg" class="fancy" rel="gallery">
                                <img src="/images/examples/7.1.jpg">
                            </a>
                            <div>
                                <a href="/images/examples/7.2.jpg" class="fancy" rel="gallery">
                                    <img src="/images/examples/7.2.jpg">
                                </a>
                                <a href="/images/examples/7.3.jpg" class="fancy" rel="gallery">
                                    <img src="/images/examples/7.3.jpg">
                                </a>
                                <a href="/images/examples/7.4.jpg" class="fancy" rel="gallery">
                                    <img src="/images/examples/7.4.jpg">
                                </a>
                                <a href="/images/examples/7.5.jpg" class="fancy" rel="gallery">
                                    <img src="/images/examples/7.5.jpg">
                                </a>
                            </div>
                        </div>

                        <p><b>Модель:</b> Volkswagen T4</p>

                        <b>Список проделанных работ:</b>
                        <ul>
                            <li>заказ новых запчастей</li>
                            <li>восстановление зазоров</li>
                            <li>ремонт капота</li>
                            <li>ремонт переднего крыла</li>
                            <li>покраска 4 элементов</li>
                        </ul>

                        <p><b>Срок выполнения работ:</b> 5 дней</p>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="slide-prev"></div>
            <div class="slide-next"></div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<div class="screen-title">
    <div>
        <span>06</span>
        <h2>ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h2>
        <p>Мнение наших клиентов о нашем обслуживании и о том,<br>
            как мы ремнонтируем Ваши автомобили</p>
    </div>
</div>

<div class="container">
    <section id="screen-reviews">
        <div class="box-row">
            <div class="box-cell">
                <div class="box">
                    <div class="img"><img src="/images/reviews/1.jpg"></div>
                    <div class="content">
                        <h3>Роман Гичев</h3>
                        <hr>
                        Огромное спасибо за ремонт. Намного дешевле выходит, чем покупать новый бампер и красить его
                    </div>
                </div>
            </div>
            <div class="box-col">
                <div class="box-cell">
                    <div class="box box-right">
                        <div class="img"><img src="/images/reviews/2.jpg"></div>
                        <div class="content">
                            <h3>Иван Иевлев</h3>
                            <hr>
                            Мастерская зачетная!=) Все сделали быстро и недорого! Результатом доволен, мастера сработали
                            на
                            отлично! Мастерской всех благ!
                        </div>
                    </div>
                </div>
                <div class="box-cell">
                    <div class="box box-left">
                        <div class="img"><img src="/images/reviews/3.jpg"></div>
                        <div class="content">
                            <h3>Ирина Бузулуцкая</h3>
                            <hr>
                            С большой благодарностью, истинным профессионалам своего дела! Спасибо за оперативную и
                            качественную работу!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-row">
            <div class="box-col">
                <div class="box-cell">
                    <div class="box box-left">
                        <div class="img"><img src="/images/reviews/6.jpg"></div>
                        <div class="content">
                            <h3>Ольга Гужева</h3>
                            <hr>
                            Борис, спасибо большое!!! Сделал отлично, как будто так и было))
                        </div>
                    </div>
                </div>
                <div class="box-cell">
                    <div class="box box-right">
                        <div class="img"><img src="/images/reviews/5.jpg"></div>
                        <div class="content">
                            <h3>Виталий Рябинин</h3>
                            <hr>
                            Спасибо ребятам за быстрый, недорогой и качественный ремонт моего автомобиля
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-cell">
                <div class="box">
                    <div class="img"><img src="/images/reviews/4.jpg"></div>
                    <div class="content">
                        <h3>Михаил Кириченко</h3>
                        <hr>
                        Ребята сделали и покрасили все по высшему разряду!
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="screen-title" id="contacts">
    <div>
        <span>07</span>
        <h2>КАК НАС НАЙТИ</h2>
        <p>Наши контактные данные, и схема проезда</p>
    </div>
</div>

<section id="screen-contacts">
    <div class="container">
        <div class="col-lg-11">
            <div class="box text-center">
                <img src="/images/logo.png" alt="<?= config('siteName') ?>">

                <ul class="list-unstyled">
                    <li><a href="tel:+<?= config('contactPhone') ?>"><?= formatPhone(config('contactPhone')) ?></a></li>
                    <li><a href="http://vk.com/auto.pokraska">vk.com/auto.pokraska</a></li>
                    <li>г. Сыктывкар м. Дырнос, 12</li>
                    <li><a href="mailto:<?= config('contactEmail') ?>"><?= config('contactEmail') ?></a></li>
                </ul>

                <a href="#map-modal" data-toggle="modal" class="show-map">Посмотреть на карте</a>
            </div>
        </div>
    </div>
</section>