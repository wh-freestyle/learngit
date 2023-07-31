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
        'image' => 'icon3',
        'link' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 4,
        'image' => 'icon4',
        'link' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 5,
        'image' => 'icon5',
        'link' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 6,
        'image' => 'icon6',
        'link' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 7,
        'image' => 'icon7',
        'link' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ],
    [
        'id' => 8,
        'image' => 'icon8',
        'link' => 'https://assets.zhayieye.com/app/mp_home_icon_job2x.png'
    ]
];
$string = json_encode($return, JSON_UNESCAPED_SLASHES);
echo $string;