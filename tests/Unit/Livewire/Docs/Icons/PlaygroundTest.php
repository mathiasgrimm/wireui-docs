<?php

use App\Http\Livewire\Docs\Icons\Playground;
use Livewire\Livewire;

it('should render the icons', function () {
    Livewire::test(Playground::class)->assertSeeTextInOrder([
        'academic-cap',
        'adjustments-horizontal',
        'adjustments-vertical',
        'archive-box-arrow-down',
        'archive-box-x-mark',
    ]);
});

it('should search icons', function () {
    Livewire::test(Playground::class)
        ->set('search', 'archive')
        ->assertCount('icons', 3)
        ->assertSeeTextInOrder([
            'archive-box',
            'archive-box-arrow-down',
            'archive-box-x-mark',
        ]);
});

it('should render "not found icon" message', function () {
    Livewire::test(Playground::class)
        ->set('search', 'xxxxxx')
        ->assertCount('icons', 0)
        ->assertSeeTextInOrder(['No icons match', '"xxxxxx"'], escape: false);
});
