<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use function PHPSTORM_META\type;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function testBasicExample()
    {
        $this->browse(function ( Browser $browser) {
                $browser->visit('/')
                    ->press('demo')
                    ->press('form')
                    ->assertTitle('FORM')
                    ->type('email', 'manavchawla2012@gmail.com')
                    ->type('pwd', '1')
                    ->press('submit')
                    ->assertPathIs('/')
                    ->assertSee('asdsa')
                    ->resize(1100, 2400)->driver->takeScreenshot();


        });
        }


}
