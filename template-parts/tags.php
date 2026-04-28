<?php
function renderTags(array $tags, string $className = ''): void
{
    if ($tags === []) {
        return;
    }

    $classes = trim('tags ' . $className);
    ?>
    <div class="<?= htmlspecialchars($classes, ENT_QUOTES, 'UTF-8') ?>">
        <?php foreach ($tags as $tag): ?>
            <span class="tags__item"><?= htmlspecialchars((string) $tag, ENT_QUOTES, 'UTF-8') ?></span>
        <?php endforeach; ?>
    </div>
    <?php
}
