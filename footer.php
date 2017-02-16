  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-assinatur.png" alt="">
        </div>
        <div class="col-md-5">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('rodape') ) :?>
              <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
          <?php endif; ?>
        </div>
        <div class="col-md-4">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('rodape1') ) :?>
              <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer() ?>
</body>
</html>
