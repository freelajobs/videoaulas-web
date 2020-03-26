<!-- scripts end here-->
<script type="text/javascript">
    const data = {
      page: {
        exit:'www.google.com.br',
        client:'client',
        model:'model',
      },
      neon: {
        modal:15,
        logo:100,
        btnNormal:5,
        btnSelected:20,
      },
    }

    function GoModel() {
        ApplyNeon("btn_model", data.neon.btnSelected, "red");
        setTimeout( function(){
            ApplyNeon("btn_model", data.neon.btnNormal, "red");
            LoadPage(data.page.model);
        }, 150 );
        return false;
    }

    function GoClient() {
        ApplyNeon("btn_client", data.neon.btnSelected, "red");
        setTimeout( function(){
            ApplyNeon("btn_client", data.neon.btnNormal, "red");
            LoadPage(data.page.client);
        }, 150 );
        return false;
    }

    function OnLoad() {
        ApplyNeon("modal", data.neon.modal, "red");
        ApplyNeon("age", data.neon.logo, "red");
        ApplyNeon("logo", data.neon.logo, "red");

        ApplyNeonButtonEffect("btn_model", data.neon.btnNormal, "red");
        ApplyNeonButtonEffect("btn_client", data.neon.btnNormal, "red");
        
        LoadShow(false,"",0);
    }
</script>

<script>
    $(window).on('load', function() {
        OnLoad();
    });
</script>
