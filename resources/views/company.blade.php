<section id="contacts-1" class="bg-fixed bg-lightgrey wide-30 contacts-section division">
  <div class="container">
    <!-- SECTION TITLE -->
    <div class="row">
      <div class="col-md-10 offset-md-1 section-title">
        <!-- Title 	-->
        <h2 class="h2-lg">É representante de uma empresa de transporte ? 🚐</h2>
        <!-- Text -->
        <p>Faça já o seu pré cadastro para poder disponibilizar horários e rotas de suas linhas e conquiste mais
          passageiros!
        </p>
      </div>
    </div>
    <!-- END SECTION TITLE -->
    <!-- CONTACT FORM -->
    <div class="row">
      <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
        <div class="form-holder">
          <form method="POST" action="{{route('company')}}" name="contactform" class="row contact-form">
            <!-- Contact Form Input -->
            @csrf
            <div id="input-name" class="col-lg-12">
              <input type="text" name="name" class="form-control name" placeholder="Seu Nome*"
                     required maxlength="190">
            </div>

            <div class="col-lg-6">
              <input type="text" name="company_name" class="form-control" placeholder="Nome da Empresa*"
                     required maxlength="190">
            </div>

            <div class="col-lg-6">
              <input type="text" name="cnpj" class="form-control cnpj" placeholder="CNPJ*"
                     maxlength="18" minlength="18" required>
            </div>

            <div class="col-lg-6">
              <input type="text" name="phone" class="form-control phone"
                     minlength="13"
                     maxlength="14"
                     required
                     placeholder="Telefone da empresa *">
            </div>

            <div class="col-lg-6">
              <input type="email" name="email" class="form-control email" placeholder="Email*" required
                     maxlength="191">
            </div>

            <!-- Contact Form Button -->
            <div class="col-lg-12 m-top-15 form-btn text-right">
              <button type="submit" class="btn btn-lightblue submit">🚐 Pré Cadastro 😀</button>
            </div>
            <!-- Contact Form Message -->
            <div class="col-lg-12 contact-form-msg">
              <span class="loading"></span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- END CONTACT FORM -->
  </div>
  <!-- End container -->
</section>
