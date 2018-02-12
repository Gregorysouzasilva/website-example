<div class="container" style="color:{{$estrutura->corfonte}}">
    <h1 class="m-t-5 text-center bold" style="color:{{$estrutura->corfonte}}">{{$estrutura->titulo}}</h1>
    <h5 class="m-t-5 text-center" style="color:{{$estrutura->corfonte}}">{{$estrutura->subtitulo}}</h5>
    <div class="md-p-l-20 xs-no-padding clearfix">
        @if(!empty($estrutura->itens))
            @foreach($estrutura->itens as $item)
              @include('includes.caixas.cx_box')
            @endforeach
        @endif
    </div>
</div>