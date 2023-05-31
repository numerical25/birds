<?php
use Illuminate\Support\Facades\Asset;

return [
    [
        'name' => 'Parrot',
        'image_idle' => asset('images/idle-parrot.jpg'),
        'image_walking' => asset('images/flying-parrot.jpg'),
        'image_eating' => asset('images/eating-parrot.jpg'),
    ],
    [
        'name' => 'Raven',
        'image_idle' => asset('images/idle-raven.jpg'),
        'image_walking' => asset('images/flying-raven.jpg'),
        'image_eating' => asset('images/eating-raven.jpg'),
    ]
];
