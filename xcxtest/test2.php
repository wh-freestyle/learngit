<?php
header("Content-type: application/json");
$return = [
    [
        'id' => 1,
        'name' => 'icon1',
        'icon' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 2,
        'name' => 'icon2',
        'icon' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 3,
        'name' => 'icon3',
        'icon' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 4,
        'name' => 'icon4',
        'icon' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 5,
        'name' => 'icon5',
        'icon' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 6,
        'name' => 'icon6',
        'icon' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 7,
        'name' => 'icon7',
        'icon' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 8,
        'name' => 'icon8',
        'icon' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 9,
        'name' => 'icon9',
        'icon' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ]
];
$string = json_encode($return, JSON_UNESCAPED_SLASHES);
echo $string;