<?php
require_once dirname(__DIR__) . '/template-parts/breadcrumbs.php';

function renderPageHeader(string $title, array $breadcrumbs = [], string $className = ''): void
{
    $classes = trim('page-header ' . $className);
    ?>
    <div class="<?= htmlspecialchars($classes, ENT_QUOTES, 'UTF-8') ?>">
        <?php renderBreadcrumbs($breadcrumbs); ?>
        <h1 class="title"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h1>
    </div>
    <?php
}
