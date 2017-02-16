<?php get_header() ?>
  <header class="titulo-interno">
    <div class="container">
      <h1> Oops! erro 404 </h1>
    </div>
  </header>
  <article class="interno">
    <div class="container">
      <p class="text-center">O endereço que você está tentando acessar, não existe ou foi excluido!</p>
      <p class="text-center">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-success"> Voltar para a home do site </a>
      </p>
    </div>
  </article>
<?php get_footer(); ?>
