<?php get_header()?>

<h2>Have a question, comment, or suggestion?</h2>

<?php
  echo do_shortcode(
    '[contact-form-7 id="7" title="contactforblog"]'
  );
?>

<?php get_footer() ?>