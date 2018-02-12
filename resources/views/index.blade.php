@include('includes.header');
@include('includes.banner')
@foreach($estruturas as $estrutura)

    <!-- BEGIN CONTENT SECTION -->
    <section class=" @if(empty($estrutura->tipo)) p-b-85 p-t-75 @else p-b-10 p-t-10 @endif" style="background-color:{{$estrutura->cordefundo}}" data-pages-bg-image="{{$estrutura->imagemfundo}}">
        @if($estrutura->bloqueio_caixa == 2 && empty($usuario))
            @include('includes.caixas.cx_bloqueada')
        @else
            <a name="{{$estrutura->ordem}}"></a>
            @if(View::exists('includes.caixas.' . $estrutura->tipo))
                @include('includes.caixas.' . $estrutura->tipo)
            @else
                MISSING: {{$estrutura->tipo}}
            @endif
        @endif
    </section>
    <!-- END CONTENT SECTION -->
    
@endforeach

@include('includes.footer')
@include('includes.scripts')

</body>
</html>
