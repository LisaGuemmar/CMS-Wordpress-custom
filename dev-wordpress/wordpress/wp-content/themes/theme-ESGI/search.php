<?php


get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php if (have_posts()) : ?>

      <header class="page-header">
        <h1 class="page-title">Résultats de la recherche pour "<?php echo get_search_query(); ?>"</h1>
      </header>

      <section class="search-results">

        <?php
      
        $pages_count = 0;
        $posts_count = 0;

        while (have_posts()) :
          the_post();

          if (get_post_type() === 'page') {
            $pages_count++;
          } elseif (get_post_type() === 'post') {
            $posts_count++;
          }
        endwhile;

        
        if ($pages_count > 0) :
        ?>
          <h2 class="search-results-title">Pages : <?php echo $pages_count; ?> page(s) trouvée(s)</h2>
          <ul class="search-results-list">
            <?php
            rewind_posts();
            while (have_posts()) :
              the_post();

              if (get_post_type() === 'page') :
            ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
              endif;
            endwhile;
            ?>
          </ul>
        <?php endif;

        if ($posts_count > 0) :
        ?>
          <h2 class="search-results-title">Articles : <?php echo $posts_count; ?> article(s) trouvé(s)</h2>
          <ul class="search-results-list">
            <?php
            rewind_posts();
            while (have_posts()) :
              the_post();

              if (get_post_type() === 'post') :
            ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
              endif;
            endwhile;
            ?>
          </ul>
        <?php endif; ?>

      </section>

    <?php else : ?>

      <section class="no-results">
        <header class="page-header">
          <h1 class="page-title">Résultats de la recherche pour "<?php echo get_search_query(); ?>"</h1>
        </header>

        <div class="page-content">
          <p>Aucun résultat trouvé.</p>
        </div>
      </section>

    <?php endif; ?>

  </main>
</div><

<?php
get_footer();
