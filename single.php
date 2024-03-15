<!-- Single page - page qui affiche un produit à la fois -->

<?php get_header(); ?>

    <div id="accueil" class="global">
      <section>
        <h2>Accueil <b>(h2)</b></h2>
          <div class="cours">
        <?php

          // if(have_posts()){
          //   while(have_posts()){
          //     the_post();
          //     the_title('<h3>', '</h3>');
          //     echo wp_trim_words(get_the_content(), 30);
          //   }  
          // }

          if(have_posts()):the_post();
            $titre = get_the_title();
            ?>
            <div class="carte">
              <h2><?php the_title(); ?></h2>
              <p><?php echo wp_trim_words(the_content(), 10); ?></p>
              <a href="<?php the_permalink(); ?>">Suite</a>
            </div>
          <?php endif; ?>
        </div>

        <br>
        <br />
        <h4>
          Their could can widen ten she any. As so we smart those money in. Am
          wrote up whole so tears sense oh. Absolute required of reserved in
          offering no. How sense found our those gay again taken the. Had mrs
          outweigh desirous sex overcame. Improved property reserved disposal do
          offering me. (h4)
        </h4>
        <br>
        <h4>Lien github page: <a href="https://github.com/GabriellePelletier/4w4-sem2/tree/labo3">
          https://github.com/GabriellePelletier/4w4-sem2/tree/labo3</a></h4>
        <br>
      </section>
    </div>
    <div id="evenement" class="global">
      <section>
        <h2>Événement <b>(h2)</b></h2>
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
          (h5)
        </h5>
        <br />
        <h6>
          Surprise steepest recurred landlord mr wandered amounted of.
          Continuing devonshire but considered its. Rose past oh shew roof is
          song neat. Do depend better praise do friend garden an wonder to.
          Intention age nay otherwise but breakfast. Around garden beyond to
          extent by. (h6)
        </h6>
        <br>
        <img src="/4w4gabrielle/wp-content/themes/4w4-sem2/image/img_logo_random.jpeg" alt="logo" />
      </section>
    </div>
    
    <div id="galerie" class="global diagonal">
      <section>
        <h2>Galerie <b>(h2)</b></h2>
        <h5 class="codeblock">
          Way nor furnished sir procuring therefore but. Warmth far manner
          myself active are cannot called. Set her half end girl rich met. Me
          allowance departure an <b>curiosity</b> ye. In no talking address
          excited it conduct. Husbands debating replying overcame blessing he it
          me to domestic. (h5)
        </h5>
        <br />
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
          means heart ham tears shall power every. (h6)
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
