<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\ApiService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ApiServiceController
 */
final class ApiServiceControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $apiServices = ApiService::factory()->count(3)->create();

        $response = $this->get(route('api-services.index'));

        $response->assertOk();
        $response->assertViewIs('apiService.index');
        $response->assertViewHas('apiServices');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('api-services.create'));

        $response->assertOk();
        $response->assertViewIs('apiService.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ApiServiceController::class,
            'store',
            \App\Http\Requests\ApiServiceStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $username = fake()->userName();
        $api_key = fake()->word();

        $response = $this->post(route('api-services.store'), [
            'username' => $username,
            'api_key' => $api_key,
        ]);

        $apiServices = ApiService::query()
            ->where('username', $username)
            ->where('api_key', $api_key)
            ->get();
        $this->assertCount(1, $apiServices);
        $apiService = $apiServices->first();

        $response->assertRedirect(route('apiServices.index'));
        $response->assertSessionHas('apiService.id', $apiService->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $apiService = ApiService::factory()->create();

        $response = $this->get(route('api-services.show', $apiService));

        $response->assertOk();
        $response->assertViewIs('apiService.show');
        $response->assertViewHas('apiService');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $apiService = ApiService::factory()->create();

        $response = $this->get(route('api-services.edit', $apiService));

        $response->assertOk();
        $response->assertViewIs('apiService.edit');
        $response->assertViewHas('apiService');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ApiServiceController::class,
            'update',
            \App\Http\Requests\ApiServiceUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $apiService = ApiService::factory()->create();
        $username = fake()->userName();
        $api_key = fake()->word();

        $response = $this->put(route('api-services.update', $apiService), [
            'username' => $username,
            'api_key' => $api_key,
        ]);

        $apiService->refresh();

        $response->assertRedirect(route('apiServices.index'));
        $response->assertSessionHas('apiService.id', $apiService->id);

        $this->assertEquals($username, $apiService->username);
        $this->assertEquals($api_key, $apiService->api_key);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $apiService = ApiService::factory()->create();

        $response = $this->delete(route('api-services.destroy', $apiService));

        $response->assertRedirect(route('apiServices.index'));

        $this->assertModelMissing($apiService);
    }
}
