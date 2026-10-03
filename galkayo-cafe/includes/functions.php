<?php
function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function greeting()
{
    $hour = (int) date('H');

    if ($hour < 12) {
        return 'Good morning';
    }

    if ($hour < 17) {
        return 'Good afternoon';
    }

    return 'Good evening';
}

function featuredItems($items)
{
    return array_values(array_filter($items, function ($item) {
        return !empty($item['featured']);
    }));
}

function findMenuItem($items, $name)
{
    foreach ($items as $item) {
        if (strcasecmp($item['name'], $name) === 0) {
            return $item;
        }
    }

    return null;
}
