<?php

$arr = [
  [
      'name' => 'aung myat oo',
      'age' => 24
  ],
    [
        'name' => 'mg mg',
        'age' => 24
    ]
];
$json = '[
  {
    "name": "aung myat oo",
    "age": 24
  },
  {
    "name": "mg mg",
    "age": 24
  }
]';

//print_r(json_decode($json));
//$data = json_decode($json);
//echo $data->name;
//print_r($data[0]->name);
echo json_encode($arr);
