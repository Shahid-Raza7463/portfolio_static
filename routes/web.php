<?php

use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\BlogsViewWebController;
use App\Http\Controllers\Web\BlogsWebController;
use App\Http\Controllers\Web\ContactUsWebController;
use Illuminate\Support\Facades\Route;


//* admin panel
Route::prefix('admin')->middleware('throttle:only_three_time')->group(function () {
    Route::resource('blog', BlogsController::class);
});

// Web
// Route::get('/', [BlogsWebController::class, 'index']);
Route::get('blogsview/{slug}', [BlogsViewWebController::class, 'index']);

//*login routes start
Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('Admin.template');
    })->middleware(['auth', 'verified'])->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('admin.dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
//*login routes end

//* portfolio start
// page all 
// Route::get('/portfolio-details', function () {
//     return view('web.pages.portfolio-details');
// });

// Route::get('/index-page', function () {
//     return view('web.pages.index');
// });

// Route::get('/service-details', function () {
//     return view('web.pages.service-details');
// });

// Route::get('/starter-page', function () {
//     return view('web.pages.starter-page');
// });


Route::get('/',  function () {
    return view('web.pages.home.index');
});
// Route::get('/portfolio-details/{id}', function ($id) {
//     if ($id == 1) {
//         return view('web.pages.portfolio.portfolio');
//     } else {
//         return view('web.pages.portfolio.portfolio2');
//     }
// });


//* All portfolio
Route::get('/portfolio-details/1', function () {
    return view('web.pages.portfolio.project1.portfolio');
});
Route::get('/portfolio-details/2', function () {
    return view('web.pages.portfolio.project2.portfolio');
});
Route::get('/portfolio-details/3', function () {
    return view('web.pages.portfolio.project3.portfolio');
});
Route::get('/portfolio-details/4', function () {
    return view('web.pages.portfolio.project4.portfolio');
});
Route::get('/portfolio-details/5', function () {
    return view('web.pages.portfolio.project5.portfolio');
});
Route::get('/portfolio-details/6', function () {
    return view('web.pages.portfolio.project6.portfolio');
});
Route::get('/portfolio-details/7', function () {
    return view('web.pages.portfolio.project7.portfolio');
});
Route::get('/portfolio-details/8', function () {
    return view('web.pages.portfolio.project8.portfolio');
});
Route::get('/portfolio-details/9', function () {
    return view('web.pages.portfolio.project9.portfolio');
});
Route::get('/portfolio-details/10', function () {
    return view('web.pages.portfolio.project10.portfolio');
});

//? All android portfolio start hare 
Route::get('/android-app/4', function () {
    return view('web.pages.portfolio.androidapp4.androidapp');
});
Route::get('/android-app/3', function () {
    return view('web.pages.portfolio.androidapp3.androidapp');
});
Route::get('/android-app/2', function () {
    return view('web.pages.portfolio.androidapp2.androidapp');
});
Route::get('/android-app/1', function () {
    return view('web.pages.portfolio.androidapp1.androidapp');
});

//* All portfolio end hare 

Route::resource('/contact', ContactUsWebController::class);

// All portfolio end 

Route::get('/service-details', function () {
    return view('web.pages.service.service');
});

Route::get('/starter-page', function () {
    return view('web.pages.starter.starter');
});

//* start end
