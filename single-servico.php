<?php get_header() ?>
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        $postId = get_the_id();
        ?>
      <header class="titulo-interno">
        <div class="container">
          <h1> <?php the_title() ?> </h1>
        </div>
      </header>
      <article class="interno">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <?php the_content() ?>
            </div>
            <div class="col-md-6">
              <div class="galeria-images">
                <?php
                $galeria = get_field('galeria');
                if ($galeria) {
                  foreach ($galeria as $gal) {
                ?>
                    <img src="<?php echo $gal['url'] ?>" alt="<?php echo $gal['alt'] ?>" class="img-responsive">
                <?php
                  }
                }
                ?>
              </div>
            </div>
          </div>
          <h2 class="text-center"> Outros Serviços </h2>
          <div class="row">
            <?php
            $argInterno = array(
              'post_type' => 'servico',
              'post__not_in' => array ($postId)
            );
            $servicosInterno = new wp_query($argInterno);
            if ($servicosInterno->have_posts()) {
              while($servicosInterno->have_posts()){ $servicosInterno->the_post();
              ?>
                <div class="col-md-3">
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
              }
            }
            ?>
          </div>
        </div>
      </article>
      <?php
        endwhile;
      ?>
      <?php
    else:
      ?>
      Nenhum conteudo inserido nesta página!
      <?php
    endif;
      ?>
<?php get_footer() ?>
