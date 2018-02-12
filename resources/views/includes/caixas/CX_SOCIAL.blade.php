<div class="container">
    <div class="md-p-l-20 md-p-r-20 xs-no-padding" style="color:{{$estrutura->corfonte}}">
        <div class="row">
            <div class="col-sm-12 no-padding xs-p-l-15 xs-p-r-15">
                <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15 text-center">
                    {!! $estrutura->texto !!}
                    <br>
                    <div class="fb-like" data-href="{{Request::url()}}" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div><br><br>
                    <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="10"data-mobile="true" ></div>
                </div>
            </div>
        </div>
    </div>
</div>