
<h1 class="m-t-5 text-center bold" style="color:{{$estrutura->corfonte}}">{{$estrutura->titulo}}</h1>
<h5 class="m-t-5 text-center bold" style="color:{{$estrutura->corfonte}}">{{$estrutura->subtitulo}}</h5><br><br>
<!-- BEGIN TESTIMONIALS SLIDER-->
<div class="swiper-container slider{{$estrutura->id}}" id="testimonials_slider">
    <div class="swiper-wrapper">
        @if(!empty($estrutura->itens))
            @foreach($estrutura->itens as $item)
            <!-- BEGIN TESTIMONIAL -->
            <div class="swiper-slide" style="background-color:transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <img alt="" class="m-b-20" src="{{$item->imagem}}" width="{{$estrutura->tamimagem or 270}}px"class='img-circle' >
                        </div>
                        <div class="col-sm-7 col-md-8 no-padding xs-p-l-15 xs-p-r-15">
                            <h3 class="m-t-5 bold" style="color:{{$estrutura->corfonte}}">{{$item->titulo}}</h3>
                            <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15" style="color:{{$estrutura->corfonte}}">
                                <p style="color:{{$estrutura->corfonte}}; text-align:left">{!!$item->texto!!}</p>
                                @include('includes.estrutura_botao')
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END TESTIMONIAL -->
            @endforeach
        @endif
    </div>
    <!-- Add Navigation -->
    <div class="swiper-pagination{{$estrutura->id}} relative p-t-20 swiper-pagination"></div>
    <div class="swiper-navigation swiper-dark-solid  auto-reveal swiper-button-prev swiper-button-prev{{$estrutura->id}}"></div>
    <div class="swiper-navigation swiper-dark-solid  auto-reveal swiper-button-next swiper-button-next{{$estrutura->id}}"></div>
</div>
<!-- END TESTIMONIALS -->