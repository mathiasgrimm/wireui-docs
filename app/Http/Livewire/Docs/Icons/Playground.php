<?php

namespace App\Http\Livewire\Docs\Icons;

use App\Traits\Livewire\HasHeroicons;
use Illuminate\Contracts\View\View;
use Illuminate\Support\{Collection, Str};
use Livewire\Component;

class Playground extends Component
{
    use HasHeroicons {
        getIconsProperty as heroicons;
    }

    public const VARIANTS = ['outline', 'solid', 'mini'];

    public string $variant = 'outline';

    public ?string $search = null;

    protected $queryString = [
        'variant' => ['except' => 'outline'],
        'search'  => ['except' => ''],
    ];

    public function makeCopyCode(string $icon): string
    {
        if ($this->variant === 'outline') {
            return "<x-icon name=\"{$icon}\" />";
        }

        return "<x-icon name=\"{$icon}\" variant=\"{$this->variant}\" />";
    }

    public function getIconsProperty(): Collection
    {
        return $this->heroicons()->when($this->search, function (Collection $icons) {
            return $icons->filter(function (string $icon): bool {
                return Str::contains($icon, $this->search);
            });
        });
    }

    public function render(): View
    {
        return view('livewire.docs.icons.playground');
    }
}
