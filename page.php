<?php get_header() ?>
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        ?>
      <header class="titulo-interno">
        <div class="container">
          <h1> <?php the_title() ?> </h1>
        </div>
      </header>
      <article class="interno">
        <div class="container">
          <?php the_content() ?>
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
