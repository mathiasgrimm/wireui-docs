<?php

namespace Tests\Feature\Controllers\Api\Users;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function it_should_search_for_users()
    {
        User::factory()->count(9)->create();
        $user = User::factory()->create();

        $this->getJson(route('api.users.index', ['search' => $user->email]))
            ->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment([
                'id'    => $user->id,
                'name'  => $user->name,
                'email' => $user->email,
            ]);
    }

    /** @test **/
    public function it_should_find_users()
    {
        User::factory()->count(9)->create();
        $user = User::factory()->create();

        $this->getJson(route('api.users.index', ['selected' => [$user->id]]))
            ->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment([
                'id'    => $user->id,
                'name'  => $user->name,
                'email' => $user->email,
            ]);
    }
}
