@if(!empty($slider))
    <div class="owl-carousel-slider-top owl-carousel">
        @foreach($slider->files as $item)
            <div class="item-slider-top">
                <a href="#">
                    <img class="img-responsive" src="{{BASE_URL_IMG.$item }}" alt="hanoi">
                </a>
            </div>
        @endforeach
    </div>
@endif
