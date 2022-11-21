<?php

namespace App\Traits\Livewire;

use Illuminate\Support\Facades\File;
use Illuminate\Support\{Collection, Str};
use Symfony\Component\Finder\SplFileInfo;

/** @property-read Collection $icons */
trait HasHeroicons
{
    public function getIconsProperty(): Collection
    {
        $path = base_path('vendor/wireui/heroicons/src/views/components/outline');

        return collect(File::files($path))
            ->map(function (SplFileInfo $file): string {
                return Str::of($file->getFilename())->before('.blade.php');
            })->sort();
    }
}
