<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package EBI Visual Framework
 * @since EBI Visual Framework 1.0.0
 */

?>

      </section>
    </div>
    <div id="footer-container">
      <footer id="footer">
        <?php do_action( 'ebiframework_before_footer' ); ?>
        <?php dynamic_sidebar( 'footer-widgets' ); ?>
        <?php do_action( 'ebiframework_after_footer' ); ?>

        <div id="global-footer" class="global-footer">

<!-- New footer content will go here  -->

        </div>
      </footer>
    </div>

    <?php do_action( 'ebiframework_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
    </div><!-- Close off-canvas wrapper inner -->
  </div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'ebiframework_before_closing_body' ); ?>
</body>
</html>
