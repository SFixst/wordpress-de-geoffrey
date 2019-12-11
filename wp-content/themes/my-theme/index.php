<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();


  }
}
?>

    <?php
    $bouton1=get_field("champs_lien_banniere1");
    ?>
    
</div>

<?php
    $img1 = get_field("champs_image_banniere1")
;
    echo "<div id='img1' style='background-image: url(" . $img1['url'] .")'>";

?>
    <h1 id="txt11"> <?php the_field("champs_texte_banniere1"); ?> </h1>
    <h2 id="txt12"> <?php the_field("champs_texte_banniere2"); ?> </h2>
    <h3 id="txt13"> <?php the_field("champs_texte_banniere3"); ?> </h3>
    <?php 
    echo "<a href='" . $bouton1["url"] . "'>
    <input id='bouton1'
       type='button'  
       value='" . $bouton1["title"] . "'></a>";
    ?>
</div>

<div id="img2">
    <h1 id="txt21"> <?php the_field("champs_texte_conference1"); ?> </h1>
    <h3 id="trait">_______</h3>
    <h2 id="txt22"> <?php the_field("champs_texte_riche_conference1"); ?> </h2>
    <?php
    $img2 = get_field("champs_image_conference1")
;
    echo "<div id='img3' style='background-image: url(" . $img2['url'] .")'></div>";

?>
</div>


<div id="img4">
    <h1 id="txt21"> <?php the_field("champs_texte_programme1"); ?> </h1>
    <h3 id="trait">_______</h3>
    <div id="pg">
        <div id="pg1">
            <h2 id="txt31"> <?php the_field("champs_texte_programme2"); ?> </h2>
                <ul>
                    <?php
                        $repet1 = get_field('champs_repeteur_programme1');
                        
                        if($repet1){
                            foreach($repet1 as $row){
                                echo"<li id='txt32'>" . $row['champs_texte_répéteur1_1'] . "</li>";
                            }
                        }
                    ?>
                </ul>
        </div>
        <div id="pg2">
            <h2 id="txt31"> <?php the_field("champs_texte_programme3"); ?> </h2>
                <ul>
                    <?php
                        $repet2 = get_field('champs_repeteur_programme2');
                        
                        if($repet2){
                            foreach($repet2 as $row){
                                echo"<li id='txt32'>" . $row['champs_texte_répéteur1_2'] . "</li>";
                            }
                        }
                    ?>
                </ul>
        </div>
    </div>
    <input id="bouton1"
       type="button"
       value="S'inscrire aux rencontres">
    <?php
    $img3 = get_field("champs_image_programme1")
    ;
    echo "<div id='nanoimg' style='background-image: url(" . $img3['url'] .")'></div>";

    ?>
</div>
<div id="img5">
    <h1 id="txt21">Les orateurs</h1>
    <h3 id="trait">_______</h3>
    <h2 id="txt22">Lorem ipsum calidae por portitor et sit amet dolor callis</h2>
    <div id="gens">
        <div id="profil1">
        <div id="gensgens">
            <img id="gensimg" src="./wp-content/themes/my-theme/assets/img/portrait.jpg">
            <h1>Wim de Vries</h1>
            <h2>Lorem ipsum calidae (1)</h2>
            <input id="bouton2"
            type="button"
            value="Lire la vidéo">
        </div>
        <div id="gensgens">
            <img id="gensimg" src="./wp-content/themes/my-theme/assets/img/portrait.jpg">
            <h1>Laurence Depezay</h1>
            <h2>Lorem ipsum calidae (6)</h2>
            <input id="bouton2"
            type="button"
            value="En savoir plus">
        </div>
        <div id="gensgens">
            <img id="gensimg" src="./wp-content/themes/my-theme/assets/img/portrait.jpg">
            <h1>Armando Perez Cueto</h1>
            <h2>Lorem ipsum calidae (3)</h2>
            <input id="bouton2"
            type="button"
            value="Lire la vidéo">
        </div>
        <div id="gensgens">
            <img id="gensimg" src="./wp-content/themes/my-theme/assets/img/portrait.jpg">
            <h1>Christophe</h1>
            <h2>Lorem ipsum calidae (4)</h2>
            <input id="bouton2"
            type="button"
            value="Lire la tribune">
        </div>
        </div>
        <div id="profil2">
        <div id="gensgens">
            <img id="gensimg" src="./wp-content/themes/my-theme/assets/img/portrait.jpg">
            <h1>Benjamin Alles</h1>
            <h2>Paris XIII  University (2)</h2>
            <input id="bouton2"
            type="button"
            value="Lire la tribune">
        </div>
        <div id="gensgens">
            <img id="gensimg" src="./wp-content/themes/my-theme/assets/img/portrait.jpg">
            <h1>Jacinthe Lafronière</h1>
            <h2>Lorem ipsum calidae (5)</h2>
            <input id="bouton2"
            type="button"
            value="Lire la vidéo">
        </div>    
        </div>
    </div>
</div>
    


<?php get_footer(); ?>


