<?php

use Illuminate\Support\Arr;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Barbeque Party at Berglunds', 
                'salary' => 'The party started with chilled prosecco in tall glasses and hard cheese with little spicy biscuits. With the patriarch of Berglunds I discussed our mutual satisfation with the personal attention our young ladies get from strong teachers at private and creative schools. The grilled meat and grilled vegetables were delicious. And a powerful red wine. But the triumphant high point: dessert! Crusty Blackberry Pie with icecreams and vanilla sauce.'
            ],
            [
                'id' => 2,
                'title' => 'The Dev Pirate Princess 🏴‍☠️👸 Redesigns Our POW! Website!',
                'salary' => '«I am bored» Said the Pirate Princess. «You wanna help me redesign our POW! website?» Captain Ola Said. «YES!» Said the little Pirate. «Let us play around with background colors in Tailwind.» Captain Ola Said. She looked for "bg" in Visual Studio Code. Then guessed the english spelling of "orange" and "yellow", which where the colors she most frequently chose.'
            ],
        ]    
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Barbeque Party at Berglunds', 
            'salary' => 'The party started with chilled prosecco in tall glasses and hard cheese with little spicy biscuits. With the patriarch of Berglunds I discussed our mutual satisfation with the personal attention our young ladies get from strong teachers at private and creative schools. The grilled meat and grilled vegetables were delicious. And a powerful red wine. But the triumphant high point: dessert! Crusty Blackberry Pie with icecreams and vanilla sauce.'
        ],
        [
            'id' => 2,
            'title' => 'The Dev Pirate Princess 🏴‍☠️👸 Redesigns Our POW! Website!',
            'salary' => '«I am bored» Said the Pirate Princess. «You wanna help me redesign our POW! website?» Captain Ola Said. «YES!» Said the little Pirate. «Let us play around with background colors in Tailwind.» Captain Ola Said. She looked for "bg" in Visual Studio Code. Then guessed the english spelling of "orange" and "yellow", which where the colors she most frequently chose.'
        ], 
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    
    return view('job', ['job' => $job]);
})->middleware(['auth', 'verified'])->name('{id}');


Route::get('/add', function () {
    return view('add');
})->middleware(['auth', 'verified'])->name('add');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
