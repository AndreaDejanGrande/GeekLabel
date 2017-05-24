<?php
  /*

  SIMPLE PAGE TEMPLATE FOR GEEK-LABEL

  -divided into 8 regions;
  -every region is both named and CSS classified as page__x, with x being the page number;

  */
?>

<div class="container" id="container">
  <?php if (!empty($page['pages__1'])): ?>
    <div class="gl__page gl__pages__front gl__pages__1" id="gl__pages__1">
      <?php print render($page['pages__1']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($page['pages__2'])): ?>
    <div class="gl__page gl__pages__secondary gl__pages__2" id="gl__pages__2">
      <?php print render($page['pages__2']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($page['pages__3'])): ?>
    <div class="gl__page gl__pages__3" id="gl__pages__3">
      <?php print render($page['pages__3']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($page['pages__4'])): ?>
    <div class="gl__page gl__pages__4" id="gl__pages__4">
      <?php print render($page['pages__4']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($page['pages__5'])): ?>
    <div class="gl__page gl__pages__5" id="gl__pages__5">
      <?php print render($page['pages__5']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($page['pages__6'])): ?>
    <div class="gl__page gl__pages__6" id="gl__pages__6">
      <?php print render($page['pages__6']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($page['pages__7'])): ?>
    <div class="gl__page gl__pages__7" id="gl__pages__7">
      <?php print render($page['pages__7']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($page['pages__8'])): ?>
    <div class="gl__page gl__pages__8" id="gl__pages__8">
      <?php print render($page['pages__8']); ?>
    </div>
  <?php endif; ?>
</div>
