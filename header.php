<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.typekit.net/cyv1pde.css">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
  <header class="live yo">
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-12 nav-container static">
            <div class="content-header">
              <div class="spacer-left"></div>
              <div class="logo">
                <?php $header_logo = get_field('header_logo', 'option'); ?>
                <img src="<?= $header_logo['url']; ?>" alt="<?= $header_logo['alt']; ?>">
              </div>

              <?php if (have_rows('nav_socials', 'option')): ?>
                <div class="repeater-wrapper">
                  <?php while (have_rows('nav_socials', 'option')):
                    the_row();
                    $social_logo = get_sub_field('social_logo', 'option');
                    $social_link = get_sub_field('social_link', 'option');
                    ?>
                    <div class="repeater-item">
                      <?php if ($social_logo): ?>
                        <a href="<?= $social_link['url']; ?>" target="<?= $social_link['target']; ?>">
                          <img src="<?= $social_logo['url']; ?>" alt="<?= $social_logo['alt']; ?>">
                        </a>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>