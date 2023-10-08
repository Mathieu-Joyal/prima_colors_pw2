<div id="compteur" {{ $attributes->merge(['class' => 'compteur']) }}>

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
    // Fonction pour initialiser le countdown
    function updateCountdown() {

        // Enregistrer la date de la fin du countdown
        let countDownDate = new Date("Dec 31, 2023 23:59:59").getTime();

        // Aller rechercher la date et le temps actuel
        let now = new Date().getTime();

        // Trouver la distance entre le temps actuel et la date du countdown
        let distance = countDownDate - now;

        // Si le countdown est terminé, laisser tous les chiffres à zéro
        if (distance <= 0) {

            document.getElementById("countdown").innerHTML = `
            <p>00</p>
            <p>00</p>
            <p>00</p>
            <p>00</p>
        `;

        } else {

            // Calcul du temps pour les journées, les heures, les minutes et les secondes
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
        }

        document.getElementById("compteur").classList.add("fade-in");
    }

    // Appelle pour modifier le countdown
    updateCountdown();

    // Mise à jour du compte à chaque seconde
    let x = setInterval(updateCountdown, 1000);

</script>
