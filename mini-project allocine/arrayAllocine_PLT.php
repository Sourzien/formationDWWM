<!DOCTYPE html>
<html lang="fr">

<head>
    <title>TD J33 17/03 Allocine multidimensionnel</title>
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
    $movies = [
        [
            "title" => "The Batman",
            "poster" => "https://fr.web.img3.acsta.net/c_310_420/pictures/22/02/16/17/42/3125788.jpg",
            "release" => "2 mars 2022",
            "duration" => "2h 57min",
            "director" => "Matt Reeves",
            "pitch" => "Lorsqu'un tueur s'en prend à l'élite de Gotham par une série de machinations sadiques, une piste d'indices cryptiques envoie Bruce Wayne alias Batman sur une enquête dans la pègre, où il rencontre des personnages tels que Selina Kyle, alias Catwoman, Oswald Cobblepot, alias le Pingouin, Carmine Falcone et Edward Nashton, alias l’Homme-Mystère.",
            "types" => ["Action", "Policier", "Thriller"],
            "actors" => ["Robert Pattinson", "Zoë Kravitz", "Paul Dano"]
        ],
        [
            "title" => "Maison de Retraite",
            "poster" => "https://fr.web.img3.acsta.net/c_310_420/pictures/21/12/03/13/10/5145956.jpg",
            "release" => "16 février 2022",
            "duration" => "1h 37min",
            "director" => "Thomas Gilou",
            "pitch" => "Afin d’éviter la case prison, Milann, 30 ans, est contraint d’effectuer 300 heures de travaux d’intérêts généraux dans une maison de retraite. Au fil des semaines, il découvre que l’établissement profite de la vulnérabilité de ses pensionnaires pour les arnaquer.",
            "types" => ["Comédie"],
            "actors" => ["Kev Adams", "Gérard Depardieu", "Daniel Prévost"]
        ],
        [
            "title" => "Notre-Dame brûle",
            "poster" => "https://fr.web.img6.acsta.net/c_310_420/pictures/22/02/11/12/58/0195580.jpg",
            "release" => "16 mars 2022",
            "duration" => "1h 50min",
            "director" => "Jean-Jacques Annaud",
            "pitch" => "Le long métrage de Jean-Jacques Annaud, reconstitue heure par heure l’invraisemblable réalité des évènements du 15 avril 2019 lorsque la cathédrale subissait le plus important sinistre de son histoire.",
            "types" => ["Drame"],
            "actors" => ["Samuel Labarthe", "Jean-Paul Bordes", "Mikaël Chirinian"]
        ],
        [
            "title" => "Maigret",
            "poster" => "https://fr.web.img2.acsta.net/c_310_420/pictures/21/12/16/11/09/4861683.jpg",
            "release" => "23 février 2022",
            "duration" => "1h 28min",
            "director" => "Patrice Leconte",
            "pitch" => "Maigret enquête sur la mort d’une jeune fille. Rien ne permet de l’identifier, personne ne semble l’avoir connue, ni se souvenir d’elle. Il rencontre une délinquante, qui ressemble étrangement à la victime, et réveille en lui le souvenir d’une autre disparition, plus ancienne et plus intime…",
            "types" => ["Policier"],
            "actors" => ["Gérard Depardieu", "Jade Labeste", "Mélanie Bernier"]
        ],
        [
            "title" => "Goliath",
            "poster" => "https://fr.web.img3.acsta.net/c_310_420/pictures/22/01/24/12/13/4677076.jpg",
            "release" => "9 mars 2022",
            "duration" => "2h 02min",
            "director" => "Frédéric Tellier",
            "pitch" => "France, professeure de sport le jour, ouvrière la nuit, milite activement contre l’usage des pesticides. Patrick, obscur et solitaire avocat parisien, est spécialiste en droit environnemental. Mathias, lobbyiste brillant et homme pressé, défend les intérêts d’un géant de l’agrochimie.",
            "types" => ["Thriller"],
            "actors" => ["Gilles Lellouche", "Pierre Niney", "Emmanuelle Bercot"]
        ],
        [
            "title" => "Uncharted",
            "poster" => "https://fr.web.img4.acsta.net/c_310_420/pictures/22/01/18/10/13/5983633.jpg",
            "release" => "16 février 2022",
            "duration" => "1h 56min",
            "director" => "Ruben Fleischer",
            "pitch" => "Nathan Drake, voleur astucieux et intrépide, est recruté par le chasseur de trésors chevronné Victor « Sully » Sullivan pour retrouver la fortune de Ferdinand Magellan, disparue il y a 500 ans.",
            "types" => ["Action", "Aventure"],
            "actors" => ["Tom Holland", "Mark Wahlberg", "Sophia Ali"]
        ],
    ]
    ?>
    <style>
        table {
            margin-top: 2em;
            border-collapse: separate;
            border-spacing: 0 1em;
        }

        th {
            border: grey solid thin;
            padding-left: 5px;
        }

        td {
            border-bottom: grey solid;
            padding: 1em 0;
        }

        img {
            max-width: 200px;
        }
    </style>
    <section class="container">
        <table>
            <thead>
                <tr>
                    <th class="text-center">Affiche</th>
                    <th class="text-center" width="200">Titre</th>
                    <th width="100">Genre</th>
                    <th>Infos</th>
                    <th>Casting</th>
                    <th>Synopsis</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($movies as $movie) {
                ?>
                    <tr>
                        <td><img src="<?= $movie['poster'] ?>" alt="Affiche <?= $movie['title'] ?>"></td>
                        <td class="text-center fw-bold"><?= $movie['title'] ?></td>
                        <td><?php
                            foreach ($movie['types'] as $type) {
                                echo $type . '<br>';
                            }
                            ?></td>
                        <td width="300"><?= '<u>Sortie</u> : ' . $movie['release'] . '<br><u>Durée</u> : ' . $movie['duration'] . '<br><u>Réalisateur</u> : ' . $movie['director']; ?></td>
                        <td width="200"><?php
                                        foreach ($movie['actors'] as $actor) {
                                            echo $actor . '<br>';
                                        }
                                        ?></td>
                        <td><?= $movie['pitch'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
</body>

</html>