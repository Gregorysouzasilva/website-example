    <div class="container">
        <div class="md-p-l-20 md-p-r-20 xs-no-padding" style="color:{{$estrutura->corfonte}}">
            <h1 class="m-t-5 text-center bold" style="color:{{$estrutura->corfonte}}">{{$estrutura->titulo}}</h1>
            <h5 class="text-center" style="color:{{$estrutura->corfonte}}">{!! $estrutura->subtitulo !!}</h5>
            <div class="row">
                <div class="col-sm-12 no-padding xs-p-l-15 xs-p-r-15">
                    <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15 text-center">
                        <p>Para ter acesso a essas informações <a href=/login>clique aqui para logar</a> ou <a href=/registro>aqui para se registrar</a></p>
                    </div>
                    <div class="col-sm-12 no-padding xs-p-l-15 xs-p-r-15 text-center">
                        <img alt="" class="m-b-20" src="{{$estrutura->imagem}}" width="{{$estrutura->tamimagem or 270}}">
                        @include('includes.estrutura_botao')
                    </div>
                </div>
            </div>
        </div>
    </div>
