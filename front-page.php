<!-- Front page - page qui affiche les produits au total -->

<?php get_header(); ?>

    <div id="entete" class="global">
      <!-- Vague -->
      <?php get_template_part("gabarits/vague"); ?>
      <!-- Fin vague -->
      <header class="entete__header">
        <h1><?php echo get_bloginfo("name"); ?></h1>
        <h2><?php echo get_bloginfo("description") ?></h2>
        <!-- <h1>Thème du groupe #1 sem2 <b>(h1)</b></h1> -->
        <div class="block-texte">
          <h2><b>Auteure: Gabrielle Pelletier</b></h2>
            <br>
          <h3>TIM - Collège de Maisonneuve</h3>
          <h4>Bienvenue sur le suite de votre compagnie de voyage locale! Elle vous offre des 
            destinations de rêve autour du monde à découvrir! Au plaisir de vous revoir!</h4>
        </div>
        <button class="lebouton">Évènements</button>
      </header>
    </div>
    <div id="accueil" class="global">
      <section>
        <h2><b>Accueil - Voyage en vue!</b></h2>
        <h2>Destinations populaires :</h2>
          <div class="destinations">
        
        <!-- <h3>
          Certainty listening no no behaviour existence assurance situation is.
          Because add why not esteems amiable him. Interested the unaffected mrs
          law friendship add principles. Indeed on people do merits to. Court
          heard which up above hoped grave do. Answer living law things either
          sir bed length. Looked before we an on merely. These no
          <b>death</b> he at share alone. Yet outward the him compass hearted
          are tedious. (h3)
        </h3> -->
        <?php

          if(have_posts()):
            while(have_posts()): the_post(); 
            $titre = get_the_title();

            ?>
            <div class="carte">
              <h3><?php the_title(); ?></h3>
              <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
              <?php the_category(); ?>
            </div>

            <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <br>
        <br />
        <h4>
          Their could can widen ten she any. As so we smart those money in. Am
          wrote up whole so tears sense oh. Absolute required of reserved in
          offering no. How sense found our those gay again taken the. Had mrs
          outweigh desirous sex overcame. Improved property reserved disposal do
          offering me.
        </h4>
        <br>
        <h4>Lien github page: <a href="https://github.com/GabriellePelletier/4w4-sem2/tree/labo3">
          https://github.com/GabriellePelletier/4w4-sem2/tree/labo3</a></h4>
        <br>
      </section>
    </div>
    <div id="evenement" class="global">
      <section>
        <h2>Événement</h2>
        <h5>
          Article evident arrived express highest men did boy. Mistress sensible
          entirely am so. Quick can manor smart money hopes worth too. Comfort
          produce husband boy her had hearing. Law others theirs passed but
          wishes. You day real less till dear read. Considered use dispatched
          melancholy sympathize discretion led. Oh feel if up to till like. Voir
          le lien:
          <a href="https://www.randomtextgenerator.com/"
            >https://www.randomtextgenerator.com/</a
          >
          
        </h5>
        <br />
        <h6>
          Surprise steepest recurred landlord mr wandered amounted of.
          Continuing devonshire but considered its. Rose past oh shew roof is
          song neat. Do depend better praise do friend garden an wonder to.
          Intention age nay otherwise but breakfast. Around garden beyond to
          extent by. 
        </h6>
        <br>
        <img src="/4w4gabrielle/wp-content/themes/4w4-sem2/image/leplanemodel.jpg" alt="logo" />
        <img src="/4w4gabrielle/wp-content/themes/4w4-sem2/image/eclipseplane.jpg" alt="logo" />
        <img src="/4w4gabrielle/wp-content/themes/4w4-sem2/image/tripleplane.jpg" alt="logo" />
      </section>
    </div>
    
    <div id="galerie" class="global diagonal">
      <section>
        <h2>Galerie</h2>
        <h5 class="codeblock">
        The traveling agency is thrilled to announce that the destination they are 
        selling out is a hidden gem waiting to be explored. With pristine beaches, 
        vibrant culture, and delicious cuisine, this destination offers a unique and 
        unforgettable experience for travelers. From thrilling outdoor adventures to 
        relaxing beachside retreats, this destination has something for everyone. 
        Don't miss the chance to discover the beauty and charm of this incredible place 
        with the help of our expertly crafted travel packages.
      </h5>
      <div class="les-leonardo">
        <img class="codeblock" src="/4w4gabrielle/wp-content/themes/4w4-sem2/image/tropic.jpg" alt="">
        <img class="codeblock" src="/4w4gabrielle/wp-content/themes/4w4-sem2/image/waterfall.jpg" alt="">
        <img class="codeblock" src="/4w4gabrielle/wp-content/themes/4w4-sem2/image/batiment.jpg" alt="">
        <img class="codeblock" src="/4w4gabrielle/wp-content/themes/4w4-sem2/image/caprio.jpg" alt="">
        <img class="codeblock" src="/4w4gabrielle/wp-content/themes/4w4-sem2/image/debene.jpg" alt="">
      </div>
        <h6 class="codeblock">
          Surprise steepest recurred landlord mr wandered amounted of.
          Continuing devonshire but considered its. Rose past oh shew roof is
          song neat. Do depend better praise do friend garden an wonder to.
          Intention age nay otherwise but breakfast. Around garden beyond to
          extent by. Case read they must it of cold that. Speaking trifling an
          to unpacked moderate <b>debating</b> learning. An particular
          contrasted he excellence favourable on. Nay preference dispatched
          difficulty continuing joy one. Songs it be if ought hoped of. Too
          carriage attended him entrance desirous the saw. Twenty sister hearts
          garden limits put gay has. We hill lady will both sang room by.
          Desirous men exercise overcame procured speaking her followed.
          Preserved defective offending he daughters on or. Rejoiced prospect
          yet material servants out answered men admitted. Sportsmen certainty
          prevailed suspected am as. Add stairs admire all answer the nearer yet
          length. Advantages prosperous remarkably my inhabiting so reasonably
          be if. Too any appearance announcing <b>impossible</b> one. Out mrs
          means heart ham tears shall power every.
        </h6>
        <br />
        <button class="lebouton">
          <a
            href="https://www.youtube.com/watch?v=Cx2dkpBxst8&list=PLXDU_eVOJTx7QHLShNqIXL1Cgbxj7HlN4&index=1"
            >Voir plus</a
          >
        </button>
      </section>
    </div>

<?php get_footer(); ?>