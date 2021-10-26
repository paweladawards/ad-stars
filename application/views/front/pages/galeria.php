<section class="slider_subpage" style="background-image: url(<?php echo base_url(); ?>uploads/<?php echo $galeria->photo; ?>)" title="<?php echo $galeria->alt; ?>">
  <h1 class="font_bold subpage_title"><?php echo $galeria->title; ?></h1>
  <h3 class="subpage_subtitle"><?php echo $galeria->subtitle; ?></h3>
</section>

<?php if(!empty($gallery)): ?>
<section class="slider_white bg-white">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 p-0">
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