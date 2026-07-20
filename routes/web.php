<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Grade12Controller;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;

// Log every incoming request URL for debugging (handles CLI safety)
Log::info('Incoming Request: ' . request()->fullUrl() . ' | Raw URI: ' . ($_SERVER['REQUEST_URI'] ?? 'CLI'));

// ==========================================
// 1. LEGACY REDIRECT RULES (STATIC PATHS)
// ==========================================
Route::redirect('/index.php', '/');
Route::redirect('/index.html', '/');
Route::redirect('/auth/login.php', '/login');
Route::redirect('/auth/login.html', '/login');
Route::redirect('/auth/register.php', '/register');
Route::redirect('/auth/register.html', '/register');
Route::redirect('/grade12/profile.php', '/grade12/profile');
Route::redirect('/grade12/pay.php', '/grade12/pay');
Route::redirect('/grade12/admin_panel.php', '/grade12/admin');
Route::redirect('/grade12/science/science_home.php', '/grade12/science');
Route::redirect('/grade12/science/science_home.html', '/grade12/science');
Route::redirect('/grade12/social/social_home.php', '/grade12/social');
Route::redirect('/grade12/social/social_home.html', '/grade12/social');


// ==========================================
// 2. STANDARD STATIC ROUTES
// ==========================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ==========================================
// 3. GRADE 12 PRIMARY DASHBOARD & UTILITY ROUTES
// ==========================================
Route::prefix('grade12')->name('grade12.')->group(function () {
    Route::get('/profile', [Grade12Controller::class, 'profile'])->name('profile');
    Route::get('/pay', [Grade12Controller::class, 'pay'])->name('pay');
    Route::get('/admin', [Grade12Controller::class, 'adminPanel'])->name('admin');
    
    Route::get('/science', [TrackController::class, 'scienceHome'])->name('science.home');
    Route::get('/social', [TrackController::class, 'socialHome'])->name('social.home');
});


// ==========================================
// 4. LEGACY REDIRECT RULES (DYNAMIC TRACK-LESS PATHS)
// ==========================================
// Constrained with [^/]+ so they never match subdirectories (like science/physics_g12).
Route::get('/grade12/{subject}', function ($subject) {
    $track = View::exists("grade12.social.{$subject}.{$subject}") ? 'social' : 'science';
    $target = "/grade12/{$track}/{$subject}/";
    Log::info('Redirecting trackless subject /grade12/' . $subject . ' to ' . $target);
    return redirect($target);
})->where('subject', '^(?!(science|social|assets)$)[^/]+');

Route::get('/grade12/{subject}/{subject_file}.php', function ($subject, $subject_file) {
    $track = View::exists("grade12.social.{$subject}.{$subject}") ? 'social' : 'science';
    if ($subject === $subject_file) {
        $target = "/grade12/{$track}/{$subject}/";
        Log::info('Redirecting trackless php subject file to ' . $target);
        return redirect($target);
    }
    if (str_ends_with($subject_file, '_bacii_exams')) {
        return redirect(route('grade12.subject.exams', ['track' => $track, 'subject' => $subject]));
    }
    $target = "/grade12/{$track}/{$subject}/";
    Log::info('Redirecting trackless php subject file default to ' . $target);
    return redirect($target);
})->where('subject', '^(?!(science|social|assets)$)[^/]+');

Route::get('/grade12/{subject}/lesson/{path}', function ($subject, $path) {
    $track = View::exists("grade12.social.{$subject}.{$subject}") ? 'social' : 'science';
    return redirect(route('grade12.subject.lesson', ['track' => $track, 'subject' => $subject, 'path' => $path]));
})->where(['subject' => '^(?!(science|social|assets)$)[^/]+', 'path' => '.*']);

Route::get('/grade12/{subject}/exercise/{path}', function ($subject, $path) {
    $track = View::exists("grade12.social.{$subject}.{$subject}") ? 'social' : 'science';
    return redirect(route('grade12.subject.exercise', ['track' => $track, 'subject' => $subject, 'path' => $path]));
})->where(['subject' => '^(?!(science|social|assets)$)[^/]+', 'path' => '.*']);

Route::get('/grade12/{subject}/exams', function ($subject) {
    $track = View::exists("grade12.social.{$subject}.{$subject}") ? 'social' : 'science';
    return redirect(route('grade12.subject.exams', ['track' => $track, 'subject' => $subject]));
})->where('subject', '^(?!(science|social|assets)$)[^/]+');

Route::get('/grade12/{subject}/exams/{exam}', function ($subject, $exam) {
    $track = View::exists("grade12.social.{$subject}.{$subject}") ? 'social' : 'science';
    return redirect(route('grade12.subject.exam', ['track' => $track, 'subject' => $subject, 'exam' => $exam]));
})->where('subject', '^(?!(science|social|assets)$)[^/]+');


