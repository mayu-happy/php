<?php
$people = array(
    'Taro' => array('age' => '25歳', 'gender' => 'men'),
    'Jiro' => array('age' => '20歳', 'gender' => 'men'),
    'Hanako' => array('age' => '16歳', 'gender' => 'women')
);
foreach ($people as $name => $info) {
    echo $name . '(' . $info['age'] . ', ' . $info['gender'] . ')<br>';
}
echo "<br/>";

$people = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['hanako', 16, 'women']
];

foreach ($people as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br />';
}
