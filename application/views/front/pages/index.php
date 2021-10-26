<?php if(isset($baner_3)): ?>
<section class="slider_white pb-0 d-flex justify-content-center align-items-lg-center align-items-sm-center align-items-start baner-bg js-scroll" style="background-color: <?php echo $baner_3->color; ?>; background-image:url('<?= base_url().'uploads/'.$baner_3->photo ?>');">
<div class="col-12 w-100">
  <div class="col-lg-6 col-sm-6 col-12 p-4">
  <h1 class="font_bold baner_heading"><?php echo $baner_3->title; ?></h1>
  <h3 class="baner_subheading" ><?php echo $baner_3->subtitle; ?></h3>
  <div>
    <?php if($baner_3->link != '' && $baner_3->link_text != ''): ?>
    <a href="<?php echo $baner_3->link; ?>" class="font-weight-bold h5-responsive mr-4" style="color: #ff0404!important"><?php echo $baner_3->link_text; ?> <i class="ml-2 fas fa-angle-right"></i></a>
    <?php endif; ?>
  </div>
  </div>
</div>  

  <!-- <?php if($baner_3->photo != ''): ?> -->
      <picture>
        <!-- <source srcset="<?= base_url().'uploads/'.$baner_3->photo ?>.webp" type="image/webp"> -->
        <!-- <source srcset="<?= base_url().'uploads/'.$baner_3->photo ?>" type="image/jpeg">
        <img src="<?= base_url().'uploads/'.$baner_3->photo ?>" alt="<?= $baner_3->alt ?>" class="img-fluid"> -->
      </picture>
  <!-- <?php endif; ?> -->
</section>
<?php endif; ?>

<?php if(isset($baner_2)): ?>
<section class="slider_white pb-0 d-flex justify-content-center align-items-lg-center align-items-sm-center align-items-start pt-8 pb-0  baner-bg js-scroll" style="background-image:url('<?= base_url().'uploads/'.$baner_2->photo ?>');">
  <div class="col-12 w-100 d-flex flex-row justify-content-lg-end justify-content-md-end justify-content-center">
  <div class="col-lg-6 col-sm-6 col-12 p-4">
  <h1 class="font_bold baner_heading"><?php echo $baner_2->title; ?></h1>
  <h3 class="baner_subheading" ><?php echo $baner_2->subtitle; ?></h3>
  <div>
    <?php if($baner_2->link != '' && $baner_2->link_text != ''): ?>
    <a href="<?php echo $baner_2->link; ?>" class="font-weight-bold h5-responsive mr-4" style="color: #ff0404!important"><?php echo $baner_2->link_text; ?>  <i class="ml-2 fas fa-angle-right"></i></a>
    <?php endif; ?>
  </div>
  </div>
</section>
<?php endif; ?>

<?php if(isset($baner_1)): ?>
<section class="slider_white pb-0 d-flex justify-content-center align-items-lg-center align-items-sm-center align-items-start pt-8 pb-0  baner-bg js-scroll" style="background-color: <?php echo $baner_1->color; ?>;background-image:url('<?= base_url().'uploads/'.$baner_1->photo ?>'">

    <?php if($baner_1->photo != ''): ?>
    <?php endif; ?>
    <div class="col-12 w-100 d-flex flex-row justify-content-lg-start justify-content-md-start justify-content-center">
  <div class="col-lg-6 col-sm-6 col-12 p-4">
  <h1 class="font_bold baner_heading"><?php echo $baner_1->title; ?></h1>
  <h3 class="baner_subheading" ><?php echo $baner_1->subtitle; ?></h3>
  <div>
    <?php if($baner_1->link != '' && $baner_1->link_text != ''): ?>
    <a href="<?php echo $baner_1->link; ?>" class="font-weight-bold h5-responsive mr-4" style="color: #ff0404!important"><?php echo $baner_2->link_text; ?>  <i class="ml-2 fas fa-angle-right"></i></a>
    <?php endif; ?>
  </div>
  </div>
</section>
<?php endif; ?>
<!-- <div class="separate_section">
  <div class="separate_section_remove"></div>
</div> -->


<section class="slider_white pb-0 bg-white">
  <div class="row">
    <?php foreach ($oferta_active as $v): ?>
    <div class="col-md-6 box-left">
      <div class="bg-muted p-5">
        <h2 class="font_bold h1-responsive"><a href="<?php echo create_link('oferta_wpis', $v->title, $v->id); ?>" class="text-dark"><?php echo $v->title; ?></a></h2>
        <p class="font_regular"><?php echo $v->subtitle; ?></p>
        <div>
          <a href="<?php echo create_link('oferta_wpis', $v->title, $v->id); ?>" class="font-weight-bold h5-responsive mr-4">Dowiedź się więcej <i class="ml-2 fas fa-angle-right"></i></a>
        </div>
      <picture>
        <!-- <source srcset="<?= base_url().'uploads/'.$v->photo ?>.webp" type="image/webp"> -->
        <!-- <source srcset="<?= base_url().'uploads/'.$v->photo ?>" type="image/jpeg"> -->
        <img src="<?= base_url().'uploads/'.$v->photo ?>" alt="<?= $v->alt ?>" class="img-fluid mt-3 offer_img">
      </picture>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</section>

<section class="slider_white pb-0 bg-white text-white">
  <div class="row">
      <?php foreach ($blog_active as $v): ?>
      <div class="col-md-6 box-left mb-3">
        <div class="bg-photo p-5" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>.jpg');" title="<?php echo $v->alt; ?>">
          <h2 class="font_bold h1-responsive"><?php echo $v->title; ?></h2>
          <?php if($v->subtitle != ''): ?>
          <h4><?php echo $v->subtitle; ?></h4>
          <?php endif; ?>
          <?php if($v->short_desc != ''): ?>
          <p class="px-5 font_regular"><?php echo $v->short_desc; ?></p>
          <?php endif; ?>
          <div class="offer_padding">
            <a href="<?php echo create_link('blog_wpis', $v->title, $v->id); ?>" class="font-weight-bold special_href font_regular mr-4">Dowiedź się więcej <i class="ml-2 fas fa-angle-right"></i></a>
          </div>
        </div>
      </div>
      <?php endforeach ?>
  </div>
</section>