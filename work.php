<?php
require_once __DIR__ . '/variables.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ . '/template/head.phtml'; ?>
<?php
require_once __DIR__ . '/template/title.phtml';
?>
<title><?php echo $title = getPageTitle($page_titles); ?></title>
<body>
<header>
    <nav>
        <?php require_once __DIR__ . '/template/menu.phtml'; ?>
        <ul class="menu-nav">
            <?php
            $currentPage = basename($_SERVER['SCRIPT_FILENAME']);
            foreach ($menuitems as $url => $label) {
                $active = ($currentPage == basename($url)) ? ' id="here"' : '';
                ?>
                <li class="nav-item">
                    <a href="<?= $url ?>" class="nav-link"<?= $active ?>><?= $label ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</header>
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