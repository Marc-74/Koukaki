<?php get_header(); ?>

<main id="primary" class="site-main">
    <section class="banner fade-in animate-on-scroll fade-in-down">
        <div id="container">
            <div id="parallax-wrapper">
                <video id="video-bg" autoplay muted loop class="fallback-video" poster="<?php echo get_template_directory_uri() . '/assets/images/orchid.png'; ?>">
                    <source src="<?php echo get_template_directory_uri() ?>-child/video.mp4" type="video/mp4">
                </video>
            </div>
            <picture>
                <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>">
                <img class="floating-logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
            </picture>
        </div>
    </section>
</main>

<section id="story" class="story fade-in animate-on-scroll fade-in-up">
<h2 class="section-title fade-in-title">L'histoire</h2>

    <article id="story-article" class="story__article">
        <p><?php echo get_theme_mod('story'); ?></p>
    </article>

    <?php get_template_part('template-partiels/carousel'); ?>        

    <article id="place" >
        <div  >
            <h3>Le Lieu</h3>
            <p><?php echo get_theme_mod('place'); ?></p>
        </div>
        <div class="big_cloud"></div>
        <div class="little_cloud"></div>
    </article>
</section>

<section id="studio" class="fade-in animate-on-scroll fade-in-down ">
<h2 class="section-title fade-in-title ">Studio Koukaki</h2>
    <div>
        <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
        <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
    </div>
</section>

<?php get_template_part('template-partiels/nomine'); ?>
<?php get_footer(); ?>
