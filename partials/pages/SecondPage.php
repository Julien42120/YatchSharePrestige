<?php
 
include "../header.php";

?>

<div class="SecondPage">
    <div class="Map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d185895.77508408925!2d5.24041418705108!3d43.28030508246119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bf4344da5333%3A0x40819a5fd970220!2sMarseille!5e0!3m2!1sfr!2sfr!4v1618313565135!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="Resultat">
        <div class="Backsearch">
            <div class="search">
                <input type="text" placeholder="Destination">
                <input type="text" placeholder="🗓️ Date d'arrivée">
                <input type="text" placeholder="🗓️ Date de départ">
                <input type="text" placeholder="Taille du bateau">
                <button class="recherche" type="submit">RECHERCHER</button>
            </div>
        </div>
        <div class="title">
            <h1>Résultat de votre recherche</h1>
            <p>ou voir tous les Yachts disponibles</p>
        </div>

        <div class="filter">
            <h3>Filtrer<br> la selection</h3>
            <Select  name="size">
                        <option> TAILLE DU BATEAU</option>
                        <option>10 Meters</option>
                        <option>30 Meters</option>
            </Select>
            <Select name="point">
                        <option>POINT D'ACHAT</option>
                        <option>Nice</option>
                        <option>Cannes</option>
            </Select>
            <Select name="pers">
                        <option>Pers. A BORD</option>
                        <option>10 pers.</option>
                        <option>12 pers.</option>
            </Select>
            <select>
                <option>DISPONIBILITÉ</option>
            </select>
        </div>
    </div>

    <div class="ListCards">
        <div class="col-12 col-8@md">
            <div class="Cards">

                <?php for($i=0; $i< 12; $i++){ ?>
                    <div class="carte col-12 col-6@sm col-4@md ">
                        <img src="../../images/1628811.jpg">
                        <div class="contenucard">
                            <div class="name">
                                <h1>Nom du Yachts - 42mètres</h1>
                            </div>
                            <div class="para">
                                <h2>🗓️ Disponible</h2>
                                <p>minimum 7 jours</p>
                            </div>    
                            <div class="lorem">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit error culpa vel quod nesciunt!</p>
                            </div>
                            <div class="buttons">
                                <p>👥 12 ⚓ Port d\'attache</p>
                                <button>Book now</button>
                            </div>
                            
                        </div>
                    </div>
                <?php } ?>

                
            </div>
        </div>

        <div class="col-12 col-4@md">
            <div class="col_content ">
                <div class="containerpub1">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates incidunt cum tenetur a cupiditate, reiciendis quod quos laborum maxime molestias quo neque sunt. Incidunt error distinctio aliquam iure voluptatem voluptates ducimus facilis, numquam omnis hic dolorum, explicabo tenetur enim aspernatur eum officiis nulla natus nemo soluta atque autem placeat. Nemo?</p>
                </div>
                <div class="containerpub2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam pariatur saepe eaque optio nobis nam eum repellendus, expedita nemo nostrum libero voluptate alias magnam, soluta recusandae doloribus, beatae mollitia quia. Cupiditate velit, porro aliquid exercitationem ea illo vel mollitia, accusamus possimus deleniti libero ipsum?</p>
                </div>
            </div>
        </div>
    </div>

   

    <div class="Carroussel">
        <div class="text">
            <h1>Les actualités du Yacht</h1>
            <p>Voir toute l'actualité</p>
        </div>
        <div class="CarrouImg">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="carousel-item-content">
                    <?php for($i=0; $i< 3; $i++){ ?>
                        <div class="carte col-12 col-6@sm col-4@md ">
                            <img src="../../images/1628811.jpg">
                            <div class="contenucard">
                                <div class="name">
                                    <h1>Nom du Yachts - 42mètres</h1>
                                </div>
                                <div class="para">
                                    <h2>🗓️ Disponible</h2>
                                    <p>minimum 7 jours</p>
                                </div>    
                                <div class="lorem">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit error culpa vel quod nesciunt!</p>
                                </div>
                                <div class="buttons">
                                    <p>👥 12 ⚓ Port d\'attache</p>
                                    <button>Book now</button>
                                </div>
                                
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-item-content">

                    <?php for($i=0; $i< 3; $i++){ ?>
                        <div class="carte col-12 col-6@sm col-4@md ">
                            <img src="../../images/téléchargement.jpeg">
                            <div class="contenucard">
                                <div class="name">
                                    <h1>Nom du Yachts - 42mètres</h1>
                                </div>
                                <div class="para">
                                    <h2>🗓️ Disponible</h2>
                                    <p>minimum 7 jours</p>
                                </div>    
                                <div class="lorem">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit error culpa vel quod nesciunt!</p>
                                </div>
                                <div class="buttons">
                                    <p>👥 12 ⚓ Port d\'attache</p>
                                    <button>Book now</button>
                                </div>
                                
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
               
    </div>


</div>




<?php
 
include "../footer.php";

?>