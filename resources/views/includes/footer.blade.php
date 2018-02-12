<!-- BEGIN FOOTER -->
<section class="p-b-55 p-t-75 xs-p-b-20 bg-master-darker ">
    <div class="container">
        <div class="row">
            <div class="col-md-7">

                <p class="fs-11 hint-text text-white font-arial no-margin small-text">Copyright © {{ date('Y') }} SINCLOUD. All Rights Reserved.</p>
                <div id="google_translate_element"></div><script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
                    }
                </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



            </div>
            <div class="col-md-5">
                <p class="fs-11 no-margin font-arial text-white small-text">
                    @if(!empty($principal->razaosocial))
                    {{$principal->razaosocial}}<br>
                    @endif
                    @if(!empty($principal->cnpj))
                    {{$principal->cnpj}}<br>
                    @endif
                    @if(!empty($principal->telefone))
                    {{$principal->telefone}}<br>
                    @endif
                    @if(!empty($principal->endereco))
                    {{$principal->endereco}}<br>
                    @endif
                </p>
                <ul class="no-style fs-12 no-padding pull-right xs-pull-left xs-m-t-20">
                    @if(!empty($principal->facebook))
                    <li class="inline no-padding">
                        <a class="text-white p-l-30 fs-16 xs-no-padding" href="{{$principal->facebook}}">
                            <img src=http://sincloud.com.br/sites/pages/images/social-facebook-button-blue-icon.png class="zoom" height=20px></img>
                        </a>
                    </li>
                    @endif
                    @if(!empty($principal->twitter))
                    <li class="inline no-padding">
                        <a class="text-white p-l-30 fs-16" href="{{$principal->twitter}}">
                            <img src=http://sincloud.com.br/sites/pages/images/social-twitter-button-blue-icon.png class="zoom" height=20px></img>
                        </a>
                    </li>
                    @endif
                    @if(!empty($principal->skype))
                    <li class="inline no-padding">
                        <a class="text-white p-l-30 fs-16" href="callto://{{$principal->skype}}">
                            <img src=http://sincloud.com.br/sites/pages/images/social-skype-button-blue-icon.png class="zoom" height=20px></img>
                        </a>
                    </li>
                    @endif
                    @if(!empty($principal->linkedin))
                    <li class="inline no-padding">
                        <a class="text-white p-l-30 fs-16" href="{{$principal->linkedin}}">
                            <img src=http://sincloud.com.br/sites/pages/images/social-linkedin-button-blue-icon.png class="zoom" height=20px></img>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>


        </div>

    </div>
</section>
<!-- END FOOTER -->