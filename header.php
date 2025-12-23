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
  <?php if (get_field('lightpaper_enable', 'option')): ?>
    <div class="lightpaper-banner">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="lightpaper-content">
              <?php echo get_field('lightpaper_content', 'option'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <header>
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-12 nav-container static">
            <div class="content-header">
              <!-- Hamburger Menu Button (Mobile Only) -->
              <button class="hamburger-menu" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
              </button>

              <div class="menu-left">
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'header-left',
                  'container' => false,
                  'menu_class' => 'nav-menu',
                  'fallback_cb' => false
                ));
                ?>
              </div>
              <div class="logo">
                <a href="<?= home_url('/'); ?>">
                  <?php $header_logo = get_field('header_logo', 'option'); ?>
                  <img src="<?= $header_logo['url']; ?>" alt="<?= $header_logo['alt']; ?>">
                </a>
              </div>
              <div class="menu-right">
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'header-right',
                  'container' => false,
                  'menu_class' => 'nav-menu',
                  'fallback_cb' => false
                ));
                ?>
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

            <!-- Mobile Menu Overlay -->
            <div class="mobile-menu-overlay">
              <div class="mobile-menu-content">
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'header-left',
                  'container' => false,
                  'menu_class' => 'mobile-nav-menu',
                  'fallback_cb' => false
                ));
                wp_nav_menu(array(
                  'theme_location' => 'header-right',
                  'container' => false,
                  'menu_class' => 'mobile-nav-menu',
                  'fallback_cb' => false
                ));
                ?>
                <?php if (have_rows('nav_socials', 'option')): ?>
                  <div class="mobile-socials">
                    <?php while (have_rows('nav_socials', 'option')):
                      the_row();
                      $social_logo = get_sub_field('social_logo', 'option');
                      $social_link = get_sub_field('social_link', 'option');
                      ?>
                      <?php if ($social_logo): ?>
                        <a href="<?= $social_link['url']; ?>" target="<?= $social_link['target']; ?>">
                          <img src="<?= $social_logo['url']; ?>" alt="<?= $social_logo['alt']; ?>">
                        </a>
                      <?php endif; ?>
                    <?php endwhile; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Mobile Menu Backdrop -->
    <div class="mobile-menu-backdrop"></div>
  </header>
  <main>