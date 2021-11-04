<x-layouts title="item">
    <div class="item-container flex flex-col">
        <div class="mb-2">
            <img src="{{ $food['picture_url'] }}" alt="">
        </div>
        <div class="mb-2">
            <h1>{{ $food['title'] }}</h1>
        </div>
        <div class="mb-2">
            <h2>Rp {{ $food['base_price'] }},00</h2>
        </div>
        <div class="mb-2 ml-2 description">
            <p>{{ $food['description'] }}</p>
        </div>
        <hr>
        <div class="cathegory mt-2">
            <span>Kategori:
                @foreach ($food['categories'] as $cathegory)
                    @if (!$loop->last)
                        {{ $cathegory }},
                    @else
                        {{ $cathegory }}
                    @endif
                @endforeach
            </span>
        </div>
    </div>
</x-layouts>