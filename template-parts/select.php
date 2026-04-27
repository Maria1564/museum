<?php
function renderSelect(string $placeholder, array $options, string $className = ''): void
{
    $classes = trim('select ' . $className);
    ?>
    <div class="<?= htmlspecialchars($classes, ENT_QUOTES, 'UTF-8') ?>">
        <button class="select__button" type="button">
            <span class="select__text"><?= htmlspecialchars($placeholder, ENT_QUOTES, 'UTF-8') ?></span>
            <span class="select__icon_arrow">
                <img src="../images/arrow-down.svg" alt="стрелка">
            </span>
            <span class="select__icon_cross">
                <img src="../images/close-brown.svg" alt="крестик">
            </span>
        </button>

        <ul class="select__dropdown">
            <?php foreach ($options as $option): ?>
                <li class="select__option"><?= htmlspecialchars((string) $option, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
}
