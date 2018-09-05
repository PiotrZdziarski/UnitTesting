<?php

namespace Tests\Browser;

use App\Product;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * Firt dusc test
     * @throws \Throwable
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('monkaS');
        });

        $product = factory(Product::class)->create([
            'title' => 'xd',
            'price' => 10,
            'category_id' => 2
        ]);

        $this->browse(function ($browser) use ($product) {

        });
    }
}
