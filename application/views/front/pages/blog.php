<section class="slider_subpage" style="background-image: url(<?php echo base_url(); ?>uploads/<?php echo $blog->photo; ?>)" title="<?php echo $blog->alt; ?>">
  <h1 class="font_bold subpage_title"><?php echo $blog->title; ?></h1>
  <h3 class="subpage_subtitle"><?php echo $blog->subtitle; ?></h3>
</section>

<div class="separate_section">
  <div class="separate_section_remove"></div>
</div>

<section class="slider_white pb-0 bg-white text-white">
  <div class="container-fluid">
    <div class="row">
      <?php foreach ($rows as $v): ?>
      <div class="col-md-6 box-left mb-3">
        <div class="bg-photo p-5" style="background-image: url('<?php echo base_url(); ?>uploads/<?php echo $v->photo; ?>');" title="<?php echo $v->alt; ?>">
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
  </div>
</section>