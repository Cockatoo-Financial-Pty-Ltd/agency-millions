<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = \App\Models\Course::create([
            'title' => 'Agency Millions',
            'slug' => 'agency-millions',
            'description' => 'Learn how to build and grow a successful digital agency from scratch.',
            'is_published' => true,
            'order' => 1
        ]);

        $lessons = [
            [
                'title' => 'Introduction to Agency Millions',
                'slug' => 'introduction',
                'description' => 'Welcome to Agency Millions! Learn what you will achieve in this course.',
                'video_url' => 'https://example.com/videos/intro',
                'duration' => 15,
                'order' => 1,
                'is_published' => true
            ],
            [
                'title' => 'Finding Your Niche',
                'slug' => 'finding-your-niche',
                'description' => 'Learn how to identify and dominate your perfect agency niche.',
                'video_url' => 'https://example.com/videos/niche',
                'duration' => 30,
                'order' => 2,
                'is_published' => true
            ],
            [
                'title' => 'Setting Up Your Agency',
                'slug' => 'setting-up-agency',
                'description' => 'Step-by-step guide to setting up your agency infrastructure.',
                'video_url' => 'https://example.com/videos/setup',
                'duration' => 45,
                'order' => 3,
                'is_published' => true
            ],
            [
                'title' => 'Client Acquisition Strategies',
                'slug' => 'client-acquisition',
                'description' => 'Proven strategies to attract and land high-ticket clients.',
                'video_url' => 'https://example.com/videos/clients',
                'duration' => 60,
                'order' => 4,
                'is_published' => true
            ],
            [
                'title' => 'Scaling Your Agency',
                'slug' => 'scaling-agency',
                'description' => 'Learn how to scale your agency to multiple six figures and beyond.',
                'video_url' => 'https://example.com/videos/scaling',
                'duration' => 50,
                'order' => 5,
                'is_published' => true
            ]
        ];

        foreach ($lessons as $lesson) {
            $course->lessons()->create($lesson);
        }
    }
}
