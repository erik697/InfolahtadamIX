<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CategoryProductController
 */
final class CategoryProductControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $categoryProducts = CategoryProduct::factory()->count(3)->create();

        $response = $this->get(route('category-products.index'));

        $response->assertOk();
        $response->assertViewIs('categoryProduct.index');
        $response->assertViewHas('categoryProducts');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('category-products.create'));

        $response->assertOk();
        $response->assertViewIs('categoryProduct.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CategoryProductController::class,
            'store',
            \App\Http\Requests\CategoryProductStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $title = fake()->sentence(4);

        $response = $this->post(route('category-products.store'), [
            'title' => $title,
        ]);

        $categoryProducts = CategoryProduct::query()
            ->where('title', $title)
            ->get();
        $this->assertCount(1, $categoryProducts);
        $categoryProduct = $categoryProducts->first();

        $response->assertRedirect(route('categoryProducts.index'));
        $response->assertSessionHas('categoryProduct.id', $categoryProduct->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $categoryProduct = CategoryProduct::factory()->create();

        $response = $this->get(route('category-products.show', $categoryProduct));

        $response->assertOk();
        $response->assertViewIs('categoryProduct.show');
        $response->assertViewHas('categoryProduct');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $categoryProduct = CategoryProduct::factory()->create();

        $response = $this->get(route('category-products.edit', $categoryProduct));

        $response->assertOk();
        $response->assertViewIs('categoryProduct.edit');
        $response->assertViewHas('categoryProduct');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CategoryProductController::class,
            'update',
            \App\Http\Requests\CategoryProductUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $categoryProduct = CategoryProduct::factory()->create();
        $title = fake()->sentence(4);

        $response = $this->put(route('category-products.update', $categoryProduct), [
            'title' => $title,
        ]);

        $categoryProduct->refresh();

        $response->assertRedirect(route('categoryProducts.index'));
        $response->assertSessionHas('categoryProduct.id', $categoryProduct->id);

        $this->assertEquals($title, $categoryProduct->title);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $categoryProduct = CategoryProduct::factory()->create();

        $response = $this->delete(route('category-products.destroy', $categoryProduct));

        $response->assertRedirect(route('categoryProducts.index'));

        $this->assertModelMissing($categoryProduct);
    }
}
