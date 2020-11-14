# Kirby 3 garbage collector

First you need to disable the automatic garbage collector in your Kirby config:
```
<?php

return [
    'session' => [
        'gcInterval' => false
    ]
];
```
