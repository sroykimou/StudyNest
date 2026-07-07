<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TrackController extends Controller
{
    public function scienceHome()
    {
        return view('grade12.science.science_home');
    }

    public function socialHome()
    {
        return view('grade12.social.social_home');
    }

    public function subjectHome($track, $subject)
    {
        $viewName = "grade12.{$track}.{$subject}.{$subject}";
        if (View::exists($viewName)) {
            return view($viewName);
        }
        abort(404, "Subject home page not found (View: {$viewName}).");
    }

    public function showLesson($track, $subject, $path)
    {
        \Illuminate\Support\Facades\Log::info("showLesson Called - Track: {$track}, Subject: {$subject}, Path: {$path}");
        // Decode path (handles spaces/special chars) and convert slashes to dots for view resolution
        $decodedPath = urldecode($path);
        $viewPath = str_replace('/', '.', $decodedPath);
        $viewName = "grade12.{$track}.{$subject}.lesson.{$viewPath}";
        
        if (View::exists($viewName)) {
            return view($viewName);
        }
        
        // Try fallback where spaces in folder names might be underscores or vice versa
        $normalizedViewPath = str_replace(' ', '_', $viewPath);
        $viewNameFallback = "grade12.{$track}.{$subject}.lesson.{$normalizedViewPath}";
        if (View::exists($viewNameFallback)) {
            return view($viewNameFallback);
        }

        // Direct file resolution fallback
        $filePath = resource_path("views/grade12/{$track}/{$subject}/lesson/{$decodedPath}.blade.php");
        if (file_exists($filePath)) {
            return view()->file($filePath);
        }
        $normalizedFilePath = resource_path("views/grade12/{$track}/{$subject}/lesson/" . str_replace(' ', '_', $decodedPath) . ".blade.php");
        if (file_exists($normalizedFilePath)) {
            return view()->file($normalizedFilePath);
        }

        abort(404, "Lesson page not found (View: {$viewName}).");
    }

    public function showExercise($track, $subject, $path)
    {
        // Decode path (handles spaces/special chars) and convert slashes to dots for view resolution
        $decodedPath = urldecode($path);
        $viewPath = str_replace('/', '.', $decodedPath);
        $viewName = "grade12.{$track}.{$subject}.exercise.{$viewPath}";
        
        if (View::exists($viewName)) {
            return view($viewName);
        }

        // Try fallback where spaces in folder names might be underscores
        $normalizedViewPath = str_replace(' ', '_', $viewPath);
        $viewNameFallback = "grade12.{$track}.{$subject}.exercise.{$normalizedViewPath}";
        if (View::exists($viewNameFallback)) {
            return view($viewNameFallback);
        }

        // Direct file resolution fallback
        $filePath = resource_path("views/grade12/{$track}/{$subject}/exercise/{$decodedPath}.blade.php");
        if (file_exists($filePath)) {
            return view()->file($filePath);
        }
        $normalizedFilePath = resource_path("views/grade12/{$track}/{$subject}/exercise/" . str_replace(' ', '_', $decodedPath) . ".blade.php");
        if (file_exists($normalizedFilePath)) {
            return view()->file($normalizedFilePath);
        }

        abort(404, "Exercise page not found (View: {$viewName}).");
    }

    public function showExams($track, $subject)
    {
        // Try standard naming templates
        $viewName = "grade12.{$track}.{$subject}.bacii.{$subject}_bacii_exams";
        if (View::exists($viewName)) {
            return view($viewName);
        }

        // Fallback for math structure
        if ($subject === 'math_g12') {
            $mathFallback = "grade12.{$track}.{$subject}.exams.math_g12_exams";
            if (View::exists($mathFallback)) {
                return view($mathFallback);
            }
        }

        // Fallback for biology specific
        if ($subject === 'biology_g12') {
            $bioFallback = "grade12.{$track}.{$subject}.bacii.biology_bacii_exams";
            if (View::exists($bioFallback)) {
                return view($bioFallback);
            }
        }

        abort(404, "Exams listing page not found.");
    }

    public function showExam($track, $subject, $exam)
    {
        $viewName = "grade12.{$track}.{$subject}.bacii.{$exam}";
        if (View::exists($viewName)) {
            return view($viewName);
        }

        // Handle filenames with dots (like 2014.1) by checking file path directly
        $filePath = resource_path("views/grade12/{$track}/{$subject}/bacii/{$exam}.blade.php");
        if (file_exists($filePath)) {
            return view()->file($filePath);
        }

        // Fallback for math exams directory
        if ($subject === 'math_g12') {
            $mathView = "grade12.{$track}.{$subject}.exams.{$exam}";
            if (View::exists($mathView)) {
                return view($mathView);
            }
            $mathFilePath = resource_path("views/grade12/{$track}/{$subject}/exams/{$exam}.blade.php");
            if (file_exists($mathFilePath)) {
                return view()->file($mathFilePath);
            }
        }

        abort(404, "Exam page not found (View: {$viewName}).");
    }
}
