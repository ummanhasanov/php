<?php

$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Elmidar'
    ],
    [
        'id' => 2,
        'parent' => 1,
        'name' => 'Ruhulla'
    ],
    [
        'id' => 3,
        'parent' => 1,
        'name' => 'Tehrane'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'Heyrane'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'name' => 'Qail'
    ],
    [
        'id' => 6,
        'parent' => 2,
        'name' => 'Nail'
    ],
    [
        'id' => 7,
        'parent' => 6,
        'name' => 'Jasmin'
    ],
    [
        'id' => 8,
        'parent' => 6,
        'name' => 'Raul'
    ],
    [
        'id' => 9,
        'parent' => 2,
        'name' => 'Naile'
    ],
    [
        'id' => 10,
        'parent' => 9,
        'name' => 'Elcin'
    ],
    [
        'id' => 11,
        'parent' => 9,
        'name' => 'Turan'
    ],
    [
        'id' => 12,
        'parent' => 3,
        'name' => 'Aqil'
    ],
    [
        'id' => 13,
        'parent' => 12,
        'name' => 'Haci'
    ],
    [
        'id' => 14,
        'parent' => 12,
        'name' => 'Ayla',
    ],
    [
        'id' => 15,
        'parent' => 12,
        'name' => 'Aylin',
    ],
    [
        'id' => 16,
        'parent' => 3,
        'name' => 'Amil'
    ],
    [
        'id' => 17,
        'parent' => 16,
        'name' => 'Mehemmed'
    ],
    [
        'id' => 18,
        'parent' => 16,
        'name' => 'Alisa'
    ],
    [
        'id' => 19,
        'parent' => 3,
        'name' => 'Amin'
    ],
    [
        'id' => 20,
        'parent' => 19,
        'name' => 'Adil'
    ],
    [
        'id' => 21,
        'parent' => 4,
        'name' => 'Mezahir'
    ],
    [
        'id' => 22,
        'parent' => 4,
        'name' => 'Pervin'
    ],
    [
        'id' => 23,
        'parent' => 22,
        'name' => 'Tevekkul'
    ],
    [
        'id' => 24,
        'parent' => 5,
        'name' => 'Remziyye'
    ],
    [
        'id' => 25,
        'parent' => 24,
        'name' => 'Huseyn'
    ],
    [
        'id' => 26,
        'parent' => 5,
        'name' => 'Raya'
    ],
    [
        'id' => 27,
        'parent' => 26,
        'name' => 'Miran'
    ],
    [
        'id' => 28,
        'parent' => 5,
        'name' => 'Damla'
    ],
    [
        'id' => 29,
        'parent' => 5,
        'name' => 'Turane'
    ],
    [
        'id' => 30,
        'parent' => 5,
        'name' => 'Yusif'
    ],
];

function categoryList(array $categories, int $parent = 0): string {
    $html = '<ul>';
    foreach ($categories as $category) {
        if ($category['parent'] == $parent) {
            $html .= '<li>' . $category['name'];
            $html .= categoryList($categories, $category['id']);
            $html .= '</li>';
        }
    }
    $html .= '</ul>';
    return $html;
}

echo categoryList($categories);
