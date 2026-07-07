<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApplicationSmokeTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_pages_render(): void
    {
        $this->get('/')->assertOk();
        $this->get('/login')->assertOk();
        $this->get('/register')->assertOk();
        $this->get('/grade12/science')->assertOk();
        $this->get('/grade12/social')->assertOk();
    }

    public function test_legacy_static_pages_redirect_to_clean_routes(): void
    {
        $this->get('/index.html')->assertRedirect('/');
        $this->get('/auth/login.html')->assertRedirect('/login');
        $this->get('/grade12/science/science_home.html')->assertRedirect('/grade12/science');
    }

    public function test_subject_and_content_routes_render(): void
    {
        $response = $this->get('/grade12/science/biology_g12')
            ->assertStatus(302);

        $this->assertStringEndsWith(
            '/grade12/science/biology_g12/',
            $response->headers->get('Location')
        );

        $this->get('/grade12/science/biology_g12/lesson/chapter_1/gymnosperm')->assertOk();
        $this->get('/grade12/science/biology_g12/exercise/formulas_dna')->assertOk();
        $this->get('/grade12/science/biology_g12/exams')->assertOk();
        $this->get('/grade12/science/biology_g12/exams/2014.1')->assertOk();
        $this->get('/grade12/science/math_g12/exams/kanit-1')->assertOk();
    }

    public function test_registration_creates_user_and_redirects_to_selected_track(): void
    {
        $this->post('/register', [
            'username' => 'student1',
            'name' => 'Student One',
            'email' => 'student1@example.com',
            'password' => 'secret123',
            'grade' => '12',
            'branch' => 'social',
        ])->assertRedirect(route('grade12.social.home'));

        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'username' => 'student1',
            'email' => 'student1@example.com',
            'branch' => 'social',
        ]);
    }

    public function test_login_redirects_by_user_role_and_branch(): void
    {
        User::create([
            'username' => 'science1',
            'name' => 'Science Student',
            'email' => 'science1@example.com',
            'password' => 'secret123',
            'branch' => 'science',
            'grade' => '12',
        ]);

        $this->post('/login', [
            'username' => 'science1',
            'password' => 'secret123',
        ])->assertRedirect(route('grade12.science.home'));
    }

    public function test_admin_page_requires_admin_user(): void
    {
        $this->get('/grade12/admin')->assertForbidden();

        $student = User::create([
            'username' => 'student2',
            'name' => 'Student Two',
            'email' => 'student2@example.com',
            'password' => 'secret123',
            'branch' => 'science',
            'grade' => '12',
        ]);

        $this->actingAs($student)->get('/grade12/admin')->assertForbidden();

        $admin = User::create([
            'username' => 'admin1',
            'name' => 'Admin User',
            'email' => 'admin1@example.com',
            'password' => 'secret123',
            'branch' => 'science',
            'grade' => '12',
            'is_admin' => true,
        ]);

        $this->actingAs($admin)->get('/grade12/admin')->assertOk();
    }
}
