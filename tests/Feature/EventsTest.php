<?php

namespace Tests\Feature;

use Illuminate\Console\Scheduling\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function list_page_shows_all_events()
    {
        $event1 = factory(Event::class)->create();
        $event2 = factory(Event::class)->create();

        $this->get('events')
            ->assertSee($event1->title)
            ->assertSee($event2->title);
    }
}
