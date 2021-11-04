<x-layouts title="List">
    <div class="index-title flex justify-center items-center">
        <div class="image">
            <img src="{{ asset('images/header.jpg') }}" alt="">
        </div>
        <div>
            <h3>Foodie 0.1</h3>
            <h4>Teman setia perut kelaparan</h4>
        </div>
    </div>
    <div class="index-container">
        <h1 class="mb-2">Daftar Menu</h1>
        <div class="gallery">
            @foreach ($foods as $food)
                <div class="card flex flex-col">
                    <div class="self-center mb-2">
                        <img src="{{ $food['picture_url'] }}" alt="">
                    </div>
                    <div class="link mb-2">
                        <a href="{{ route('food.item', ['id' => $food['id']]) }}">{{ $food['title'] }}</a>
                    </div>
                    <div class="harga text-right">
                        <span>Rp {{ $food['base_price'] }},00</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts>