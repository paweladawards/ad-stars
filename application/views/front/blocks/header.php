<header>
  <nav class="navbar navbar-expand-lg navbar-dark sticky">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>uploads/<?php echo $settings->logo; ?>" alt="<?php echo $settings->meta_title; ?>" class="img-fluid" width="40">
          </a>
        </li>
        <?php foreach($subpages as $page): ?>
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1) == $page->page){echo 'active';} ?>" href="<?php echo base_url(). $page->page; ?>"><?php echo $page->title; ?></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </nav>
</header>