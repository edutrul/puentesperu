<header class="main-header">

  <div class="container">
    <?php if (!empty($site_name)): ?>
    <h1 class="main-heading">
      <img width="150px" src="/sites/all/themes/csalud/img/puentesperu_WT.png">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Puentes<span class="logo-2">Peru</span><span class="logo-3">.tk</span></a>
    </h1>
    <?php endif; ?>

    <?php if ($page['head']): ?>
      <div class="head-region">
        <?php print render($page['head']); ?>
      </div>
    <?php endif; ?>

  </div>

</header> <!-- /main-header -->

<main class="container">

  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
  <?php endif; ?>

  <?php if ($page['top']): ?>
    <div class="page-top">
      <?php print render($page['top']); ?>
    </div>
  <?php endif; ?>

  <div id="content" class="column">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>

      <h1 class="title" id="page-title">
        <?php print $title; ?>
      </h1>

    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs): ?>
      <div class="tabs">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>

    <?php print render($page['content']); ?>
  </div><!-- /.content -->

  <?php if ($page['bottom']): ?>
    <div class="page-bottom">
      <?php print render($page['bottom']); ?>
    </div>
  <?php endif; ?>

</main>

<footer id="footer-wrapper" class="main-footer">
  <div class="container">
    <?php if ($page['footer']): ?>
      <?php print render($page['footer']); ?>
    <?php endif; ?>
  </div>
</footer>
