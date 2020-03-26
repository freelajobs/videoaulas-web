<script src='js/jquery.easing.min.js'></script>
<script src="js/multi_step_form.js"></script>
<script src="js/parsley.min.js"></script>
<script src="js/map.js"></script>
<script src="js/toogle.js"></script>
<script src="js/jquery.inputmask.bundle.min.js"></script>

<!-- scripts end here-->
<script type="text/javascript">
    const data = {
      page: {
        register:'register',
      },
      neon: {
        nav: 0,
        form:15,
        term:0,
        field:1,
        btnNormal:3,
        btnSelected:20,
      }
    }
    
    $("#formRegister").hide();

    function OnLoad() {
      $.ajax({
           url : "terms/terms.txt",
           dataType: "text",
           success : function (data) {
               $("#field_terms").text(data);
           }
       });

      ApplyNeon("formRegister", data.neon.form, "red");

      ApplyNeon("field_terms", data.neon.term, "red");

      ApplyNeonButtonEffect("field_name", data.neon.field, "red");
      ApplyNeonButtonEffect("field_cpf", data.neon.field, "red");
      ApplyNeonButtonEffect("field_fone", data.neon.field, "red");
      ApplyNeonButtonEffect("field_celfone", data.neon.field, "red");
      ApplyNeonButtonEffect("field_age", data.neon.field, "red");

      ApplyNeonButtonEffect("txtEndereco", data.neon.field, "red")
      ApplyNeonButtonEffect("field_address", data.neon.field, "red")
      ApplyNeonButtonEffect("search_location", data.neon.field, "red")

      ApplyNeonButtonEffect("field_mail", data.neon.field, "red");
      ApplyNeonButtonEffect("field_password", data.neon.field, "red");
      ApplyNeonButtonEffect("field_password_confirm", data.neon.field, "red");

      ApplyNeonButtonEffect("buttomTerm", data.neon.btnNormal, "red");
      ApplyNeonButtonEffect("backPersonalDate", data.neon.btnNormal, "red");
      ApplyNeonButtonEffect("nextPersonalDate", data.neon.btnNormal, "red");

      ApplyNeonButtonEffect("backAddess", data.neon.btnNormal, "red");
      ApplyNeonButtonEffect("nextAddess", data.neon.btnNormal, "red");

      ApplyNeonButtonEffect("backFinish", data.neon.btnNormal, "red");
      ApplyNeonButtonEffect("nextFinish", data.neon.btnNormal, "red");

      LoadShow(false,"", function(){
        $("#formRegister").delay( 1000 ).show();
      });
    }

    google.maps.event.addDomListener(window, 'load', function () {
        var places = new google.maps.places.Autocomplete(document.getElementById('txtEndereco'));
        google.maps.event.addListener(places, 'place_changed', function () {
        });
    });

    function ValidatePersonalDate(data) {
        var name = $('#formRegister').parsley().validate("name");
        var cpf = $('#formRegister').parsley().validate("cpf");
        var fone = $('#formRegister').parsley().validate("fone");
        var age = $('#formRegister').parsley().validate("age");

        if (name == true && cpf == true && fone == true && age == true)
            Next(data)
    }

    function ValidatePersonalAddress(data) {
        var address = $('#formRegister').parsley().validate("address");
        if (address == true)
            Next(data)
    }

    $(function () {
        $("#formRegister").on('submit', function (e) {
            var f = $(this);
            f.parsley().validate();
            if (f.parsley().isValid())
            {
                FormSuccess();
            }
            e.preventDefault();
            return false;
        });

        $('#txtEndereco').keyup(function () {
            var endereco = $('#txtEndereco').val();
            $('#field_address').val(endereco);
            $('#formRegister').parsley().validate("address");
        });

        $("#field_fone").inputmask({"mask": "(99) 99999-9999"});
        $("#field_celfone").inputmask({"mask": "(99) 99999-9999"});
        $("#field_cpf").inputmask({"mask": "999.999.999-99"});
        $("#field_age").inputmask({"mask": "99"});
        $("#field_mail").inputmask("email");
    });
</script>

<!-- Register Here -->
<script type="text/javascript">
    function FormSuccess() {
        LoadShow(true, "Cadastrando", function ()
        {
            //First Bullet
            var _name = $("#field_name").val().split(/\s+/);
            var _cpf = $('#field_cpf').val();
            var _fone = $('#field_fone').val();
            var _celfone = $('#field_celfone').val();
            var _age = $('#field_age').val();
            // woman == true, man == false
            var _gender = $("#option-woman:checked").length;
            //Second Bullet
            var _address = $('#txtEndereco').val();
            var _latitude = $('#txtLatitude').val();
            var _longitude = $('#txtLongitude').val();
            //Third Bullet
            var _mail = $('#field_mail').val();
            var _pass = $('#field_password').val();

            var formData = new FormData();
            formData.append('first_name', _name[0]);
            formData.append('last_name', _name[1]);
            formData.append('cpf', _cpf);
            formData.append('fone', _fone);
            formData.append('cel_fone', _celfone);
            formData.append('age', _age);
            formData.append('gender', _gender);
            formData.append('address', _address);
            formData.append('latitude', _latitude);
            formData.append('longitute', _longitude);
            formData.append('mail', _mail);
            formData.append('password', _pass);

            Register(formData);
        });
        return false;
    }

    function Register(formData) {
      ReqServer(
              "https://database.redwindow.com.br/intranet/requisitions/ReqPartner.php",
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
                            LoadAnotherPage("https://www.intranet.redwindow.com.br");
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

<script>
    $(window).on('load', function() {
        OnLoad();
    });
</script>