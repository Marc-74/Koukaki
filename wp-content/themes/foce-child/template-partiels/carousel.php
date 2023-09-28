<?php
        $characters_query = new WP_Query(array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key' => '_main_char_field',
            'orderby' => 'meta_value_num',
        ));
        ?>

<article id="characters">
            <div class="main-character">
                <h3 class="section-title fade-in-title ">Les personnages</h3>
                <div class="swiper-container ">
                    <div class="swiper-wrapper">
                        <?php while ($characters_query->have_posts()) : $characters_query->the_post(); ?>
                            <div class="swiper-slide">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                                <figcaption><?php the_title(); ?></figcaption>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </article>
