<section class="slider_subpage" style="background-image: url(<?php echo base_url();?>uploads/<?php echo $value->photo_2; ?>)" title="<?php echo $value->alt_2; ?>">
  <h1 class="font_bold subpage_title"><?php echo $value->title; ?></h1>
  <h3 class="subpage_subtitle"><?php echo $value->subtitle; ?></h3>
</section>

<div class="separate_section_alt">
  <div class="separate_section_remove_alt"></div>
</div>

<section class="slider_white bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <h2 class="font_bold text-left"><?php echo $value->title; ?></h2>
        <div class="text-left font_regular"><?php echo $value->description; ?></div>
      </div>
      <div class="col-md-6">
        <picture>
          <source srcset="<?= base_url().'uploads/'.$value->photo ?>.webp" type="image/webp">
          <source srcset="<?= base_url().'uploads/'.$value->photo ?>" type="image/jpeg"> 
          <img src="<?= base_url().'uploads/'.$value->photo ?>" class="img-fluid" alt="<?= $value->alt ?>">
        </picture>
      </div>
      <div class="col-md-12">
        <div class="text-left font_regular"><?php echo $value->description2; ?></div>
      </div>
    </div>
  </div>
</section>