<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Slug;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SlugController
 */
final class SlugControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $slugs = Slug::factory()->count(3)->create();

        $response = $this->get(route('slugs.index'));

        $response->assertOk();
        $response->assertViewIs('slug.index');
        $response->assertViewHas('slugs');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('slugs.create'));

        $response->assertOk();
        $response->assertViewIs('slug.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SlugController::class,
            'store',
            \App\Http\Requests\SlugStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $title = fake()->sentence(4);

        $response = $this->post(route('slugs.store'), [
            'title' => $title,
        ]);

        $slugs = Slug::query()
            ->where('title', $title)
            ->get();
        $this->assertCount(1, $slugs);
        $slug = $slugs->first();

        $response->assertRedirect(route('slugs.index'));
        $response->assertSessionHas('slug.id', $slug->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $slug = Slug::factory()->create();

        $response = $this->get(route('slugs.show', $slug));

        $response->assertOk();
        $response->assertViewIs('slug.show');
        $response->assertViewHas('slug');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $slug = Slug::factory()->create();

        $response = $this->get(route('slugs.edit', $slug));

        $response->assertOk();
        $response->assertViewIs('slug.edit');
        $response->assertViewHas('slug');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SlugController::class,
            'update',
            \App\Http\Requests\SlugUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $slug = Slug::factory()->create();
        $title = fake()->sentence(4);

        $response = $this->put(route('slugs.update', $slug), [
            'title' => $title,
        ]);

        $slug->refresh();

        $response->assertRedirect(route('slugs.index'));
        $response->assertSessionHas('slug.id', $slug->id);

        $this->assertEquals($title, $slug->title);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $slug = Slug::factory()->create();

        $response = $this->delete(route('slugs.destroy', $slug));

        $response->assertRedirect(route('slugs.index'));

        $this->assertModelMissing($slug);
    }
}
