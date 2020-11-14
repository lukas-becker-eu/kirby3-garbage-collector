<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('candyblue/kirby3-garbage-collector', [
  'options' => [
    'pattern' => '82525kfqeqdtskpn'
  ],
  'routes' => function ($kirby) {
    return [
      [
        'pattern' => $kirby->option('candyblue.kirby3-garbage-collector.pattern'),
        'action' => function () {
          @include_once __DIR__ . '/vendor/autoload.php';

          $kirby = new Kirby();
          $kirby->sessionHandler()->collectGarbage();
        }
      ]
    ];
  }
]);
