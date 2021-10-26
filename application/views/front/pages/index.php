<!-- BANERY -->
<?php if(!empty($baners)): ?>

  <?php foreach(array_reverse($baners) as $baner): ?>

      <section class="slider_white pb-0 d-flex justify-content-center align-items-lg-center align-items-sm-center align-items-start baner-bg js-scroll" style="background-color: <?php echo $baner->color; ?>; background-image:url('<?= base_url().'uploads/'.$baner->photo ?>');">
        <div class="col-12 w-100">
        <div class="col-lg-6 col-sm-6 col-12 p-4">
        <h1 class="font_bold baner_heading"><?php echo $baner->title; ?></h1>
        <h3 class="baner_subheading" ><?php echo $baner->subtitle; ?></h3>
        <div>
          <?php if($baner->link != '' && $baner->link_text != ''): ?>
          <a href="<?php echo $baner->link; ?>" class="font-weight-bold h5-responsive baner-link" style=""><?php echo $baner->link_text; ?> <i class="ml-2 fas fa-angle-right"></i></a>
          <?php endif; ?>
        </div>
        </div>
      </div>  
      </section>
  <?php endforeach; ?>
<?php endif; ?>


<!-- OFERTA WPISY -->
<section class="slider_white pb-0 bg-white js-scroll">
  <div class="row d-flex justify-content-center" >
  <h2 class="font_bold  mt-4 mb-4 pb-4 pt-4 text-dark display-4">NASZA OFERTA</h2>
  </div>
  <div class="row d-flex justify-content-center">
    <?php if(!empty($oferta_active) && is_array($oferta_active)): ?>
    <?php foreach ($oferta_active as $v): ?>
    <div class="col-md-6 box-left p-0 m-0">
      <div class=" p-4 mt-2 mb-2" style="background-color:#fafafa;">
        <h2 class="font_bold h1-responsive text-white">
          <a href="<?php echo create_link('oferta_wpis', $v->title, $v->id); ?>" class="text-dark"><?php echo $v->title; ?>
      </a>
    </h2>
        <p class="font_regular text-dark"><?php echo $v->subtitle; ?></p>
        <div>
          <a href="<?php echo create_link('oferta_wpis', $v->title, $v->id); ?>" class="font-weight-bold h5-responsive baner-link">Dowiedź się więcej <i class="ml-2 fas fa-angle-right"></i></a>
        </div>
      <picture>
        <!-- <source srcset="<?= base_url().'uploads/'.$v->photo ?>.webp" type="image/webp"> -->
        <source srcset="<?= base_url().'uploads/'.$v->photo ?>" type="image/jpeg">
        <source srcset="<?= base_url().'uploads/'.$v->photo ?>" type="image/png">
        <img src="<?= base_url().'uploads/'.$v->photo ?>" alt="<?= $v->alt ?>" class="img-fluid mt-3 offer_img">
      </picture>
      </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>
<!-- BLOG SECTION -->
<section class="slider_white pb-0 bg-white text-white js-scroll">
  <div class="row d-flex justify-content-center">
  <h2 class="font_bold mt-4 mb-4 pb-4 pt-4 text-dark display-4">BLOG</h2>
  </div>
  <div class="row d-flex justify-content-center">
    <?php if(!empty($blog_active) && is_array($blog_active)):  ?>
      <?php foreach ($blog_active as $v): ?>
      <div class="col-md-6 box-left mb-3">
        <div class="bg-photo p-5 my-hover" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" title="<?php echo $v->alt; ?>">
          <h2 class="font_bold h1-responsive blog-header"><?php echo $v->title; ?></h2>
          <?php if($v->subtitle != ''): ?>
          <h4><?php echo $v->subtitle; ?></h4>
          <?php endif; ?>
          <?php if($v->short_desc != ''): ?>
          <p class="px-5 font_regular"><?php echo $v->short_desc; ?></p>
          <?php endif; ?>
          <div class="offer_padding">
            <a href="<?php echo create_link('blog_wpis', $v->title, $v->id); ?>" class="font-weight-bold special_href font_regular baner-link">Dowiedź się więcej <i class="ml-2 fas fa-angle-right"></i></a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <?php endif; ?>
  </div>
</section>