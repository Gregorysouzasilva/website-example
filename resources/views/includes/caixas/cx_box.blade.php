<div class="col-sm-4 no-padding">
    <div class="text-center zoom" style="background-color:{{$item->corfundo}}; margin:20px; padding:10px; border-radius: 25px;  @if(!empty($estrutura->tamanhocx)) height:{{$estrutura->tamanhocx}}px;@endif" >
        <div style="background-color:{{$item->corfundo}} border-radius:{{$item->imagemredonda}}" >
            <span class="circular">
                 <img alt="" class="m-b-20" src="{{$item->imagem}}" width="@if($estrutura->tamimagem == 270) 90 @else {{$estrutura->tamimagem or 90}} @endif px"class='img-circle' >
            </span>
        </div>
        <h6 class="block-title p-b-5 text-center" style="color:{{$item->corfonte}}">{{$item->titulo}} </h6>
        <p class="m-b-30" style="color:{{$item->corfonte}}">{!! $item->texto !!}</p>
        @include('includes.estrutura_botao')
    </div>
    <div class="visible-xs b-b b-grey-light m-t-30 m-b-30">
        
    </div>
</div>
