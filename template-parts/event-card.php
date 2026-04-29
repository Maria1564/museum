<?php
require_once dirname(__DIR__) . '/template-parts/more-link.php';

function renderEventCard(array $event, string $className = ''): void
{
    $classes = trim('event-card ' . $className);
    $image = $event['image'] ?? '';
    $imageAlt = $event['imageAlt'] ?? 'мероприятие';
    $date = $event['date'] ?? '';
    $time = $event['time'] ?? '';
    $hasPushkinCard = (bool) ($event['hasPushkinCard'] ?? false);
    $isChildEvent = (bool) ($event['isChildEvent'] ?? false);
    $type = $event['type'] ?? '';
    $age = $event['age'] ?? '';
    $title = $event['title'] ?? '';
    $description = $event['description'] ?? '';
    $place = $event['place'] ?? '';
    $price = $event['price'] ?? '';
    $url = $event['url'] ?? '#';
    ?>
    <div class="<?= htmlspecialchars($classes, ENT_QUOTES, 'UTF-8') ?>">
        <div class="event-card__img">
            <img src="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($imageAlt, ENT_QUOTES, 'UTF-8') ?>">

            <?php if ($date !== '' || $time !== ''): ?>
                <div class="event-card__schedule">
                    <?php if ($date !== ''): ?>
                        <div class="event-card__schedule-item">
                            <img src="../images/calendar.svg" alt="календарь" class="event-card__schedule-icon">
                            <span class="event-card__schedule-text"><?= htmlspecialchars($date, ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if ($time !== ''): ?>
                        <div class="event-card__schedule-item">
                            <img src="../images/clock.svg" alt="время" class="event-card__schedule-icon">
                            <span class="event-card__schedule-text"><?= htmlspecialchars($time, ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if ($hasPushkinCard): ?>
                <div class="event-card__program">
                    <img src="../images/pushkin.png" alt="пушкинская карта">
                </div>
            <?php endif; ?>

            <?php if ($isChildEvent): ?>
                <div class="event-card__audience">
                    <img src="../images/smile.svg" alt="смайлик">
                    <span class="event-card__audience-text">Для детей</span>
                </div>
            <?php endif; ?>
        </div>

        <div class="event-card__wrapper">
            <div class="event-card__about">
                <?php if ($type !== '' || $age !== ''): ?>
                    <div class="event-card__meta">
                        <?php if ($type !== ''): ?>
                            <span class="event-card__meta-item event-card__meta-label"><?= htmlspecialchars($type, ENT_QUOTES, 'UTF-8') ?></span>
                        <?php endif; ?>

                        <?php if ($age !== ''): ?>
                            <span class="event-card__meta-item event-card__meta-age"><?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($title !== ''): ?>
                    <h4 class="event-card__title"><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></h4>
                <?php endif; ?>

                <?php if ($description !== ''): ?>
                    <p class="event-card__description"><?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>
            </div>

            <?php if ($place !== '' || $price !== ''): ?>
                <div class="event-card__details">
                    <?php if ($place !== ''): ?>
                        <div class="event-card__detail">
                            <img src="../images/map-pin.svg" alt="карта" class="event-card__detail-icon">
                            <p class="event-card__detail-text"><?= htmlspecialchars($place, ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if ($price !== ''): ?>
                        <div class="event-card__detail">
                            <img src="../images/ticket.svg" alt="билет" class="event-card__detail-icon">
                            <p class="event-card__detail-text"><?= htmlspecialchars($price, ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php renderMoreLink($url); ?>
        </div>
    </div>
    <?php
}
