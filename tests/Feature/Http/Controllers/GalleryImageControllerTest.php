<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\GalleryImageController
 */
final class GalleryImageControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $galleryImages = GalleryImage::factory()->count(3)->create();

        $response = $this->get(route('gallery-images.index'));

        $response->assertOk();
        $response->assertViewIs('galleryImage.index');
        $response->assertViewHas('galleryImages');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('gallery-images.create'));

        $response->assertOk();
        $response->assertViewIs('galleryImage.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\GalleryImageController::class,
            'store',
            \App\Http\Requests\GalleryImageStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $title = fake()->sentence(4);
        $description = fake()->text();
        $url = fake()->url();

        $response = $this->post(route('gallery-images.store'), [
            'title' => $title,
            'description' => $description,
            'url' => $url,
        ]);

        $galleryImages = GalleryImage::query()
            ->where('title', $title)
            ->where('description', $description)
            ->where('url', $url)
            ->get();
        $this->assertCount(1, $galleryImages);
        $galleryImage = $galleryImages->first();

        $response->assertRedirect(route('galleryImages.index'));
        $response->assertSessionHas('galleryImage.id', $galleryImage->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $galleryImage = GalleryImage::factory()->create();

        $response = $this->get(route('gallery-images.show', $galleryImage));

        $response->assertOk();
        $response->assertViewIs('galleryImage.show');
        $response->assertViewHas('galleryImage');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $galleryImage = GalleryImage::factory()->create();

        $response = $this->get(route('gallery-images.edit', $galleryImage));

        $response->assertOk();
        $response->assertViewIs('galleryImage.edit');
        $response->assertViewHas('galleryImage');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\GalleryImageController::class,
            'update',
            \App\Http\Requests\GalleryImageUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $galleryImage = GalleryImage::factory()->create();
        $title = fake()->sentence(4);
        $description = fake()->text();
        $url = fake()->url();

        $response = $this->put(route('gallery-images.update', $galleryImage), [
            'title' => $title,
            'description' => $description,
            'url' => $url,
        ]);

        $galleryImage->refresh();

        $response->assertRedirect(route('galleryImages.index'));
        $response->assertSessionHas('galleryImage.id', $galleryImage->id);

        $this->assertEquals($title, $galleryImage->title);
        $this->assertEquals($description, $galleryImage->description);
        $this->assertEquals($url, $galleryImage->url);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $galleryImage = GalleryImage::factory()->create();

        $response = $this->delete(route('gallery-images.destroy', $galleryImage));

        $response->assertRedirect(route('galleryImages.index'));

        $this->assertModelMissing($galleryImage);
    }
}
