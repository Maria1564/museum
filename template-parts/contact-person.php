<?php
function renderContactPerson(
    string $image,
    string $name,
    string $position,
    string $phone,
    string $email,
    string $className = ''
): void {
    $classes = trim('contact-person-card ' . $className);
    $phoneHref = preg_replace('/[^\d+]/', '', $phone);
    ?>
    <div class="<?= htmlspecialchars($classes, ENT_QUOTES, 'UTF-8') ?>">
        <div class="contact-person-card__info-user">
            <div class="contact-person-card__avatar">
                <img src="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ?>" alt="аватар">
            </div>

            <div class="contact-person-card__main">
                <p class="contact-person-card__name">
                    <?= nl2br(htmlspecialchars($name, ENT_QUOTES, 'UTF-8')) ?>
                </p>
                <p class="contact-person-card__position"><?= htmlspecialchars($position, ENT_QUOTES, 'UTF-8') ?></p>
            </div>
        </div>

        <div class="contact-person-card__links">
            <a class="contact-person-card__link" href="tel:<?= htmlspecialchars($phoneHref, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') ?></a>
            <a class="contact-person-card__link" href="mailto:<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></a>
        </div>
    </div>
    <?php
}
