<script src="js/parsley.min.js"></script>

<!-- scripts end here-->
<script type="text/javascript">
  $(function () {
      $("#formLogin").on('submit', function(e) {
          var f = $(this);
          f.parsley().validate();
          if (f.parsley().isValid())
          {
              FormSuccess();
          }
          e.preventDefault();
          return false;
      });
    });

    function StartScreen() {
      ApplyNeon("formLogin", 15, "red");

      ApplyNeonButtonEffect("field_mail", 5, "red");
      ApplyNeonButtonEffect("field_password", 5, "red");
      ApplyNeonButtonEffect("buttonLogin", 5, "red");
      ApplyNeonButtonEffect("buttonLost", 15, "red");

      LoadShow(false,"",0);
    }
    StartScreen()
</script>

<!-- Login Here -->
<script type="text/javascript">
    function FormSuccess()
    {
        LoadShow(true, "Logando", function ()
        {
            //Third Bullet
            var _mail = $('#field_mail').val();
            var _pass = $('#field_password').val();

            var formData = new FormData();
            formData.append('mail', _mail);
            formData.append('password', _pass);

            Login(formData);
        });
        return false;
    }

    function Login(formData)
    {
      ReqServer(
              "https://database.redwindow.com.br/intranet/requisitions/ReqLogin.php",
              formData,
              function (success, result)
              {
                  var title = "Sucesso!";
                  var text = "Seja bem-vindo ao Red Window!";
                  var type = BUTTON_SUCCESS;
                  //error tratament
                  if (success !== true || result.status !== true) {
                      title = "Erro!";
                      text = result.error;
                      type = BUTTON_ERROR;
                  }

                  // success tratament
                  Alert(
                          title,
                          text,
                          function (_success)
                          {
                            if (success === true && result.status === true)
                            {
                              LoadPage("https://www.intranet.redwindow.com.br/index.php?id=" + result.data);
                            }
                            else
                            {
                              LoadShow(false);
                            }
                          },
                          type
                          );
              }
      );
    }
</script>
