<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\GalleryVideo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\GalleryVideoController
 */
final class GalleryVideoControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $galleryVideos = GalleryVideo::factory()->count(3)->create();

        $response = $this->get(route('gallery-videos.index'));

        $response->assertOk();
        $response->assertViewIs('galleryVideo.index');
        $response->assertViewHas('galleryVideos');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('gallery-videos.create'));

        $response->assertOk();
        $response->assertViewIs('galleryVideo.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\GalleryVideoController::class,
            'store',
            \App\Http\Requests\GalleryVideoStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $title = fake()->sentence(4);
        $description = fake()->text();
        $url = fake()->url();

        $response = $this->post(route('gallery-videos.store'), [
            'title' => $title,
            'description' => $description,
            'url' => $url,
        ]);

        $galleryVideos = GalleryVideo::query()
            ->where('title', $title)
            ->where('description', $description)
            ->where('url', $url)
            ->get();
        $this->assertCount(1, $galleryVideos);
        $galleryVideo = $galleryVideos->first();

        $response->assertRedirect(route('galleryVideos.index'));
        $response->assertSessionHas('galleryVideo.id', $galleryVideo->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $galleryVideo = GalleryVideo::factory()->create();

        $response = $this->get(route('gallery-videos.show', $galleryVideo));

        $response->assertOk();
        $response->assertViewIs('galleryVideo.show');
        $response->assertViewHas('galleryVideo');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $galleryVideo = GalleryVideo::factory()->create();

        $response = $this->get(route('gallery-videos.edit', $galleryVideo));

        $response->assertOk();
        $response->assertViewIs('galleryVideo.edit');
        $response->assertViewHas('galleryVideo');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\GalleryVideoController::class,
            'update',
            \App\Http\Requests\GalleryVideoUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $galleryVideo = GalleryVideo::factory()->create();
        $title = fake()->sentence(4);
        $description = fake()->text();
        $url = fake()->url();

        $response = $this->put(route('gallery-videos.update', $galleryVideo), [
            'title' => $title,
            'description' => $description,
            'url' => $url,
        ]);

        $galleryVideo->refresh();

        $response->assertRedirect(route('galleryVideos.index'));
        $response->assertSessionHas('galleryVideo.id', $galleryVideo->id);

        $this->assertEquals($title, $galleryVideo->title);
        $this->assertEquals($description, $galleryVideo->description);
        $this->assertEquals($url, $galleryVideo->url);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $galleryVideo = GalleryVideo::factory()->create();

        $response = $this->delete(route('gallery-videos.destroy', $galleryVideo));

        $response->assertRedirect(route('galleryVideos.index'));

        $this->assertModelMissing($galleryVideo);
    }
}
