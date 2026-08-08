<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TrackController extends Controller
{
    public function scienceHome()
    {
        return view('grade12.science.science_home', [
            'user' => \Illuminate\Support\Facades\Auth::user()
        ]);
    }

    public function socialHome()
    {
        return view('grade12.social.social_home', [
            'user' => \Illuminate\Support\Facades\Auth::user()
        ]);
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
        
        $view = null;
        if (View::exists($viewName)) {
            $view = view($viewName);
        } else {
            // Try fallback where spaces in folder names might be underscores or vice versa
            $normalizedViewPath = str_replace(' ', '_', $viewPath);
            $viewNameFallback = "grade12.{$track}.{$subject}.lesson.{$normalizedViewPath}";
            if (View::exists($viewNameFallback)) {
                $view = view($viewNameFallback);
            }
        }

        if (!$view) {
            // Direct file resolution fallback (.html or .blade.php)
            $filePath = resource_path("views/grade12/{$track}/{$subject}/lesson/{$decodedPath}.html");
            if (!file_exists($filePath)) {
                $filePath = resource_path("views/grade12/{$track}/{$subject}/lesson/{$decodedPath}.blade.php");
            }
            if (file_exists($filePath)) {
                $view = view()->file($filePath);
            } else {
                $normalizedFilePath = resource_path("views/grade12/{$track}/{$subject}/lesson/" . str_replace(' ', '_', $decodedPath) . ".html");
                if (!file_exists($normalizedFilePath)) {
                    $normalizedFilePath = resource_path("views/grade12/{$track}/{$subject}/lesson/" . str_replace(' ', '_', $decodedPath) . ".blade.php");
                }
                if (file_exists($normalizedFilePath)) {
                    $view = view()->file($normalizedFilePath);
                }
            }
        }

        if ($view) {
            $html = $view->render();
            // Inject <base> tag to correctly resolve relative image paths (e.g. images/image.png)
            // relative to the actual lesson directory.
            $baseHref = "/grade12/{$track}/{$subject}/lesson/" . str_replace(' ', '%20', dirname($decodedPath)) . "/";
            $html = preg_replace('/<head>/i', "<head>\n    <base href=\"{$baseHref}\">", $html, 1);
            return response($html);
        }

        abort(404, "Lesson page not found (View: {$viewName}).");
    }

    public function showExercise($track, $subject, $path)
    {
        // Decode path (handles spaces/special chars) and convert slashes to dots for view resolution
        $decodedPath = urldecode($path);

        $viewPath = str_replace('/', '.', $decodedPath);
        $viewName = "grade12.{$track}.{$subject}.exercise.{$viewPath}";
        
        $view = null;
        if (View::exists($viewName)) {
            $view = view($viewName);
        } else {
            // Try fallback where spaces in folder names might be underscores
            $normalizedViewPath = str_replace(' ', '_', $viewPath);
            $viewNameFallback = "grade12.{$track}.{$subject}.exercise.{$normalizedViewPath}";
            if (View::exists($viewNameFallback)) {
                $view = view($viewNameFallback);
            }
        }

        if (!$view) {
            // Direct file resolution fallback (.html or .blade.php)
            $filePath = resource_path("views/grade12/{$track}/{$subject}/exercise/{$decodedPath}.html");
            if (!file_exists($filePath)) {
                $filePath = resource_path("views/grade12/{$track}/{$subject}/exercise/{$decodedPath}.blade.php");
            }
            if (file_exists($filePath)) {
                $view = view()->file($filePath);
            } else {
                $normalizedFilePath = resource_path("views/grade12/{$track}/{$subject}/exercise/" . str_replace(' ', '_', $decodedPath) . ".html");
                if (!file_exists($normalizedFilePath)) {
                    $normalizedFilePath = resource_path("views/grade12/{$track}/{$subject}/exercise/" . str_replace(' ', '_', $decodedPath) . ".blade.php");
                }
                if (file_exists($normalizedFilePath)) {
                    $view = view()->file($normalizedFilePath);
                }
            }
        }

        if ($view) {
            $html = $view->render();
            // Inject <base> tag to correctly resolve relative image paths (e.g. images/image.png)
            // relative to the actual exercise directory.
            $baseHref = "/grade12/{$track}/{$subject}/exercise/" . str_replace(' ', '%20', dirname($decodedPath)) . "/";
            $html = preg_replace('/<head>/i', "<head>\n    <base href=\"{$baseHref}\">", $html, 1);
            return response($html);
        }

        abort(404, "Exercise page not found (View: {$viewName}).");
    }

    private function serveImageIfExists($track, $subject, $decodedPath, $type)
    {
        if (preg_match('/\\.(png|jpg|jpeg|gif|svg|ico)$/i', $decodedPath)) {
            $filename = basename($decodedPath);
            $parentPath = dirname($decodedPath);
            
            if (basename($parentPath) === 'images') {
                $parentPath = dirname($parentPath);
            }
            
            // Try 1: check directly if file exists under the type path
            $targetPath = public_path("grade12/{$track}/{$subject}/{$type}/{$parentPath}/images/{$filename}");
            if (file_exists($targetPath)) {
                return response()->file($targetPath);
            }
            
            // Try 2: strip one more parent folder (the blade view page name)
            $parentDir = dirname($parentPath);
            $targetPathFallback = public_path("grade12/{$track}/{$subject}/{$type}/{$parentDir}/images/{$filename}");
            if (file_exists($targetPathFallback)) {
                return response()->file($targetPathFallback);
            }
            
            // Try 3: check directly where the decodedPath points inside public
            $directPath = public_path("grade12/{$track}/{$subject}/{$type}/{$decodedPath}");
            if (file_exists($directPath)) {
                return response()->file($directPath);
            }
        }
        return null;
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
        $fileRelativePath = null;
        $solutionRelativePath = null;
        $title = "វិញ្ញាសា - {$exam}";

        if ($subject === 'biology_g12') {
            $fileRelativePath = "grade12/{$track}/{$subject}/exams/{$exam}/{$exam}.pdf";
            $solutionRelativePath = "grade12/{$track}/{$subject}/exams/{$exam}/{$exam}answer.pdf";
            $title = "ជីវវិទ្យា (Biology) - {$exam}";
        } elseif ($subject === 'math_g12') {
            if (preg_match('/kanit-(\d+)/', $exam, $matches)) {
                $id = $matches[1];
                $fileRelativePath = "grade12/{$track}/{$subject}/prep/kanit-exam-{$id}.pdf";
                if (!file_exists(public_path($fileRelativePath))) {
                    $fileRelativePath = "grade12/{$track}/{$subject}/exams/kanit-exam-{$id}.pdf";
                }
                $title = "គណិតវិទ្យា (Mathematics) - វិញ្ញាសាទី {$id}";
            }
        }

        if ($fileRelativePath && file_exists(public_path($fileRelativePath))) {
            $fileUrl = asset($fileRelativePath);
            $solUrl = ($solutionRelativePath && file_exists(public_path($solutionRelativePath))) ? asset($solutionRelativePath) : null;
            
            return view('document_viewer', [
                'file' => $fileUrl,
                'solution' => $solUrl,
                'title' => $title
            ]);
        }

        $viewName = "grade12.{$track}.{$subject}.bacii.{$exam}";
        if (View::exists($viewName)) {
            return view($viewName);
        }

        // Handle filenames with dots (like 2014.1) by checking file path directly
        $filePath = resource_path("views/grade12/{$track}/{$subject}/bacii/{$exam}.blade.php");
        if (file_exists($filePath)) {
            return view()->file($filePath);
        }

        // Fallback for math prep/exams directory
        if ($subject === 'math_g12') {
            $prepView = "grade12.{$track}.{$subject}.prep.{$exam}";
            if (View::exists($prepView)) {
                return view($prepView);
            }
            $prepFilePath = resource_path("views/grade12/{$track}/{$subject}/prep/{$exam}.blade.php");
            if (file_exists($prepFilePath)) {
                return view()->file($prepFilePath);
            }

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

    public function documentViewer(Request $request)
    {
        $file = $request->query('file');
        $title = $request->query('title', 'Document Viewer');
        
        if (!$file) {
            abort(400, 'Missing "file" query parameter.');
        }
        
        return view('document_viewer', [
            'file' => $file,
            'title' => $title
        ]);
    }
}
