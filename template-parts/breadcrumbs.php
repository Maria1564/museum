<?php
function renderBreadcrumbs(array $items): void
{
    if ($items === []) {
        return;
    }
    ?>
    <nav class="breadcrumbs" aria-label="Хлебные крошки">
        <ul class="breadcrumbs__list">
            <?php foreach ($items as $index => $item): ?>
                <?php $isCurrent = $index === array_key_last($items); ?>
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__text<?= $isCurrent ? ' breadcrumbs__current' : '' ?>">
                        <?php echo htmlspecialchars((string) $item, ENT_QUOTES, 'UTF-8'); ?>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <?php
}
