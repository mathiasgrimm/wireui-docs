<?php

namespace App\Http\Livewire\Documentation;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class SliderInput extends Component
{
    public float $value = 0.5;

    public float $tooltip = 25;

    public array $values = [30, 80];

    public string $wireModelExample = <<<HTML
    <x-inputs.slider wire:model="firstName" label="Name" min="10" max="50" step="5" />
    HTML;

    public string $simpleSliderExample = <<<HTML
    <x-inputs.slider wire:model="percent" label="Inform Percent" />
    HTML;

    public string $hintSliderExample = <<<HTML
    <x-inputs.slider label="Inform Percent" hint="Set the percent" />
    HTML;

    public string $cornerHintSliderExample = <<<HTML
    <x-inputs.slider label="Inform Temperature" corner-hint="Ex.: 45°" />
    HTML;

    public string $minMaxSliderExample = <<<HTML
    public float \$value = 0.5;

    <x-inputs.slider wire:model="value" label="With Min and Max" min="0" max="1" step="0.1" />
    HTML;

    public string $tooltipSliderExample = <<<HTML
    public int \$tooltip = 25;

    <x-inputs.slider wire:model="tooltip" label="Without Tooltip" step="25" hide-tooltip />
    HTML;

    public string $stopsSliderExample = <<<HTML
    <x-inputs.slider label="With Stops" step="20" show-stops />
    HTML;

    public string $customStopsSliderExample = <<<HTML
    <x-inputs.slider label="Inform Percent" :stops="[25, 50, 75]" />

    <x-inputs.slider label="Inform Percent" :stops="['25%' => 25, '50%' => 50, '75%' => 75]" />

    <x-inputs.slider label="Inform Percent" :stops="[
        ['value' => 0, 'label' => '0%'],
        ['value' => 25, 'label' => '25%'],
        ['value' => 50, 'label' => '50%'],
        ['value' => 75, 'label' => '75%'],
        ['value' => 100, 'label' => '100%'],
    ]" />
    HTML;

    public string $sizesSliderExample = <<<HTML
    <x-inputs.slider label="Default Size" step="15" show-stops />

    <x-inputs.slider md label="Medium Size" step="15" show-stops />

    <x-inputs.slider lg label="Large Size" step="15" show-stops />
    HTML;

    public string $rangeSliderExample = <<<HTML
    public array \$values = [30, 80];

    <x-inputs.slider range label="Set the Percent" step="10" show-stops>
        <x-slot:min wire:model="values.0"></x-slot:min>
        <x-slot:max wire:model="values.1"></x-slot:max>
    </x-inputs.slider>
    HTML;

    public function render()
    {
        return view('livewire.documentation.slider-input')->layout(Documentation::class);
    }
}
