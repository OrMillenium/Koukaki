<?php

get_header();
?>

    <main id="primary" class="site-main">
       
                
             
 <section class="banner">
              
                <div class="fade-in">
                
                     <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                </div>
                 <video id="background-video" autoplay loop muted>
                 <source src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/studio.mp4'; ?>" type="video/mp4">
                 </video>
                     </section>
             

        <section id="story" class="story">
            <h2>L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            
            <article>
                    <?php get_template_part('template-parts/carroussel'); ?>
            
            </article>

            <article id="place">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                    <div class="cloud"> 
                    <img id="bigcloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/big_cloud.png'; ?> " alt="gros nuage">
                     <img id="littlecloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images_koukaki/little_cloud.png'; ?> " alt="petit nuage">
                    
                    </div>
              
              
                

            </article>
        </section>


        <section id="studio">
            <h2>Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
            <section id="oscars">
              <?php get_template_part('template-parts/oscars'); ?>
            </section>
            
    
    </main><!-- #main -->

<?php
get_footer();
