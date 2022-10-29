<div class="flex flex-wrap justify-center">
    @foreach ($this->sponsors as $sponsor)
        <a href="{{ $sponsor['url'] }}?ref={{ config('app.url') }}" target="_blank">
            <img src="{{ url($sponsor['image']) }}" alt="{{ $sponsor['label'] }}" class="drop-shadow-md h-12 xl:h-16 w-auto">
        </a>
    @endforeach
</div>
