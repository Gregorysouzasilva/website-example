@if(!empty($estrutura->link))
    <br>
    <a href='{{$estutura->link}}' target="{{$estrutura->destinolink}}" class="{{$estrutura->botaocss or 'btn btn-primary btn-rounded'}}">{{$estrutura->labelbotao or 'Saiba mais'}}</a> 
    <br>
@endif