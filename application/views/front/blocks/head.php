<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php if($this->uri->segment(1) != '' && !isset($value->title)){echo ucfirst($this->uri->segment(1)) . ' - ';}
          elseif($this->uri->segment(1) != '' && isset($value->title)) {echo $value->title . ' - ';} ?>
    <?php echo $settings->meta_title; ?>
  </title>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async> 
  <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/mdb.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/style.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/css/preloader.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>

  <link href="<?php echo base_url(); ?>assets/front/dist/assets/owl.carousel.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>
  <link href="<?php echo base_url(); ?>assets/front/dist/assets/owl.theme.default.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async>

  <link href="<?php echo base_url(); ?>assets/front/dist/css/lightbox.css" rel="stylesheet" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async/>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>uploads/<?php echo $settings->logo; ?>"/>  
  <meta name="description" content="<?php echo $settings->description ?>">
  <meta name="keywords" content="<?php echo $settings->meta_title ?>,<?php echo $settings->description ?>">
  <meta name="author" content="Dawid Płóciennik AD Awards">
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css"/>
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" async></script>

</head>

<body>
  

<style type="text/css">
  body {
    color: <?php echo $settings->font_color; ?> !important;
  }
  .navbar, .sk-chase-dot:before, footer.page-footer .footer-copyright, .btn-primary {
    /* background-color: <?php echo $settings->first_color; ?> !important; */
    /* background-color: #0e1e27; */
    background-color:#000;
  }
  .form-check-input[type="checkbox"]:checked + label::before, label.btn input[type="checkbox"]:checked + label::before {
    border-right: 2px solid <?php echo $settings->first_color; ?> !important;
    border-bottom: 2px solid <?php echo $settings->first_color; ?> !important;
  }
  .md-form input[type="date"]:focus:not([readonly]), .md-form input[type="datetime-local"]:focus:not([readonly]), .md-form input[type="email"]:focus:not([readonly]), .md-form input[type="number"]:focus:not([readonly]), .md-form input[type="password"]:focus:not([readonly]), .md-form input[type="search-md"]:focus:not([readonly]), .md-form input[type="search"]:focus:not([readonly]), .md-form input[type="tel"]:focus:not([readonly]), .md-form input[type="text"]:focus:not([readonly]), .md-form input[type="time"]:focus:not([readonly]), .md-form input[type="url"]:focus:not([readonly]), .md-form textarea.md-textarea:focus:not([readonly]) {
      box-shadow: 0 1px 0 0 <?php echo $settings->first_color; ?> !important;
      border-bottom: 1px solid <?php echo $settings->first_color; ?> !important;
    }
    .md-form input[type="date"]:focus:not([readonly]) + label, .md-form input[type="datetime-local"]:focus:not([readonly]) + label, .md-form input[type="email"]:focus:not([readonly]) + label, .md-form input[type="number"]:focus:not([readonly]) + label, .md-form input[type="password"]:focus:not([readonly]) + label, .md-form input[type="search-md"]:focus:not([readonly]) + label, .md-form input[type="search"]:focus:not([readonly]) + label, .md-form input[type="tel"]:focus:not([readonly]) + label, .md-form input[type="text"]:focus:not([readonly]) + label, .md-form input[type="time"]:focus:not([readonly]) + label, .md-form input[type="url"]:focus:not([readonly]) + label, .md-form textarea.md-textarea:focus:not([readonly]) + label, .modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fab, .modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .far, .modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fas, .md-form label {
      color: <?php echo $settings->font_color_alt; ?> !important;
    }
  .bg-muted, .bg_footer, .panel_color {
    background-color: <?php echo $settings->second_color; ?>;
  }
  .bg_footer{
    background-color: #fafafa;
  }
  .separate_section_remove, .separate_section_alt {
    background-color: <?php echo $settings->third_color; ?> !important;
  }
  .info {
    border: 2px solid <?php echo $settings->third_color; ?>;
    background-color: <?php echo $settings->third_color; ?>;
    color: <?php echo $settings->font_color_alt; ?> !important;
  }
</style>

<?php if($this->session->flashdata('flashdata')) {
  echo '<div class="info">'.$this->session->flashdata('flashdata').'</div>';
} ?>

<div id="preloader">
  <div class="sk-chase">
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
  </div>
</div>