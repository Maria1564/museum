<?php
function renderMoreLink(string $url = '#', string $className = '', string $label = 'Подробнее'): void
{
    $classes = trim('more-link ' . $className);
    ?>
    <a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>" class="<?= htmlspecialchars($classes, ENT_QUOTES, 'UTF-8') ?>">
        <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
    </a>
    <?php
}
