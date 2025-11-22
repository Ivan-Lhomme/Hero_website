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
            "nextNode" => [2, "", "", -1],
            "previousNode" => 0
        ],

        /* 2 */
        [
            "name" => "Ventilation",
            "context" => "Tu as demander de l'aide a ta collocatrice pour monter dans les ventilations.",
            "choices" => ["Continuer dans les conduits", "Aider ta collocatrice a monter"],
            "nextNode" => [3, ""],
            "previousNode" => 1
        ],

        /* 3 */
        [
            "name" => "Storage Room (solo)",
            "context" => "Tu as continué dans les conduits et tu es maintenant caché derrière un carton et devant toi une grande porte avec deux gardes te tourne le dos.",
            "choices" => ["Faire une mélodie", "Pickpocket", "Coussin péteur", "Courir"],
            "nextNode" => ["Fail", "Fail", 4, "Fail"],
            "previousNode" => 2
        ],

        /* 4 */
        [
            "name" => "En-dehors de la sécurité (solo)",
            "context" => "En lançent le coussin péteur les deux gardes on finit par se disputer et tu as pu passer. Tu es Maintenant devant la salle de sécurité fermer, mais une trappe et ouverte par le haut.",
            "choices" => ["Grappin", "Un ressort géant", "Super saut"],
            "nextNode" => ["Fail", "Fail", 5],
            "previousNode" => 3
        ],

        /* 5 */
        [
            "name" => "Ascensseur",
            "context" => "Tu as réussie a sauter au-dessus de la salle et tu rentré. Devant toi il y a une cage d'ascensseur sans l'ascensseur et tu est au 17 ème étages.",
            "choices" => ["Ballon", "Bouton", "Une corde"],
            "nextNode" => [6, "Fail", "Fail"],
            "previousNode" => 4
        ],

        /* 6 */
        [
            "name" => "Entraille du complexe",
            "context" => "Tu as sauter et reussie a gonfler ton ballon avec ton soufle. Tu es au 8 ème étages et devant toi il y a un gros tuyau avec du vide en-dessous et un conduit au-fond.",
            "choices" => ["Helium", "Equilibre", "Bottes avec tête de ventouse"],
            "nextNode" => [7, "Fail", "Fail"],
            "previousNode" => 5
        ],

        /* 7 */
        [
            "name" => "Port",
            "context" => "Tu as gonflet ta tête a l'helium et nager dans les aires pour passer au-dessus du tuyau. Tu es maintenant dehors sur le port et deux garde sont dos tourners devant toi.",
            "choices" => ["Une boite en carton", "Une feuille", "Shadozer"],
            "nextNode" => ["Fail", 8, "Fail"],
            "previousNode" => 6
        ],

        /* 8 */
        [
            "name" => "Port",
            "context" => "En prenant la feuille tu as recuperer une queue et des oreilles d'écureuille. Tu te retrouve devant trois moyens de locomotion",
            "choices" => ["Gros bateau", "Fusée", "Petit bateau"],
            "nextNode" => ["Fail", "Fail", "Petit bateau"],
            "previousNode" => 7
        ],

        /* 9 */
        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 10 */
        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 11 */
        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        /* 12 */
        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => [],
            "previousNode" => NULL
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ],

        [
            "name" => "",
            "context" => "",
            "choices" => [],
            "nextNode" => []
        ]
    ];
?>