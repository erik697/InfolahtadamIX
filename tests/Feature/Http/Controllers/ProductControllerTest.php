<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\Wherehouse;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ProductController
 */
final class ProductControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $products = Product::factory()->count(3)->create();

        $response = $this->get(route('products.index'));

        $response->assertOk();
        $response->assertViewIs('product.index');
        $response->assertViewHas('products');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('products.create'));

        $response->assertOk();
        $response->assertViewIs('product.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProductController::class,
            'store',
            \App\Http\Requests\ProductStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $title = fake()->sentence(4);
        $category_product = CategoryProduct::factory()->create();
        $wherehouse = Wherehouse::factory()->create();
        $serial_number = fake()->word();
        $status = fake()->randomElement(/** enum_attributes **/);

        $response = $this->post(route('products.store'), [
            'title' => $title,
            'category_product_id' => $category_product->id,
            'wherehouse_id' => $wherehouse->id,
            'serial_number' => $serial_number,
            'status' => $status,
        ]);

        $products = Product::query()
            ->where('title', $title)
            ->where('category_product_id', $category_product->id)
            ->where('wherehouse_id', $wherehouse->id)
            ->where('serial_number', $serial_number)
            ->where('status', $status)
            ->get();
        $this->assertCount(1, $products);
        $product = $products->first();

        $response->assertRedirect(route('products.index'));
        $response->assertSessionHas('product.id', $product->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $product = Product::factory()->create();

        $response = $this->get(route('products.show', $product));

        $response->assertOk();
        $response->assertViewIs('product.show');
        $response->assertViewHas('product');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $product = Product::factory()->create();

        $response = $this->get(route('products.edit', $product));

        $response->assertOk();
        $response->assertViewIs('product.edit');
        $response->assertViewHas('product');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProductController::class,
            'update',
            \App\Http\Requests\ProductUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $product = Product::factory()->create();
        $title = fake()->sentence(4);
        $category_product = CategoryProduct::factory()->create();
        $wherehouse = Wherehouse::factory()->create();
        $serial_number = fake()->word();
        $status = fake()->randomElement(/** enum_attributes **/);

        $response = $this->put(route('products.update', $product), [
            'title' => $title,
            'category_product_id' => $category_product->id,
            'wherehouse_id' => $wherehouse->id,
            'serial_number' => $serial_number,
            'status' => $status,
        ]);

        $product->refresh();

        $response->assertRedirect(route('products.index'));
        $response->assertSessionHas('product.id', $product->id);

        $this->assertEquals($title, $product->title);
        $this->assertEquals($category_product->id, $product->category_product_id);
        $this->assertEquals($wherehouse->id, $product->wherehouse_id);
        $this->assertEquals($serial_number, $product->serial_number);
        $this->assertEquals($status, $product->status);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $product = Product::factory()->create();

        $response = $this->delete(route('products.destroy', $product));

        $response->assertRedirect(route('products.index'));

        $this->assertModelMissing($product);
    }
}
