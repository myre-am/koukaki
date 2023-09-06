<?php

get_header();
?>

    <main id="primary" class="site-main">
        
        <section class="banner">
                <video class="video" autoplay muted loop>
                    <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/koukaki_video.mp4'; ?>" type="video/mp4">
                </video>

                <div>
                    <img class="logo" data-0="top:30%" data-600="top:60%" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
                </div>
        </section>
        

        <section id="#story" class="story section">
            <h2 class="title js-fade-in-title"><span>L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php get_template_part('template-parts/personnages'); ?>
            <article id="place">
                <div>
                    <h3 class="title"><span>Le</span> <span>Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <img class="bigcloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?> " alt="Big Cloud">
                <img class="littlecloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?> " alt="Little Cloud">
            
            </article>
        </section>


        <section class="section" id="studio">
            <h2 class="title js-fade-in-title"><span>Studio</span> <span>Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <?php get_template_part('template-parts/nominations'); ?>    
    </main><!-- #main -->


<?php
get_footer();
