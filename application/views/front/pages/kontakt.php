<section class="slider_subpage" style="background-image: url(<?php echo base_url(); ?>uploads/<?php echo $kontakt->photo; ?>)" title="<?php echo $kontakt->alt; ?>">
  <h1 class="font_bold subpage_title"><?php echo $kontakt->title; ?></h1>
  <h3 class="subpage_subtitle"><?php echo $kontakt->subtitle; ?></h3>
</section>


<div class="separate_section_alt">
  <div class="separate_section_remove_alt"></div>
</div>

<section class="">
    <div class="row w-100 ml-0 mr-0">
    <div class="col-12 pl-0 pr-0" style="height:42vh;">
            <iframe src="<?php echo $contact->map; ?>" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>

    </div>

    <div class="container-fluid my-5"> 
      <div class="row pl-4 pr-4 ml-4 mr-4 mb-4">

          <div class="col-12 mb-md-0 mb-4">
              <form id="contact-form" name="contact-form" action="<?php echo base_url(); ?>mailer/send" method="POST">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                              <input type="text" id="name" name="name" class="form-control" required>
                              <label for="name" class="">Imię i nazwisko</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="email" id="email" name="email" class="form-control" required>
                              <label for="email" class="">Adres e-mail</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="tel" id="phone" name="phone" class="form-control" required>
                              <label for="phone" class="">Telefon</label>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                              <input type="text" id="subject" name="subject" class="form-control" required>
                              <label for="subject" class="">Temat</label>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form">
                              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                              <label for="message">Wiadomość</label>
                          </div>
                      </div>
                  </div>
                  <div class="row mt-2">
                      <div class="col-md-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rodo1" name="rodo1" value="1">
                            <label class="form-check-label" for="rodo1"><small>„Wyrażam zgodę na przetwarzanie przez danych osobowych podanych w formularzu. Podanie danych jest dobrowolne. Administratorem podanych przez Pana/ Panią danych osobowych jest <?php echo $contact->company; ?> z siedzibą w ul. <?php echo $contact->address; ?>, <?php echo $contact->city; ?>, <?php echo $contact->zip_code; ?>. Pana/Pani dane będą przetwarzane w celach związanych z udzieleniem odpowiedzi, przedstawieniem oferty usług <?php echo $contact->company; ?> oraz świadczeniem usług przez administratora danych. Przysługuje Panu/Pani prawo dostępu do treści swoich danych oraz ich poprawiania.”</small></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rodo2" name="rodo2" value="1">
                            <label class="form-check-label" for="rodo2"><small>„Wyrażam zgodę na otrzymywanie informacji handlowych od <?php echo $contact->company; ?> dotyczących jej oferty w szczególności poprzez połączenia telefoniczne lub sms z wykorzystaniem numeru telefonu podanego w formularzu, a także zgodę na przetwarzanie moich danych osobowych w tym celu przez <?php echo $contact->company; ?> oraz w celach promocji, reklamy i badania rynku.”</small></label>
                        </div>
                      </div>
                  </div>

              <div class="text-center text-md-left mt-4 d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary w-50 my-button">Wyślij</button>
              </div>
              </form>
              <div class="status"></div>
          </div>
        </div>

        <div class="row d-flex justify-content-center align-items-center mt-5 pt-4">
          <div class=" col-12 col-lg-6 text-center">
              <ul class="list-unstyled mb-0 d-flex flex-column flex-lg-row flex-md-row justify-content-center align-items-center ">
                  

                  <li class="mx-2">
                      <a href="tel:<?php echo $contact->phone1; ?>" class="text-dark">

                      <i class="fas fa-phone mt-4 fa-2x"></i>
                      <!-- <p><?php echo $contact->phone1; ?></p> -->
                      <p>ZADZWOŃ</p>
                    </a>
                  </li>

                  <li class="mx-2 pt-4"><a class="text-dark" href="https://www.google.com/maps/place/<?= $contact->address ?>,+<?= $contact->zip_code ?>+<?= $contact->city; ?>/ " >
                  <i class="fas text-dark fa-map-marker-alt fa-2x"></i>
                      <!-- <p><?php echo $contact->address; ?>,<br /> <?php echo $contact->city; ?> <?php echo $contact->zip_code; ?></a></p> -->
                      <p>ODWIEDŹ NAS</p>
                  </li>

                  <li class="mx-2">
                    <a href="mailto:<?php echo $contact->email1; ?>" class="text-dark">
                      <i class="fas fa-envelope mt-4 fa-2x"></i>
                        <!-- <p><?php echo $contact->email1; ?></p> -->
                        <p>NAPISZ</p>
                    </a>
                  </li>
              </ul>
          </div>
      </div>
    </div>
</section>

