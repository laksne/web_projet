<!DOCTYPE html>
<html lang="fr">
<?php include 'inclure/head.php' ?>


<body>

    <?php include 'inclure/menu.php' ?>


    <section>
        <div class="wrapper ">

            <h1>La piscine</h1>
            <h2>Piscines : infos pratiques, horaires et tarifs</h2>
            <p>Envie d’aller nager et vous détendre à la piscine ? Avant de
                 choisir votre plus beau maillot de bain, 
                consultez les informations pratiques, les horaires d’ouvertures et les tarifs des
                 piscines de Rennes et de sa métropole.
            </p>
            <iframe width="100%" height="720" src="https://www.youtube.com/embed/DW-0Ogpv4Mw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <video controls="controls" loop autoplay="true" src="https://www.youtube.com/watch?v=--qP7i727U8&ab_channel=ProjectRelax%E2%80%A24k" width="100%">pizza de pizza
                sio</video>
        </div>
    </section>

    <section>
        <div class="wrapper">

            <h2>Le plaisir n'attend pas !</h2>
            <p>Dégustez nos spécialités italiennes, pizzas, burgers maison, pastas, risottos et autres suggestions du
                chef, accompagnées de nos vins et bières. Profitez de nos terrasses pour partager notre cuisine
                italienne entièrement élaborée avec des produits frais. Nos 2 restaurants à Rennes sont situés à
                proximité de Cesson-Sévigné et du Stade Rennais.</p>

        </div>
    </section>
    <section id="page_menus">
        <div class="wrapper">
            <h2></h2>
            <article class="les_plats">

                <div class="image_plats"><img src="image/menu/pesto.jpg"></div>
                <div class="description_plats">
                    <h2>Spaghettis pesto : 12€</h2>
                    <p>spaghettonis, pesto, cipolla, pargimiano reggiano</p>
                    <a href="page2.php" class="button">découvrir</a>
                </div>
            </article>
    </section>

    <section class="map">
        <div class="wrapper ">
            <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                <script>
                    (function () {
                        var setting = {
                            "height": 452,
                            "width": 503,
                            "zoom": 14,
                            "queryString": "Rennes, France",
                            "place_id": "ChIJhZDWpy_eDkgRMKvkNs2lDAQ",
                            "satellite": false,
                            "centerCoord": [48.115930362200984, -1.68845448538947],
                            "cid": "0x40ca5cd36e4ab30",
                            "lang": "fr",
                            "cityUrl": "/france/rennes-924",
                            "cityAnchorText": "Carte de Rennes, Bretagne, France",
                            "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                            "embed_id": "476865"
                        };
                        var d = document;
                        var s = d.createElement('script');
                        s.src = 'https://1map.com/js/script-for-user.js?embed_id=476865';
                        s.async = true;
                        s.onload = function (e) {
                            window.OneMap.initMap(setting)
                        };
                        var to = d.getElementsByTagName('script')[0];
                        to.parentNode.insertBefore(s, to);
                    })();
                </script><a href="https://1map.com/fr/map-embed">1 Map</a>
            </div>

            <div class="adresse">
                <table>
                    <thead>
                        <tr>
                            <th colspan="3">les horaires</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lundi</td>
                            <td>12:00–15:00</td>
                            <td>19:00–23:00</td>
                        </tr>
                        <tr>
                            <td>Mardi</td>
                            <td>12:00–15:00</td>
                            <td>19:00–23:00</td>
                        </tr>
                        <tr>
                            <td>Mercredi</td>
                            <td>12:00–15:00</td>
                            <td>19:00–23:00</td>
                        </tr>
                        <tr>
                            <td>Jeudi</td>
                            <td>12:00–15:00</td>
                            <td>19:00–23:00</td>
                        </tr>
                        <tr>
                            <td>Vendredi</td>
                            <td>12:00–15:00</td>
                            <td>19:00–23:00</td>
                        </tr>
                        <tr>
                            <td>Samedi</td>
                            <td>12:00–15:00</td>
                            <td>19:00–23:00</td>
                        </tr>
                        <tr>
                            <td>Dimanche</td>
                            <td>19:00–22:00</td>
                        </tr>
                    </tbody>
                </table>
                <p>Les horaires peuvent être modifiés lors des jours fériés.</p>
            </div>
        </div>

    </section>
   
    <?php include 'inclure/footer.php' ?>
</body>

</html>

