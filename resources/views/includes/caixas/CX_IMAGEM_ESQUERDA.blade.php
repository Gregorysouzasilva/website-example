<div class="container">
    <div class="md-p-l-20 md-p-r-20 xs-no-padding" style="color:{{$estrutura->corfonte}}">
        <h1 class="m-t-5 text-center bold" style="color:{{$estrutura->corfonte}}"  data-pages-animation="standard" data-delay="600" data-type="transition.slideDownIn">{{$estrutura->titulo}}</h1>
        <h5 class="text-center" style="color:{{$estrutura->corfonte}}">{{$estrutura->subtitulo}}</h5>
        <div class="row">
            <div class="col-sm-5 col-md-4">
                <img alt="" class="m-b-20" src="{{$estrutura->imagem}}" width="{{$estrutura->tamimagem or 270}}">
            </div>
            <div class="col-sm-7 col-md-8 no-padding xs-p-l-15 xs-p-r-15">
                <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
                    <p>{!! $estrutura->texto !!}</p>
                    @include('includes.estrutura_botao')
                </div>
            </div>
        </div>
    </div>
</div>