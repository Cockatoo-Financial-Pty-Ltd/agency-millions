<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Course;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function show(Course $course, Lesson $lesson)
    {
        $isCompleted = $lesson->completedByUser(auth()->user());
        return view('courses.lessons.show', compact('course', 'lesson', 'isCompleted'));
    }

    public function complete(Course $course, Lesson $lesson)
    {
        auth()->user()->completedLessons()->firstOrCreate([
            'lesson_id' => $lesson->id
        ]);

        return back()->with('success', 'Lesson marked as completed!');
    }
}
