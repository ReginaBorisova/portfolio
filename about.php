<?php require_once __DIR__ . '/functions/variables.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once __DIR__ . '/template/head.phtml';?>
</head>
<body>
<?php require_once __DIR__ . '/template/menu.phtml'?>
<main id="about">
    <h1 class="lg-heading">
        <?= $about ?> <span class="text-secondary"><?= $me ?></span>
    </h1>
    <h2 id="sm-heading">
        <?= $fewThings ?>
    </h2>
    <div class="about-info">
        <img src="img/WebPagePic.jpg" alt="Regina's Picture" class="bio-image">
        <div class="bio">
            <h3><?= $bio ?></h3>
            <p><?= $jobDescription ?></p>
        </div>
        <div class="job job-1">
            <h3><?= $firstCompany ?></h3>
            <p><?= $jobDescription ?></p>
        </div>
        <div class="job job-2">
            <h3><?= $secondCompany ?></h3>
            <h6><?= $title ?></h6>
            <p><?= $jobDescription ?></p>
        </div>
        <div class="job job-3">
            <h3><?= $thirdCompany ?></h3>
            <h6><?= $title ?></h6>
            <p><?= $jobDescription ?></p>
        </div>
    </div>
   </main>
<?php require_once __DIR__ . '/template/footer.phtml'; ?>
</body>
</html>