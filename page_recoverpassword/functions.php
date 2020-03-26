<script src="js/parsley.min.js"></script>

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
      ApplyNeonButtonEffect("buttonConfirm", 5, "red");
      LoadShow(false,"",0);
    }

    StartScreen()
</script>

<!-- Login Here -->
<script type="text/javascript">
    function FormSuccess()
    {
        LoadShow(true, "Enviando", function ()
        {
            //Third Bullet
            var _mail = $('#field_mail').val();

            var formData = new FormData();
            formData.append('mail', _mail);

            SendMail(formData);
        });
        return false;
    }

    function SendMail(formData)
    {
      ReqServer(
              "https://database.redwindow.com.br/intranet/requisitions/ReqRecoverPassword.php",
              formData,
              function (success, result)
              {
                  var title = "Sucesso!";
                  var text = "Sua senha foi enviada para o email informado.";
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
                              LoadPage("login");
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
