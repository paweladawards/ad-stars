<section class="slider_subpage" style="background-image: url(<?php echo base_url(); ?>uploads/<?php echo $ofirmie->photo; ?>)" title="<?php echo $ofirmie->alt; ?>">
  <h1 class="font_bold subpage_title"><?php echo $ofirmie->title; ?></h1>
  <h3 class="subpage_subtitle"><?php echo $ofirmie->subtitle; ?></h3>
</section>

<div class="separate_section_alt">
  <div class="separate_section_remove_alt"></div>
</div>

<section class="section_padding">
  <!-- <h2 class="font_bold h1-responsive mb-5">AD STARS</h2> -->
  <div class="row">
    <?php foreach (array_reverse($ikony) as $v): ?>
    <div class="col-lg-2 col-md-4 col-6 mb-3 mb-lg-0 mx-auto d-flex flex-column justify-content-center align-items-center">
      <div class="">
      <picture>
        <!-- <source srcset="<?= base_url().'uploads/'.$v->photo ?>.webp" type="image/webp"> -->
        <source srcset="<?= base_url().'uploads/'.$v->photo ?>" type="image/jpeg"> 
        <img src="<?= base_url().'uploads/'.$v->photo ?>" alt="<?= $v->alt ?>">
      </picture>
      </div>
      <h2><?php echo $v->title; ?></h2>
      <p class="font-small"><?php echo $v->description; ?></p>
    </div>
    <?php endforeach ?>
  </div>
</section>

<?php $i=0; foreach (array_reverse($sekcja_1) as $v): if($i%2==0): ?>
<section class="section_padding slider_white panel_color">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-left">
        <h2 class="font_bold h1-responsive"><?php echo $v->title; ?></h2>
        <div class="font_regular"><?php echo $v->description; ?></div>
      </div>
      <div class="col-md-6">
      <picture>
        <!-- <source srcset="<?= base_url().'uploads/'.$v->photo ?>.webp" type="image/webp"> -->
        <source srcset="<?= base_url().'uploads/'.$v->photo ?>" type="image/jpeg"> 
        <img src="<?= base_url().'uploads/'.$v->photo ?>" class="img-fluid" alt="<?= $v->alt ?>">
      </picture>
      </div>
    </div>
  </div>
</section>
<?php else: ?>
<section class="section_padding bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <picture>
        <!-- <source srcset="<?= base_url().'uploads/'.$v->photo ?>.webp" type="image/webp"> -->
        <source srcset="<?= base_url().'uploads/'.$v->photo ?>" type="image/jpeg"> 
        <img src="<?= base_url().'uploads/'.$v->photo ?>" class="img-fluid" alt="<?= $v->alt ?>">
      </picture>
      </div>
      <div class="col-md-6 text-left">
        <h2 class="font_bold h1-responsive"><?php echo $v->title; ?></h2>
        <div class="font_regular"><?php echo $v->description; ?></div>
      </div>
    </div>
  </div>
</section>
<?php endif; $i++; endforeach; ?>

<section class="section_padding pb-0 bg-white">
  <div class="row">
    <?php foreach (array_reverse($sekcja_2) as $v): ?>
    <div class="col-md-6 box-left">
      <div class="p-5">
      <picture>
        <!-- <source srcset="<?= base_url().'uploads/'.$v->photo ?>.webp" type="image/webp"> -->
        <source srcset="<?= base_url().'uploads/'.$v->photo ?>" type="image/jpeg"> 
        <img src="<?= base_url().'uploads/'.$v->photo ?>" class="img-fluid mt-3" alt="<?= $v->alt ?>">
      </picture>
        <h2 class="font_bold h1-responsive"><a href="<?php echo create_link('ofirmie_wpis', $v->title, $v->id); ?>" class="text-dark"><?php echo $v->title; ?></a></h2>
        <p class="font_regular"><?php echo $v->subtitle; ?></p>
        <div>
          <a href="<?php echo create_link('ofirmie_wpis', $v->title, $v->id); ?>" class="font-weight-bold h5-responsive mr-4">Dowiedź się więcej <i class="ml-2 fas fa-angle-right"></i></a>
        </div>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</section>

<hr class="w-75">
<section class="section_padding  bg-white">
  <div class="container font_regular">
      <picture>
        <!-- <source srcset="<?= base_url().'uploads/'.$sekcja_3->photo ?>.webp" type="image/webp"> -->
        <source srcset="<?= base_url().'uploads/'.$sekcja_3->photo ?>" type="image/jpeg"> 
        <img src="<?= base_url().'uploads/'.$sekcja_3->photo ?>" class="img-fluid" alt="<?= $sekcja_3->alt ?>">
      </picture>
    <div><?php echo $sekcja_3->description; ?></div>
  </div>
</section>