<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Schedule;
use App\Models\schedule;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\scheduleController
 */
final class scheduleControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $schedules = schedule::factory()->count(3)->create();

        $response = $this->get(route('schedules.index'));

        $response->assertOk();
        $response->assertViewIs('schedule.index');
        $response->assertViewHas('schedules');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('schedules.create'));

        $response->assertOk();
        $response->assertViewIs('schedule.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\scheduleController::class,
            'store',
            \App\Http\Requests\scheduleStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $response = $this->post(route('schedules.store'));

        $response->assertRedirect(route('schedules.index'));
        $response->assertSessionHas('schedule.id', $schedule->id);

        $this->assertDatabaseHas(schedules, [ /* ... */ ]);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $schedule = schedule::factory()->create();

        $response = $this->get(route('schedules.show', $schedule));

        $response->assertOk();
        $response->assertViewIs('schedule.show');
        $response->assertViewHas('schedule');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $schedule = schedule::factory()->create();

        $response = $this->get(route('schedules.edit', $schedule));

        $response->assertOk();
        $response->assertViewIs('schedule.edit');
        $response->assertViewHas('schedule');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\scheduleController::class,
            'update',
            \App\Http\Requests\scheduleUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $schedule = schedule::factory()->create();

        $response = $this->put(route('schedules.update', $schedule));

        $schedule->refresh();

        $response->assertRedirect(route('schedules.index'));
        $response->assertSessionHas('schedule.id', $schedule->id);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $schedule = schedule::factory()->create();
        $schedule = Schedule::factory()->create();

        $response = $this->delete(route('schedules.destroy', $schedule));

        $response->assertRedirect(route('schedules.index'));

        $this->assertModelMissing($schedule);
    }
}
