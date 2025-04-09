<?php
global $base_url, $conn;
session_start();
require_once 'admin/backend/conn.php';

$query = "SELECT * FROM rides";
$statement = $conn->prepare($query);
$statement->execute();
$attractions = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/attraction.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon">
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
            <?php foreach ($attractions as $attraction): ?>
                <?php
                $hasFastpass = $attraction['fast_pass'];
                $fastpass = $hasFastpass ? 'card-l' : 'card-s';
                ?>

                <div class="card <?php echo $fastpass; ?>">
                    <img src="img/attracties/<?php echo $attraction['img_file']; ?>"
                         alt="<?php echo $attraction['title']; ?> attractie">

                    <div class="card-info">
                        <?php if ($hasFastpass): ?>
                        <div class="info">
                            <?php endif; ?>

                            <p class="theme"><?php echo strtoupper($attraction['themeland']); ?></p>
                            <p class="title"><?php echo $attraction['title']; ?></p>
                            <p class="description"><?php echo $attraction['description']; ?></p>

                            <?php if (isset($attraction['min_length'])): ?>
                                <p class="min-length">
                                    <span><?php echo $attraction['min_length']; ?>cm</span> minimale lengte
                                </p>
                            <?php endif; ?>

                            <?php if ($hasFastpass): ?>
                        </div>
                    <?php endif; ?>

                        <?php if ($hasFastpass): ?>
                            <div class="fastpass">
                                <div class="info">
                                    <p>Deze attractie is alleen te bezoeken met een fastpass.</p>
                                </div>
                                <div class="fast-pass">
                                    <p>Boek nu en sla de wachtrij over:</p>
                                    <a href="#" class="btn">
                                        <img src="img/Ticket.png" alt="Fast Pass Icon">
                                        <span>Fast Pass</span>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</div>
</body>
</html>