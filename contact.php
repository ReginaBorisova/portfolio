<?php require_once __DIR__ . '/functions/variables.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once __DIR__ . '/template/head.phtml';?>
</head>
<body>
<?php require_once __DIR__ . '/template/menu.phtml'?>
<main id="contact">
    <h1 class="lg-heading">
        <?= $contact ?> <span class="text-secondary"><?= $me ?> </span>
    </h1>
    <h2 id="sm-heading">
        <?= $reachme ?>
    </h2>
    <div class="boxes">
        <div>
            <span class="text-secondary"><?= $email ?></span><?= $emailmain ?>
        </div>
        <div>
            <span class="text-secondary"><?= $phone ?></span><?= $phonemain ?>
        </div>
        <div>
            <span class="text-secondary"><?= $address ?></span> <?= $addressct ?>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/template/footer.phtml'; ?>
</body>
</html>