<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package EBI Visual Framework
 * @since EBI Visual Framework 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div id="skip-to">
    <ul>
      <li><a href="#content">Skip to main content</a></li>
      <li><a href="#local-nav">Skip to local navigation</a></li>
      <li><a href="#global-nav">Skip to EBI global navigation menu</a></li>
      <li><a href="#global-nav-expanded">Skip to expanded EBI global navigation menu (includes all sub-sections)</a></li>
    </ul>
  </div>

  <header id="masthead-black-bar-disable-auto-injection-from-script-js" class="clearfix masthead-black-bar">
    <div>
      <nav id="embl-bar" class="embl-bar global-masthead-interactive-banner">
        <div class="row padding-bottom-medium">
          <div class="columns padding-top-medium">
            <button class="close-button" aria-label="Close alert" type="button"><span aria-hidden="true">×</span></button>
          </div>
          <div class="columns medium-8">
            <div class="large-8 medium-12">
              <p></p>
              <h3 class="inline">EMBL</h3> was founded in 1974 by its member states to promote the molecular life sciences in Europe and beyond.
              <p></p>
            </div>
            <div class="row large-up-3 medium-up-3 small-up-2 no-underline medium-11">
              <div class="column padding-bottom-medium"><a class="" href="#research"><h5 class="inline underline">Research</h5> the molecular basis of life</a></div>
              <div class="column padding-bottom-medium"><a class="" href="#"><h5 class="inline underline">Services</h5> and infrastructure for research</a></div>
              <div class="column padding-bottom-medium"><a class="" href="#"><h5 class="inline underline">Training</h5> and inspiring scientists</a></div>
              <div class="column padding-bottom-medium"><a class="" href="#"><h5 class="inline underline">Transfer</h5> and deverlopment of technology</a></div>
              <div class="column padding-bottom-medium"><a class="" href="#"><h5 class="inline underline">Integrating</h5> life science research in Europe</a></div>
            </div>
            <div class="margin-top-xlarge no-underline">
              <h3><a href="//embl.org" class="readmore">More about EMBL</a></h3></div>
          </div>
          <div class="columns medium-4">
            <div class="large-10 medium-12">
              <p></p>
              <h3 class="inline">Six locations</h3> represent EMBL across Europe, each has its own focus.
              <p></p>
            </div>
            <div class="row large-up-3 medium-up-2 small-up-2">
              <div class="column">
                <h5><a href="//www.embl-barcelona.es/">Barcelona</a></h5>
                <p class="small">Tissue biology and disease modelling</p>
              </div>
              <div class="column">
                <h5><a href="//www.embl.fr/">Grenoble</a></h5>
                <p class="small">Structural biology</p>
              </div>
              <div class="column">
                <h5><a href="//www.embl-hamburg.de/">Hamburg</a></h5>
                <p class="small">Structural biology</p>
              </div>
              <div class="column">
                <h5><a href="//www.embl.de/">Heidelberg</a></h5>
                <p class="small">Main laboratory</p>
              </div>
              <div class="column">
                <h5><a href="https://www.ebi.ac.uk/">Hinxton</a></h5>
                <p class="small margin-bottom-none">Bioinformatiocs at the EBI</p>
              </div>
              <div class="column">
                <h5><a href="//www.embl.it/">Rome</a></h5>
                <p class="small">Epigenetics and neurobiology</p>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div>
      <nav class="row">
        <ul id="global-nav" class="menu global-nav text-right">
          <li class="where barcelona hide"><a href="#">Barcelona</a></li>
          <li class="where hamburg hide"><a href="#">Hamburg</a></li>
          <li class="where grenoble hide"><a href="#">Heidelberg</a></li>
          <li class="where grenoble hide"><a href="#">Grenoble</a></li>
          <li class="where rome hide"><a href="#">Rome</a></li>
          <li id="embl-selector" class="float-right show-for-medium embl-selector">
            <button class="button float-right" onclick="window.location.href='http://embl.org'">&nbsp;</button>
          </li>
          <li class="float-right search hide"><a href="#" class="inline-block collpased float-left search-toggle"><span class="show-for-small-only">Search</span></a></li>
          <li class="what about" target="_blank"><a href="//intranet.embl.de">EMBL Intranet</a></li>
          <li class="where ebi hide"><a href="https://www.ebi.ac.uk">EMBL-EBI</a></li>
          <li class="where ebi embl-x" target="_blank"><a href="http://www.embl.org">EMBL</a></li>
        </ul>
      </nav>
    </div>
  </header>
    
  <?php do_action( 'ebiframework_after_body' ); ?>

  <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
  <?php endif; ?>

  <?php do_action( 'ebiframework_layout_start' ); ?>

  <div data-sticky-container>
    <header id="masthead" class="masthead" data-sticky data-sticky-on="large" data-top-anchor="content:top" data-btm-anchor="content:bottom">
      <div class="masthead-inner row">
        <!-- local-title -->
        <div class="columns medium-12" id="local-title">
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        </div>
        <!-- /local-title -->

        <!-- local-nav -->
        <nav id="main-menu" class="navigation" role="navigation">
          <?php ebiframework_top_bar_r(); ?>
          <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
            <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
          <?php endif; ?>
        </nav>
        <!-- /local-nav -->
      </div>
    </header>
  </div>

  <div id="content" role="main" class="row">

    <section class="container">
      <?php do_action( 'ebiframework_after_header' );
