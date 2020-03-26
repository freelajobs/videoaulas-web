<!-- scripts end here-->
<script type="text/javascript">
    const data = {
      page: {
        ios:'www.apple.com/br/ios/app-store/',
        android:'play.google.com/store?hl=pt',
        register:'register',
      },
      neon: {
        logo:100,
        nav: 0,
        btnNormal:5,
        btnSelected:20,
        iconMock:1,
      },
      hover: {
        tag: 'ios_mock',
        normal: 'images/iphonemockup.png',
        agendamento: 'images/img_cel/agendamento.png',
        comentarios: 'images/img_cel/comentarios.png',
        compra: 'images/img_cel/compra.png',
        home: 'images/img_cel/home.png',
        perfil: 'images/img_cel/perfil.png',
        ticket: 'images/img_cel/ticket.png',
      }
    }

    function GoIos() {
        ApplyNeon("button_apple", data.neon.btnSelected, "red");
        setTimeout( function(){
            ApplyNeon("button_apple", data.neon.btnNormal, "red");
            LoadUrl(data.page.ios);
        }, 150 );
        return false;
    }

    function GoAndroid() {
        ApplyNeon("button_google", data.neon.btnSelected, "red");
        setTimeout( function(){
            ApplyNeon("button_google", data.neon.btnNormal, "red");
            LoadUrl(data.page.android);
        }, 150 );
        return false;
    }

    function GoPartner() {
        ApplyNeon("button_register", data.neon.btnSelected, "red");
        setTimeout( function(){
            ApplyNeon("button_register", data.neon.btnNormal, "red");
            LoadPage(data.page.register);
        }, 150 );
        return false;
    }

    function OnLoad() {
        ApplyNeon("logo", data.neon.logo, "red");

        ApplyNeonButtonEffect("nav_1", data.neon.nav, "red");
        ApplyNeonButtonEffect("nav_2", data.neon.nav, "red");
        ApplyNeonButtonEffect("nav_3", data.neon.nav, "red");
        ApplyNeonButtonEffect("nav_4", data.neon.nav, "red");

        ApplyNeonButtonEffect("button_apple", data.neon.btnNormal, "red");
        ApplyNeonButtonEffect("button_google", data.neon.btnNormal, "red");

        ApplyNeonButtonEffect("service_left", data.neon.btnNormal, "red");
        ApplyNeonButtonEffect("service_mid", data.neon.btnNormal, "red");
        ApplyNeonButtonEffect("service_right", data.neon.btnNormal, "red");

        ApplyNeonButtonEffect("img_icon_1", data.neon.iconMock, "white");
        ApplyNeonButtonEffect("img_icon_2", data.neon.iconMock, "white");
        ApplyNeonButtonEffect("img_icon_3", data.neon.iconMock, "white");
        ApplyNeonButtonEffect("img_icon_4", data.neon.iconMock, "white");
        ApplyNeonButtonEffect("img_icon_5", data.neon.iconMock, "white");
        ApplyNeonButtonEffect("img_icon_6", data.neon.iconMock, "white");

        ApplyNeonButtonEffect("button_register", data.neon.btnNormal, "red");
        
        OnHoverChangeImage (
            "features-list-1", data.hover.tag,
            data.hover.normal, data.hover.home
        )
        OnHoverChangeImage (
            "features-list-2", data.hover.tag,
            data.hover.normal, data.hover.perfil
        )
        OnHoverChangeImage (
            "features-list-3", data.hover.tag,
            data.hover.normal, data.hover.agendamento
        )
        OnHoverChangeImage (
            "features-list-4", data.hover.tag,
            data.hover.normal, data.hover.compra
        )
        OnHoverChangeImage (
            "features-list-5", data.hover.tag,
            data.hover.normal, data.hover.ticket
        )
        OnHoverChangeImage (
            "features-list-6", data.hover.tag,
            data.hover.normal, data.hover.comentarios
        )
        LoadShow(false,"",0);
    }
</script>

<script>
    $(window).on('load', function() {
        OnLoad();
    });
</script>
