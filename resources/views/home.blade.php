@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
    <div class="py-5">
        <h5 class="pt-5 mt-5">Поможем приобрести любой товар из Ашхабада</h5>
        <p>Мы рады представить вам приеобретение товара в рассрочку</p>
    </div>

    <div class="">
        <div class="">
            <div class="">
                <h2 id="rules" class="p-2" style="font-weight:800;">Как это работает</h2>
            </div>
            <div class="d-flex gap-1">
                <div class="card d-flex flex-column position-relative shadow">
                    <h5 class="card-title p-3 position-relative z-2">Вы выбираете товар </h5>
                    <span class="position-absolute card_back z-1">01</span>
                    <div class="card-body ">
                        <p class="card-text ">А мы гарантируем безупречное качество и быструю доставку, чтобы ваше
                            время было
                            потрачено с максимальной пользой и удовольствием!</p>
                    </div>
                </div>
                <div class="card d-flex flex-column position-relative shadow">
                    <h5 class="card-title p-3 position-relative z-2">Документы </h5>
                    <span class="position-absolute card_back z-1">02</span>
                    <div class="card-body ">
                        <p class="card-text ">Вы предоставляете минимальный пакет документов, и мы с радостью
                            заключаем договор
                            в рассрочку, чтобы сделать процесс простым и удобным</p>
                    </div>
                </div>
                <div class="card d-flex flex-column position-relative shadow">
                    <h5 class="card-title p-3 position-relative z-2">Предоплата за товар </h5>
                    <span class="position-absolute card_back z-1">03</span>
                    <div class="card-body ">
                        <p class="card-text ">Вносите предоплату, а затем мы равномерно делим сумму вашего договора
                            на месяцы
                        </p>
                    </div>
                </div>
                <div class="card d-flex flex-column position-relative shadow">
                    <h5 class="card-title p-3 position-relative z-2">Выкупаем товар</h5>
                    <span class="position-absolute card_back z-1">04</span>
                    <div class="card-body ">
                        <p class="card-text ">И везём к вам, обеспечивая надежную доставку в кратчайшие сроки и
                            полный контроль
                            на каждом этапе, чтобы вы могли быть уверены в качестве обслуживания.</p>
                    </div>
                </div>
                <div class="card d-flex flex-column position-relative shadow">
                    <h5 class="card-title p-3 position-relative z-2"> Получите товар</h5>
                    <span class="position-absolute card_back z-1">05</span>
                    <div class="card-body ">
                        <p class="card-text ">В оговоренные сроки с гарантией высокого качества и полным вниманием
                            к вашим
                            пожеланиям. Мы стремимся сделать процесс максимально удобным и приятным для вас!</p>
                    </div>
                </div>
                <div class="card d-flex flex-column position-relative shadow">
                    <h5 class="card-title p-3 position-relative z-2">Оплатить остаток </h5>
                    <span class="position-absolute card_back z-1">06</span>
                    <div class="card-body ">
                        <p class="card-text ">Ваша задача заключается в своевременной оплате товара в соответствии
                            с условиями
                            нашего договора.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
