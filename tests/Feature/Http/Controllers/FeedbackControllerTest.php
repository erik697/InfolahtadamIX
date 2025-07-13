<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FeedbackController
 */
final class FeedbackControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $feedback = Feedback::factory()->count(3)->create();

        $response = $this->get(route('feedback.index'));

        $response->assertOk();
        $response->assertViewIs('feedback.index');
        $response->assertViewHas('feedback');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('feedback.create'));

        $response->assertOk();
        $response->assertViewIs('feedback.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FeedbackController::class,
            'store',
            \App\Http\Requests\FeedbackStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $name = fake()->name();
        $email = fake()->safeEmail();
        $message = fake()->text();

        $response = $this->post(route('feedback.store'), [
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ]);

        $feedback = Feedback::query()
            ->where('name', $name)
            ->where('email', $email)
            ->where('message', $message)
            ->get();
        $this->assertCount(1, $feedback);
        $feedback = $feedback->first();

        $response->assertRedirect(route('feedback.index'));
        $response->assertSessionHas('feedback.id', $feedback->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $feedback = Feedback::factory()->create();

        $response = $this->get(route('feedback.show', $feedback));

        $response->assertOk();
        $response->assertViewIs('feedback.show');
        $response->assertViewHas('feedback');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $feedback = Feedback::factory()->create();

        $response = $this->get(route('feedback.edit', $feedback));

        $response->assertOk();
        $response->assertViewIs('feedback.edit');
        $response->assertViewHas('feedback');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FeedbackController::class,
            'update',
            \App\Http\Requests\FeedbackUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $feedback = Feedback::factory()->create();
        $name = fake()->name();
        $email = fake()->safeEmail();
        $message = fake()->text();

        $response = $this->put(route('feedback.update', $feedback), [
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ]);

        $feedback->refresh();

        $response->assertRedirect(route('feedback.index'));
        $response->assertSessionHas('feedback.id', $feedback->id);

        $this->assertEquals($name, $feedback->name);
        $this->assertEquals($email, $feedback->email);
        $this->assertEquals($message, $feedback->message);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $feedback = Feedback::factory()->create();

        $response = $this->delete(route('feedback.destroy', $feedback));

        $response->assertRedirect(route('feedback.index'));

        $this->assertModelMissing($feedback);
    }
}
