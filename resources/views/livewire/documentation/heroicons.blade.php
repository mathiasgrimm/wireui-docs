<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#heroicons" label="Heroicons" />
            <x-summary.header href="#options" label="Options" />
        </x-summary>
    </x-slot>

    <x-section.title id="heroicons" href="heroicons" title="Heroicons" />
    <div class="mt-5 prose text-gray-500 max-w-none">
        <p>
            All <a class="text-indigo-600 no-underline" href="{{ config('links.heroicons') }}">Heroicons</a>
            icons are available using the component:
        </p>

        <x-code language="html" :contents='<<<EOT
            <x-icon name="home" class="w-5 h-5" />
            <x-icon name="home" class="w-5 h-5" mini />
            <x-icon name="home" class="w-5 h-5" solid />
            <x-icon name="home" class="w-5 h-5" outline />

            <x-heroicons::outline.user />
            <x-heroicons::solid.user />
            <x-heroicons::mini.solid.user class="w-5 h-5" />
        EOT' />

        <p>You can publish the icon configuration and define what will be the default variant</p>
        <x-code :line-numbers="false" language="bash">
            php artisan vendor:publish --tag="wireui.config"
        </x-code>
    </div>

    <div class="pb-10 space-y-6">
        <x-section.title id="playground" href="playground" title="Playground" />

        <livewire:docs.icons.playground />
    </div>

    <x-section.title id="options" href="options" title="Options" />

    <x-options-table class="mt-10">
        <x-option-table-row prop="name"    required="true"  default="none"    type="string"  available="all heroicons" />
        <x-option-table-row prop="variant" required="false" default="outline" type="string"  available="outline|solid|mini" />
        <x-option-table-row prop="mini"    required="false" default="false"   type="boolean" available="true|false" />
        <x-option-table-row prop="solid"   required="false" default="false"   type="boolean" available="true|false" />
        <x-option-table-row prop="outline" required="false" default="false"   type="boolean" available="true|false" />
    </x-options-table>
</div>
