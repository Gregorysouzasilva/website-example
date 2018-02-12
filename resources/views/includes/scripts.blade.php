<!-- Modal -->
<div id='modalbox2' style="width:100%; height:100%; top:0; left:0; position:fixed; background-color:black; z-index:99; padding:5px; border:medium; border-color:#666;  box-shadow: 5px 5px 5px #333; display:none; opacity:0.50" onclick="javascript:fecharmodal()" >
</div>
<div id='modalbox' style="width:60%; height:80%; top:10%; left:20%; position:fixed; background-color:#FFFFFF; z-index:100; padding:5px; border:medium; border-color:#666;  box-shadow: 5px 5px 5px #333; display:none " ><input name="funcaoaofechar" id="funcaoaofechar" type="hidden" value="" />
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="javascript:fecharmodal()" title="Fechar" style="margin-left:5px">
        x
    </button>
    <button type="button" class="close" aria-hidden="true" onclick="javascript:document.getElementById('modoboxiframe').contentWindow.location.reload(true);" title="Atualizar" style="margin-left:5px">
        <i class="pg-refresh"></i>
    </button>
    <button type="button" class="close" aria-hidden="true" onclick="javascript:window.open(document.getElementById('modoboxiframe').src);" title="Abrir em Nova Aba" style="margin-left:5px">
        <i class="pg-folder"></i>
    </button>
    <button type="button" class="close" aria-hidden="true" onclick="javascript:document.getElementById('modoboxiframe').contentWindow.print()" title="Imprimir" style="margin-left:5px">
        <i class="pg-printer"></i>
    </button>

    <div class="modal-dialog1">
        <div class="modal-content1">

            <div class="modal-body1">
                <iframe src="" style="zoom:0.60; height:70vh;" frameborder="0" width="98%" id="modoboxiframe"></iframe>
            </div>
            <div class="modal-footer1">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- BEGIN CORE FRAMEWORK -->
<script src="http://www.sincloud.com.br/sites/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://www.sincloud.com.br/sites/pages/js/pages.image.loader.js"></script>
<script type="text/javascript" src="http://www.sincloud.com.br/sites/assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://www.sincloud.com.br/sites/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- BEGIN SWIPER DEPENDENCIES -->
<script type="text/javascript" src="http://www.sincloud.com.br/sites/assets/plugins/swiper/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="http://www.sincloud.com.br/sites/assets/plugins/velocity/velocity.min.js"></script>
<script type="text/javascript" src="http://www.sincloud.com.br/sites/assets/plugins/velocity/velocity.ui.js"></script>
<!-- Waits for the images to be loaded before applying the Isotope plugin -->
<script src="http://www.sincloud.com.br/sites/assets/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Isotope plugin arranges the card layout -->
<script src="http://www.sincloud.com.br/sites/assets/plugins/jquery-isotope/isotope.pkgd.min.js" type="text/javascript"></script><!-- BEGIN TEXT ROTATOR -->
<script type="text/javascript" src="http://www.sincloud.com.br/sites/assets/plugins/text-rotate/jquery.simple-text-rotator.min.js"></script>

<!-- BEGIN AUTO-ANIMATE NUMBERS -->
<script type="text/javascript" src="http://www.sincloud.com.br/sites/assets/plugins/jquery-appear/jquery.appear.js"></script>
<script type="text/javascript" src="http://www.sincloud.com.br/sites/assets/plugins/animateNumber/jquery.animateNumbers.js"></script>

<!-- BEGIN RETINA IMAGE LOADER -->
<script type="text/javascript" src="http://www.sincloud.com.br/sites/assets/plugins/jquery-unveil/jquery.unveil.min.js"></script>
<!-- END VENDOR JS -->
<!-- BEGIN PAGES FRONTEND LIB -->
<script type="text/javascript" src="http://www.sincloud.com.br/sites/pages/js/pages.frontend.js"></script>
<!-- END PAGES LIB -->
<!-- BEGIN YOUR CUSTOM JS -->
<script type="text/javascript" src="http://www.sincloud.com.br/sites/assets/js/custom.js"></script>
<script src="http://www.sincloud.com.br/sites/assets/js/gallery.js" type="text/javascript"></script>
<script>
     (function (i, s, o, g, r, a, m) {
         i['GoogleAnalyticsObject'] = r;i[r] = i[r] || function () {
             (i[r].q = i[r].q || []).push(arguments)}, i[r].l = 1 * new Date();
         a = s.createElement(o),
                 m = s.getElementsByTagName(o)[0];
         a.async = 1;
         a.src = g;
         m.parentNode.insertBefore(a, m)
     })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

     ga('create', '{{$principal->idgoogle}}, 'auto');
     ga('send', 'pageview');

</script>
<script type="text/javascript">
    function exibecontrole2(nome, cond) {
        if (cond == '') {
            var atual = document.getElementById(nome).style.display;
            if (atual == 'block') {
                cond = 'N';
            } else {
                cond = 'S';
            }
        }
        if (cond == 'S') {
            document.getElementById(nome).style.display = "block";
        } else {
            document.getElementById(nome).style.display = "none";
        }
    }
    function exibemodal(url, funcaoaosair) {
        document.getElementById("modoboxiframe").src = url;
        document.getElementById("modalbox").style.display = "block";
        document.getElementById("modalbox2").style.display = "block";
        document.getElementById("funcaoaofechar").value = funcaoaosair;
    }
    function fecharmodal() {
        document.getElementById("modoboxiframe").src = "";
        document.getElementById("modalbox").style.display = "none";
        document.getElementById("modalbox2").style.display = "none";
        var funcaoaosair = document.getElementById("funcaoaofechar").value;
        //alert(funcaoaosair);
        //var funcaoaosair='tabela1';
        window[funcaoaosair]();
    }
</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a12464b2e3b25d3"></script>
