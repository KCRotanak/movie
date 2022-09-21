@extends('layouts.app')
@section('content')

    <div id="myCarousel" class="carousel slide carousel-fade" data-interval="2000" data-ride="carousel">
        
        <div class="carousel-inner" role="listbox">

            @foreach ($slideOnes as $slideOne)
                <div class="item active">
                    <div class="fill second-slide">
                        <img src="{{ asset('../slideimage/' . $slideOne->image) }}" alt="">
                    </div>
                </div>
            @endforeach

            @foreach ($slides as $slide)
                <div class="item">
                    <div class="fill second-slide">
                        <img src="{{ asset('../slideimage/' . $slide->image) }}" alt="">
                    </div>
                </div>
            @endforeach

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="showing">

            <div class="btn-showing">
                <ul>
                    <a href="/"> Now showing </a>
                    <a href="{{ asset('/comingsoon') }}"> Coming soon </a>
                </ul>
            </div>
            <div class="card-showing swiper">
                {{-- =swiper --}}
                @php
                    $countProduct = $products->count();
                    $rows = $countProduct / 2;
                @endphp

                @foreach ($products as $product)
                    @if ($loop->first || $loop->index === $rows)
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
                                @endif
                                <div class="card swiper-slide" onclick="window.location.href='/moviedetail/'+{{ $product->id }}">
                                    <div class="image-content">
                                        <div class="card-image">
                                            <img src="{{ asset('../image/' . $product->image) }}" alt="" class="card-img">
                                        </div>
                                    </div>
                                    <div class="card-content">

                                        <p>{{ $product->date }}</p>
                                        <h4>{{ $product->name }}</h4>
                                        <h5>{{ $product->duration }}</h5>

                                    </div>
                                </div>

                                @if ($loop->index === $rows - 1 || $loop->last)
                            </div>
                        </div>
                    @endif
                @endforeach
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- /.carousel -->

    <script>
        $(document).ready(function(event) {
            var top_header = $(".carousel .fill");

            $(window).scroll(function() {
                var st = $(this).scrollTop();
                top_header.css({
                    "background-position": "center calc(50% + " + st * 0.5 + "px)";
                });
            });
        });
    </script>
    {{-- Swiper JS --}}
    <script src="js/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 4,
            spaceBetween: 20,
            slidesPerGroup: 4,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://getbootstrap.com/docs/3.3/assets/js/vendor/holder.min.js"></script>
@endsection
