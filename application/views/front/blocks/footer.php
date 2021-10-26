<footer class=" page-footer bg_footer mt-4 text-dark">



  <div class="container text-center text-md-left pt-4 pb-3">
    <div class="row">
      <div class="col-md-3 mx-auto">
        <div class="footer_nav font_bold mt-3 mb-4">MENU</div>
        <ul class="list-unstyled">
          <?php foreach($subpages as $page): ?>
          <li>
            <a href="<?php echo base_url(). $page->page; ?>" class="text-muted"><?php echo $page->title; ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col-md-3 mx-auto">
        <div class="footer_nav font_bold mt-3 mb-4">Oferta</div>
        <ul class="list-unstyled">
          <?php $i=0; foreach (array_reverse($oferta_footer) as $v): $i++; ?>
          <li>
            <a href="<?php echo create_link('oferta_wpis', $v->title, $v->id); ?>" class="text-muted"><?php echo $v->title; ?></a>
          </li>
          <?php if($i == 5){break;} endforeach; ?>
        </ul>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col-md-3 mx-auto">
        <div class="footer_nav font_bold mt-3 mb-4">Blog</div>
        <ul class="list-unstyled">
          <?php $i=0; foreach (array_reverse($blog_footer) as $v): $i++; ?>
          <li>
            <a href="<?php echo create_link('blog_wpis', $v->title, $v->id); ?>" class="text-muted"><?php echo $v->title; ?></a>
          </li>
          <?php if($i == 5){break;} endforeach ?>
        </ul>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col-md-3 mx-auto">
        <div class="footer_nav font_bold mt-3 mb-4">Kontakt</div>
        <ul class="list-unstyled">
          <li>
            <?php echo $contact->label1; ?> <a href="tel: <?php echo $contact->phone1; ?>" class="text-muted"><?php echo $contact->phone1; ?></a>
          </li>
          <li>
            <?php echo $contact->label2; ?> <a href="tel: <?php echo $contact->phone2; ?>" class="text-muted"><?php echo $contact->phone2; ?></a>
          </li>
          <li>
            <?php echo $contact->label3; ?> <a href="mailto: <?php echo $contact->email1; ?>" class="text-muted"><?php echo $contact->email1; ?></a>
          </li>
          <li>
            <?php echo $contact->label4; ?> <a href="mailto: <?php echo $contact->email2; ?>" class="text-muted"><?php echo $contact->email2; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>




  <div class="footer-copyright py-3">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 text-center text-md-left">
          <div class="d-flex flex-column">
          <p class="text-muted mb-1">Copyright © <?= date('Y'); ?> AdAwards. Wszelkie prawa zastrzeżone.</p> 
          <!-- &nbsp;|&nbsp;  -->
          <a class="mb-3" href="<?php echo base_url(); ?>uploads/<?php echo $settings->privace; ?>">Polityka prywatności</a></div>
        </div>
        <div class="col-12 col-md-6 text-center text-md-right">
          <?php if($settings->fb_link != ''): ?>
          <a href="<?php echo $settings->fb_link; ?>" class="footer_icon"><i class="fab fa-facebook-f"></i></a>
          <?php endif; ?>
          <?php if($settings->tw_link != ''): ?>
          <a href="<?php echo $settings->tw_link; ?>" class="footer_icon px-3"><i class="fab fa-twitter"></i></a>
          <?php endif; ?>
          <?php if($settings->inst_link != ''): ?>
          <a href="<?php echo $settings->inst_link; ?>" class="footer_icon pr-3"><i class="fab fa-instagram"></i></a>
          <?php endif; ?>
          <?php if($settings->yt_link != ''): ?>
          <a href="<?php echo $settings->yt_link; ?>" class="footer_icon"><i class="fab fa-youtube"></i></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright py-3">
    <div class="container">
      <div class="row">
        <div class="col-12 pt-3 pb-3 pt-lg-0 pb-lg-0">
          <div class="d-flex justify-content-center" ><a href="https://agencjamedialna.pro"><img class="img-fluid" style="" src="<?php echo base_url(); ?>uploads/2021-10-21/Group_62.svg"></a></div>
        </div>
        <!--
        <div class="col-12 col-lg-4 text-center">
          
          <a href="<?php echo base_url(); ?>uploads/<?php echo $settings->privace; ?>" class="footer_icon px-3" ><i class="fas fa-file"></i></a>
          <?php if($settings->fb_link != ''): ?>
          <a href="<?php echo $settings->fb_link; ?>" class="footer_icon px-3"><i class="fab fa-facebook-f"></i></a>
          <?php endif; ?>
          <?php if($settings->tw_link != ''): ?>
          <a href="<?php echo $settings->tw_link; ?>" class="footer_icon px-3"><i class="fab fa-twitter"></i></a>
          <?php endif; ?>
          <?php if($settings->inst_link != ''): ?>
          <a href="<?php echo $settings->inst_link; ?>" class="footer_icon px-3"><i class="fab fa-instagram"></i></a>
          <?php endif; ?>
          <?php if($settings->yt_link != ''): ?>
          <a href="<?php echo $settings->yt_link; ?>" class="footer_icon px-3"><i class="fab fa-youtube"></i></a>
          <?php endif; ?>
        </div>
        -->
      </div>
    </div>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="far fa-arrow-alt-circle-up"></i></button>
</footer>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/mdb.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/dist/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/initializator.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/counter.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/scroll-animate.js"></script>
<script src="<?php echo base_url(); ?>assets/front/lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/front/dist/js/lightbox.js"></script>
<script type="text/javascript">
$(function () {
$("#mdb-lightbox-ui").load("<?php echo base_url(); ?>assets/front/mdb-addons/mdb-lightbox-ui.html");
});
</script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
"palette": {
"popup": {
"background": "<?php echo $settings->first_color; ?>",
"text": "<?php echo $settings->font_color_alt; ?>"
},
"button": {
"background": "<?php echo $settings->second_color; ?>",
"text": "<?php echo $settings->font_color; ?>"
}
},
"type": "opt-out",
"content": {
"message": "Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom satysfakcjonujące wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie.",
"dismiss": "Rozumiem",
"deny": "",
"allow": "Rozumiem",
"link": "Czytaj więcej...",
"href": "<?php echo base_url(); ?>uploads/<?php echo $settings->privace ?>"
}
})});
</script>
<?php if ($this->uri->segment(1) == 'kontakt') : ?>
  <script src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>" defer></script>
  <script defer>
    $('#contact-form').submit(function(event) {
      event.preventDefault();
      var email = $('#email').val();

      grecaptcha.execute('<?= $settings->captcha ?>', {
        action: 'mailer/send'
      }).then(function(token) {
        $('#contact-form').prepend('<input type="hidden" name="token" value="' + token + '">');
        $('#contact-form').prepend('<input type="hidden" name="secret_key" value="<?= $settings->captcha_secret ?>">');
        $('#contact-form').prepend('<input type="hidden" name="action" value="mailer/send">');
        $('#contact-form').unbind('submit').submit();
      });;
    });
  </script>
<?php endif; ?>
<script type="text/javascript">
  links = document.querySelectorAll("link");
  for (var i = links.length - 1; i >= 0; i--) {
    if (links[i].getAttribute('rel') == 'preload') {
      links[i].setAttribute("rel", "stylesheet");
    }
  }
</script>
<script>
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
</body>
</html>