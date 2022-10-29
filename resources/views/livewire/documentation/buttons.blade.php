<div class="space-y-10">
    <x-slot name="summary">
        <x-summary>
            <x-summary.header href="#buttons" label="Buttons">
                <x-summary.item href="#default-colors"  label="Default Colors" />
                <x-summary.item href="#outline-colors"  label="Outline Colors" />
                <x-summary.item href="#flat-colors"     label="Flat Colors" />
                <x-summary.item href="#rounded-buttons" label="Rounded Buttons" />
                <x-summary.item href="#squared-buttons" label="Squared Buttons" />
                <x-summary.item href="#circle-buttons"  label="Circle Buttons" />
                <x-summary.item href="#button-icons"    label="Button With Icons" />
                <x-summary.item href="#button-sizes"    label="Button Sizes" />
                <x-summary.item href="#button-link"     label="Button Link" />
                <x-summary.item href="#loading-spinner" label="Loading Spinner" />
            </x-summary.header>

            <x-summary.header href="#button-options" label="Button Options" />
            <x-summary.header href="#playground"     label="Playground" />
        </x-summary>
    </x-slot>

    <div id="buttons">
        <x-section.title title="Buttons" />

        <div class="mt-5 prose text-secondary-500 xl:mb-8">
            <p>
                The button component has multiples styles and options to customize.
                A simple API to use button component with icons and any colors
            </p>
        </div>
    </div>

    <x-code-preview
        title="Default Colors"
        href="#default-colors"
        id="default-colors"
        language="html"
        :code="$defaultColorsCode">
        <div class="grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-6 gap-4">
            <x-button label="Default" />
            <x-button primary label="Primary" />
            <x-button secondary label="Secondary" />
            <x-button positive label="Positive" />
            <x-button negative label="Negative" />
            <x-button warning label="Warning" />
            <x-button info label="Info" />
            <x-button dark label="Dark" />
            <x-button white label="White" />
            <x-button black label="Black" />
            <x-button slate label="Slate" />
            <x-button gray label="Gray" />
            <x-button zinc label="Zinc" />
            <x-button neutral label="Neutral" />
            <x-button stone label="Stone" />
            <x-button red label="Red" />
            <x-button orange label="Orange" />
            <x-button amber label="Amber" />
            <x-button lime label="Lime" />
            <x-button green label="Green" />
            <x-button emerald label="Emerald" />
            <x-button teal label="Teal" />
            <x-button cyan label="Cyan" />
            <x-button sky label="Sky" />
            <x-button blue label="Blue" />
            <x-button indigo label="Indigo" />
            <x-button violet label="Violet" />
            <x-button purple label="Purple" />
            <x-button fuchsia label="Fuchsia" />
            <x-button pink label="Pink" />
            <x-button rose label="Rose" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Outline Colors"
        href="#outline-colors"
        id="outline-colors"
        language="html"
        :code="$outlineColorsCode">
        <div class="grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-6 gap-4">
            <x-button outline label="Default" />
            <x-button outline primary label="Primary" />
            <x-button outline secondary label="Secondary" />
            <x-button outline positive label="Positive" />
            <x-button outline negative label="Negative" />
            <x-button outline warning label="Warning" />
            <x-button outline info label="Info" />
            <x-button outline dark label="Dark" />

            <div class="p-2 bg-black">
                <x-button outline white block label="White" />
            </div>

            <x-button outline black label="Black" />
            <x-button outline slate label="Slate" />
            <x-button outline gray label="Gray" />
            <x-button outline zinc label="Zinc" />
            <x-button outline neutral label="Neutral" />
            <x-button outline stone label="Stone" />
            <x-button outline red label="Red" />
            <x-button outline orange label="Orange" />
            <x-button outline amber label="Amber" />
            <x-button outline lime label="Lime" />
            <x-button outline green label="Green" />
            <x-button outline emerald label="Emerald" />
            <x-button outline teal label="Teal" />
            <x-button outline cyan label="Cyan" />
            <x-button outline sky label="Sky" />
            <x-button outline blue label="Blue" />
            <x-button outline indigo label="Indigo" />
            <x-button outline violet label="Violet" />
            <x-button outline purple label="Purple" />
            <x-button outline fuchsia label="Fuchsia" />
            <x-button outline pink label="Pink" />
            <x-button outline rose label="Rose" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Flat Colors"
        href="#flat-colors"
        id="flat-colors"
        language="html"
        :code="$flatColorsCode">
        <div class="grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-6 gap-4">
            <x-button flat label="Default" />
            <x-button flat primary label="Primary" />
            <x-button flat secondary label="Secondary" />
            <x-button flat positive label="Positive" />
            <x-button flat negative label="Negative" />
            <x-button flat warning label="Warning" />
            <x-button flat info label="Info" />
            <x-button flat dark label="Dark" />
            <div class="p-2 bg-black">
                <x-button flat white block label="White" />
            </div>
            <x-button flat black label="Black" />
            <x-button flat slate label="Slate" />
            <x-button flat gray label="Gray" />
            <x-button flat zinc label="Zinc" />
            <x-button flat neutral label="Neutral" />
            <x-button flat stone label="Stone" />
            <x-button flat red label="Red" />
            <x-button flat orange label="Orange" />
            <x-button flat amber label="Amber" />
            <x-button flat lime label="Lime" />
            <x-button flat green label="Green" />
            <x-button flat emerald label="Emerald" />
            <x-button flat teal label="Teal" />
            <x-button flat cyan label="Cyan" />
            <x-button flat sky label="Sky" />
            <x-button flat blue label="Blue" />
            <x-button flat indigo label="Indigo" />
            <x-button flat violet label="Violet" />
            <x-button flat purple label="Purple" />
            <x-button flat fuchsia label="Fuchsia" />
            <x-button flat pink label="Pink" />
            <x-button flat rose label="Rose" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="State Colors"
        href="#state-colors"
        id="state-colors"
        language="html"
        :code="$outlineColorsCode">
        <div class="grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-6 gap-4">
            <x-button label="Delete" right-icon="trash" flat gray interaction:negative />

            <x-button label="Save" right-icon="check" flat primary hover:emerald focus:teal />

            <x-button label="Discard" flat gray interaction:warning />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Rounded Button"
        href="#rounded-buttons"
        id="rounded-buttons"
        language="html"
        :code="$roundedButtonsCode">
        <div class="grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-6 gap-4">
            <x-button rounded label="No Color" />
            <x-button rounded primary label="Primary" />
            <x-button rounded secondary label="Secondary" />
            <x-button rounded positive label="Positive" />
            <x-button rounded negative label="Negative" />
            <x-button rounded warning label="Warning" />
            <x-button rounded info label="Info" />
            <x-button rounded dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Squared Button"
        href="#squared-buttons"
        id="squared-buttons"
        language="html"
        :code="$squaredButtonsCode">
        <div class="grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-6 gap-4">
            <x-button squared label="No Color" />
            <x-button squared primary label="Primary" />
            <x-button squared secondary label="Secondary" />

            <x-button squared positive label="Positive" />

            <x-button squared negative label="Negative" />
            <x-button squared warning label="Warning" />
            <x-button squared info label="Info" />
            <x-button squared dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Circle Buttons"
        href="#circle-buttons"
        id="circle-buttons"
        language="html"
        :code="$circleButtonsCode">
        <div class="flex flex-wrap gap-3">
            <x-buttons.mini rounded icon="house" />
            <x-buttons.mini rounded primary icon="pencil" />
            <x-buttons.mini rounded secondary icon="clipboard-text"  />
            <x-buttons.mini rounded positive icon="check" />
            <x-buttons.mini rounded negative icon="x" />
            <x-buttons.mini rounded warning icon="warning" />
            <x-buttons.mini rounded info icon="info" />
            <x-buttons.mini rounded dark icon="prohibit" />
            <x-buttons.mini rounded secondary label="A"  />
            <x-buttons.mini rounded positive label="B" />
            <x-buttons.mini rounded negative label="C" />
            <x-buttons.mini rounded primary label="+" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Button With Icons"
        href="#button-icons"
        id="button-icons"
        language="html"
        :code="$buttonIconsCode">
        <div class="grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-6 gap-4">
            <x-button icon="house" label="Default" />
            <x-button icon="pencil" primary label="Primary" />
            <x-button icon="clipboard-text" secondary label="Secondary" />
            <x-button icon="check" positive label="Positive" />
            <x-button icon="x" negative label="Negative" />
            <x-button icon="warning" warning label="Warning" />
            <x-button right-icon="info" info label="Info" />
            <x-button right-icon="prohibit" dark label="Dark" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Button Sizes"
        href="#button-sizes"
        id="button-sizes"
        language="html"
        :code="$buttonSizesCode">
        <div class="space-x-2 space-y-2">
            <x-button 2xs secondary label="2xs button" />
            <x-button xs  primary   label="xs button" />
            <x-button sm  positive  label="sm button" />
            <x-button md  negative  label="md button" />
            <x-button lg  warning   label="lg button" />
            <x-button xl  stone     label="xl button" />
            <x-button 2xl  dark     label="2xl button" />
        </div>

        <div class="space-x-2 space-y-2">
            <x-button 2xs secondary label="2xs" icon="pencil" />
            <x-button xs  primary   label="xs" icon="clipboard-text" />
            <x-button sm  positive  label="sm" icon="check" />
            <x-button md  negative  label="md" icon="trash" />
            <x-button lg  warning   label="lg button" icon="warning" />
            <x-button xl  stone     label="xl button" icon="info" />
            <x-button 2xl  dark     label="2xl button" icon="prohibit" />
        </div>

        <div class="space-x-2 space-y-2">
            <x-buttons.mini rounded 2xs primary icon="pencil" />
            <x-buttons.mini rounded xs secondary icon="clipboard-text"  />
            <x-buttons.mini rounded sm positive icon="check" />
            <x-buttons.mini rounded md negative icon="trash" />
            <x-buttons.mini rounded lg warning icon="warning" />
            <x-buttons.mini rounded xl info icon="info" />
            <x-buttons.mini rounded 2xl dark icon="prohibit" />
        </div>
    </x-code-preview>

    <x-code-preview
        title="Button Link"
        href="#button-link"
        id="button-link"
        language="html"
        :code="$buttonLinkCode">
        <div>
            <x-button
                href="https://google.com?ref={{ config('app.url') }}"
                target="_blank"
                label="Go to Google"
                teal
            />
        </div>
    </x-code-preview>

    <x-alerts.info>
        You can show a spinner loading when an action if fired
        <br> You can pass <b>wire:target</b> value into <b>spinner</b>
        prop If no value is give, all loading effects will be applied
    </x-alerts.info>

    <x-code-preview
        title="Loading Spinner"
        href="#loading-spinner"
        id="loading-spinner"
        language="html"
        :code="$loadingSpinnerCode">
        <div class="flex flex-wrap items-center gap-4">

            <x-buttons.mini rounded primary>
                <x-phosphor.icons::regular.circle-notch class="animate-spin w-5 h-5" />
            </x-buttons.mini>

            <x-buttons.mini rounded primary>
                <svg class="animate-spin w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </x-buttons.mini>

            <x-button primary>
                <x-phosphor.icons::regular.spinner-gap class="animate-spin w-5 h-5" />
                <x-phosphor.icons::regular.circle-notch class="animate-spin w-5 h-5" />
                <svg class="animate-spin w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </x-button>

            <x-buttons.mini rounded wire:click="$refresh" teal icon="check" spinner />

            <x-button wire:click="$refresh" spinner primary label="Save without target" />

            <x-button wire:click="sleeping" spinner="sleeping" primary label="Save with target" />

            <x-button wire:click="sleeping" spinner="sleeping" loading-delay="short" primary label="Save with target + delay indicator" />
        </div>

        <br>

        <div>
            <x-button
                label="Delete"
                icon="trash"
                gray flat

                {{-- interaction:negative --}}
                interaction="negative"

                {{-- hover:negative
                focus:negative --}}

                {{-- focus:primary --}}
            />

            <x-button
                label="Delete"
                icon="trash"
                gray flat
                hover:negative
                focus:primary
            />

            <x-button
                label="Delete"
                icon="trash"
                gray outline
                hover:negative
                focus:primary
            />

            <x-button
                label="Delete"
                icon="trash"
                gray flat
                hover:negative
                focus:primary
            />

            <x-button
                label="Delete"
                icon="trash"
                gray
                hover:negative
                focus:primary
            />
        </div>
    </x-code-preview>

    <div class="flex items-center gap-x-3 rounded-lg border dark:border-0 shadow-soft bg-yellow-50 dark:bg-secondary-700 p-4">
        <x-icon name="warning" class="h-5 w-5 shrink-0 text-yellow-400" />

        <p class="text-sm text-yellow-700 dark:text-yellow-400">
            The attributes [squared, rounded, right-icon] are not supported in <b>buttons.mini rounded</b> component
        </p>
    </div>

    <div id="button-options">
        <x-section.title href="#button-options" title="Button Options" />

        <x-options-table class="w-full mt-2 mb-6">
            <x-option-table-row prop="2xs"  required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="xs"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="sm"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="md"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="lg"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="xl"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="size" required="false" default="sm"    type="string"  available="2xs|xs|sm|default|md|lg|xl" />

            <x-option-table-row prop="primary"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="secondary" required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="positive"  required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="negative"  required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="warning"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="info"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="dark"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="white"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="black"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="slate"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="gray"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="zinc"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="neutral"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="stone"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="red"       required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="orange"    required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="amber"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="lime"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="green"     required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="emerald"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="teal"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="cyan"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="sky"       required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="blue"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="indigo"    required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="violet"    required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="purple"    required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="fuchsia"   required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="pink"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="rose"      required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="color"     required="false" default="null"  type="string"  available="default colors + all tailwind colors" />

            <x-option-table-row prop="rounded" required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="squared" required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="flat"    required="false" default="false" type="boolean" available="boolean" />
            <x-option-table-row prop="full"    required="false" default="false" type="boolean" available="boolean" />

            <x-option-table-row prop="label"     required="false" default="null" type="string" available="*" />
            <x-option-table-row prop="icon"      required="false" default="null" type="string" available="all heroicons" />
            <x-option-table-row prop="rightIcon" required="false" default="null" type="string" available="all heroicons" />
            <x-option-table-row prop="spinner"   required="false" default="null" type="boolean|string" available="*" />
            <x-option-table-row prop="href"      required="false" default="null" type="string" available="all links" />

            <x-option-table-row prop="loadingDelay" required="false" default="null" type="string" available="shortest|shorter|short|long|longer|longest" />
        </x-options-table>
    </div>

    {{-- <livewire:docs.buttons.playground /> --}}
</div>
