<?php
/* Template Name: Template Contact*/
?>


<!--------------------------------------HEADER------------------------------------------------------------------------->
<?php get_header(); ?>
<!--------------------------------------WRAPPER------------------------------------------------------------------------->

<div class="wrapper">

    <!--------------------------------------HERO------------------------------------------------------------------------->

    <div class="hero">
<h1><?php the_title(); ?></h1>
    </div>

    <!--------------------------------------SECTION CONTACT------------------------------------------------------------------------->
    <section class="page-contact">

        <?php the_content(); ?>



        <?php gravity_form(1, false, false, false, '', false); ?>


    </section>

    <section class="page-contact">
        <article>
            <div class="titlearticle">
                <div class="carredeco"></div>
                <h3>En savoir plus sur moi</h3>
            </div>

            <p>Rejoignez-moi sur les réseaux sociaux pour voir davantage de projets</p>
            <div class="reseaux-sociaux">
                <a href="https://www.instagram.com/mariepierchasse.ca"><img class="instagram"
                                                                            src="<?php echo bloginfo('template_url'); ?>/images/instagram.png"/></a>
                <a href="https://www.behance.net/mariepierchasse"><img class="behance"
                                                                       src="<?php echo bloginfo('template_url'); ?>/images/behance.png"/></a>
                <a href="https://www.facebook.com/mariepierchasse.ca"><img class="facebook"
                                                                           src="<?php echo bloginfo('template_url'); ?>/images/facebook.png"/></a>
                <a href="https://www.linkedin.com/in/mariepierchasse/"><img class="linkedin"
                                                                            src="<?php echo bloginfo('template_url'); ?>/images/linkedin.png"/></a>
                <a href="https://www.youtube.com/channel/UCsjyOAMwv7e20afYjqTH4ng"><img class="youtube"
                                                                                        src="<?php echo bloginfo('template_url'); ?>/images/youtube.png"/></a>
                <a href="https://sketchfab.com/mariepierchasse.ca"><img class="sketchfab"
                                                                        src="<?php echo bloginfo('template_url'); ?>/images/sketchfab.png"/></a>


            </div>
        </article>

        <article>
            <div class="titlearticle">
                <div class="carredeco"></div>
                <h3>Contactez-moi directement</h3>
            </div>

            <div class="centrer">

                <button class="btn"><a href="">Envoyer un courriel</a></button>
            </div>

        </article>

        <h3>Au plaisir de vous rencontrer !</h3>
    </section>


</div>


<!--------------------------------------FOOTER------------------------------------------------------------------------->

<?php get_footer(); ?>
