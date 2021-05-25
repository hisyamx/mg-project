<?php

namespace Tests\Feature;

use App\User;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_a_dashboard_can_acceseed_by_admin()
    {
        $user = $this->actingAs(User::find(1));
        $response = $user->get('/dashboard');
        $response->assertStatus(200);
    }


    //! KARYAWAN SECTION
    public function test_a_karyawan_can_added_by_admin()
    {
        $user = $this->actingAs(User::find(1));
        $response = $user->json('POST', '/karyawan/create', [
            'code' => 'ABCDE',
            'name' => 'Fitra Nabiila',
            'email' => 'fitra@mail.com',
            'password' => '123123',
            'role' => 2,
            'telephone' => '082346785934',
            'start' => Carbon::create(2021, 1, 3),
            'finish' => Carbon::create(2021, 5, 4),
            'address' => 'Jl Tembalang',
            'instansi' => 'Mediatama',
            'division_id' => 1,
        ]);

        $response->assertRedirect('/karyawan');
    }

    public function test_a_karyawan_can_viewed_by_admin()
    {
        $user = $this->actingAs(User::find(1));
        $response = $user->get('/karyawan/show/2');
        $response->assertStatus(200);
    }

    public function test_a_karyawan_can_edited_by_admin()
    {
        $user = $this->actingAs(User::find(1));
        $response = $user->get('/karyawan/edit/2');
        $response->assertStatus(200);
    }

    public function test_a_karyawan_can_updated_by_admin()
    {
        $user = $this->actingAs(User::find(1));
        $response = $user->json('POST', '/karyawan/edit/2', [
            'code' => 'ABCDE',
            'name' => 'Fitra Nabiila',
            'email' => 'hisyamk@mail.com',
            'password' => '123123',
            'role' => 2,
            'telephone' => '082346785934',
            'start' => Carbon::create(2021, 1, 3),
            'finish' => Carbon::create(2021, 5, 4),
            'address' => 'Jl Tembalang',
            'instansi' => 'Mediatama',
            'division_id' => 1,
        ]);

        $response->assertRedirect('/karyawan');
    }

    public function test_a_karyawan_can_destroyed_by_admin()
    {
        $user = $this->actingAs(User::find(1));
        $response = $user->json('DELETE', '/karyawan/delete/5');
        $response->assertRedirect('/karyawan');
    }


    //! MAGANG SECTION
    public function test_a_magang_can_added_by_admin()
    {
        $user = $this->actingAs(User::find(1));
        $response = $user->json('POST', '/magang/create', [
            'code' => 'ABCDE',
            'name' => 'Fitra Nabiila',
            'email' => 'fitra@mail.com',
            'password' => '123123',
            'role' => 3,
            'telephone' => '082346785934',
            'start' => Carbon::create(2021, 1, 3),
            'finish' => Carbon::create(2021, 5, 4),
            'address' => 'Jl Tembalang',
            'instansi' => 'Mediatama',
            'division_id' => 1,
        ]);

        $response->assertRedirect('/magang');
    }

    public function test_a_magang_can_viewed_by_admin()
    {
        $user = $this->actingAs(User::find(1));
        $response = $user->get('/magang/show/2');
        $response->assertStatus(200);
    }

    public function test_a_magang_can_edited_by_admin()
    {
        $user = $this->actingAs(User::find(1));
        $response = $user->get('/magang/edit/2');
        $response->assertStatus(200);
    }

    public function test_a_magang_can_updated_by_admin()
    {
        $user = $this->actingAs(User::find(1));
        $response = $user->json('POST', '/magang/edit/6', [
            'code' => 'ABCDE',
            'name' => 'Fitra Nabiilas',
            'email' => 'hisyamks@mail.com',
            'password' => '123123',
            'role' => 3,
            'telephone' => '082346785934',
            'start' => Carbon::create(2021, 1, 3),
            'finish' => Carbon::create(2021, 5, 4),
            'address' => 'Jl Tembalang',
            'instansi' => 'Mediatama',
            'division_id' => 1,
        ]);

        $response->assertRedirect('/magang');
    }

    public function test_a_magang_can_destroyed_by_admin()
    {
        $user = $this->actingAs(User::find(1));
        $response = $user->json('DELETE', '/magang/delete/6');
        $response->assertRedirect('/magang');
    }
}
