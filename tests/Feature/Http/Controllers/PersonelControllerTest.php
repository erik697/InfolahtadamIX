<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Personel;
use App\Models\Position;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PersonelController
 */
final class PersonelControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $personels = Personel::factory()->count(3)->create();

        $response = $this->get(route('personels.index'));

        $response->assertOk();
        $response->assertViewIs('personel.index');
        $response->assertViewHas('personels');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('personels.create'));

        $response->assertOk();
        $response->assertViewIs('personel.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PersonelController::class,
            'store',
            \App\Http\Requests\PersonelStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $name = fake()->name();
        $nrp = fake()->word();
        $position = Position::factory()->create();
        $status = fake()->randomElement(/** enum_attributes **/);

        $response = $this->post(route('personels.store'), [
            'name' => $name,
            'nrp' => $nrp,
            'position_id' => $position->id,
            'status' => $status,
        ]);

        $personels = Personel::query()
            ->where('name', $name)
            ->where('nrp', $nrp)
            ->where('position_id', $position->id)
            ->where('status', $status)
            ->get();
        $this->assertCount(1, $personels);
        $personel = $personels->first();

        $response->assertRedirect(route('personels.index'));
        $response->assertSessionHas('personel.id', $personel->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $personel = Personel::factory()->create();

        $response = $this->get(route('personels.show', $personel));

        $response->assertOk();
        $response->assertViewIs('personel.show');
        $response->assertViewHas('personel');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $personel = Personel::factory()->create();

        $response = $this->get(route('personels.edit', $personel));

        $response->assertOk();
        $response->assertViewIs('personel.edit');
        $response->assertViewHas('personel');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PersonelController::class,
            'update',
            \App\Http\Requests\PersonelUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $personel = Personel::factory()->create();
        $name = fake()->name();
        $nrp = fake()->word();
        $position = Position::factory()->create();
        $status = fake()->randomElement(/** enum_attributes **/);

        $response = $this->put(route('personels.update', $personel), [
            'name' => $name,
            'nrp' => $nrp,
            'position_id' => $position->id,
            'status' => $status,
        ]);

        $personel->refresh();

        $response->assertRedirect(route('personels.index'));
        $response->assertSessionHas('personel.id', $personel->id);

        $this->assertEquals($name, $personel->name);
        $this->assertEquals($nrp, $personel->nrp);
        $this->assertEquals($position->id, $personel->position_id);
        $this->assertEquals($status, $personel->status);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $personel = Personel::factory()->create();

        $response = $this->delete(route('personels.destroy', $personel));

        $response->assertRedirect(route('personels.index'));

        $this->assertModelMissing($personel);
    }
}
