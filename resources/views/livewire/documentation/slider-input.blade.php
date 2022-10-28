<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#sliders" label="Sliders">
                <x-summary.item href="#simple-slider" label="Simple Slider" />
                <x-summary.item href="#slider-hint" label="Slider Hint" />
                <x-summary.item href="#slider-corner-hint" label="Slider Corner Hint" />
                <x-summary.item href="#slider-min-max" label="Slider with Min/Max" />
                <x-summary.item href="#slider-tooltip" label="Slider without Tooltip" />
                <x-summary.item href="#slider-stops" label="Slider with Stops" />
                <x-summary.item href="#slider-sizes" label="Slider Sizes" />
            </x-summary.header>

            <x-summary.header href="#sliders-range" label="Sliders Range">
                <x-summary.item href="#simple-slider-range" label="Simple Slider Range" />
            </x-summary.header>

            <x-summary.header href="#slider-options" label="Slider Options" />
        </x-summary>
    </x-slot>

    <div id="sliders">
        <x-section.title title="Sliders" />

        <div class="mt-5 prose text-gray-500 xl:max-w-4xl xl:mb-8 dark:text-gray-400">
            <p>
                The Slider component is very useful to build forms.
            </p>
            <p>
                It was developed to be used with or without Livewire, and it has spectacular customization. It follows the logic of using the Input.
            </p>
            <x-code :line-numbers="false" language="html" :contents="$wireModelExample" />
        </div>
    </div>

    <x-code-preview
        title="Simple Slider"
        href="#simple-slider"
        id="simple-slider"
        language="blade"
        :code="$simpleSliderExample">
        <div class="max-w-sm mx-auto">
            <x-inputs.slider label="Inform Percent" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Slider Hint"
        href="#slider-hint"
        id="slider-hint"
        language="blade"
        :code="$hintSliderExample">
        <div class="max-w-sm mx-auto">
            <x-inputs.slider label="Inform Percent" hint="Set the percent" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Slider Corner Hint"
        href="#slider-corner-hint"
        id="slider-corner-hint"
        language="blade"
        :code="$cornerHintSliderExample">
        <div class="max-w-sm mx-auto">
            <x-inputs.slider label="Inform Temperature" corner-hint="Ex.: 45°" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Slider with Min/Max"
        href="#slider-min-max"
        id="slider-min-max"
        language="blade"
        :code="$minMaxSliderExample">
        <div class="max-w-sm mx-auto space-y-4">
            <x-inputs.number wire:model="value" label="Number" min="0" max="1" step="0.1" />

            <x-inputs.slider wire:model="value" label="With Min and Max" min="0" max="1" step="0.1" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Slider without Tooltip"
        href="#slider-tooltip"
        id="slider-tooltip"
        language="blade"
        :code="$tooltipSliderExample">
        <div class="max-w-sm mx-auto">
            <x-button class="mb-4" :label="$tooltip" />

            <x-inputs.slider wire:model="tooltip" label="Without Tooltip" step="25" hide-tooltip />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Slider with Stops"
        href="#slider-stops"
        id="slider-stops"
        language="blade"
        :code="$stopsSliderExample">
        <div class="max-w-sm mx-auto">
            <x-inputs.slider label="With Stops" step="20" show-stops />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Slider with Custom Stops"
        href="#slider-custom-stops"
        id="slider-custom-stops"
        language="blade"
        :code="$customStopsSliderExample">
        <div class="max-w-sm mx-auto">
            <x-inputs.slider label="Inform Percent" :stops="[25, 50, 75]" />

            <x-inputs.slider label="Inform Percent" :stops="['25%' => 25, '50%' => 50, '75%' => 75]" />

            <x-inputs.slider label="Inform Percent" :stops="[
                ['value' => 0, 'label' => '0%'],
                ['value' => 25, 'label' => '25%'],
                ['value' => 50, 'label' => '50%'],
                ['value' => 75, 'label' => '75%'],
                ['value' => 100, 'label' => '100%'],
            ]" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Slider Sizes"
        href="#slider-sizes"
        id="slider-sizes"
        language="blade"
        :code="$sizesSliderExample">
        <div class="max-w-sm mx-auto">
            <x-inputs.slider label="Default Size" step="15" show-stops />

            <x-inputs.slider md label="Medium Size" step="15" show-stops />

            <x-inputs.slider lg label="Large Size" step="15" show-stops />
        </div>
    </x-code-preview>

    <div id="sliders-range">
        <x-section.title href="#sliders-range"  title="Sliders Range" />

        <div class="mt-5 prose text-gray-500 xl:max-w-4xl xl:mb-8 dark:text-gray-400">
            <p>
                Slider Range
            </p>
        </div>
    </div>

    <x-code-preview
        title="Simple Slider Range"
        href="#simple-slider-range"
        id="simple-slider-range"
        language="blade"
        :code="$rangeSliderExample">
        <div class="max-w-sm mx-auto">
            <div class="flex justify-between mb-4">
                <x-button :label="$values[0]" />

                <x-button :label="$values[1]" />
            </div>

            <x-inputs.slider range label="Set the Percent" step="10" show-stops>
                <x-slot:min wire:model="values.0"></x-slot:min>
                <x-slot:max wire:model="values.1"></x-slot:max>
            </x-inputs.slider>
        </div>
    </x-code-preview>

    <div id="slider-options">
        <x-section.title href="#slider-options" title="Slider Options" />
        <x-options-table class="w-full mt-2 mb-6" :available="false">
            <x-option-table-row prop="label"      required="false" default="none" type="string" />
            <x-option-table-row prop="hint"       required="false" default="none" type="string" />
            <x-option-table-row prop="cornerHint" required="false" default="none" type="string" />

            <x-option-table-row prop="min"  required="false" default="0"   type="int|float|double" />
            <x-option-table-row prop="max"  required="false" default="100" type="int|float|double" />
            <x-option-table-row prop="step" required="false" default="1"   type="int|float|double" />

            <x-option-table-row prop="errorless"    required="false" default="false" type="boolean" />
            <x-option-table-row prop="hide-tooltip" required="false" default="false" type="boolean" />
            <x-option-table-row prop="show-stops"   required="false" default="false" type="boolean" />

            <x-option-table-row prop="min"  required="true if range" default="none" type="slot" />
            <x-option-table-row prop="max"  required="true if range" default="none" type="slot" />
        </x-options-table>
    </div>
</div>
