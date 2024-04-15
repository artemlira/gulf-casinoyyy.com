<?php
?>

<footer class="footer">
  <div class="row">
    <div class="centered-container">
      <div class="footer__wrapper">
        <div class="col-md-3 left-side-foot">
          <a href="/">
            <img src="<?php the_field('logotype_footer'); ?>" alt="Logo" />
          </a>
        </div>
        <div class="col-md-6 center-side-foot">
        </div>
        <!--                <div class="col-md-3 right-side-foot">-->
        <!--                    <a href="tel:+44 7440964091">+44 7440964091</a>-->
        <!--                    <img src="--><!--/images/whatsapp.svg" alt="whatsapp" />-->
        <!--                </div>-->
      </div>
      <div class="short-descr-foot">
        <p><?php the_field('footer_short_description'); ?></p>
      </div>
      <?php if (have_rows('footer_copyright')) : ?>
        <?php while (have_rows('footer_copyright')) : the_row(); ?>
          <div class="foot-copyright-block">
            <div class="foot-copyright-block__right">
              <p><?php the_sub_field('right_copyright'); ?></p>
            </div>
            <div class="foot-copyright-block__left">
              <p><?php the_sub_field('left_text'); ?></p>
              <img src="<?php the_sub_field('left_image'); ?>" alt="">
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</footer>

<div id="stop" class="scrollTop">
  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/up-arrow.png" alt="top">
</div>
<?php wp_footer(); ?>
</body>

</html>