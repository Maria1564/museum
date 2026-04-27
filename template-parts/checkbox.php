<?php
function renderCheckbox(string $name, string $label, bool $checked = false, string $className = ''): void
{
    $classes = trim('checkbox ' . $className);
    ?>
    <label class="<?= htmlspecialchars($classes, ENT_QUOTES, 'UTF-8') ?>">
        <input
            class="checkbox__input"
            type="checkbox"
            name="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>"
            <?= $checked ? 'checked' : '' ?>
        >
        <span class="checkbox__box"></span>
        <span class="checkbox__text"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></span>
    </label>
    <?php
}
