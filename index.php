<?php
header("Content-type: application/json");
$return = [
    [
        'id' => 1,
        'image' => 'https://assets.zhayieye.com/news/data/article/2023_07_25/0/11690273559_nl.jpg',
        'link' => ''
    ],
    [
        'id' => 2,
        'image' => 'https://assets.zhayieye.com/news/data/article/2023_07_26/6/pic_1690353656_11931.jpg',
        'link' => 'https://www.baidu.com'
    ]
];
$string = json_encode($return, JSON_UNESCAPED_SLASHES);
echo $string;