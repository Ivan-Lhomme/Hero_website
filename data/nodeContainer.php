<?php
    $nodeContainer = [
        /* 0 */
        [
            "name" => "Intro",
            "context" => "<b>".$_POST["userName"]."</b> ta prochaine mission est de tester la sécurité d'un complexe prisonier secret dans des conditions réel, tu seras donc envoyer en tant que prisonnier et sans aucun moyen de communiquer avec l'exterieur. Attention le complexe et sur le haut d'une montagne.",
            "choices" => ["Commencé"],
            "nextNode" => [1],
            "previousNode" => 0
        ],

        /* 1 */
        [
            "name" => "Cellule de transfert",
            "context" => "Tu est dans une cellule étroite avec une autre détenue. Tes mains sont attacher, un garde est sur le point de sortir de votre cellule et la porte est ouverte.",
            "choices" => ["Aller dans la ventilation", "Tacler le garde", "Attendre votre transfert", "Faire le mort"],
            "nextNode" => [2, 15, "", -1],
            "previousNode" => 0
        ],

        /* 2 */
        [
            "name" => "Ventilation",
            "context" => "Tu as demander de l'aide a ta collocatrice pour monter dans les ventilations.",
            "choices" => ["Continuer dans les conduits", "Aider ta collocatrice a monter"],
            "nextNode" => [3, 9],
            "previousNode" => 1
        ],

        /* 3 */
        [
            "name" => "Salle de stockage (seul)",
            "context" => "Tu as continué dans les conduits et tu es maintenant caché derrière un carton et devant toi une grande porte avec deux gardes te tourne le dos.",
            "choices" => ["Jouer une mélodie", "Pickpocket", "Coussin péteur", "Courir"],
            "nextNode" => [-2, -3, 4, -4],
            "previousNode" => 2
        ],

        /* 4 */
        [
            "name" => "En-dehors de la sécurité (seul)",
            "context" => "En lançent le coussin péteur les deux gardes on finit par se disputer et tu as pu passer. Tu es Maintenant devant la salle de sécurité fermer, mais une trappe et ouverte par le haut.",
            "choices" => ["Grappin", "Ressort géant", "Super saut"],
            "nextNode" => [-5, -6, 5],
            "previousNode" => 3
        ],

        /* 5 */
        [
            "name" => "Ascensseur",
            "context" => "Tu as réussie a sauter au-dessus de la salle et tu rentré. Devant toi il y a une cage d'ascensseur sans l'ascensseur et tu est au 17 ème étages.",
            "choices" => ["Ballon", "Bouton", "Une corde"],
            "nextNode" => [6, -7, -8],
            "previousNode" => 4
        ],

        /* 6 */
        [
            "name" => "Entraille du complexe",
            "context" => "Tu as sauter et reussie a gonfler ton ballon avec ton soufle. Tu es au 8 ème étages et devant toi il y a un gros tuyau avec du vide en-dessous et un conduit au-fond.",
            "choices" => ["Helium", "Equilibre", "Bottes avec ventouse"],
            "nextNode" => [7, -9, -10],
            "previousNode" => 5
        ],

        /* 7 */
        [
            "name" => "Port",
            "context" => "Tu as gonflet ta tête a l'helium et nager dans les aires pour passer au-dessus du tuyau. Tu es maintenant dehors sur le port et deux garde sont dos tourners devant toi.",
            "choices" => ["Une boite en carton", "Une feuille", "Shadozer"],
            "nextNode" => [-11, 8, -12],
            "previousNode" => 6
        ],

        /* 8 */
        [
            "name" => "Port",
            "context" => "En prenant la feuille tu as recuperer une queue et des oreilles d'écureuille. Tu te retrouve devant trois moyens de locomotion",
            "choices" => ["Gros bateau", "Fusée", "Petit bateau"],
            "nextNode" => [-13, -14, "Petit bateau"],
            "previousNode" => 7
        ],

        /* 9 */
        [
            "name" => "Salle de stockage (duo)",
            "context" => "Vous avez aider Ellie votre co-détenue et vous retrouver dans une salle de stockage caché derrière un catron, devant vous se trouve une porte avec deux gardes qui vous tourne le dos.",
            "choices" => ["Distraction", "KO synchronizé", "Lancé d'amie", "Grand monsieur"],
            "nextNode" => [-15, 10, -16, -17],
            "previousNode" => 2
        ],

        /* 10 */
        [
            "name" => "En-dehors de la sécurité (duo)",
            "context" => "Vous avez assomé les deux gardes et êtes maintenant devant une salle de sécurité fermé vous appercevez une trappe au plafond par la vitre.",
            "choices" => ["Lancé de judo", "La force", "Gravitor v2"],
            "nextNode" => [-18, 11, -19],
            "previousNode" => 9
        ],

        /* 11 */
        [
            "name" => "Couloir",
            "context" => "Ellie a utilisé la force du coté obscure pour vous poser sur le dessus de la salle de sécurité, puis vous ouvrez toute les portes et celles de sécurité. Vous vous retrouvez en avancent dans une impasse face a 3 gardes armée.",
            "choices" => ["Grenade + Arbalète", "Grenade + Taser", "Fusil Sniper + Arbalète", "Fusil Sniper + Taser"],
            "nextNode" => [-20, -21, -22, 12],
            "previousNode" => 10
        ],

        /* 12 */
        [
            "name" => "Ascensseurs",
            "context" => "Ellie vous tire dessus au taser et vous tirer sur les trois gardes avant qu'ils réagissent. Vous avancez et vous vous retrouvez en-retrait de deux ascensseurs avec un contenant deux gardes, tandis que Ellie vous tend un chapeau de garde.",
            "choices" => ["Lancer les chapeaux", "Passer et saluer les gardes avec les chapeaux", "Prendre l'ascensseurs déguisé"],
            "nextNode" => [13, -23, -24],
            "previousNode" => 11
        ],

        /* 13 */
        [
            "name" => "La cour",
            "context" => "Vous jetez vote chapeau et les gardes se dirigent vers lui et tombe sur des prisonniers. Vous sortez du complex mais a l'exterieur pendant le chaos que les prisonniers font Ellie se fait attrappé par le directeur du complexe.",
            "choices" => ["Adrénaline", "Faire une grimace", "Coup de genou"],
            "nextNode" => [-25, 14, -26],
            "previousNode" => 12
        ],

        /* 14 */
        [
            "name" => "La cour",
            "context" => "Vous avez distrait le directeur et un prisonnier en voiture la pércuté. Vous avez maintenant trois choix devant vous pour vous échapper.",
            "choices" => ["Un trou dans le grillage", "Un camion", "Une moto"],
            "nextNode" => [-27, -28, "Une moto"],
            "previousNode" => 13
        ],

        /* 15 */
        [
            "name" => "Couloir des cellules de transferts",
            "context" => "Vous tacler le garde et courer dans le couloir, passer devant un garde qui sort son fusil, vous vise et ...",
            "choices" => ["Chaussures rapide", "Acrobaties", "Se cachés", "Ne rien faire"],
            "nextNode" => [-29, 16, -30, -31],
            "previousNode" => 1
        ],

        /* 16 */
        [
            "name" => "Couloir des cellules de transferts barricade",
            "context" => "Vous esquivez toute les balles puis vous servez de vos menottes qui recouvre vos main comme base pour glisser et vous rapprocher d'une barricade monter par deux gardes.",
            "choices" => ["Toile d'araigné", "Pistolet outil", "Pouvoir aléatoire", "Ne rien faire"],
            "nextNode" => [-32, -33, 17, -34],
            "previousNode" => 15
        ],

        /* 17 */
        [
            "name" => "La cour",
            "context" => "Vous récuperez le pouvoir du fantôme et devener invisible toute en traversant vos menottes se qui vous libère. Vous êtes maintenant dehors face a 3 trois enemies au loin chacun de leur côter.",
            "choices" => ["Papi boxeur", "Se cacher", "Un épéiste", "Un tank"],
            "nextNode" => [-35, -36, 18, -37],
            "previousNode" => 16
        ],

        /* 18 */
        [
            "name" => "Derrière le camion",
            "context" => "Vous assenez un coup d'épée critique et gagné le combat. Vous continuez et vous caché derrière un camion tandis que 3 gardes sont devant la sortie du complexe.",
            "choices" => ["Un sandwich", "Le camion", "un Costume"],
            "nextNode" => [-38, 19, -39],
            "previousNode" => 17
        ],

        /* 19 */
        [
            "name" => "Course poursuite",
            "context" => "Vous prenez le camion et foncez a toute vitesse hors du complexe mais trois voitures vous poursuives et dans une voiture un garde vous tire dessus.",
            "choices" => ["Riposter", "Sortir en parachute", "Pousser la voiture", "Ne rien faire"],
            "nextNode" => [-40, -41, 20, -42],
            "previousNode" => 18
        ],

        /* 20 */
        [
            "name" => "Accident",
            "context" => "Vous poussez la voiture du haut de la montagne se qui vous fait dérapper puis vous vous retrouvez dans le camion couché sur le rebort de la montagne avec le directeur qui vous parle et pousse lentement le camion.",
            "choices" => ["Une étoile", "Airbag", "Se rendre", "Ne rien faire"],
            "nextNode" => [-43, -44, -45, "Ne rien Faire"],
            "previousNode" => 19
        ],

        /* 21 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 22 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 23 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 24 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 25 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 26 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 27 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 28 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 29 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 30 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 31 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 32 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 33 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 34 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 35 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 36 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 37 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 38 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 39 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 40 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 41 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 42 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 43 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 44 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 45 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 46 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 47 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 48 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 49 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 50 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => " ",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ]
    ];
?>