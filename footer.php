</main>
<footer>
  <?php
  //content
  $footer_text = get_field('footer_text', 'option');
  ?>
  <div class="footer-content">
    <div class="text-container">
      <h2><?= $footer_text ?></h2>
      <img src="<?= get_template_directory_uri(); ?>/images/veertje.svg" class="feather">
    </div>
  </div>
  <div class="bottom-footer flex-center">
    <a href="<?= get_privacy_policy_url(); ?>">Privacy statement</a>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>