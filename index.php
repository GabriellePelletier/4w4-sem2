<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thème du groupe #1</title>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <!-- Link à d'autres pages -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  </head>
  <body>
    <div id="entete" class="global">
      <div class="vague">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none">
          <path
            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
            class="shape-fill"
          ></path>
        </svg>
      </div>
      <header class="entete__header">
        <h1>Thème du groupe #1 sem2 <b>(h1)</b></h1>
        <div class="block-texte">
          <h2><b>Auteure: Gabrielle Pelletier</b></h2>
            <br>
          <h2>
            4W4 - Conception d'interface
              <span class="leblockspan">et développement Web</span>
          </h2>
          <h3>TIM - Collège de Maisonneuve</h3>
          <h4>Le but du Labo 3 est de nous permettre d'expérimenter avec une base de donnée, d'ajouter du 
          php (générer du html à l'aide du php) et générer du css directement avec sass.</h4>
        </div>
        <button class="lebouton">Évènements</button>
      </header>
    </div>
    <div id="accueil" class="global">
      <section>
        <h2>Accueil <b>(h2)</b></h2>
          <div class="cours">
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

          // if(have_posts()){
          //   while(have_posts()){
          //     the_post();
          //     the_title('<h3>', '</h3>');
          //     echo wp_trim_words(get_the_content(), 30);
          //   }  
          // }

          if(have_posts()):
            while(have_posts()): the_post(); 
            $titre = get_the_title();
            $sigle = substr($titre, 0, 7);
            // $duree = substr($titre, -6);

            // Code prof
            $pos_parenthese = strpos($titre, '(');
            $duree = substr($titre, $pos_parenthese + 1, - 1);
            $titre = substr($titre, 7, $pos_parenthese - 7);
            
            // $titre = substr($titre, 8, -6);
            //strpos()
            ?>
            <div class="carte">
              <h4><?php echo $sigle; ?></h4>
              <h3><?php echo $titre; ?></h3>
              <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
              <h4>Durée : <?php echo $duree; ?></h4>
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
          offering me. (h4)
        </h4>
        <br>
        <h4>Lien github page: <a href="https://github.com/GabriellePelletier/4w4-sem2/tree/labo3">
          https://github.com/GabriellePelletier/4w4-sem2/tree/labo3</a></h4>
        <br>
      </section>
    </div>
    <div id="evenement" class="global">
      <!-- <div class="vague2">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
            opacity=".25"
            class="shape-fill"
          ></path>
          <path
            d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
            opacity=".5"
            class="shape-fill"
          ></path>
          <path
            d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
            class="shape-fill"
          ></path>
        </svg>
      </div> -->
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
    <div id="footer" class="global">
      <footer>
        <h2>Footer <b>(h2)</b></h2>
      </footer>
    </div>
  </body>
</html>
