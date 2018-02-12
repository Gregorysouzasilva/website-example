<h1 class="m-t-5 text-center bold" style="color:{{$estrutura->corfonte}}">{{$estrutura->titulo}}</h1>
<h5 class="m-t-5 text-center bold" style="color:{{$estrutura->corfonte}}">{{$estrutura->subtitulo}}</h5><br><br>
<!-- BEGIN TESTIMONIALS SLIDER-->
<div class="gallery">
    <div class="grid-sizer col-sm-4 col-xs-6 no-padding"></div>
    @if(!empty($estrutura->itens))
        @foreach($estrutura->itens as $item)
            <!-- START GALLERY ITEM -->
            <div class="gallery-item col-sm-4 col-xs-12 no-padding hover-zoom" onClick="@if(empty($item->link)) exibemodal('{{$item->imagem}}','') @else window.open('{{$item->link}}','_self') @endif">
                <div class="inner bottom-left bottom-right padding-30">
                    <h3 class="block-title text-white no-margin text-center">{{$item->titulo}}</h3>
                    <h6 class="block-title fs-11 hint-text text-white m-t-5 m-b-0"></h6>
                    <p class="font-arial fs-11 text-white muted m-t-5 m-b-0">{{$item->texto}}</p>
                </div>
                <div class="ar-2-1">
                    <div data-pages-bg-image="{{$item->imagem}}" data-bg-overlay="black" data-overlay-opacity="0.4">
                    </div>
                </div>
            </div>
            <!-- END GALLERY ITEM -->
        @endforeach
    @endif
</div>