<div id="compteur" {{ $attributes->merge(["class" => "compteur"]) }}>

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
