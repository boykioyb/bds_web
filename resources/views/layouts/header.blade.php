<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-info hidden-sm-down">
                <div class="call-header">
                    <p><i class="fa fa-phone" aria-hidden="true"></i> (84) 979 008 320</p>
                </div>
                <div class="address-header">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Phú Diễn, Hà Nội </p>
                </div>
                <div class="mail-header">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> boykioyb96@gmail.com</p>
                </div>
            </div>
            <div class="top-social hidden-sm-down">
                <div class="login-wrap">
                    <ul class="d-flex">
                        <li><a href="login.html"><i class="fa fa-user"></i> @lang('message.login')</a></li>
                        <li><a href="register.html"><i class="fa fa-sign-in"></i> @lang('message.register')</a></li>
                    </ul>
                </div>
                <div class="social-icons-header">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown"
                            aria-haspopup="true">
                        @if (app()->getLocale() == "vi")
                            <img src="{{ asset('images/vi.png') }}" alt="lang"/> @lang('message.vietnam')
                        @else
                            <img src="{{ asset('images/en.png') }}" alt="lang"/> @lang('message.english')
                        @endif
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                        <li>
                            <a href="/vi">
                                <img src="{{ asset('images/vi.png') }}" alt="lang"/>@lang('message.vietnam')
                            </a>
                        </li>
                        <li>
                            <a href="/en">
                                <img src="{{ asset('images/en.png') }}" alt="lang"/> @lang('message.english')
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom heading sticky-header" id="heading">
        <div class="container">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo.svg') }}" alt="realhome">
            </a>
            <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search"
                    aria-expanded="false">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>

            <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu"
                    aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <form action="#" id="bloq-search" class="collapse">
                <div class="bloq-search">
                    <input type="text" placeholder="tìm kiếm...">
                    <input type="submit" value="@lang('menu.search')">
                </div>
            </form>

            <nav id="main-menu" class="collapse">
                <ul>
                @if (!empty($menus))
                    @foreach($menus as $val)
                        <!-- STAR COLLAPSE MOBILE MENU -->
                            <li class="hidden-lg-up">
                                @if (!empty($menus['child']))
                                    <div class="po">
                                        <a data-toggle="collapse" href="#{{ $val['route'] }}"
                                           aria-expanded="false">@lang($val['name'])</a>
                                    </div>
                                    <div class="collapse" id="{{ $val['route'] }}">
                                        <div class="card card-block">
                                            @foreach($menus['child'] as $child)
                                                <a class="dropdown-item"
                                                   href="{{ route($val['route'],app()->getLocale()) }}">@lang($child['name'])</a>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <a href="{{ route($val['route'],app()->getLocale()) }}">@lang($val['name'])</a>
                                @endif
                            </li>
                            <!-- END COLLAPSE MOBILE MENU -->
                            <li class="dropdown hidden-md-down">
                                @if (!empty($menus['child']))
                                    <a class="active dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false" href="#">@lang($val['name'])</a>
                                    <div class="dropdown-menu">
                                        @foreach($menus['child'] as $child)
                                            <a class="dropdown-item"
                                               href="{{ route($val['route'],app()->getLocale()) }}">@lang($child['name'])</a>
                                        @endforeach
                                    </div>
                                @else
                                    <a href="{{ route($val['route'],app()->getLocale()) }}">@lang($val['name'])</a>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
