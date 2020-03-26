<div class="body">
    <div class="backgroud">
    </div>
     <!-- Start Description -->
     <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 header-content wow fadeInDown" align="center" style="visibility: visible; animation-name: fadeInDown;">
           <h1 class="funnytext">Seja bem-vindo</h1>
           </br>
           <p style="margin-top: -30px;">
             Para efetuar o login informe os dados abaixo.
           </p>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 form-content wow fadeInUp" align="center" style="visibility: visible; animation-name: fadeInUp;">
          <div class="col-md-4 col-sm-4 col-xs-12">
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- Start Login Form -->
            <form data-parsley-validate="" id="formLogin">
              <div class="container-form">
                <div class="col-md-12">
                  <input type="text" placeholder="Login" required id="field_mail"  data-parsley-error-message="Você precisa informar seu e-mail." style="margin-top: 0px !important;">
                </div>
                <div class="col-md-12">
                  <input type="password" placeholder="Senha" required id="field_password"  data-parsley-error-message="Você precisa informar sua senha.">
                </div>
                <button id="buttonLogin" class="submitbtn buttonConfirm" type="submit">Entrar</button>
              </div>
              <div class="container-form-cancel" align="center">
                <button  id="buttonLost" class="cancelbtn buttonLost" type="lost" onclick='event.preventDefault(); LoadPage("recoverpassword");'><u>Esqueceu sua senha?</u></button>
              </div>
            </div>
          </form>

            <!-- End Login Form -->
          </div>
      </div>
     <!-- End Description -->
   </div>
</div>
