<article id="characters">
    <div class="main-character">
        <h3>Les personnages</h3>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src=<?php echo get_theme_file_uri("./assets/images/Kawaneko.png");?> alt="Kawaneko Character" />
                    <p class="character-name">Kawaneko</p>
                </div>
                <div class="swiper-slide">
                    <img src=<?php echo get_theme_file_uri("./assets/images/Orenjiiro.png");?> alt="Orenjiiro Character" />
                    <p class="character-name">Orenjiiro</p>
                </div>
                <div class="swiper-slide">
                    <img src=<?php echo get_theme_file_uri("./assets/images/Pinku.png");?> alt="Pinku Character" />
                    <p class="character-name">Pinku</p>
                </div>
                <div class="swiper-slide">
                    <img src=<?php echo get_theme_file_uri("./assets/images/Tenshi.png");?> alt="Tenshi Character" />
                    <p class="character-name">Tenshi</p>
                </div>
                <div class="swiper-slide">
                    <img src=<?php echo get_theme_file_uri("./assets/images/Jaakuna.png");?> alt="Jaakuna Character" />
                    <p class="character-name">Jaakuna</p>
                </div>
            </div>
        </div>
    </div>
</article>
<?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
             
                
                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<figure>';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                    }
                    ?>
            </article>