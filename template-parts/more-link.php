<?php
function renderMoreLink(string $url = '#', string $text = 'Подробнее', string $className = ''): void
{
    $classes = trim('more-link ' . $className);
    ?>
    <a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>" class="<?= htmlspecialchars($classes, ENT_QUOTES, 'UTF-8') ?>">
        <?= htmlspecialchars($text, ENT_QUOTES, 'UTF-8') ?>
    </a>
    <?php
}
