<?php
/**
 * @file
 * Template for Zurb Foundation Two column bricks Display Suite layout.

 * Bland annat logik för visningen av rubriker och kategorier på sidorna
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="tb-guiden-page <?php print $classes;?>">

  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php
    $mainpath = url($_GET['q']);
    $a = "/sv/damm";
    $b = "/sv/arbete-pa-hog-hojd";
    $c = "/sv/sakra-lyft";
    $d = "/sv/vibrationer";

    $aa = "/en/dust";
    $bb = "/en/work-height";
    $cc = "/en/sakra-lyft";
    $dd = "/en/vibrationer";
  ?>
  <?php if($mainpath == $a || $mainpath == $b || $mainpath == $c || $mainpath == $d || $mainpath == $aa || $mainpath == $bb || $mainpath == $cc || $mainpath == $dd): ?>  
    <!-- nothing -->
    <?php if($mainpath == $d || $mainpath == $c): ?>
      <div class="balk">
        <header class="row">  
        <div class="small-12">
            <?php print $kategori; ?>
            
        </div>
      </header> 
    </div>
    <?php endif; ?>  

  <?php else: ?>
  <div class="balk">
   <header class="row">  
      <div class="small-12">
          <?php print $kategori; ?>
          <?php print $rubrik; ?>
      </div>
    </header>
  </div>
  <?php endif; ?>    
<?php if (!empty($innehall)): ?>
  <main class="row">
    <div class="small-12">
      <?php print $innehall; ?>
    </div>
  </main>
<?php endif; ?>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
