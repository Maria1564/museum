<?php
require_once dirname(__DIR__) . '/template-parts/event-card.php';

function getEventsCards(): array
{
    $description = 'Программа сольного концерта виолончелиста Михаила Грибкова (партия фортепиано - Виктория Тантлевская) из цикла «Вечера в галерее» вошли произведения русских и советских композиторов';
    $place = 'Музейно-краеведческий комплекс «Усадьба Золотарёвых»';
    $price = 'Стоимость: от 0 ₽ до 200 ₽';

    return [
        [
            'image' => '../images/event-1.png',
            'date' => '31 Марта - 14 Апреля',
            'time' => '10:00 - 18:00',
            'hasPushkinCard' => true,
            'isChildEvent' => true,
            'type' => 'Выставка',
            'age' => '16+',
            'title' => 'Интерьеры усадьбы Золотаревых',
            'description' => $description,
            'place' => $place,
            'price' => $price,
        ],
        [
            'image' => '../images/event-2.png',
            'date' => '31 Марта',
            'time' => '10:00 - 18:00',
            'isChildEvent' => true,
            'type' => 'Выставка',
            'age' => '16+',
            'title' => 'Из глубины веков. Археология Калужского края',
            'description' => $description,
            'place' => $place,
            'price' => $price,
        ],
        [
            'image' => '../images/event-3.png',
            'date' => '31 Марта - 14 Апреля',
            'time' => '10:00 - 18:00',
            'hasPushkinCard' => true,
            'type' => 'Выставка',
            'age' => '16+',
            'title' => 'В годы суровых испытаний',
            'description' => $description,
            'place' => $place,
            'price' => $price,
        ],
        [
            'image' => '../images/event-1.png',
            'date' => '5 Апреля',
            'time' => '12:00 - 14:00',
            'isChildEvent' => true,
            'type' => 'Экскурсия',
            'age' => '6+',
            'title' => 'Тайны старинной усадьбы',
            'description' => $description,
            'place' => $place,
            'price' => $price,
        ],
        [
            'image' => '../images/event-2.png',
            'date' => '12 Апреля',
            'time' => '15:00 - 17:00',
            'hasPushkinCard' => true,
            'type' => 'Мастер-класс',
            'age' => '12+',
            'title' => 'История в деталях',
            'description' => $description,
            'place' => $place,
            'price' => $price,
        ],
    ];
}

function renderEventsGrid(): void
{
    ?>
    <!-- events-grid -->
    <div class="events-grid">
        <?php foreach (getEventsCards() as $event): ?>
            <?php renderEventCard($event); ?>
        <?php endforeach; ?>
    </div>
    <?php
}
