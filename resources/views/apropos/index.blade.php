<x-layout titre="Festival Prima-Colors | Qui sommes-nous?">

    <x-header />

    <x-hero image="img\a-propos\hero.png" />

    <div class="conteneur-a_propos">

        <h1>À propos</h1>

        <section class="a_propos_description">
            <article>
                <p class="titre">
                    À Propos du Festival Prima-Colors <br>
                </p>
                <p>
                    Le Festival Prima-Colors, établi depuis cinq ans au cœur de Toronto, incarne une fusion vivante
                    d'art, de musique et de créativité. Cet événement emblématique est une célébration de l'expression
                    artistique sous toutes ses formes et une ode à la diversité culturelle.
                </p>
                <p class="titre">
                    Notre Histoire <br>
                </p>
                <p>
                    Fondé en 2018 par un groupe de passionnés de l'art, le Festival Prima-Colors a rapidement pris
                    racine dans le paysage culturel de Toronto. Depuis lors, il est devenu un rendez-vous annuel
                    incontournable pour les amoureux de l'art, attirant des milliers de visiteurs chaque année.
                </p>
                <p class="titre">
                    Notre Essence <br>
                </p>
                <p>
                    Le Festival Prima-Colors est un lieu où l'art devient une expérience immersive, où les couleurs
                    dansent avec la musique et où la créativité s'épanouit. Il célèbre la fusion d'expressions
                    artistiques variées, de la peinture à la musique, de la danse à la sculpture, créant un mélange
                    vivifiant de formes artistiques.
                </p>
                <p class="titre">
                    Ce que Nous Représentons <br>
                </p>
                <p>
                    Nous incarnons la diversité culturelle de Toronto, mettant en lumière des artistes locaux et
                    internationaux. Notre festival offre une plateforme pour l'innovation, l'exploration et la
                    découverte artistique. Chaque année, nous repoussons les frontières de la créativité pour inspirer
                    et émerveiller notre public.
                </p>
                <p class="titre">
                    Joignez-vous à Nous <br>
                </p>
                <p>
                    Que vous soyez un créateur, un amateur d'art ou un curieux à la recherche d'inspiration, le Festival
                    Prima-Colors vous invite à vous joindre à notre célébration artistique. Venez partager avec nous
                    cette expérience unique où les couleurs, les sons et les émotions se fondent en une symphonie
                    d'expression créative.
                </p>
            </article>
        </section>
        <x-bannieres.concours :url="url('img/concours/umbrellas.png')" />

        <h2>nous joindre</h2>

        <div class="conteneur_nous_joindre">

            <div class="conteneur_texte">

                <h3>Prima-Colors</h3>
                <p>40 bay street</p>
                <p>toronto, ontario</p>
                <p>m5J 2X2</p>
                <p>canada</p>

                <div class="contact">
                    <p>450 436-1531</p>
                    <p>info@prima-colors.com</p>
                </div>

            </div>

            <div class="conteneur_map">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.225815322848!2d-79.38167382343364!3d43.64346995305966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb2b5935bf09%3A0x5842d0e7d5669410!2sScotiabank%20Arena!5e0!3m2!1sfr!2sca!4v1696270309860!5m2!1sfr!2sca"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="responsive-iframe"></iframe>
            </div>
        </div>

        <x-bannieres.billet />

    </div>

    <x-footer />

</x-layout>
