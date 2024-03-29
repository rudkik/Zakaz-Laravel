<header>
    <div class="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo__header">
                                <a href="{{route('main')}}"><img src="../../images/logo.svg" alt="мотордеталь" title="мотордеталь"></a>
                            </div>
                            <div class="region__header">
                                <span>Набережные Челны</span>
                            </div>
                            <div class="search__header">
                                <form action="{{ route('search') }}" method="get">
                                    @csrf
                                    <button class="submit" type="submit">1</button>
                                    <input type="text" name="search" placeholder="Поиск">
                                </form>
                            </div>
                            <div class="basket__header">
                                <a href="{{ route('basket') }}">
                                <div class="basket"> <?php  if (!isset($_COOKIE['cart_id'])){ setcookie('cart_id', uniqid());} $cart_id = $_COOKIE['cart_id']; \Cart::session($cart_id); ?>
                                    <span class="total"> {{ \Cart::session($_COOKIE['cart_id'])->getTotalQuantity() }} </span>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M0.512828 0.0676215C0.330798 0.148898 0.120588 0.369429 0.0519666 0.551079C0.0233947 0.62669 0 0.947449 0 1.26386C0 1.77164 0.0133335 1.86435 0.113555 2.0544C0.184325 2.18857 0.299296 2.31073 0.41881 2.37877C0.595271 2.47915 0.673514 2.48789 1.40207 2.48867L2.19363 2.48945L2.33947 2.96568C2.41967 3.22758 3.08034 5.42649 3.80763 7.85204L5.12999 12.2622L5.25463 13.982C5.38816 15.8242 5.40657 15.9199 5.69244 16.2582C5.76946 16.3494 5.94329 16.4755 6.07867 16.5386C6.29782 16.6406 6.39604 16.6533 6.97202 16.6537C7.32792 16.654 7.61916 16.6667 7.61916 16.6819C7.61916 16.6971 7.3269 17.2521 6.96967 17.9152C6.22558 19.2966 6.21753 19.3142 6.15403 19.7056C6.01025 20.5916 6.50788 21.4928 7.36231 21.8936C7.64504 22.0262 7.76002 22.0512 8.16339 22.0676L8.63441 22.0868L8.50528 22.3622C8.3927 22.6024 8.37619 22.7 8.37619 23.126C8.37619 23.5538 8.39245 23.6492 8.50708 23.8938C8.68985 24.2838 9.03285 24.6331 9.42011 24.8238C9.71462 24.9688 9.7809 24.9821 10.2077 24.9821C10.6332 24.9821 10.7014 24.9685 10.9907 24.8261C11.3792 24.6348 11.7295 24.2934 11.9063 23.9338C12.0265 23.6892 12.0392 23.612 12.0392 23.126C12.0392 22.6335 12.028 22.5674 11.9041 22.3323L11.769 22.0759H15.4084C17.4101 22.0759 19.0479 22.0843 19.0479 22.0944C19.0479 22.1046 18.9917 22.2356 18.9231 22.3855C18.4634 23.3897 19.0131 24.5806 20.0906 24.9152C21.562 25.3719 22.9354 23.9022 22.3728 22.4729C22.3239 22.3485 22.2684 22.2101 22.2494 22.1651C22.218 22.0905 22.3002 22.0819 23.1833 22.0674C24.1341 22.0518 24.1559 22.0491 24.3761 21.9196C25.2472 21.4075 25.191 20.1881 24.2739 19.7002C24.1096 19.6128 23.8082 19.6088 16.5204 19.5965C12.35 19.5894 8.93879 19.5674 8.93996 19.5476C8.94113 19.5278 9.28727 18.8742 9.7092 18.0951L10.4763 16.6786L17.3141 16.6542L24.1518 16.6298L24.3858 16.4922C24.6599 16.3311 24.8714 16.0598 24.9526 15.7652C24.9955 15.6098 25.0069 14.6094 24.9963 11.9163L24.982 8.27747L24.8741 8.07555C24.7363 7.81804 24.5249 7.60679 24.2964 7.49836C24.1852 7.44556 20.5461 6.80497 14.7361 5.81549C6.35282 4.38768 5.35099 4.20774 5.31353 4.12294C5.29048 4.07073 5.03133 3.22656 4.7377 2.24699C4.44402 1.26738 4.16324 0.410165 4.11371 0.342076C4.06419 0.273939 3.92685 0.168777 3.8086 0.108309C3.59937 0.00138904 3.55351 -0.00154161 2.12643 0.000314465C1.00964 0.00177979 0.62438 0.0178495 0.512828 0.0676215ZM4.01964 2.77075L4.59596 4.71186L4.71753 6.42037C4.78439 7.36003 4.83274 8.16991 4.82498 8.22008C4.81716 8.27024 4.39391 6.91917 3.88435 5.21773C3.03506 2.38185 2.94417 2.10896 2.79286 1.94142C2.57288 1.69799 2.40438 1.65969 1.55069 1.6594L0.830293 1.65911V1.24393V0.828758L2.13678 0.829197L3.44327 0.829637L4.01964 2.77075ZM7.30169 5.39675C8.18815 5.54538 8.9739 5.67916 9.04775 5.69396L9.18206 5.72092V7.23118V8.74149H7.44822C6.4946 8.74149 5.71403 8.72498 5.71359 8.70485C5.7132 8.68473 5.65859 7.9319 5.59227 7.03195C5.44052 4.97229 5.4411 5.06969 5.58006 5.10139C5.64047 5.11516 6.41523 5.24807 7.30169 5.39675ZM12.198 6.2309L14.1638 6.56197V7.65173V8.74149H12.0881H10.0124V7.29531V5.84909L10.1222 5.87449C10.1827 5.88846 11.1168 6.04886 12.198 6.2309ZM17.0575 7.05617C18.0851 7.23069 18.9863 7.38631 19.0601 7.40199L19.1944 7.43046V8.08595V8.74149H17.0943H14.9941V7.74018C14.9941 6.77175 14.9973 6.73888 15.0917 6.73888C15.1454 6.73888 16.03 6.88165 17.0575 7.05617ZM21.944 7.88794C22.9702 8.06324 23.8478 8.21842 23.8941 8.23273C24.0171 8.27087 24.1762 8.49253 24.1762 8.62597V8.74149H22.1004H20.0247V8.15536C20.0247 7.83299 20.0367 7.56923 20.0514 7.56923C20.0661 7.56923 20.9178 7.71264 21.944 7.88794ZM9.17049 11.2447L9.15764 12.9176L7.62233 12.9306C6.77788 12.9377 6.07003 12.9265 6.04932 12.9058C6.02861 12.8851 5.96692 12.2309 5.91222 11.452C5.85757 10.6731 5.80091 9.93147 5.78636 9.80384L5.75984 9.57183H7.47161H9.18333L9.17049 11.2447ZM14.1638 11.257V12.9421H12.0881H10.0124V11.257V9.57183H12.0881H14.1638V11.257ZM19.17 11.257V12.9176H17.0943H15.0185L15.0057 11.2442L14.9928 9.57081L17.0814 9.58351L19.17 9.59626V11.257ZM24.1646 11.2447L24.1518 12.9176L22.0882 12.9304L20.0247 12.9431V11.2575V9.57183H22.1011H24.1774L24.1646 11.2447ZM9.18206 14.7981V15.8239H7.83572C7.01148 15.8239 6.45318 15.8045 6.39604 15.7739C6.23838 15.6895 6.20991 15.5735 6.15525 14.794C6.12624 14.3799 6.09264 13.9806 6.08058 13.9067L6.0587 13.7724H7.62038H9.18206V14.7981ZM14.1638 14.7981V15.8239H12.0881H10.0124V14.7981V13.7724H12.0881H14.1638V14.7981ZM19.1944 14.7981V15.8239H17.0943H14.9941V14.7981V13.7724H17.0943H19.1944V14.7981ZM24.1762 14.6296C24.1762 15.5204 24.1375 15.7232 23.9542 15.7935C23.9107 15.8102 23.0088 15.8239 21.9499 15.8239H20.0247V14.7981V13.7724H22.1004H24.1762V14.6296ZM9.51579 16.6935C9.50685 16.7152 9.18783 17.3141 8.80682 18.0245C8.42581 18.735 8.09985 19.3951 8.08246 19.4915C8.04637 19.6913 8.14688 19.9791 8.31748 20.1644C8.56017 20.4281 8.14947 20.4152 16.315 20.4152H23.8907L24.0334 20.558C24.229 20.7536 24.2091 21.0109 23.9851 21.1829C23.9248 21.2291 22.1237 21.2426 15.9221 21.2429C7.99225 21.2434 7.93511 21.2427 7.71684 21.1439C7.04831 20.8413 6.79561 20.1047 7.12333 19.4139C7.24714 19.1529 7.97819 17.7822 8.43226 16.9595L8.60076 16.6542H9.06641C9.32253 16.6542 9.52478 16.6719 9.51579 16.6935ZM10.4732 22.129C11.2691 22.3295 11.5001 23.3696 10.8713 23.9217C10.4845 24.2613 9.94359 24.2554 9.53679 23.9072C9.27867 23.6862 9.16218 23.3909 9.19188 23.0326C9.22753 22.6029 9.47047 22.2998 9.9029 22.1454C10.1298 22.0644 10.2077 22.0622 10.4732 22.129ZM21.071 22.1822C21.4529 22.3772 21.7327 22.9013 21.6619 23.2889C21.5407 23.9523 20.8402 24.3407 20.2348 24.0802C19.9332 23.9504 19.8184 23.8347 19.6794 23.5204C19.4359 22.9699 19.7528 22.3142 20.3551 22.1222C20.5107 22.0726 20.9243 22.1072 21.071 22.1822Z" fill="#282828"/>
                                    </svg>
                                </div>
                                <p>Корзина</p></a>
                            </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="menu-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="menu-burger__header" id="menu-burger__header">
                        <span></span>
                    </div>
                    <nav class="header__nav">
                        <ul class="menu header__menu">
                            <li class="{{ (request()->is('catalog')) ? 'active' : '' }}">
                                <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="19" height="2" rx="1" fill="#006BCB"/>
                                    <rect y="6" width="19" height="2" rx="1" fill="#006BCB"/>
                                    <rect y="12" width="19" height="2" rx="1" fill="#006BCB"/>
                                </svg>
                                <a href="{{route('catalog')}}" class="menu__item">Каталог</a>
                                @include('popup.category')
                            </li>
                            <li class="{{ (request()->is('stocks/active')) ? 'active' : '' }}"><a href="{{route('stocks-active')}}" class="menu__item">Акции</a></li>
                            <li class="{{ (request()->is('company')) ? 'active' : '' }}"><a href="{{route('company')}}" class="menu__item ">О Компания</a></li>
                            <li class="{{ (request()->is('contacts')) ? 'active' : '' }}"><a href="{{route('contacts')}}" class="menu__item ">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-2">
                    <div class="phone-block__header">
                        <a rel="nofollow" href="tel:88005501595">8(552) 33-44-40</a>
                        <p data-toggle="modal" data-target="#exampleModal">ОБРАТНЫЙ ЗВОНОК</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
