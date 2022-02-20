<form class="" enctype="multipart/form-data"  method="POST" action="{{ route('contact.form') }}">
  {{csrf_field()}}
  
  <label class="label-input100">Primeiro Nome: </label>
  <div class="wrap-input100 rs1-wrap-input100">
    <input class="input100" type="text" name="name" id="name" placeholder="Seu nome" required>
    <span class="focus-input100"></span>
  </div>
  <label class="label-input100">Ultimo Nome: </label>
  <div class="wrap-input100 rs2-wrap-input100">
    <input class="input100" type="text" name="subname" id="subname" placeholder="Ultimo Nome" required>
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100">Digite seu email: </label>
  <div class="wrap-input100">
    <input class="input100" type="text" name="email"  id="email" placeholder="Ex: exemplo@email.com" required>
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100">Número de telefone: </label>
  <div class="wrap-input100">
    <input class="input100" type="text" name="phone" id="phone" placeholder="Ex: (xx) xxxxx-xxxx" required>
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100">Como podemos te ajudar? </label>
  <div class="wrap-input100">
    <select style="margin-bottom: 5%; border: 2px solid;padding: 15px;" class="input100 helpselector unic" type="text" name="assunt" id="assunt" placeholder="" required>
      <option disabled selected>Selecione</option>
      <option value="Change-Email">Mudar email</option>
      <option value="Change-Name">Mudar nome</option>
      <option value="Enable-2fa">Ativar 2FA</option>
      <option value="Disable-2FA">Desativar 2FA</option>
      <option value="Other-2FA">Outros problemas com 2FA</option>
      <option value="Problems-plataform">Problemas na plataforma</option>
      <option value="Other">Outros</option>
    </select>
    <span class="focus-input100"></span>
  </div>

  
  <!-- CHANGE EMAIL -->
  <label class="label-input100 Change-Email" style="display: none;">Novo email: </label>
  <div class="wrap-input100 Change-Email" style="display: none;">
    <input class="input100" type="text" name="op1_newemailregister" id="op1_newemailregister" placeholder="Ex: exemplo@exemple.com">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Change-Email" style="display: none;">Selfie com papel escrito: "solicito alteração do email"</label>
  <div class="wrap-input100 Change-Email" style="display: none;">
    <input class="input100" type="file" name="op1_photonewdocument" id="op1_photonewdocument" placeholder="" style="padding-top: 11px;">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Change-Email" style="display: none;">Selfie com documento de identidade</label>
  <div class="wrap-input100 Change-Email" style="display: none;">
    <input class="input100" type="file" name="op1_selfie" id="op1_selfie" placeholder="" style="padding-top: 11px;">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Change-Email" style="display: none;">Mensagem: </label>
  <div class="wrap-input100 Change-Email" style="display: none;">
    <textarea class="input100" type="text" name="op1_texto" id="op1_texto" placeholder="Digite sua mensagem"></textarea>
    <span class="focus-input100"></span>
  </div>


  <!-- CHANGE NAME -->
  <label class="label-input100 Change-Name" style="display: none;">Nome registrado na plataforma </label>
  <div class="wrap-input100 Change-Name" style="display: none;">
    <input class="input100" type="text" name="op2_registername" id="op2_registername" placeholder="Ex: João da Silva">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Change-Name" style="display: none;">Seu nome completo</label>
  <div class="wrap-input100 Change-Name" style="display: none;">
    <input class="input100" type="text" name="newname" id="newname" placeholder="Ex: João da Silva">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Change-Name" style="display: none;">Selfie com documento de identidade</label>
  <div class="wrap-input100 Change-Name" style="display: none;">
    <input class="input100" type="file" name="op2_photonewdocument" id="op2_photonewdocument" placeholder="photonewdocument" style="padding-top: 11px;">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Change-Name" style="display: none;">Selfie com papel escrito: "solicito alteração de nome"</label>
  <div class="wrap-input100 Change-Name" style="display: none;">
    <input class="input100" type="file" name="op2_selfie" id="op2_selfie" placeholder="" style="padding-top: 11px;">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Change-Name" style="display: none;">Mensagem: </label>
  <div class="wrap-input100 Change-Name" style="display: none;">
    <textarea class="input100" type="text" name="op2_texto" id="op2_texto" placeholder="Digite sua mensagem"></textarea>
    <span class="focus-input100"></span>
  </div>


  <!-- ENABLE 2FA -->
  <label class="label-input100 Enable-2fa" style="display: none;">Screenshot do erro</label>
  <div class="wrap-input100 Enable-2fa" style="display: none;">
    <input class="input100" type="file" name="op4_photo" id="op4_photo" placeholder="" style="padding-top: 11px;">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Enable-2fa" style="display: none;">Mensagem: </label>
  <div class="wrap-input100 Enable-2fa" style="display: none;">
    <textarea class="input100" type="text" name="op4_texto" id="op4_texto" placeholder="Digite sua mensagem"></textarea>
    <span class="focus-input100"></span>
  </div>


  <!-- DISABLE 2FA -->
  <label class="label-input100 Disable-2FA" style="display: none;">Selfie com documento de identidade</label>
  <div class="wrap-input100 Disable-2FA" style="display: none;">
    <input class="input100" type="file" name="op5_photonewdocument" id="op5_photonewdocument" placeholder="photonewdocument" style="padding-top: 11px;">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Disable-2FA" style="display: none;">Selfie com papel escrito: "Desativar 2FA" </label>
  <div class="wrap-input100 Disable-2FA" style="display: none;">
    <input class="input100" type="file" name="op5_selfie" id="op5_selfie" placeholder="" style="padding-top: 11px;">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Disable-2FA" style="display: none;">Mensagem: </label>
  <div class="wrap-input100 Disable-2FA" style="display: none;">
    <textarea class="input100" type="text" name="op5_texto" id="op5_texto" placeholder="Digite sua mensagem"></textarea>
    <span class="focus-input100"></span>
  </div>

  <!-- Other-2FA -->
  <label class="label-input100 Other-2FA" style="display: none;">Screenshot do erro</label>
  <div class="wrap-input100 Other-2FA" style="display: none;">
    <input class="input100" type="file" name="op6_photo" id="op6_photo" placeholder="" style="padding-top: 11px;">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Other-2FA" style="display: none;">Mensagem: </label>
  <div class="wrap-input100 Other-2FA" style="display: none;">
    <textarea class="input100" type="text" name="op6_texto" id="op6_texto" placeholder="Digite sua mensagem"></textarea>
    <span class="focus-input100"></span>
  </div>

  <!-- PROBLEMS PLATAFORM -->
 <!--  <label class="label-input100 Problems-plataform" style="display: none;">@lang('site/contact.enter-email').</label>
  <div class="wrap-input100 Problems-plataform" style="display: none;">
    <input class="input100" type="text" name="op7_emailregister" id="op7_emailregister" placeholder="Ex: name@exemple.com">
    <span class="focus-input100"></span>
  </div> -->

  <label class="label-input100 Problems-plataform" style="display: none;">Screenshot do erro</label>
  <div class="wrap-input100 Problems-plataform" style="display: none;">
    <input class="input100" type="file" name="op7_photo" id="op7_photo" placeholder="" style="padding-top: 11px;">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Problems-plataform" style="display: none;">Mensagem:</label>
  <div class="wrap-input100 Problems-plataform" style="display: none;">
    <textarea class="input100" type="text" name="op7_texto" id="op7_texto" placeholder="Digite sua mensagem"></textarea>
    <span class="focus-input100"></span>
  </div>



  <!-- Other -->
  <label class="label-input100 Other" style="display: none;">Screenshot do erro</label>
  <div class="wrap-input100 Other" style="display: none;">
    <input class="input100" type="file" name="op10_photo" id="op10_photo" placeholder="" style="padding-top: 11px;">
    <span class="focus-input100"></span>
  </div>

  <label class="label-input100 Other" style="display: none;">Mensagem:</label>
  <div class="wrap-input100 Other" style="display: none;">
    <textarea class="input100" type="text" name="op10_texto" id="op10_texto" placeholder="Digite sua mensagem"></textarea>
    <span class="focus-input100"></span>
  </div>

  <div class="container-contact100-form-btn">
    <input class="button-form" type="submit" name="send" value="Enviar">  
  </div>
</form>

