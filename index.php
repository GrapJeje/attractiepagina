<?php
global $base_url;
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/attraction.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon"/>
</head>

<body>

<?php require_once 'header.php'; ?>
<div class="container content">
    <aside>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia modi dolore magnam! Iste libero voluptatum
        autem, sapiente ullam earum nostrum sed magnam vel laboriosam quibusdam, officia, esse vitae dignissimos nulla?
    </aside>
    <main>
        <div class="card-container">

            <div class="card card-s">
                <img src="img/attracties/matt-bowden-GZc4fnQsaWQ-unsplash.jpg" alt="Speedy XL attractie">
                <div class="card-info">
                    <p class="theme">ADVENTURELAND</p>
                    <p class="title">Speedy XL</p>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus at aut
                        beatae eos esse et
                        ex excepturi molestiae molestias neque nihil nisi, nostrum praesentium sed suscipit vel vitae
                        voluptatem?</p>
                    <p class="min-lenght"><span>120cm</span> minimale lengte</p>
                </div>
            </div>

            <div class="card card-l">
                <img src="img/attracties/matt-bowden-GZc4fnQsaWQ-unsplash.jpg" alt="Speedy XL attractie">
                <div class="card-info">
                    <div class="info">
                        <p class="theme">ADVENTURELAND</p>
                        <p class="title">Speedy XL</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus at
                            aut
                            beatae eos esse et
                            ex excepturi molestiae molestias neque nihil nisi, nostrum praesentium sed suscipit vel
                            vitae
                            voluptatem?</p>
                        <p class="min-lenght"><span>120cm</span> minimale lengte</p>
                    </div>
                    <div class="fastpass">
                        <div class="info">
                            <p>Deze attractie is alleen te bezoeken met een fastpass.</p>
                        </div>
                        <div class="fast-pass">
                            <p>Boek nu en sla de wachtrij over:</p>
                            <div class="btn">
                                <img src="img/Ticket.png" alt="Fast Pass Icon">
                                <p>Fast Pass</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>

</body>

</html>
