<?php 
/*
Template Name: General Template
*/
?>

<?php get_header();?>    
<div class="content-area">
    <main>
        </section>
        <section class="middle-area">
            <div class="container">
                <div class="general-template">
                    <?php 
                        // Se houver algum post
                        if(have_posts() ):
                            // Enquanto houver posts, mostre-os para a gente
                            while(have_posts()): the_post();
                    ?>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </article>
                    <?php 
                        endwhile;
                    else:
                    ?>
                    <p> There's nothing yet to be displayed...</p>
                    <?php endif; ?>
                </div>
            </div>
    </main>
</div>
<?php get_footer();?>