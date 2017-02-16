<?php get_header() ?>
<header class="titulo-interno">
  <div class="container">
    <h1> <?php the_title(); ?> </h1>
  </div>
</header>
<article class="interno">
  <div class="container">
    <div class="row">
      <?php if (have_posts()): ?>
        <?php
        while(have_posts()){ the_post();
        ?>
        <div class="well well-sm">
          <h2> <?php the_title() ?> </h2>
          <?php the_excerpt_limit(20) ?>
        </div>
        <?php
        }
        ?>
      <?php endif; ?>
    </div>
  </div>
</article>
<?php get_footer() ?>
