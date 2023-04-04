<?php get_header(); //header einbinden ?>

<main>
    <?php the_post(); ?>

    <article>
    <h1><?php the_title(); ?></h1>
    <h4><?php the_category();?></h4>
    <?php the_content() ;?>    
</article>

</main>

<?php
get_footer(); //footer einbinden 
?>