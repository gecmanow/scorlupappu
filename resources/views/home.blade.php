@extends('public.layout.public')

@section('content')
    <section class="mobile">
        <div class="row">
            <div class="col-xs-12">
                <div class="header__phone">
                    <a href="tel:88002500420">8-800-250-04-20</a>
                </div>
                <a href="/feedback?segment=call_request" data-toggle="modal"
                   data-target="#callback"><button class="header__callback-link">ЗАКАЖИТЕ ЗВОНОК</button></a>
            </div>
        </div>
    </section>
    <section class="promo">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="promo__description col-md-6 col-sm-6 col-xs-12">
                        <p class="promo__title">
                            Качественная
                            <p class="promo__title-bright">
                                <span>Скорлупа ППУ</span>
                                с низкой теплопроводностью
                            </p>
                        </p>
                        <div class="promo__list">
                            <p class="promo__list-title">позволит вам</p>
                            <ul>
                                <li>использовать меньшую толщину изоляции</li>
                                <li>сэкономить 20% от стоимости</li>
                            </ul>
                        </div>
                    </div>
                    <div class="promo__banner col-md-6 col-sm-6 col-xs-12">
                        <img src="/static/images/shell.png" alt="" />
                        <div class="promo__offer">
                            <p>УНИКАЛЬНАЯ РАЗРАБОТКА</p>
                            однослойная скорлупа ППУ с повышенной термостойкостью
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="_advantages _request-price">
        <div class="row">
            <div class="col-md-12">
                <div class="advantages col-md-6 col-sm-6 col-xs-12">
                    <h3 class="advantages_header">Наши преимущества:</h3>
                    <ul class="advantages__list">
                        <li>Собственное производство в Красноярске и Челябинске</li>
                        <li>Быстрые сроки изготовления <span>(круглосуточное производство)</span></li>
                        <li>Простой, быстрый и недорогой монтаж</li>
                        <li>Температурный диапазон от -60ºС до +150°С (+220°С кратковременно)</li>
                        <li>Размерный ряд от 25 мм до 1 220 мм в диаметре и до 100 мм в толщине</li>
                        <li>Долговечность, соответствие ТУ</li>
                    </ul>
                </div>
                <div class="request-price col-md-6 col-sm-6 col-xs-12">
                    <h2>Запросить прайс</h2>
                    <div class="form-container">
                        @include('public.inc.form-price-request')
                    </div>
                </div>
            </div>
        </div>
        <div id="types"></div>
    </section>
    <section class="types">
        <div class="row">
            <div class="col-md-12">
                <h2>Скорлупа пенополиуретановая</h2>
                <p class="types__desp">Применяется для утепления систем тепловодоснабжения и изоляции трубопроводов в нефтяной и газовой отрасли</p>
                <div class="types__item col-md-3 col-sm-3 col-xs-6">
                    <img src="{{ asset('/media/ppu_order_item_1_image_uncovered.png') }}" alt="" />
                    <h3>БЕЗ ПОКРЫТИЯ</h3>
                    <p>Применяется для изоляции трубопроводов при надземном и подземном способе прокладки</p>
                    <a href="/feedback?segment=polymer_order" data-toggle="modal"
                       data-target="#callback"><button>Заказать</button></a>
                </div>
                <div class="types__item col-md-3 col-sm-3 col-xs-6">
                    <img src="{{ asset('/media/ppu_order_item_2_image_fiberglass.png') }}" alt="" />
                    <h3>СТЕКЛОПЛАСТИК</h3>
                    <p>Применяется для изоляции трубопроводов при надземном и подземном способе прокладки трубопроводов.</p>
                    <a href="/feedback?segment=polymer_order" data-toggle="modal"
                       data-target="#callback"><button>Заказать</button></a>
                </div>
                <div class="types__item col-md-3 col-sm-3 col-xs-6">
                    <img src="{{ asset('/media/ppu_order_item_3_image_armofol.png') }}" alt="" />
                    <h3>АРМОФОЛ</h3>
                    <p>Применяется для изоляции трубопроводов при надземном способе прокладки трубопроводов. Имеет дополнительный светоотражающий эффект.</p>
                    <a href="/feedback?segment=polymer_order" data-toggle="modal"
                       data-target="#callback"><button>Заказать</button></a>
                </div>
                <div class="types__item col-md-3 col-sm-3 col-xs-6">
                    <img src="{{ asset('/media/ppu_order_item_4_image_galvanized_steel.png') }}" alt="" />
                    <h3>СТАЛЬ ОЦИНКОВАННАЯ</h3>
                    <p>Самое прочное покрытие, предохраняет скорлупу от механических повреждений, открытого пламени, ультрафиолетового излучения, агрессивных химических сред</p>
                    <a href="/feedback?segment=polymer_order" data-toggle="modal"
                       data-target="#callback"><button>Заказать</button></a>
                </div>
            </div>
        </div>
        <div id="tech"></div>
    </section>
    <section class="tech">
        <div class="row">
            <div class="col-md-12">
                <div class="tech__wrapper">
                    <h2>Разработанная компанией технология — термостойкая теплоизоляционная скорлупа</h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <img src="{{ asset('/media/ppu_tecnology_image_technology.png') }}" alt="" />
                        </div>
                        <div class="tech__desp col-md-8 col-sm-7 col-xs-12">
                            <p>Специалисты СК «ТеплоСтрой» расширили температурный диапазон, разработав термостойкую теплоизоляционную скорлупу. Эти изделия могут применяться на магистральных трубопроводах с температурой транспортируемого агента до +150 ºС (кратковременно до +220 °С).</p>
                            <p>Ее отличительная особенность — низкая теплопроводность (0,026 ВТ/м). Это позволяет использовать меньшую толщину покровного слоя (всего 30-40 мм) и экономить порядка 20 % при том же уровне надежности и качества изоляции</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sizes"></div>
    </section>
    <section class="sizes">
        <div class="row">
            <div class="col-md-12">
                <h2>Таблица размеров</h2>
                <p class="sizes__range">Размерный ряд <span>от 25 мм до 1 220 мм</span> в диаметре и <span>от 30 мм до 100 мм</span> в толщине изоляции</p>
                <p>Толщина теплоизоляционного слоя определяется расчетом по СНиП 41-03-2003 в зависимости от условий применения и составляет от 30 мм до 100 мм.</p>
            </div>
            <div class="col-md-12">
                <div class="table_wrapper">
                    <table class="diameter">
                        <tr><th colspan="23"><h3>Диаметр трубы, мм</h3></th></tr>
                        <tr>
                            <td>25</td><td>36</td><td>45</td><td>48</td><td>57</td><td>76</td><td>89</td><td>108</td><td>114</td><td>133</td><td>159</td><td>219</td><td>273</td><td>325</td><td>377</td><td>426</td><td>530</td><td>630</td><td>720</td><td>820</td><td>920</td><td>1020</td><td>1220</td>
                        </tr>
                        <tr><th colspan="23"><h3>Толщина изоляции, мм</h3></th></tr>
                        <tr>
                            <td>30</td><td>30</td><td>30</td><td>30</td><td>30</td><td>30</td><td>30</td><td>30</td><td>30</td><td>30</td><td>30</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>40</td><td>40</td><td>40</td><td>40</td><td>40</td><td>40</td><td>40</td><td>40</td><td>40</td><td>40</td><td>40</td><td>40</td><td>40</td><td>40</td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td><td></td>
                            <td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td><td>50</td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td>
                            <td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td><td>60</td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td>
                            <td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td><td>70</td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td>
                            <td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td><td>80</td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td>
                            <td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td><td>90</td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td>
                            <td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td><td>100</td>
                        </tr>
                    </table>
                </div>
                <p id="weight_calc">Если вы не нашли нужный вам размер, мы готовы сделать пресс-форму и изготовить ваш заказ.</p>
                <div class="form-container">
                    @include('public.inc.form-weight-calc')
                </div>
            </div>
        </div>
    </section>
    <!--<section py:if="content_getter('video_content')" class="video">
        <div class="row">
            <div class="col-md-12">
                <h2>${content_getter('video_title')}</h2>
                <div class="video-container">
                    <iframe width="560" height="315"
                            src="${content_getter('video_content')}" frameborder="0" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
    </section>-->
    <div id="certificates"></div>
    <section class="certificates">
        <div class="row">
            <div class="col-md-12">
                <h2>Сертификаты качества</h2>
                <p>Пенополиуретановая теплоизоляция для труб <span>(скорлупа ППУ)</span> изготавливается с привлечением собственных производственных мощностей в соответствии с ТУ 5768-001-49693977-2003 на основе материалов, поставленных из Европы. Скорлупа производится на дорогостоящем профессиональном оборудовании, с обязательным этапом контроля качества.</p>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="certificate">
                            <img src="{{ asset('/media/cert_item_1_sertf_1.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="certificate">
                            <img src="{{ asset('/media/cert_item_2_sertf_2.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="certificate">
                            <img src="{{ asset('/media/cert_item_3_sertf_3.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="certificate">
                            <img src="{{ asset('/media/cert_item_4_sertf_4.png') }}" alt="" />
                        </div>
                    </div>
                </div>
                <a href="/feedback?segment=cert_request" data-toggle="modal"
                   data-target="#callback" id="certificate">
                    <button>ЗАПРОСИТЬ КОПИЮ СЕРТИФИКАТА</button>
                </a>
            </div>
        </div>
    </section>
    <section class="questions">
        <div class="row">
            <div class="col-md-12">
                <div class="orange-border">
                    <div class="questions__wrapper">
                        <h2>Если у вас остались вопросы, задайте их нам
                            в ходе личной беседы</h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p>Пожалуйста, укажите ваше имя или название организации, а также контактный телефон, чтобы мы могли оперативно выйти с вами на связь.</p>
                                <p>Это позволит вам быстро получить подробную информацию и принять правильное решение!</p>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 form-container">
                                @include('public.inc.form-common-questions')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="row">
            <div class="col-md-12">
                <h2>Галерея</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="gallery__item">
                            <a href="#show-image"><img src="{{ asset('/media/gallery_item_1_image_scorlupappu1.jpg') }}" alt="" /></a>
                            <p>Монтаж скорлупы ППУ на тепловую сеть. Скорлупа в оцинкованном покрытии.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="gallery__item">
                            <a href="#show-image"><img src="{{ asset('/media/gallery_item_2_image_scorlupappu2.JPG') }}" alt="" /></a>
                            <p>Монтаж скорлупы ППУ на тепловую сеть. Скорлупа в оцинкованном покрытии.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="gallery__item">
                            <a href="#show-image"><img src="{{ asset('/media/gallery_item_3_image_scorlupappu3.JPG') }}" alt="" /></a>
                            <p>Монтаж скорлупы ППУ на тепловую сеть. Скорлупа в оцинкованном покрытии.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="gallery__item">
                            <a href="#show-image"><img src="{{ asset('/media/gallery_item_4_image_scorlupappu4.JPG') }}" alt="" /></a>
                            <p>Изоляция тепловой сети скорлупой ППУ, диаметр от 530 до 820, с покрытием сталь оцинкованная (с монтажом)</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="gallery__item">
                            <a href="#show-image"><img src="{{ asset('/media/gallery_item_5_image_scorlupappu5.jpg') }}" alt="" /></a>
                            <p>Изоляция тепловой сети скорлупой ППУ, диаметр от 530 до 820, с покрытием сталь оцинкованная (с монтажом)</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="gallery__item">
                            <a href="#show-image"><img src="{{ asset('/media/gallery_item_6_image_scorlupappu6.JPG') }}" alt="" /></a>
                            <p>Изоляция тепловой сети скорлупой ППУ, диаметр от 530 до 820, с покрытием сталь оцинкованная (с монтажом)</p>
                        </div>
                    </div>
                </div>
                <a href="/feedback?segment=manual_request" data-toggle="modal"
                   data-target="#callback" id="instruction">
                    <button>ЗАПРОСИТЬ ИНСТРУКЦИЮ ПО МОНТАЖУ</button>
                </a>
            </div>
        </div>
    </section>
    <section class="terma">
        <div class="row">
            <div class="col-md-12">
                <h2>Качественная, экономичная пенополиуретановая теплоизоляция для труб</h2>
                <div class="terma__wrapper">
                    <div class="row">
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <p> <span class="red">Специализированная компания «ТеплоСтрой»</span> — крупнейший производитель теплоизоляционных изделий из пенополиуретана <span>(ППУ)</span> для трубопроводов. Компания имеет надежную деловую репутацию и успешно сотрудничает с авторитетными промышленными предприятиями, проектными, монтажными, строительными и торговыми организациями на территории РФ. Наши производственные мощности расположены в Красноярске и Челябинске.</p>
                            <p>Теплоизоляция <span>(скорлупа для труб)</span> производится из высококачественного сырья <span>(Европа)</span> на профессиональном дорогостоящем оборудовании, полностью соответствует действующим техническим условиям (ТУ 5768-001-49693977-2003). Продукция сертифицирована, поставляется с гарантией.</p>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <img src="{{ asset('/media/about_image_gold_shell.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cooperation">
        <div class="row">
            <div class="col-md-12">
                <h2>Сотрудничая с СК «ТеплоСтрой» вы</h2>
                <ul class="blue-circle-list">
                    <li><span>экономите на теплоизоляции для труб</span> (приобретаете материал по выгодной цене);</li>
                    <li><span>получаете заказанную продукцию быстро и в любых объёмах</span> (круглосуточное производство);</li>
                    <li><span>не беспокоитесь о быстром износе изолированных труб</span> (срок службы пенополиуретановой теплоизоляции для труб не менее 20 лет);</li>
                    <li><span>сокращаете теплопотери на трассах до 80 %</span> (материал обладает сниженной теплопроводностью);</li>
                    <li><span>экономите до 70 % трудозатрат</span> на монтаж теплоизоляции;</li>
                    <li><span>скорлупа ППУ легко поддается механической обработке, легко монтируется,</span> а в случае демонтажа может быть использована повторно;</li>
                    <li><span>обеспечиваете свою компанию сертифицированной качественной теплоизоляцией</span> для труб в любых объемах при самых кратчайших сроках доставки;</li>
                    <li><span>приобретаете теплоизоляцию (скорлупу для труб), произведенную по индивидуальному заказу;</span></li>
                    <li><span>имеете возможность выбора из ассортимента более 500 изделий из ППУ</span></li>
                </ul>
                <div class="additionally">
                    <p>Дополнительно мы предоставляем профессиональную помощь в проектировании, расчетах, всю необходимую информацию. Ценовая политика компании максимально гибкая.</p>
                    <p><span class="red">Мы идем навстречу клиентам!</span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="equipment">
        <div class="row">
            <div class="col-md-12">
                <h2>Комплектация</h2>
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            <p><span>СК «ТеплоСтрой»</span> осуществляет полную комплектацию крепежными элементами: металлические или пропиленовые ленты, клей.</p>
                            <p><span>Особая разработка нашей компании</span> — оцинкованная лента с замком. Она более долговечна, дополнительно изолирует стыки за счет увеличенной ширины. Максимальное натяжение ленты достигается благодаря «воротку» (идет в комплекте), что обеспечивает дополнительную гидроизоляцию стыков.</p>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <img src="{{ asset('/media/complete_plant_image_equipment.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <img src="{{ asset('/media/complete_plant_2_image.jpg') }}" alt="" />
            </div>
            <div class="col-md-4 col-sm-3 col-xs-6">
                <h3>Мы производим теплоизоляцию для труб с такими видами покрытий</h3>
                <ul class="blue-circle-list">
                    <li>без покрытия</li>
                    <li>армофол</li>
                    <li>стеклопластик</li>
                    <li>сталь оцинкованная</li>
                </ul>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-6">
                <p>Толщина теплоизоляционного слоя определяется расчетом по СНиП 41-03-2003 в зависимости от условий применения и составляет от 30 мм до 100 мм.</p>
                <p>Теплоизоляция трубопроводов скорлупами используется при температуре изолируемой поверхности от –65 ºС до +150 ºС (+ 220 ºС кратковременно). Это позволяет максимально расширить диапазон применения пенополиуретановой теплоизоляции для труб со значительной экономией бюджета.</p>
            </div>
        </div>
    </section>
    <section class="schedule">
        <div class="row">
            <div class="col-md-12">
                <div class="orange-border">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrapper">
                                <p class="desp">Купить теплоизоляцию для труб или запросить подробную информацию вы можете, связавшись с нашим менеджером:</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="schedule__box">
                                            <p>Бесплатный звонок для всех регионов РФ</p>
                                            <p>
                                                <a href="+73912801988"> 8-800-250-04-20 </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="schedule__box">
                                            <p>Телефон отдела продаж</p>
                                            <p>
                                                <a href="+73912546771">+7 (391) 291-13-13</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p>Поставки осуществляются в любой регион РФ в кратчайшие сроки.</p>
                                <p class="big-red-text">Мы всегда рады сотрудничеству с вами!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="map"></div>
    <section class="map">
        <div class="row">
            <div class="col-md-12">
                <h2>География поставок</h2>
                <ul class="map__delivery">
                    <li>— производство в Красноярске и Челябинске</li>
                    <li>— c нами работают</li>
                </ul>
                <div class="map__box">
                    <img src="{{ asset('/static/images/map.png') }}" alt="" />
                    <ul>
                        <li style="top: 143px; left: 192px;"></li>
                        <li class="people-big-icon" style="top: 210px; left: 180px;"></li>
                        <li style="top: 192px; left: 395px;"></li>
                        <li style="top: 210px; left: 410px;"></li>
                        <li style="top: 205px; left: 510px;"></li>
                        <li style="top: 300px; left: 330px;"></li>
                        <li class="plant" style="top: 310px; left: 304px;"></li>
                        <li style="top: 358px; left: 387px;"></li>
                        <li class="plant-big" style="top: 347px; left: 515px;"></li>
                        <li style="top: 350px; left: 470px;"></li>
                        <li style="top: 365px; left: 455px;"></li>
                        <li style="top: 392px; left: 463px;"></li>
                        <li style="top: 425px; left: 535px;"></li>
                        <li style="top: 410px; left: 635px;"></li>
                        <li style="top: 390px; left: 685px;"></li>
                        <li style="top: 374px; left: 782px;"></li>
                        <li style="top: 368px; left: 850px;"></li>
                        <li style="top: 345px; left: 880px;"></li>
                        <li style="top: 437px; left: 860px;"></li>
                        <li style="top: 207px; left: 950px;"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row">
                        <h2>Оформить заказ</h2>
                        <p class="bordered">Мы осуществляем поставки по всей территории Российской Федерации</p>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <p>Хотите узнать, сколько будет стоить доставка в ваш город?</p>
                                <p>Пожалуйста, оформите заявку, и наш менеджер свяжется с вами.</p>
                            </div>
                            <div class="col-md-6 form-container">
                                @include('public.inc.form-order')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
