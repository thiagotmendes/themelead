<?php /* template name: Home */ ?>
<?php get_header() ?>
  <?php  echo do_shortcode('[rev_slider alias="home"]') ?>
  <?php
  if (have_posts()):
    while(have_posts()): the_post();
  ?>
    <section id="quem-somos">
      <div class="container">
        <h1 class="text-center"> Quem Somos </h1>
        <div class="row">
          <div class="col-md-5">
            <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
          </div>
          <div class="col-md-7">
            <?php the_content() ?>
          </div>
        </div>
      </div>
    </section>

    <section id="visao" class="visao" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/images/paralax.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <p class="text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/parceria.png" alt="">
            </p>
            <h3>Parceria</h3>
            <?php echo get_field('parceria') ?>
          </div>
          <div class="col-md-3 col-sm-6">
            <p class="text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/qualidade.png" alt="">
            </p>
            <h3>Qualidade</h3>
            <?php echo get_field('qualidade') ?>
          </div>
          <div class="col-md-3 col-sm-6">
            <p class="text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/autosustentacao.png" alt="">
            </p>
            <h3>autosustentação</h3>
            <?php echo get_field('autosustentação') ?>
          </div>
          <div class="col-md-3 col-sm-6">
            <p class="text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/etica.png" alt="">
            </p>
            <h3>ética e valorização das pessoas</h3>
            <?php echo get_field('etica') ?>
          </div>
        </div>
      </div>
    </section>
  <?php
    endwhile;
  endif;
  ?>
  <section id="area-atuacao" class="servicos">
    <div class="container">
      <h2 class="text-center"> Serviços Oferecidos </h2>
      <div class="row">
      <?php
          $args = array(
            'post_type' => 'servico'
          );

          $servicosHome = new wp_query($args);
          if($servicosHome->have_posts()):
            while($servicosHome->have_posts()): $servicosHome->the_post()
            ?>
              <div class="col-md-3 col-sm-6">
                <a href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive mobiserv' ) ); ?>
                </a>
                <div class="row">
                  <div class="col-md-10 col-xs-10 ">
                    <h4> <?php the_title() ?> </h4>
                  </div>
                  <div class="col-md-2 col-xs-2">
                    <a href="<?php the_permalink() ?>">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-more.png" alt="Saiba Mais" class="saiba-mais ">
                    </a>
                  </div>
                </div>
              </div>
      <?php
            endwhile;
          endif;
       ?>
      </div>
    </div>
  </section>

  <section id="clientes">
    <div class="container">
      <h2 class="text-center">Clientes</h2>
      <div class="">
        <?php
        $page_id = 19;
        $page_data = get_page ( $page_id );
        remove_filter( 'the_content', 'wpautop' );
        echo apply_filters( 'the_content', $page_data->post_content );
        ?>
      </div>
    </div>
  </section>

<?php get_footer() ?>
