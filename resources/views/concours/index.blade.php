<x-layout titre="CreARTive concours 2023">

    <x-header />
    <x-hero image="img\hero\hero-concours.png" />

    <div class="conteneur_concours">

        <div class="conteneur_le_concours">
            <h1>concours</h1>
            <section class="conteneur-activites">
                <div class="conteneur-date">
                    <div class="conteneur-bordure">
                        <div class="bordure activites">
                        </div>
                        <div class="titre">
                            <h2>
                                <span style="animation-delay: 0.6s">2</span>
                                <span style="animation-delay: 0.8s">0</span>
                                <span style="animation-delay: 1s">2</span>
                                <span style="animation-delay: 1.2s">3</span>
                                <span style="animation-delay: 1.4s"> | </span>
                                <span style="animation-delay: 1.6s">1</span>
                                <span style="animation-delay: 1.8s">0</span>
                                <span style="animation-delay: 2s"> | </span>
                                <span style="animation-delay: 2.2s">1</span>
                                <span style="animation-delay: 2.4s">3</span>
                            </h2>
                        </div>
                    </div>
                    <div class="conteneur-bordure">
                        <div class="bordure activites">
                        </div>
                        <div class="titre">
                            <h2>
                                <span style="animation-delay: 0.6s">S</span>
                                <span style="animation-delay: 0.8s">C</span>
                                <span style="animation-delay: 1s">O</span>
                                <span style="animation-delay: 1.2s">T</span>
                                <span style="animation-delay: 1.4s">I</span>
                                <span style="animation-delay: 1.6s">A</span>
                                <span style="animation-delay: 1.8s">B</span>
                                <span style="animation-delay: 2s">A</span>
                                <span style="animation-delay: 2.2s">N</span>
                                <span style="animation-delay: 2.4s">K</span>
                            </h2>
                        </div>
                    </div>
                    <div class="conteneur-bordure">
                        <div class="bordure activites">
                        </div>
                        <div class="titre">
                            <h2>
                                <span style="animation-delay: 0.6s">1</span>
                                <span style="animation-delay: 0.8s">8</span>
                                <span style="animation-delay: 1s">h</span>
                                <span style="animation-delay: 1.2s">0</span>
                                <span style="animation-delay: 1.4s">0</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="concours_description concours_bg" >
            <h2>description</h2>
            <p>Le concours d'art du Festival Prima-Colors est une célébration de la créativité et de l'expression artistique. Il offre aux artistes une plateforme pour présenter leurs œuvres originales et captivantes.</p>
        </section>

        <section class="concours_critere_participation concours_bg">

            <h2>critÈre de participation</h2>

            <div>
                <ul>
                    <li>
                        <p><strong>1. Oeuvre originale:</strong> Les participants doivent soumettre une œuvre entièrement originale qui n'a jamais été présentée auparavant dans un autre concours ou exposition.</p>
                    </li>
                    <li>
                        <p><strong>2. Thème:</strong> Les participants sont encouragés à explorer le thème central du Festival Prima-Colors, qui évolue chaque année. Le thème de cette année est "Harmonie en Mouvement".</p>
                    </li>
                    <li>
                        <p><strong>3. Techniques acceptées:</strong> Toutes les formes d'expression artistique sont les bienvenues, y compris la peinture, la sculpture, la photographie, la performance, l'art numérique, etc.</p>
                    </li>
                    <li>
                        <p><strong>4. Titre original:</strong> Chaque œuvre doit être accompagnée d'un titre original qui reflète l'intention et le message de l'artiste.</p>
                    </li>
                    <li>
                        <p><strong>5. Taille et format:</strong> Il n'y a pas de restrictions spécifiques concernant la taille de l'œuvre, mais veillez à ce qu'elle puisse être facilement exposée dans le cadre du festival.</p>
                    </li>
                </ul>
            </div>
        </section>
        <x-bannieres.concours :url="url('img/concours/ga.png')"  />
        <section class="description_concours concours_bg">

            <h2>prix</h2>

            <div>

                <p>Les lauréats seront annoncés lors de la cérémonie de clôture du Festival Prima-Colors. Les prix seront attribués aux trois meilleures œuvres en fonction des critères de sélection.</p>
                <ul>
                    <li>
                        <p><strong>1. Premier Prix:</strong> Description du premier prix</p>
                    </li>
                    <li>
                        <p><strong>2. Deuxième Prix:</strong> Description du deuxième prix</p>
                    </li>
                    <li>
                        <p><strong>3. Prix du Public:</strong> Le public aura également l'opportunité de voter pour leur œuvre préférée lors de l'exposition.</p>
                    </li>
                </ul>
                <p>Nous sommes impatients de découvrir vos créations originales et de célébrer l'art avec vous lors du Festival Prima-Colors !</p>
            </div>
        </section>



        {{-- <x-bannieres.compte /> --}}
        <x-bannieres.billet />

    </div>

    <x-footer />

</x-layout>
