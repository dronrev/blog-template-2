<footer style="border-top-color:<?php echo carbon_get_theme_option('footer_horizontal_line'); ?>;color: <?php echo carbon_get_theme_option('footer_text_color'); ?>; background-color:<?php echo carbon_get_theme_option('footer_bg_color'); ?>;">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center footer-wrapper">
      <div> <span>Copyright &copy; <?php echo carbon_get_theme_option('copyright_text'); ?></span> </div>
      <div class="privacy-term-section d-flex flex-row  justify-content-between align-items-center me-5">  
        <ul class="navbar-nav flex-row gap-3">
        <li class="nav-item me-3 me-lg-1">
        <?php
            wp_nav_menu(
              array(
                'menu' => 'term-condition-privacy-policy',
                'menu_class' => '',
                'container' => '',
                'theme_location' => 'term-condition-privacy-policy',
                'items_wrap' => '<div>%3$s</div>'
              )
            );
            ?>  
            </li>
          </ul>
      </div>
    </div>
  </div>
</footer>
</body>

</html>