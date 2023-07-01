<?php


get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <section class="error-404 not-found">
      <header class="page-header">
        <h1 class="page-title">Page introuvable</h1>
      </header>

      <div class="page-content">
        <p>Essayez de faire une recherche :</p>

        <?php get_search_form(); ?>
      </div>
    </section>

  </main>
</div>

<?php
get_footer();
