<footer style="color: <?php echo carbon_get_theme_option('footer_text_color'); ?>; background-color:<?php echo carbon_get_theme_option('footer_bg_color'); ?>;">
  <div class="ui container">
    <div class="d-flex justify-content-between align-items-center footer-wrapper">
      <div> <span>Copyright &copy; <?php echo carbon_get_theme_option('copyright_text'); ?></span> </div>
      <div class="privacy-term-section d-flex justify-content-between align-items-center">
        <?php
        if (carbon_get_theme_option('privacy_visibility')) :
        ?>
          <div><a href="#privacy" style="color: <?php echo carbon_get_theme_option('footer_text_color'); ?>;">Privacy</a></div>
        <?php endif; ?>
        <?php
        if (carbon_get_theme_option('term_visibility')) :
        ?>
          <div><a href="#term" style="color: <?php echo carbon_get_theme_option('footer_text_color'); ?>;">Term</a></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>
</div>
</div>
<script>
  const toggle = () => $('.ui.sidebar').sidebar('toggle');
</script>
</body>

</html>