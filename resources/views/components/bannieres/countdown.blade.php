<div id="compteur">

    <p id="label">Temps restant</p>

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
        max-width: 750px
    }

    #compteur p {
        font-size: 92px;
        font-family: "PF Venue Stencil";
        text-align: center;
        margin: 0;
    }

    #countdown {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0;
        justify-content: center;
    }

    #countdown p {
        margin: 0;
        font-size: 166px;
        text-align: center;
    }

    #countdown_texte {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0;
        justify-content: center;
    }

    #countdown_texte p {
        font-size: 41px;
        margin: 0;
        text-align: center;
        text-transform: uppercase;
    }

    @media only screen and (max-width: 650px) {

        #compteur #label {
            font-size: 69px!important;
        }

        #countdown p {
            font-size: 124.5px;
        }

        #countdown_texte p {
            font-size: 30.75px;
        }
    }

    @media only screen and (max-width: 500px) {

        #compteur #label {
            font-size: 51.75px;
        }

        #countdown p {
            font-size: 93.375px;
        }

        #countdown_texte p {
            font-size: 23.06px;
        }
    }

    @media only screen and (max-width: 450px) {

        #compteur #label {
            font-size: 38.81px;
        }

        #countdown p {
            font-size: 70.03px;
        }

        #countdown_texte p {
            font-size: 17.3px;
        }
    }

</style>
