<div class="body">
    <div class="backgroud">
    </div>
   <!-- Start Description -->
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 header-content wow fadeInDown" align="center" style="visibility: visible; animation-name: fadeInDown;">
         <h1 class="funnytext">Cadastro de modelo</h1>
         </br>
         <p style="margin-top: -30px;">
           Fazer parte do Red Window é muito fácil!
         </p>
      </div>
    </div>

    <div class="row" align="center">
      <!-- Multi Form -->
      <form class="multi-form wow fadeInUp" data-parsley-validate="" id="formRegister" hidden>
        <!-- progressbar -->
        <ul class="progressbar">
          <li id="progress_1"  class="active">Termos & Condições</li>
          <li id="progress_2" >Dados Pessoais</li>
          <li id="progress_3" >Endereço</li>
          <li id="progress_4" >Finalizar Cadastro</li>
        </ul>
        <!-- fieldsets -->
        <fieldset class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-12">
            <h2 class="multi-form-title">Termos & Condições</h2>
            <h3 class="multi-form-subtitle">Aceite os <b>Termos & Condições</b> para continuar o cadastro.</h3>
          </div>
          <div class="col-md-12">
            <textarea class="form_terms" id="field_terms" disabled></textarea>
          </div>
          <input id="buttomTerm" type="button" name="next" class="next button next-button" value="Aceitar" />
        </fieldset>
        <fieldset class="row col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h2 class="multi-form-title">Dados Pessoais</h2>
          </div>
          <div class="field-block">
            <input type="text" placeholder="Nome completo" required id="field_name" data-parsley-group="name" data-parsley-error-message="Você precisa informar seu nome.">
          </div>
          <div class="field-block">
            <input type="text" placeholder="Insira seu CPF" required id="field_cpf" data-parsley-group="cpf" data-parsley-error-message="Você precisa informar seu CPF.">
          </div>
          <div class="field-block">
            <input type="text" placeholder="Insira seu telefone" required id="field_fone" data-parsley-group="fone" data-parsley-error-message="Você precisa informar seu telefone.">
          </div>
          <div class="field-block">
            <input type="text" placeholder="Insira seu telefone para recados" id="field_celfone" >
          </div>
          <div class="field-block">
            <input type="text" placeholder="Insira sua idade" required id="field_age" data-parsley-group="age" data-parsley-error-message="Você precisa informar sua idade.">
          </div>
          <div align="center" style="float: center;">
            <label for="uname"><b>Sexo:</b></label>
            <ul class="segmented-control">
              <li class="segmented-control__item"> 
                <input 
                  class="segmented-control__input" 
                  type="radio" 
                  value="woman"
                  name="option" 
                  id="option-woman" 
                  checked
                >  
                <label class="segmented-control__label segmented-control__label__left" for="option-woman" > 
                  Mulher
                </label>
              </li>
              <li class="segmented-control__item"> 
                <input 
                  class="segmented-control__input" 
                  type="radio" 
                  value="man"   
                  name="option" 
                  id="option-man" 
                >  		
                <label class="segmented-control__label segmented-control__label__right" for="option-man" > 
                  Homem
                </label> 
              </li>
            </ul>
          </div>
          <input id="backPersonalDate" type="button" class="previous button previous-button" value="Anterior" />
          <input id="nextPersonalDate" type="button" class="button next-button" value="Próximo" onclick="ValidatePersonalDate(this)"/>
        </fieldset>
        <fieldset>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h2 class="multi-form-title">Endereço</h2>
          </div>

          <div class="field-block">
            <input type="text" placeholder="rua, cidade, estado, número" id="txtEndereco">
            <input type="text" required id="field_address" data-parsley-group="address" data-parsley-error-message="Você precisa informar seu endereço." style="display: none;">
            <text type="text" id="txtLatitude" hidden></text>
            <text type="text" id="txtLongitude" hidden></text>
            <span class="input-group-btn">
              <button type="button" class="search-button button" id="search_location" value="">Procurar</button>
            </span>
            <div class="col-md-12 col-sm-12 col-xs-12" id="map">
                <div class="map" id="mapa" style="width: 100%;height: 500px; border-radius: 15px;">Google Maps</div>
            </div>
          </div>

          <input id="backAddess" type="button" class="previous button previous-button" value="Anterior" />
          <input id="nextAddess" type="button" class="button next-button" value="Próximo" onclick="ValidatePersonalAddress(this)"/>
        </fieldset>
        <fieldset>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h2 class="multi-form-title">FINALIZAR CADASTRO</h2>
          </div>
          <div class="field-block">
            <input type="text" placeholder="Insira seu e-mail" required id="field_mail"  data-parsley-error-message="Você precisa informar seu e-mail.">
          </div>
          <div class="field-block">
            <input type="password" placeholder="Insira sua senha" required id="field_password"  data-parsley-error-message="Você precisa informar sua senha.">
          </div>

          <div class="field-block">
            <input type="password" placeholder="Insira sua senha novamente" required id="field_password_confirm" data-parsley-error-message="Você precisa confirmar sua senha.">
          </div>

          <input id="backFinish" type="button" class="previous button previous-button" value="Anterior" />
          <input id="nextFinish" type="submit" class="button action-button"/>
        </fieldset>
      </form>
      <!-- Multi Form  -->
    </div>
   <!-- End Description -->
</div>
