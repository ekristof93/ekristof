<?php
  get_header();
?>
<div class="page-section page-section--light">
  <div class="wrapper wrapper--narrow wrapper--centered">
    <h2 class="headline headline--no-margin u-margin-top-of-the-page">Az oldal nem található</h2>
  </div>
</div>

<div class="page-section page-section--dark">
  <div class="wrapper wrapper--narrow wrapper--centered">
    <h3 class="headline headline--light headline--no-t-margin headline--smaller"><?php _e('Próbálkozzon meg a kereséssel', 'ekristof') ?></h3>
    <?php get_search_form(); ?>
  </div>
</div>
<?php get_footer() ?>
