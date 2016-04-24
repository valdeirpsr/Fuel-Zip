<?php

return [
  'default' => [
    'comment' => 'Created ' . date('c'),
    'password' => null,
    'save_to' => null,
    'password_generator' => [
      'enabled' => false,
      'length' => 8,
      'type' => 'alnum'
    ]
  ]
];
