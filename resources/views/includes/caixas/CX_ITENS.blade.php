<div class="container" style="color:{{$estrutura->corfonte}}">
    <h1 class="m-t-5 text-center bold" style="color:{{$estrutura->corfonte}}">{{$estrutura->titulo}}</h1>
    <h5 class="m-t-5 text-center" style="color:{{$estrutura->corfonte}}">{{$estrutura->subtitulo}}</h5>
    <div class="md-p-l-20 xs-no-padding clearfix">
        <div class="col-sm-3 col-md-3">
            <img alt="" class="m-b-20" src="{{$estrutura->imagem}}" width="{{$estrutura->tamimagem or 270}}px"class='img-circle' >
        </div>
        <div class="col-sm-9 col-md-9 no-padding xs-p-l-15 xs-p-r-15">
            <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
                <ol> 
                    @if(!empty($estrutura->itens))
                    @foreach($estrutura->itens as $item)
                    <li class="lista"><span class="lista"><a href="javascript:exibecontrole2('{{$estrutura->vinculo}}{{$item->id}}','')">{{$item->titulo}}</a>
                            <div id='{{$estrutura->vinculo}}{{$item->id}}' style="display:none"><small>{!! $item->texto !!}</small>
                            </div>
                        </span></li>
                    @endforeach
                    @endif
                </ol></div></div>
    </div>
</div>