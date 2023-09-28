@props(["font"])


<div id="compteur" style="--font-size: {{ $font }}px;">

    <p>Temps restant</p>

    <div id="chiffres_et_lettres">

        <div id="countdown"></div>

        <div id="countdown_texte">
            <p>jours</p>
            <p>heures</p>
            <p>minutes</p>
            <p>secondes</p>
        </div>
    </div>

</div>

<script>

    // Enregistrer la date que le compte final se dirige
    const countDownDate = new Date("Nov 30, 2023 23:59:59").getTime();

    // Mise à jour du compte à chaque seconde
    let  x = setInterval(function() {

    // Aller rechercher la date et le temps actuel
    let now = new Date().getTime();

    // Trouver la distance entre le temps actuel et la date du countdown
    let distance = countDownDate - now;

    // Calcul du temps pour les journées, les heures les minutes et les secondes
    let date = Math.floor(distance / (1000 * 60 * 60 * 24));
    let heures = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let secondes = Math.floor((distance % (1000 * 60)) / 1000);

// Mise à jour du résultat dans l'élément id="countdown"
document.getElementById("countdown").innerHTML = `
    <p>${date.toString().padStart(2, '0')}</p>
    <p>${heures.toString().padStart(2, '0')}</p>
    <p>${minutes.toString().padStart(2, '0')}</p>
    <p>${secondes.toString().padStart(2, '0')}</p>
    `;

    // Si le compteur se termine, affichez un message
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "Bienvenue au festival Prima-Colors 2023!";
        }
    }, 1000);

</script>

<style type="text/css">

    #compteur {
        max-width: 750px;
    }

    #compteur p {
        font-family: "PF Venue Stencil";
        text-align: center;
        margin: 0;
        font-size: var(--font-size);
    }

    #chiffres_et_lettres {
        font-size: 1em; /* Default font size for child elements */
    }

    #countdown {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0;
        justify-content: center;
    }

    #countdown p {
        margin: 0;
        font-size: calc(var(--font-size) * 1.804); /* Adjust the factor as needed */
        text-align: center;
    }

    #countdown_texte {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0;
        justify-content: center;
    }

    #countdown_texte p {
        font-size: calc(var(--font-size) * 0.445); /* Adjust the factor as needed */
        margin: 0;
        text-align: center;
        text-transform: uppercase;
    }

    /* Media queries for responsive font sizes */
    @media only screen and (max-width: 650px) {
        #compteur p {
            font-size: calc(var(--font-size) * 0.75); /* Adjust the factor as needed */
        }

        #countdown p {
            font-size: calc(var(--font-size) * 1.36); /* Adjust the factor as needed */
        }

        #countdown_texte p {
            font-size: calc(var(--font-size) * 0.334); /* Adjust the factor as needed */
        }
    }

    @media only screen and (max-width: 500px) {
        #compteur p {
            font-size: calc(var(--font-size) * 0.5625); /* Adjust the factor as needed */
        }

        #countdown p {
            font-size: calc(var(--font-size) * 1.0156); /* Adjust the factor as needed */
        }

        #countdown_texte p {
            font-size: calc(var(--font-size) * 0.253); /* Adjust the factor as needed */
        }
    }

    @media only screen and (max-width: 449px) {
        #compteur p {
            font-size: calc(var(--font-size) * 0.5075); /* Adjust the factor as needed */
        }

        #countdown p {
            font-size: calc(var(--font-size) * 0.918); /* Adjust the factor as needed */
        }

        #countdown_texte p {
            font-size: calc(var(--font-size) * 0.228); /* Adjust the factor as needed */
        }
    }

    @media only screen and (max-width: 400px) and (min-width: 300px) {
        #compteur p {
            font-size: calc(var(--font-size) * 0.4213); /* Adjust the factor as needed */
        }

        #countdown p {
            font-size: calc(var(--font-size) * 0.7623); /* Adjust the factor as needed */
        }

        #countdown_texte p {
            font-size: calc(var(--font-size) * 0.1892); /* Adjust the factor as needed */
        }
    }

</style>
