<?php
// config.php
return [
    // ...
    \App\BestGuide\OrderServiceInterface::class => DI\get(\App\BestGuide\OrderService::class),
];