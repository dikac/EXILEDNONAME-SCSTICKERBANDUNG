<?php

return array(
  'dir' => ['files'],
  'disks' => ['Files'],
  'route' => [
    'prefix' => 'dashboard/file-manager',
    'middleware' => array('web', 'auth'),
  ],
  'access' => 'Barryvdh\Elfinder\Elfinder::checkAccess',
  'roots' => null,
  'options' => array(),
  'root_options' => array(),
);
