<!-- BEGIN MENU ITEMS -->
@if(!empty($menu_itens))
<div class="header-inner">
    <ul class="menu">
        {!! $menu_itens !!}
    </ul>
    @if(!empty($usuario_array['avatar_usuario']))
    <li class=classic>
        <a href='javascript:;'>
            <img src="{{$usuario_array['avatar_usuario']}}">
        </a>
        <nav class='classic'>
            <span class='arrow'></span>
            <ul>
                <li><a href="https://wordpress.com/start/wpcc/oauth2-user?ref=oauth2&oauth2_redirect=https%3A%2F%2Fpublic-api.wordpress.com%2Foauth2%2Fauthorize%2F%3Fclient_id%3D1854%26response_type%3Dcode%26blog_id%3D0%26state%3Dda9fa5e340e009bcb5b78f799821f07c30e8bf3382bfe573fc8447fa508d782d%26redirect_uri%3Dhttps%253A%252F%252Fen.gravatar.com%252Fconnect%252F%253Faction%253Drequest_access_token%26jetpack-code%26jetpack-user-id%3D0%26action%3Doauth2-login&oauth2_client_id=1854" target="_blank">Trocar Foto</a></li>
                <li><a href="/logoff.php">Sair</a></li>
            </ul>
        </nav>
    </li>
    @endif
    <!--            <a href="#" class="search-toggle hidden-xs hidden-sm" data-toggle="search">?</a>-->
    <!-- BEGIN COPYRIGHT FOR MOBILE -->
    <div class="font-arial m-l-35 m-r-35 m-b-20 visible-sm visible-xs m-t-20">
        <p class="fs-11 no-margin small-text p-b-20">
        </p>
        <p class="fs-11 small-text muted">Copyright &copy; 2016</p>
    </div>
    <!-- END COPYRIGHT FOR MOBILE -->
</div>
@endif
<!-- END MENU ITEMS -->