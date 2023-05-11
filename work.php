<?php
require_once __DIR__ . '/variables.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
 require_once __DIR__ . '/template/head.phtml';?>
</head>
<body>
    <?php require_once __DIR__ . '/template/menu.phtml'?>
<main id="work">
    <h1 class="lg-heading">
        <?= $my ?> <span class="text-secondary"><?= $work ?></span>
    </h1>
    <h2 id="sm-heading">
        <?= $checkMyProjects ?>
    </h2>
    <div class="projects">
        <?php foreach ($projects as $project) : ?>
            <div class="item">
                <a href="#!">
                    <img src="<?= $project['img'] ?>" class="project-img" alt="Project Pic" id="project">
                </a>
                <a href="#" class="btn-light">
                    <i class="fas fa-eye"></i><?= $project['project'] ?>
                </a>
                <a href="#" class="btn-dark">
                    <i class="fab fa-github"></i><?= $project['github'] ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<?php require_once __DIR__ . '/template/footer.phtml'; ?>
</body>
</html>