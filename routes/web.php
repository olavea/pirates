<?php

use Illuminate\Support\Arr;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
//        $jobs = Job::all();

//        dd($jobs[1]->title);


    return view('welcome');
});

Route::get('/noinvite', function () {
    return view('noinvite');
});

// dashboard
Route::get('/tales', function () {
    return view('jobs/index', [
        'jobs' => Job::all()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');



// Create
Route::get('/add', function () {
    return view('jobs/create');
})->middleware(['auth', 'verified'])->name('add');

// new
Route::post('/tall_tales', function () {
    // test it with dd -> 419 expired : 💀
    // dd('yo yo YO');

    // validation...
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    // Job::create([
    //     'title' => request('title'),
    //     'salary' => request('salary'),
    //     'employer_id' => 1
    // ]);

    return redirect('/tales');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/jobs/{id}/edit', function ($id) {
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

    
    return view('jobs.edit', ['job' => $job]);
})->middleware(['auth', 'verified',])->name('jobs.edit');


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

    
    return view('jobs.show', ['job' => $job]);
})->middleware(['auth', 'verified'])->name('{id}');
