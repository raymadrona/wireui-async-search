<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');

Route::get('/api/users', function () {

    $selected = request()->get('selected');
    if ($selected) {
        return [
            [
                'id' => 1,
                'name' => 'Ray',
            ]
        ];
    }

    return [
        [
            'id' => 1,
            'name' => 'Ray',
        ],
        [
            'id' => 2,
            'name' => 'John',
        ],
        [
            'id' => 3,
            'name' => 'Jane',
        ]
    ];
})->name('api.users');
