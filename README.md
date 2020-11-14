# Kirby 3 garbage collector
This plugin provides a script, which cleans up expired sessions. You can run it periodically with a cronjob.

## Installation
```
composer require candyblue/kirby3-garbage-collector
```

## Usage
1. You need to disable the automatic garbage collector in your Kirby config:
```
<?php
return [
    'session' => [
        'gcInterval' => false
    ]
];
```
2. You can define a custom pattern for the garbage collector script in your Kirby config.
```
<?php
return [
    'candyblue.kirby3-garbage-collector' => [
        pattern => 'your-custom-pattern'
    ]
];
```
The default pattern is: ``` 82525kfqeqdtskpn ```.
3. You need to create a cronjob, which triggers your pattern.
