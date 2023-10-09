  // Toggle for the last article
    // const description = element.querySelector('.description');
    // const lastElement = element.lastElementChild;

    // if (description && lastElement) {
    //     if (description.style.display === 'none' || description.style.display === '') {
    //         description.style.display = 'block';
    //         lastElement.style.marginTop = description.clientHeight + 'px';
    //     } else {
    //         description.style.display = 'none';
    //         lastElement.style.marginTop = '0';
    //     }
    // }






              // Toggle for the last article

    // const lastElement = element.lastElementChild;

    // if (description && lastElement) {
    //     if (description.style.display === 'none' || description.style.display === '') {
    //         description.style.display = 'block';
    //         lastElement.style.marginTop = description.clientHeight + 'px';
    //     } else {
    //         description.style.display = 'none';
    //         lastElement.style.marginTop = '0';
    //     }
    // }


//     function toggleDescription(element) {
//     const description = element.querySelector('.description');
//     const nextElement = element.parentElement.nextElementSibling;
//     console.log('Description:', description);
//     console.log('Next Element:', nextElement);

//     if (description && nextElement) {
//         if (description.style.display === 'none' || description.style.display === '') {
//             description.style.display = 'block';
//             nextElement.style.marginTop = description.clientHeight + 'px';
//         } else {
//             description.style.display = 'none';
//             nextElement.style.marginTop = '0';
//         }
//     }

//     // Check if this is the last article
//     const isLastArticle = element.classList.contains('last-article');
//     console.log('Is Last Article:', isLastArticle);

// if (isLastArticle) {
//     console.log('This is the last article.');
// } else {
//     console.log('This is not the last article.');
// }

//     if (isLastArticle) {
//         const lastElement = element;
//         if (description && lastElement) {
//             if (description.style.display === 'none' || description.style.display === '') {
//                 description.style.display = 'block';
//                 lastElement.style.marginTop = description.clientHeight + 'px';
//             } else {
//                 description.style.display = 'none';
//                 lastElement.style.marginTop = '0';
//             }
//         }
//     }
// }
// // si je click le bouttons show more ( on a realement tous les article de la loop,
// // et a ce moment, cella fonctionne un peux mieux, mais pas parfaitement.
// // mais quand on fais voir moin une espace vide est afficher au lieu de fermer cette partie )

// @foreach ($activites as $key => $activite)
//     @php
//     $classes = "activites vendredi";
//     if ($key >= 3) {
//         $classes .= " hidden";
//     }
//     if ($key === count($activites) - 1) {
//         $classes .= " last-article";
//     }
// @endphp
//         <article class="{{ $classes}} " id={{$id}}>
