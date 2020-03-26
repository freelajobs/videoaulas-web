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
        service: 2,
      },
      hover: {
        tag: 'ios_mock',
        normal: 'images/monitormockup.png',
        one: 'images/img_pc/01.png',
        two: 'images/img_pc/02.png',
        tree: 'images/img_pc/03.png',
        four: 'images/img_pc/04.png',
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
        LoadPage("register");
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

        ApplyNeon("partner_one", data.neon.service, "white");
        ApplyNeon("partner_two", data.neon.service, "white");
        ApplyNeon("partner_tree", data.neon.service, "white");
        ApplyNeon("partner_four", data.neon.service, "white");
        ApplyNeon("partner_five", data.neon.service, "white");
        ApplyNeon("partner_six", data.neon.service, "white");

        ApplyNeon("img_icon_1", data.neon.service, "white");
        ApplyNeon("img_icon_2", data.neon.service, "white");
        ApplyNeon("img_icon_3", data.neon.service, "white");
        ApplyNeon("img_icon_4", data.neon.service, "white");

        ApplyNeon("ios_mock", data.neon.service, "white");

        ApplyNeonButtonEffect("service_left", data.neon.btnNormal, "red");
        ApplyNeonButtonEffect("service_mid", data.neon.btnNormal, "red");
        ApplyNeonButtonEffect("service_right", data.neon.btnNormal, "red");

        OnHoverChangeImage (
            "features-list-1", data.hover.tag,
            data.hover.normal, data.hover.one,
            function(){
                $("#features-list-1 p").show();
            },
            function(){
                $("#features-list-1 p").hide();
            },
        )
        OnHoverChangeImage (
            "features-list-2", data.hover.tag,
            data.hover.normal, data.hover.two,
            function(){
                $("#features-list-2 p").show();
            },
            function(){
                $("#features-list-2 p").hide();
            },
        )
        OnHoverChangeImage (
            "features-list-3", data.hover.tag,
            data.hover.normal, data.hover.tree,
            function(){
                $("#features-list-3 p").show();
            },
            function(){
                $("#features-list-3 p").hide();
            },
        )
        OnHoverChangeImage (
            "features-list-4", data.hover.tag,
            data.hover.normal, data.hover.four,
            function(){
                $("#features-list-4 p").show();
            },
            function(){
                $("#features-list-4 p").hide();
            },
        )
       
        LoadShow(false,"",0);
    }
</script>

<script>
    $(window).on('load', function() {
        OnLoad();
    });
</script>