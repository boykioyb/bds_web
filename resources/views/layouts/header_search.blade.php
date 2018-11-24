<section id="hero-area" class="parallax-search overlay" data-stellar-background-ratio="0.5">
    <div class="hero-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h1>@lang('message.title_search')</h1>
                            <p>@lang('message.sub_title_search')</p>
                        </div>
                        <!--/ End Welcome Text -->
                        <!-- Search Form -->
                        <div class="trip-search">
                            <form class="form">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="at-col-default-mar">
                                            <select class="form-control">
                                                <option value="0" selected>@lang('message.city')</option>
                                                <option value="1">New York</option>
                                                <option value="2">Los Angeles</option>
                                                <option value="3">Chicago</option>
                                                <option value="4">Philadelphia</option>
                                                <option value="5">San Francisco</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="at-col-default-mar">
                                            <select class="div-toggle form-control" data-target=".my-info-1">
                                                <option value="0" data-show=".acitveon"
                                                        selected>@lang('message.project')</option>
                                                <option value="1" data-show=".sale">For Sale</option>
                                                <option value="2" data-show=".rent">For Rent</option>
                                                <option value="3" data-show=".rent">Sold</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="at-col-default-mar">
                                            <div class="at-col-default-mar">
                                                <select class="form-control">
                                                    <option value="0" selected>@lang('message.mode')</option>
                                                    @foreach(MODE_PROPERTIES as $k => $val)
                                                        <option value="{{ $k }}">@lang('message.'.$val)</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="at-col-default-mar">
                                            <select class="div-toggle form-control" data-target=".my-info-1">
                                                <option value="0" selected>@lang('message.beds')</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="at-col-default-mar no-mb">
                                            <select name="price" class="form-control search-price">
                                                <option value="" selected>Chọn khoảng giá</option>
                                                <option value="0-1.5">Dưới 1,5 tỷ</option>
                                                <option value="1.5-2.5">Từ 1,5 - 2,5 tỷ</option>
                                                <option value="2.5-3.5">Từ 2,5 - 3,5 tỷ</option>
                                                <option value="3.5-5">Từ 3,5 - 5 tỷ</option>
                                                <option value="5-7">Từ 5 - 7 tỷ</option>
                                                <option value="7-10">Từ 7 - 10 tỷ</option>
                                                <option value="10">Trên 10 tỷ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="at-col-default-mar no-mb">
                                            <select name="acreage" class="form-control search-price">
                                                <option value="" selected>Chọn diện tích </option>
                                                <option value="0-30">Dưới 30m<sup>2</sup></option>
                                                <option value="30-50">30 - 50 m<sup>2</sup></option>
                                                <option value="50-80">50 - 80 m<sup>2</sup></option>
                                                <option value="80-100">80 - 100 m<sup>2</sup></option>
                                                <option value="100-150">100 - 150 m<sup>2</sup></option>
                                                <option value="150-200">150 - 200 m<sup>2</sup></option>
                                                <option value="200">Trên 200 m<sup>2</sup></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="at-col-default-mar no-mb">
                                            <button class="btn btn-primary btn-block hvr-bounce-to-right" type="submit">
                                                <i class="fa fa-search"></i> @lang('message.search')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
