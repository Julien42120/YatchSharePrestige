<?php

include "../header.php";

?>

<div class="ThirdPage">
    <div class="Carousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/codyhouse-framework/images/bateau1.jpg" >
                </div>
                <div class="carousel-item">
                    <img src="/codyhouse-framework/images/bateau2.jpg" >
                </div>
                <div class="carousel-item">
                    <img src="/codyhouse-framework/images/bateau3.jpg" >
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
    <div class="description">
        <div class="title">
            <h1>Nom du Yacht - 42 mètres</h1>
            <div class="P">
                <p>Port d'attache</p>
                <p><small>43°34' Nord 007° 05' Est</small></p>
            </div>
        </div>
        <div class="description_text">
            <p><small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi quas nobis, eum natus distinctio iure molestias beatae aperiam facere quia esse atque numquam ducimus tempora perspiciatis ab aliquid? Tempora a dicta accusamus nihil, quaerat perspiciatis dolor suscipit placeat veniam harum neque adipisci consequuntur temporibus.<br>
                    Quas repellendus vitae, impedit accusamus modi alias accusantium molestias in consequuntur obcaecati totam nobis velit. Quod ullam necessitatibus repellat explicabo in nam, error quasi ipsa dolor a, ea laudantium optio accusamus ducimus suscipit laborum deserunt id ratione ipsam. Debitis tenetur, laboriosam possimus architecto temporibus nemo quaerat doloribus incidunt rerum odio cumque quis sed officia fugiat enim?<br>
                    Soluta quibusdam eveniet iure hic laudantium optio in! Placeat beatae rem tenetur, molestias, quidem quaerat reiciendis accusamus corporis ab, labore minus. Magnam excepturi, impedit inventore in soluta doloribus officia aliquam fugiat. Quae soluta id, eum qui esse est totam quidem obcaecati ipsam aperiam molestias non praesentium culpa doloribus nihil reprehenderit!</small></p>
        </div>

        <div class="div_content">
            <div class="col-12 col-8@md">
                <div class="tabs-v3 js-tabs">
                    <ul class="tabs-v3__controls js-tabs__controls" aria-label="Tabs Interface">
                        <li><a href="#tab1Panel1" class="tabs-v3__control js-tab-focus" aria-selected="true">OPTIONS</a></li>
                        <li><a href="#tab1Panel2" class="tabs-v3__control js-tab-focus">DISPONIBILITÉS</a></li>
                        <li><a href="#tab1Panel3" class="tabs-v3__control js-tab-focus">EQUIPAGE</a></li>
                        <li><a href="#tab1Panel4" class="tabs-v3__control js-tab-focus">GALERIE PHOTOS</a></li>
                    </ul>

                    <div class="tabs-v3__panels js-tabs__panels">
                        <section id="tab1Panel1" class="tabs-v3__panel is-visible js-tabs__panel">
                            <div class="text-component">
                                <h1>Options</h1>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati natus totam assumenda cumque numquam culpa officia, harum vel quibusdam recusandae, blanditiis non quae pariatur? Laborum, animi dolor tempora laboriosam minus nulla sit, hic molestias velit delectus sint aspernatur possimus soluta?</p>
                            </div>
                            <div class="tags">
                                <span>👥 24</span>
                                <span>🛌 6</span>
                                <span>🍴 2</span>
                                <span>⚓ 3</span>
                                <span>📺 7</span>
                                <span>⚽ 12</span>
                            </div>
                            <div class="les">
                                <div class="leslorem col-12 col-6@sm">
                                    <h1>Les +</h1>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="map col_12 col-6@sm">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46452.46660419843!2d3.448842715433655!3d43.30841520834742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b13c59a969ce11%3A0xb550fa712d2f9df8!2s34300%20Agde!5e0!3m2!1sfr!2sfr!4v1618408783008!5m2!1sfr!2sfrstyle=" border:0; loading="lazy"></iframe>
                                </div>
                            </div>
                        </section>

                        <section id="tab1Panel2" class="tabs-v3__panel js-tabs__panel">
                            <div class="text-component">
                                <main>
                                    <div class="calendar-container ">
                                        <div class="month-header calendar-step1">
                                            <ul>
                                                <li class="prev-month">&#10094;</li>
                                                <li class="next-month">&#10095;</li>
                                                <li>
                                                    <span class="calendar-month-title"></span><br>
                                                    <span style="font-size:18px" class="calendar-year-title"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="weekdays"></ul>
                                        <ul class="calendar-days"></ul>
                                </main>
                            </div>
                            <div class="disponibilité">
                                <div class="Dispo">
                                    <h1>Vérifier <br> la disponibilité</h1>
                                    <input class="VerifDate" type="date" id="start" name="trip-start" placeholder="Date d'arrivée" min="2018-01-01" max="2018-12-31"><br>
                                    <input class="VerifDate" type="date" id="start" name="trip-start" placeholder="Date de départ" min="2018-01-01" max="2018-12-31"><br>
                                    <button class="Verif">VERIFIER</button>
                                </div>
                            </div>

                        </section>

                        <section id="tab1Panel3" class="tabs-v3__panel js-tabs__panel">
                            <div class="text-component">
                                
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eum ut, facere sequi voluptas eligendi cum placeat deserunt itaque eius, non architecto harum? Tenetur, adipisci error. Ratione id eaque sit quae, laborum consectetur illo facere, porro assumenda qui beatae velit sint ipsam vel hic eius quos reiciendis facilis minus rem?</p>
                            </div>
                            <div class="card-équipe">
                                <?php for ($i = 0; $i < 4; $i++) { ?>
                                    <div class="equipage col-12 col-6@sm col-3@md">
                                        <div class="basile ">
                                            <img src="/codyhouse-framework/images/basile.jpeg">
                                            <h1>Captain Bambou <br> capitaine, chinois ,25 ans</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores ad officia velit. Aliquam debitis amet sint exercitationem nemo! Voluptates, nisi.</p>

                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </section>

                        <section id="tab1Panel4" class="tabs-v3__panel js-tabs__panel">
                            <div class="text-component">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="/codyhouse-framework/images/carrou1.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="/codyhouse-framework/images/carrou2.webp" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="/codyhouse-framework/images/carrou3.jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                        </section>
                    </div>
                </div>

            </div>

            <?php include "../recapitulatif.php" ?>
        </div>

    </div>
</div>


<?php

include "../carousel.php";

include "../footer.php";

?>