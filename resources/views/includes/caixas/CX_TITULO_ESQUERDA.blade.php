<div class="container">
    <div class="md-p-l-20 md-p-r-20 xs-no-padding">
        <h5 class="block-title hint-text no-margin bold"  style="color:{{$estrutura->corfonte}}">{{$estrutura->titulo}}</h5>
        <div class="row">
            <div class="col-sm-5 col-md-4">
                <h1 class="m-t-5"  style="color:{{$estrutura->corfonte}}">{{$estrutura->subtitulo}}</h1>
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