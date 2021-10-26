<section class="slider_subpage" style="background-image: url(<?php echo base_url(); ?>uploads/<?php echo $oferta->photo; ?>)" title="<?php echo $oferta->alt; ?>">
  <h1 class="font_bold subpage_title"><?php echo $oferta->title; ?></h1>
  <h3 class="subpage_subtitle"><?php echo $oferta->subtitle; ?></h3>
</section>

<div class="separate_section_alt">
  <div class="separate_section_remove_alt"></div>
</div>

<section class="slider_white pb-0 bg-white">
  <div class="row">
    <?php foreach ($rows as $v): ?>
    <div class="col-md-6 box-left">
      <div class="bg-muted p-5">
        <h2 class="font_bold h1-responsive"><a href="<?php echo create_link('oferta_wpis', $v->title, $v->id); ?>" class="text-dark"><?php echo $v->title; ?></a></h2>
        <p class="font_regular"><?php echo $v->subtitle; ?></p>
        <div>
          <a href="<?php echo create_link('oferta_wpis', $v->title, $v->id); ?>" class="font-weight-bold h5-responsive mr-4">Dowiedź się więcej <i class="ml-2 fas fa-angle-right"></i></a>
        </div>
        <picture>
          <source srcset="<?= base_url().'uploads/'.$v->photo ?>.webp" type="image/webp">
          <source srcset="<?= base_url().'uploads/'.$v->photo ?>" type="image/jpeg"> 
          <img src="<?= base_url().'uploads/'.$v->photo ?>" class="img-fluid mt-3 offer_img" alt="<?= $v->alt ?>">
        </picture>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</section>