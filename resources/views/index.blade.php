@extends('layout')
@section('main_content')

<section class="hero-section set-bg" data-setbg="{{ asset('/img/background.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="as-pic">
                    <img src="{{ asset('/img/test1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-text">
                    <div class="section-title">
                        <span>Счастливая история любви</span>
                        <h2>Илья и Лера</h2>
                    </div>
                    <p class="section-1">Она была с ним счастливее, чем могла когда-либо себе представить, но только сейчас осознала: совпадение ДНК здесь ни при чем. Просто она впустила в свое сердце настоящую любовь.</p>
                    <p class="section-1">Любовь не знает расстояний. Для нее не существует континентов. Ее взор всегда устремлен к звездам.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us-section spad">
    <div class="container" id="about-us">
        <div class="row">
            <div class="col-lg-6">
                <div class="as-pic">
                    <img src="{{ asset('/img/love-2.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-text">
                    <div class="section-title">
                        <span class="section-2">О нас</span>
                        <h2 class="section-2">История нашего знакомства</h2>
                    </div>
                    <p class="f-para love-2">Мы часто представляем себе, какой должна быть первая встреча с нашей второй половиной. Для кого-то это случайный диалог в кафе, который перерастет в нечто большее. Некоторые мечтают, чтобы во время проливного дождя случайный незнакомец предложил им зонт, а впоследствии он оказался бы тем самым мужчиной мечты. Фантазий на эту тему огромное множество, но иногда они очень далеки от реальности. Какова же наша история? </p>
                    <p class="s-para love-2">
                        Был темный, холодный день. Один неприметный паренек, звали его Ильюша, решил зайти на колесо фартуны любви в дайвинчик! Долго конечно он листал всякие анкеты, крутил и крутил их, думал шансов найти прекрасную девчонку уже нет. Сидит Ильюша и думает, как так, никому не нужен :(
                        Проходит пару минут и приходит уведомления о взаимной симпатии! Заходит, смотрит и в мыслях у него "Ого, вот это девушка! Было бы конечно хорошо с ней начать общаться!". Потирая руки, решил он ей написать! Но не все так просто, эта девушка ему даже не ответила :( Паренек очень расстроился, местами даже поплакать успел, подумал что надежды уже нет! Спустя некоторое время он натыкается на беседу в которой и состояла на тот момент эта прекрасная девчонка! Паренек подумал, подумал и решил завоевать ее через вступление в эту пресподнию! Узнал, что звали ту самую милую, хорошую, самую красивую девушку на свете - Лера! Составил план действий и приводить свой план по завоеванию Лерочки в действие! А получилось у него или нет показано ниже! :)
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-section spad3">
    <div class="container" id="our-photos">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Наши совместные фотографии</span>
                    <h2>Счастливая жизнь Леруси и Ильюши</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="portfolio-item set-bg large-item" data-setbg="{{ asset('/img/story-1.jpg') }}">
                    <div class="pi-hover">
                        <a href="{{ asset('/img/story-1.jpg') }}" class="search-icon image-popup"><i
                                class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="portfolio-item set-bg" data-setbg="{{ asset('/img/story-2.jpg') }}">
                    <div class="pi-hover">
                        <a href="{{ asset('/img/story-2.jpg') }}" class="search-icon image-popup"><i
                                class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item set-bg" data-setbg="{{ asset('/img/story-3.jpg') }}">
                            <div class="pi-hover">
                                <a href="{{ asset('/img/story-3.jpg') }}" class="search-icon image-popup"><i
                                        class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item set-bg" data-setbg="{{ asset('/img/story-4.jpg') }}">
                            <div class="pi-hover">
                                <a href="{{ asset('/img/story-4.jpg') }}" class="search-icon image-popup"><i
                                        class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section spad">
    <div class="container" id="goals">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Наши цели</span>
                    <h2>Цели которые мы вместе хотим достигнуть</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <img src="{{ asset('/img/services/service-1.png') }}" alt="">
                    <h4>Решение проблем</h4>
                    <p>Решать проблемы, а не искать виноватых</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <img src="{{ asset('/img/services/service-1.png') }}" alt="">
                    <h4>Отношение друг к другу</h4>
                    <p>Быть честными и открытыми друг с другом</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <img src="{{ asset('/img/services/service-1.png') }}" alt="">
                    <h4>Понимание друг друга</h4>
                    <p>Знать и понимать язык любви друг друга</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <img src="{{ asset('/img/services/service-1.png') }}" alt="">
                    <h4>Отпуск</h4>
                    <p>Сьездить отдохнуть вместе</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <img src="{{ asset('/img/services/service-1.png') }}" alt="">
                    <h4>Армия</h4>
                    <p>Дождаться любимого с армии</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <img src="{{ asset('/img/services/service-1.png') }}" alt="">
                    <h4>Жить вместе</h4>
                    <p>Возобновить нашу семейную жизнь</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="counter-text">
                    <div class="section-title">
                        <span>Наша статистика</span>
                        <h2>Опыт наших отношений</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="counter-item">
                    <div class="ci-number count">
                        {{ $daysTogether }}
                    </div>
                    <div class="ci-text">
                        <h4>Дней вместе</h4>
                        <p>Наша прекрасная история началас с {{ $startDate }}</p>
                    </div>
                </div>
                <div class="counter-item">
                    <div class="ci-number count">
                        19
                    </div>
                    <div class="ci-text">
                        <h4>Свиданий</h4>
                        <p>Узнавание друг друга, времяпровождение вместе и с компанией</p>
                    </div>
                </div>
                <div class="counter-item">
                    <div class="ci-number count">
                        16
                    </div>
                    <div class="ci-text">
                        <h4>Просмотрено фильмов</h4>
                        <p>Приятное время вечером</p>
                    </div>
                </div>
                <div class="counter-item">
                    <div class="ci-number count">
                        887
                    </div>
                    <div class="ci-text">
                        <h4>Комплименты</h4>
                        <p>Поднятие настроения друг другу</p>
                    </div>
                </div>
                <div class="counter-item">
                    <div class="ci-number count">
                        1100
                    </div>
                    <div class="ci-text">
                        <h4>Поцелуйчики</h4>
                        <p>Прикосновения наших губ</p>
                    </div>
                </div>
                <div class="counter-item">
                    <div class="ci-number count">
                        13
                    </div>
                    <div class="ci-text">
                        <h4>Ссоры</h4>
                        <p>Неприятные для нас моменты</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="callto-section set-bg" data-setbg="{{ asset('/img/ctc-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="ctc-text">
                    <p class="title-love-callto">Мы создадим нашу совместную жизнь вместе</p>
                    <p class="title-love-callto1">Когда я смотрю на тебя, я влюбляюсь в тебя все сильнее. Это счастье, которое не описать словами.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="member-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Прексраные мы</span>
                    <h2>Топовый Ильюша и топовая Леруся</h2>
                </div>
            </div>
        </div>
        <div class="row wePhoto">
            <div class="col-lg-4 col-md-6">
                <div class="member-item set-bg" data-setbg="{{ asset('/img/member/member-1.jpg') }}">
                    <div class="mi-text">
                        <p>Не только красива снаружи, но и имеею великолепное внутреннее благородство, которое делает меня по-настоящему особенной.</p>
                        <div class="mt-title">
                            <h4>Валерия Альшенецкая</h4>
                            <span>Красотка</span>
                        </div>
                        <div class="mt-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/l_elka_l"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="member-item set-bg" data-setbg="{{ asset('/img/member/member-2.jpg') }}">
                    <div class="mi-text">
                        <p>Со мной ты становишься лучшей версией себя. Когда я с тобой, то чувствую, что мне все под силу!</p>
                        <div class="mt-title">
                            <h4>Илья Климко</h4>
                            <span>Красавчик</span>
                        </div>
                        <div class="mt-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/psixklimich228/"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="blog-section latest-blog spad">
    <div class="container" id="idols">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Кумиры</span>
                    <h2>Наши кумиры</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="blog-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="bi-pic set-bg" data-setbg="{{ asset('/img/blog/blog-1.jpg') }}"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bi-text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> 5 февраля 1985 года</li>
                                </ul>
                                <h4><a href="#">Иметь талант не достаточно. Нужно упорно работать.</a></h4>
                                <p>Иногда для большого прыжка нужно сделать шаг назад.</p>
                                <div class="bt-author">
                                    <div class="ba-pic">
                                        <img src="{{ asset('/img/blog/author-1.jpg') }}" alt="">
                                    </div>
                                    <div class="ba-text">
                                        <h5>Cristiano Ronaldo</h5>
                                        <span>Футболист</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="bi-pic set-bg" data-setbg="{{ asset('/img/blog/blog-2.jpg') }}"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bi-text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> 20 января 1986 года</li>
                                </ul>
                                <h4><a href="#">Девушку не в online надо ждать с букетом у её дома.</a></h4>
                                <p>Я хочу быть хорошей, а получается боком виноватая.</p>
                                <div class="bt-author">
                                    <div class="ba-pic">
                                        <img src="{{ asset('/img/blog/author-2.jpg') }}" alt="">
                                    </div>
                                    <div class="ba-text">
                                        <h5>Ольга Бузова</h5>
                                        <span>Певица, актриса театра.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('popap')

@endsection
