<section class="slider_white pb-0 bg-white text-center d-flex justify-content-center align-items-center pb-4" style="background-position: top center; background:url('<?= base_url().'uploads/'.$value->photo ?>'); height:35vh;">
    <div class="row" >
      <div class="col-md-12 box-left m-4 p-4">
        <h2 class="font_bold h1-responsive text-light"><?php echo $value->title; ?></h2>
        <?php if($value->subtitle != ''): ?>
        <h4 class="font_bold h4-responsive text-light"><?php echo $value->subtitle; ?></h4>
        <?php endif; ?>
        <?php if($value->short_desc != ''): ?>
        <p class="font_regular text-muted"><?php echo $value->short_desc; ?></p>
        <?php endif; ?>

        <!--<?php if($value->photo != ''): ?>
         <div class="text-center">
          
        <picture>
         <source srcset="<?= base_url().'uploads/'.$value->photo ?>.webp" type="image/webp"> 
          <source srcset="<?= base_url().'uploads/'.$value->photo ?>" type="image/jpeg"> 
          <img src="<?= base_url().'uploads/'.$value->photo ?>" class="img-fluid my-3" alt="<?= $value->alt ?>">
        </picture>
        </div>
        <?php endif; ?> -->
      </div>
    </div>
</section>

<section class="mt-4 mb-4">
  <div class="container">
      <div class="row">
                <?php if($value->description != ''): ?>
                    <div class="font_regular"><?php echo $value->description; ?></div>
                <?php endif; ?>
      </div>
</div>
</section>




<?php if(!empty($gallery)): ?>
<section class="slider_white bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="mdb-lightbox-ui"></div>
        <div class="mdb-lightbox no-margin">
          <?php foreach ($gallery as $v): ?>
          <?php list($width, $height) = getimagesize(base_url() . 'uploads/' . $v->photo); ?>
            <figure class="col-md-4">
              <a href="<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>" data-size="<?php echo $width . 'x' . $height; ?>">
                <div class="gallery_photo" style="background-image: url(<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>);" title="<?php echo $v->alt; ?>">
                  <img src="">
                </div>
              </a>
            </figure>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if($value->description2 != ''): ?>
<section class="slider_white pb-0 bg-white text-left">
  <div class="container">
    <div class="row">
      <div class="col-md-12 box-left mb-3">
        <div class="font_regular"><?php echo $value->description2; ?></div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>