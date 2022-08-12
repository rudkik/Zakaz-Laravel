@include('popup_form')
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="logo-footer" src="../../images/logo-footer.svg">
                <ul>
                    <li><a href="{{route('main')}}" class="menu__item">Каталог</a></li>
                    <li><a href="{{route('main')}}" class="menu__item">Акции</a></li>
                    <li><a href="{{route('company')}}" class="menu__item">Компания</a></li>
                    <li><a href="{{route('contacts')}}" class="menu__item">Контакты</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <p>Адрес:<br><br>
                    423806, Россия, Республика Татарстан, г. Набережные Челны,Казанский проспект 231
                </p>
                <p>Телефон:<br><br>
                    (8552) 33-44-40,<br> (8552) 33-00-80
                </p>
                <p>Почта:<br><br> alkor_nch@mail.ru</p>
            </div>
            <div class="col-md-3">
                <p>Адрес:<br><br>
                    423806, Россия, Республика Татарстан, г. Набережные Челны,Казанский проспект 231
                </p>
                <p>Телефон:<br><br>
                    (8552) 33-44-40,<br> (8552) 33-00-80
                </p>
                <p>Почта:<br><br> alkor_nch@mail.ru</p>
            </div>
            <div class="col-md-3">
                <a data-toggle="modal" data-target="#exampleModal" class="forms">ЗАКАЗАТЬ ЗВОНОК</a>
                <a href="{{ route('catalog') }}" class="catalog">СМОТРЕТЬ КАТАЛОГ</a>
                <p class="copyright">1996 - 2022 © ТЦ <br> «АЛЬКОР» в России</p>
            </div>
        </div>
    </div>
</div>
