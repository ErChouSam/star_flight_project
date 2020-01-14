const H1 = document.getElementById("shipName");
const IMG = document.getElementById("carousel");
const BTN_NEXT = document.getElementById("btnRight");
const BTN_PREVIOUS = document.getElementById("btnLeft");
const TAB = ["../img/600i.jpg","../img/890_jump.jpg", "../img/aquila.jpg", "../img/rasta_rocket.jpg"];
const TAB2 = document.getElementsByClassName("star");

let i = 0;
window.addEventListener('load',ev => {
    i = 2;
    H1.innerText = star[i].name;
    tabstar();
});

BTN_NEXT.addEventListener("click", function () {
    console.log(i);
    if (i - 1 >= 0 && i - 1 < TAB.length) {
        console.log('right');
        IMG.src = TAB[--i];
        H1.innerText = star[i].name;
        tabstar();
    }

});

BTN_PREVIOUS.addEventListener("click", function () {
    console.log(i);
    if (i + 1 >= 0 && i + 1 < TAB.length) {
        console.log();
        IMG.src = TAB[++i];
        H1.innerText = star[i].name;
        tabstar();
    }
});



let star = [{
    'name': "600i",
    'description': '<span>Description</span> : Que le voyage commence avec le 2947 600i d\'Origin Jumpworks. Ce navire de luxe polyvalent ' +
        'd\'Origin Jumpworks présente une conception de coque extrêmement détaillée qui équilibre les' +
        ' performances et la polyvalence dans une forme élégante et intemporelle. Le 600i est conçu avec' +
        ' une technologie modulaire de pointe, vous permettant de personnaliser votre navire selon vos besoins.' +
        ' Vous cherchez à marquer votre nom dans l\'histoire avec la découverte d\'un nouveau système d\'étoiles?' +
        ' Le module Explorer du 600i échange le salon contre une station de numérisation robuste ainsi que' +
        ' des points de connexion supplémentaires pour augmenter encore plus l\'efficacité du navire.',
    'capacité': '<span>Capacité</span> : 400 Passagers',
    'option': '<span>Options</span> : Assistant vocale dans les chambres,jaccuzi,piscine et bain de boue privé. ' +
        'Animateurs de la planete fiesta pour animé les soirées organisé sur le vaisseau',
    'loisirs': '<span>Loisirs</span> : Massage, simulateur vr (baitaille de neige course de vaisseaux ect...) discotheque, bowling',
    'évaluation': '<span>Evaluation</span> : 4,5/5',
    'vitesse': '<span>Vitesse</span> : 800 000 al/h',
    'systeme de protection et armement': '<span>Systeme de protection et armement</span> : Tourelles,missiles,bouclier d\'energie renforcé, radar à spectre large',
    'type de croisiere': '<span>Type de croisiere</span> : Affaire pour un trajet professionnel rapide sur et confortable'
}, {
    'name': "890 jump",
    'description': '<span>Description</span> : Avec un extérieur élégant et élégant qui dément son intérieur spacieux, ' +
        'le 890 Jump est une véritable merveille d\'ingénierie;' +
        ' conçu pour impressionner sous tous les angles en combinant un design unique et innovant avec les meilleurs matériaux et la technologie la plus avancée.' +
        ' Le résultat est un vaisseau d\'une classe à part, un chef-d\'œuvre digne du nom ORIGIN.',
    'capacité': '<span>Capacité</span> : 1600 Passagers',
    'option': '<span>Options</span> : Assistant vocale dans les chambres,jaccuzi,piscine et bain de boue privé. ' +
        'Animateurs de la planete fiesta pour animé les soirées organisé sur le vaisseau',
    'loisirs': '<span>Loisirs</span> : Massage, simulateur vr (baitaille de neige course de vaisseaux ect...) discotheque,' +
        'bain spactial avec aperos et bain de minuit au clair de la 8em lune ',
    'évaluation': '<span>Evaluation</span> : 4,8/5',
    'vitesse': '<span>Vitesse</span> : 500 900 al/h',
    'systeme de protection et armement': '<span>Systeme de protection et armement</span> : Tourelles,missiles,bouclier d\'energie renforcé, radar à spectre large',
    'type de croisiere': '<span>Type de croisiere</span> : VIP(escale sur les planetes paradisiaques en petit comité)'
}, {
    'name': "aquila",
    'description': '<span>Description</span> : Explorez tous les horizons lointains! Le Constellation Aquila dispose d\'un cockpit' +
        ' redessiné pour une visibilité maximale, de capteurs avancés et d\'un rover Ursa embarqué pour ' +
        'l\'exploration planétaire. Voyons ce qui existe!',
    'capacité': '<span>Capacité</span> : 960 Passagers',
    'option': '<span>Options</span> : Assistant vocale dans les chambres,jaccuzi,piscine',
    'loisirs': '<span>Loisirs</span> : Massage, simulateur vr (nouvelles planetes et planetes exotique protegée ect...) discotheque,randonné a moto ou 4x4 dans un environement extrem',
    'évaluation': '<span>Evaluation</span>  : 4,8/5',
    'vitesse': '<span>Vitesse</span> : 24 000 al/h',
    'systeme de protection et armement': '<span>Systeme de protection et armement</span> : Tourelles,missiles,bouclier d\'energie renforcé, radar à spectre large',
    'type de croisiere': '<span>Type de croisiere</span> : Découverte ( pour decouvrir et visiter les planetes proteger et les nouvelles planetes)'
}, {
    'name': "rasta rocket",
    'description': '<span>Description</span> : Avec son apparence venue d\'un autre monde le "rasta_rocket" est le parfait mélange entre confort et' +
        'technologiede la race des shinigami connu pour être de grand guerrier à l\'époque des grandes guerres.' +
        'Maintenant leurs passions en ingénierie nous donne de belle surprise.',
    'capacité': '<span>Capacité</span> : 3584 Passagers',
    'option': '<span>Options</span> : Assistant vocale dans les chambres,jaccuzi,piscine',
    'loisirs': '<span>Loisirs</span> : Massage, simulateur vr (baitaille de neige course de vaisseaux ect...) discotheque,' +
        'randonné a moto ou 4x4 dans un environement et des vitesses extremes extrem',
    'évaluation': '<span>Evaluation</span> : 4,7/5',
    'vitesse': '<span>Vitesse</span> : 20 000 al/h',
    'systeme de protection et armement': '<span>Systeme de protection et armement</span> : Tourelles,missiles,bouclier d\'energie renforcé, radar à spectre large',
    'type de croisiere': '<span>Type de croisiere</span> : Adrénaline de luxe pour les amoureux de sensation forte'
}]
function tabstar(){

    TAB2[0].innerHTML = star[i].description;
    TAB2[1].innerHTML = star[i].capacité;
    TAB2[2].innerHTML = star[i].option;
    TAB2[3].innerHTML = star[i].loisirs;
    TAB2[4].innerHTML = star[i].évaluation;
    TAB2[5].innerHTML = star[i].vitesse;
    TAB2[6].innerHTML = star[i]["systeme de protection et armement"];
    TAB2[7].innerHTML = star[i]["type de croisiere"];
}
