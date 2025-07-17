</main>
<footer>
  <?php
  //content
  $footer_text = get_field('footer_text', 'option');
  $zegers_info = get_field('zegers_contact_info', 'option');
  $gaba_info = get_field('gaba_contact_info', 'option'); ?>
  <div class="footer-content">
    <div class="text-container">
      <h2><?= $footer_text ?></h2>
      <img src="<?= get_template_directory_uri(); ?>/images/veertje.svg" class="feather">
    </div>
  </div>
  <div class="middle-footer">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 col-md-5">
          <div class="company-info">
            <div class="company-content">
              <h2>Een ontwikkeling van</h2>
              <?= $zegers_info; ?>
            </div>
          </div>

        </div>
        <div class="col-10 col-md-5">
          <div class="company-info">
            <div class="contact-content">
              <h2>Verkoop & Informatie</h2>
              <?= $gaba_info; ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="bottom-footer flex-center">
    <a href="https://www.zegersbouw.nl/privacy-en-disclaimer/">Privacy statement</a>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>