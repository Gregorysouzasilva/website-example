<div class="page-wrappers">
    @if(!empty($banner))
    <section class="jumbotron full-vh" data-pages="parallax">
        <div class="inner full-height">
            <!-- BEGIN SLIDER -->
            <!-- BEGIN SLIDE -->
            <div class="swiper-slide fit">
                <!-- BEGIN IMAGE PARRALAX -->
                <div class="slider-wrapper mobile-wrapper">
                    <div class="background-wrapper" data-swiper-parallax="30%">
                        <!-- YOUR BACKGROUND IMAGE HERE, YOU CAN ALSO USE IMG with the same classes -->
                        <div class="background" data-pages-bg-image="{{$banner->imagem}}" width="100%"></div>
                    </div>
                </div>
                <!-- END IMAGE PARRALAX -->
                <!-- BEGIN CONTENT -->
                <div class="content-layer">
                    <div class="circular_object bg-master-darker" data-pages-animation="custom" data-attr="scale" data-start="21" data-end="0" data-duration="500" data-delay="600" data-lg-attr="scale" data-lg-start="100" data-lg-end="0" data-lg-duration="500" data-lg-delay="600" data-vlg-attr="scale" data-vlg-start="35" data-vlg-end="0" data-vlg-duration="500" data-vlg-delay="600" style="visibility: visible; transform: scale(100);">
                    </div>
                    <div class="inner full-height">
                        <div class="container-xs-height full-height">
                            <div class="col-xs-height col-middle text-left">
                                <div class="container text-center">
                                    @if(!empty($banner->titulo))
                                    <div class="col-md-12 no-padding col-xs-10">
                                        <h1 class="light sm-text-center" data-swiper-parallax="-15%" style='color: #fff;
                                            font-family: "Arial Black", Gadget, sans-serif; text-shadow: 1.5px 2px rgba(51, 51, 51, 0.75);' animation="standard"> {{$banner->titulo}}</h1>
                                        <h4 class="sm-text-center" style='color: #fff;
                                            font-family: "san_francisco_black",sans-serif;
                                            text-shadow: 1.5px 2px rgba(51, 51, 51, 0.75);'>{{$banner->subtitulo}}</h4>
                                        <h5 class="block-title sm-text-center" style='color: #fff;
                                            font-family: "san_francisco_black",sans-serif;
                                            text-shadow: 1.5px 2px rgba(51, 51, 51, 0.75);'>{{$banner->texto}}</h5>
                                        @if(!empty($banner->link))
                                        <a href='{{$banner->link}}' target="_blank" class="btn btn-primary">{{$banner->botao_label or 'Acessar'}}</a> 
                                        @else
                                       
                                        @endif
                                    </div>
                                </div>
                                @endif
                                <div class="md-p-l-20 xs-no-padding clearfix p-l-50 p-r-50 p-t-20">
                                    {{-- @include('includes.formulario')  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SLIDE -->
            <!-- END SLIDE -->
        </div>
        <!-- END SLIDER -->
    </section>
    <!-- END JUMBOTRON -->
    @else
    <br><br><br>
    @endif
</div>