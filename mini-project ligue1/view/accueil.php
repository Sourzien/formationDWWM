<!DOCTYPE html>
<html lang="fr">

<head>
    <title>TD J30 14/03</title>
    <meta name="description" content="">
    <meta name="application-name" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta name="robots" content="none">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    $clubs = [
        [
            "nom" => "PSG",
            "ville" => "Paris",
            "logo" => "psg.jpg",
            "stats" => [
                "mj" => 24,
                "mg" => 20,
                "mn" => 1,
                "mp" => 3,
                "bp" => 63,
                "bc" => 17,
                "db" => 46,
                "points" => 61
            ]
        ],
        [
            "nom" => "OM",
            "ville" => "Marseille",
            "logo" => "om.jpg",
            "stats" => [
                "mj" => 24,
                "mg" => 14,
                "mn" => 7,
                "mp" => 3,
                "bp" => 33,
                "bc" => 21,
                "db" => 12,
                "points" => 49
            ]
        ],
        [
            "nom" => "LOSC",
            "ville" => "Lille",
            "logo" => "losc.jpg",
            "stats" => [
                "mj" => 24,
                "mg" => 12,
                "mn" => 4,
                "mp" => 8,
                "bp" => 29,
                "bc" => 25,
                "db" => 4,
                "points" => 40
            ]
        ],
        [
            "nom" => "Stade Rennais FC",
            "ville" => "Rennes",
            "logo" => "srfc.jpg",
            "stats" => [
                "mj" => 24,
                "mg" => 12,
                "mn" => 5,
                "mp" => 7,
                "bp" => 29,
                "bc" => 22,
                "db" => 7,
                "points" => 41
            ]
        ],
        [
            "nom" => "MHSC",
            "ville" => "Montpellier",
            "logo" => "mhsc.png",
            "stats" => [
                "mj" => 24,
                "mg" => 10,
                "mn" => 7,
                "mp" => 7,
                "bp" => 32,
                "bc" => 27,
                "db" => 5,
                "points" => 37
            ]
        ],
        [
            "nom" => "RCS",
            "ville" => "Strasbourg",
            "logo" => "rcs.jpg",
            "stats" => [
                "mj" => 24,
                "mg" => 11,
                "mn" => 3,
                "mp" => 10,
                "bp" => 31,
                "bc" => 28,
                "db" => 3,
                "points" => 36
            ]
        ],
        [
            "nom" => "ASMFC",
            "ville" => "Monaco",
            "logo" => "asmfc.jpg",
            "stats" => [
                "mj" => 24,
                "mg" => 10,
                "mn" => 5,
                "mp" => 9,
                "bp" => 40,
                "bc" => 10,
                "db" => 0,
                "points" => 35
            ]
        ],
        [
            "nom" => "GDBFC",
            "ville" => "Bordeaux",
            "logo" => "gdbfc.png",
            "stats" => [
                "mj" => 24,
                "mg" => 9,
                "mn" => 7,
                "mp" => 8,
                "bp" => 33,
                "bc" => 26,
                "db" => 7,
                "points" => 34
            ]
        ],
        [
            "nom" => "OL",
            "ville" => "Lyon",
            "logo" => "ol.png",
            "stats" => [
                "mj" => 24,
                "mg" => 9,
                "mn" => 7,
                "mp" => 8,
                "bp" => 33,
                "bc" => 26,
                "db" => 7,
                "points" => 34
            ]
        ],
        [
            "nom" => "SR",
            "ville" => "Reims",
            "logo" => "sr.png",
            "stats" => [
                "mj" => 24,
                "mg" => 8,
                "mn" => 9,
                "mp" => 7,
                "bp" => 22,
                "bc" => 19,
                "db" => 7,
                "points" => 34
            ]
        ],
        [
            "nom" => "OGCN",
            "ville" => "Nice",
            "logo" => "ogcn.png",
            "stats" => [
                "mj" => 24,
                "mg" => 9,
                "mn" => 6,
                "mp" => 9,
                "bp" => 34,
                "bc" => 34,
                "db" => 0,
                "points" => 33
            ]
        ],
        [
            "nom" => "FCN",
            "ville" => "Nantes",
            "logo" => "fcn.png",
            "stats" => [
                "mj" => 24,
                "mg" => 9,
                "mn" => 7,
                "mp" => 8,
                "bp" => 33,
                "bc" => 26,
                "db" => 7,
                "points" => 34
            ]
        ],
        [
            "nom" => "SB29",
            "ville" => "Brest",
            "logo" => "sb29.png",
            "stats" => [
                "mj" => 24,
                "mg" => 7,
                "mn" => 9,
                "mp" => 8,
                "bp" => 29,
                "bc" => 31,
                "db" => -2,
                "points" => 30
            ]
        ],
        [
            "nom" => "SCO",
            "ville" => "Angers",
            "logo" => "sco.png",
            "stats" => [
                "mj" => 24,
                "mg" => 8,
                "mn" => 6,
                "mp" => 10,
                "bp" => 24,
                "bc" => 32,
                "db" => -8,
                "points" => 30
            ]
        ],
        [
            "nom" => "asse",
            "ville" => "Saint-Étienne",
            "logo" => "asse.png",
            "stats" => [
                "mj" => 24,
                "mg" => 8,
                "mn" => 4,
                "mp" => 12,
                "bp" => 25,
                "bc" => 38,
                "db" => -13,
                "points" => 28
            ]
        ],
        [
            "nom" => "MFC",
            "ville" => "Metz",
            "logo" => "mfc.png",
            "stats" => [
                "mj" => 24,
                "mg" => 6,
                "mn" => 9,
                "mp" => 9,
                "bp" => 24,
                "bc" => 32,
                "db" => -8,
                "points" => 25
            ]
        ],
        [
            "nom" => "DFCO",
            "ville" => "Dijon",
            "logo" => "dfco.png",
            "stats" => [
                "mj" => 24,
                "mg" => 6,
                "mn" => 7,
                "mp" => 11,
                "bp" => 22,
                "bc" => 29,
                "db" => -7,
                "points" => 25
            ]
        ],
        [
            "nom" => "Nimes",
            "ville" => "Nimes",
            "logo" => "nimes.png",
            "stats" => [
                "mj" => 24,
                "mg" => 6,
                "mn" => 6,
                "mp" => 12,
                "bp" => 25,
                "bc" => 43,
                "db" => -13,
                "points" => 24
            ]
        ],
        [
            "nom" => "ASC",
            "ville" => "Amiens",
            "logo" => "asc.png",
            "stats" => [
                "mj" => 24,
                "mg" => 4,
                "mn" => 8,
                "mp" => 12,
                "bp" => 25,
                "bc" => 43,
                "db" => -18,
                "points" => 20
            ]
        ],
        [
            "nom" => "TFC",
            "ville" => "Toulouse",
            "logo" => "tfc.png",
            "stats" => [
                "mj" => 24,
                "mg" => 3,
                "mn" => 4,
                "mp" => 17,
                "bp" => 21,
                "bc" => 49,
                "db" => -28,
                "points" => 13
            ]
        ]
    ];
    ?>
    <style>
        table {
            width: 70%;
            margin: 50px auto;
        }

        th {
            color: lightgray;
            border-bottom: solid 1px #ebebeb;
        }

        td {
            font-weight: bold;
            padding: 10px 0px;
            border-bottom: solid 1px #ebebeb;
        }

        .void {
            border-bottom: solid 0.4em white;
            margin-bottom: 2px;
        }

        .voidBlueTD {
            border-left: solid thick dodgerblue;
            width: 5%;
        }

        .numberTD {
            width: 2.5em;
        }

        .nomTD {
            width: 50%;
        }

        .voidOrangeTD {
            border-left: solid thick darkorange;
        }

        .voidGreenTD {
            border-left: solid thick limegreen;
        }

        .voidGoldTD {
            border-left: solid thick gold;
        }

        .voidRedTD {
            border-left: solid thick Red;
        }

        img {
            max-width: 2em;
            height: 2em;
            width: 2em;
            margin-right: 1em;
        }
    </style>
    <section>
        <div class="container">
            <table>
                <thead>
                    <tr>
                    <td class="void"></td>
                    <th colspan="2">Club</th>
                    <th class="numberTD">MJ</th>
                    <th class="numberTD">G</th>
                    <th class="numberTD">N</th>
                    <th class="numberTD">P</th>
                    <th class="numberTD">BP</th>
                    <th class="numberTD">BC</th>
                    <th class="numberTD">DB</th>
                    <th class="numberTD">Pts</th>
                    </tr>
                </thead>
                <?php
                
                $rank = 0;
                foreach ($clubs as $club) {
                    $rank++; ?>
                    <tbody>
                        <tr>
                            <td <?php switch ($rank) {
                                    case 1:
                                        echo 'class="void voidBlueTD"';
                                        break;
                                    case 2:
                                        echo 'class="void voidBlueTD"';
                                        break;
                                    case 3:
                                        echo 'class="void voidOrangeTD"';
                                        break;
                                    case 4:
                                        echo 'class="void voidGreenTD"';
                                        break;
                                    case 18:
                                        echo 'class="void voidGoldTD"';
                                        break;
                                    case 19:
                                        echo 'class="void voidRedTD"';
                                        break;
                                    case 20:
                                        echo 'class="void voidRedTD"';
                                        break;
                                    default:
                                        echo 'class="void"';
                                } ?>></td>
                            <td class="numberTD"><?=$rank; ?></td>
                            <td class="nom"><img src="../public/assets/img/<?=$club['logo']; ?>" alt="Logo <?=$club['nom']; ?>"> <?=$club['ville']; ?></td>
                            <td><?=$club['stats']['mj']; ?></td>
                            <td><?=$club['stats']['mg']; ?></td>
                            <td><?=$club['stats']['mn']; ?></td>
                            <td><?=$club['stats']['mp']; ?></td>
                            <td><?=$club['stats']['bp']; ?></td>
                            <td><?=$club['stats']['bc']; ?></td>
                            <td><?=$club['stats']['db']; ?></td>
                            <td><?=$club['stats']['points']; ?></td>
                        </tr>
                                        <?php
                                        } ?>
                    </tbody>
            </table>
        </div>
    </section>

</body>

</html>