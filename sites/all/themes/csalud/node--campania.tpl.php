<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <header class="row node-heading">
        
    <div class="col-md-10">
      <?php print render($title_prefix); ?>
        <h2<?php print $title_attributes; ?> class="campaign-node-title"><a href="<?php print $node_url; ?>">
          <?php print $title; ?></a>
        </h2>
      <?php print render($title_suffix); ?>
    </div>
    
    <div class="col-md-2">
      <?php if($content['field_date']): ?>
        <?php print render($content['field_date']);?>
      <?php endif; ?>
    </div>
    
  </header><!-- /.node-header -->
<?php dpm($content); ?>
  <?php if($content['field_is_free']['#items'][0]['value']): ?>
    <div class="free">
      GRATUITA
    </div>
  <?php endif; ?>

  <div class="row">
    <div class="col-md-6 no-padding-right">
      <?php if($content['field_image']): ?>
        <?php print render($content['field_image']); ?>
      <?php endif; ?>
    </div><!-- /.col-md-6 -->

    <div class="col-md-6">
      <?php print views_embed_view('establecimiento_salud_map', 'est_blk_map', $node->nid); ?>
    </div><!-- /.col-md-6 -->
  </div><!-- /.row -->

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_date']);
      hide($content['field_is_free']);
      hide($content['field_age_range']);
      hide($content['field_campaign_type']);
      hide($content['field_image']);
      hide($content['field_establishment']);
      print render($content);
    ?>

    <?php print render($content['links']); ?>
    <?php print render($content['comments']); ?>

    <?php if($content['field_campaign_type']): ?>
      <?php print render($content['field_campaign_type']); ?>
    <?php endif; ?>
    <?php if($content['field_age_range']): ?>
      <?php print render($content['field_age_range']); ?>
    <?php endif; ?>

  </div><!-- /.content -->


</article>