// ==========================================
// 5. LEGACY REDIRECT RULES (NESTED PATHS WITH PHP EXTENSIONS)
// ==========================================
Route::get('/grade12/{track}/{subject}/{subject_file}.php', function ($track, $subject, $subject_file) {
    if ($subject === $subject_file) {
        $target = "/grade12/{$track}/{$subject}/";
        Log::info('Redirecting track php file matching subject to ' . $target);
        return redirect($target);
    }
    if (str_ends_with($subject_file, '_bacii_exams')) {
        return redirect(route('grade12.subject.exams', ['track' => $track, 'subject' => $subject]));
    }
    $target = "/grade12/{$track}/{$subject}/";
    Log::info('Redirecting track php file default to ' . $target);
    return redirect($target);
})->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+']);

Route::get('/grade12/{track}/{subject}/lesson/{path}.php', function ($track, $subject, $path) {
    return redirect(route('grade12.subject.lesson', [
        'track' => $track,
        'subject' => $subject,
        'path' => $path
    ]));
})->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+']);

Route::get('/grade12/{track}/{subject}/exercise/{path}.php', function ($track, $subject, $path) {
    return redirect(route('grade12.subject.exercise', [
        'track' => $track,
        'subject' => $subject,
        'path' => $path
    ]));
})->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+']);

Route::get('/grade12/{track}/{subject}/exams/{exam}.php', function ($track, $subject, $exam) {
    return redirect(route('grade12.subject.exam', [
        'track' => $track,
        'subject' => $subject,
        'exam' => $exam
    ]));
})->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+']);

Route::get('/grade12/{track}/{subject}/bacii/{exam}.php', function ($track, $subject, $exam) {
    return redirect(route('grade12.subject.exam', [
        'track' => $track,
        'subject' => $subject,
        'exam' => $exam
    ]));
})->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+']);


Route::get('/viewer', [TrackController::class, 'documentViewer'])->name('document.viewer');


// ==========================================
// 6. DYNAMIC ROUTING FOR CLEAN PATHS
// ==========================================
Route::prefix('grade12')->name('grade12.')->group(function () {
    // Subject homepage redirects to trailing-slash URL if slash is missing to preserve relative link resolution.
    // Uses raw $_SERVER['REQUEST_URI'] to bypass Symfony's automatic trailing slash stripping.
    // Constrained to valid tracks and non-asset subject names.
    Route::get('/{track}/{subject}', function ($track, $subject) {
        $rawPath = parse_url(request()->getRequestUri(), PHP_URL_PATH) ?: request()->path();
        Log::info('Subject Home Route Matched - rawPath: ' . $rawPath . ' - track: ' . $track . ' - subject: ' . $subject);
        if (!str_ends_with($rawPath, '/')) {
            $query = request()->getQueryString();
            $target = $rawPath . '/' . ($query ? '?' . $query : '');
            Log::info('Redirecting to trailing slash target: ' . $target);
            return response('', 302)->header('Location', request()->getSchemeAndHttpHost() . $target);
        }
        return app(TrackController::class)->subjectHome($track, $subject);
    })->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+'])->name('subject.home');
    
    Route::get('/{track}/{subject}/lesson/{path}', [TrackController::class, 'showLesson'])->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+', 'path' => '.*'])->name('subject.lesson');
    Route::get('/{track}/{subject}/exercise/{path}', [TrackController::class, 'showExercise'])->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+', 'path' => '.*'])->name('subject.exercise');
    Route::get('/{track}/{subject}/prep', function($track, $subject) {
        $viewName = "grade12.{$track}.{$subject}.prep.prep";
        if (View::exists($viewName)) {
            return view($viewName);
        }
        $filePath = resource_path("views/grade12/{$track}/{$subject}/prep/prep.blade.php");
        if (file_exists($filePath)) {
            return view()->file($filePath);
        }
        abort(404, "Prep page not found.");
    })->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+'])->name('subject.prep');
    Route::get('/{track}/{subject}/prep/{exam}', [TrackController::class, 'showExam'])->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+'])->name('subject.prepExam');
    Route::get('/{track}/{subject}/exams', [TrackController::class, 'showExams'])->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+'])->name('subject.exams');
    Route::get('/{track}/{subject}/exams/biology_bacii_exams', function($track, $subject) {
        return redirect("/grade12/{$track}/{$subject}/exams");
    });
    Route::get('/{track}/{subject}/exams/{exam}', [TrackController::class, 'showExam'])->where(['track' => 'science|social', 'subject' => '^(?!(assets)$)[^/]+'])->name('subject.exam');
});
