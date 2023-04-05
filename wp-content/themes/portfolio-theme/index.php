<?php get_header(); //header.php einebinden ?> 

<main>
    <h1 class="h1">Projekte</h1>
    <section class="Projekte">
        <?php
        while(have_posts()){ 
            the_post();?>
            <div class="Projekt">

            <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>

            <a href="<?php the_permalink(); ?>"> <h3><?php the_title();?></h3></a>
            <time datetime="<?php the_time('Y-m-d' );?>"><?php the_time('d.m.Y');?> </time>
            <ul>
                <?php 
                $categories = get_the_category();
                foreach($categories as $category){
                ?>

                <li><a href="<?php get_category_link($category->term_id);?>"><?php $category->name; ?></a></li>

                <?php 
                }?>

            </ul>
            

            <div class="wp-block-button">
                <a href="<?php the_permalink();?>"class="wp-block-button__link wp_button_projekt">Mehr zum Projekt</a>
            </div>
            </div>
           
            <?php 
        }?>
    </section>
</main>
<?php get_footer(); //footer einbinden ?><