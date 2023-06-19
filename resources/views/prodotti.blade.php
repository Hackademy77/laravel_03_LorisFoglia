

<x-layout>

<div class="container">
    <div class="row">
    @foreach($prodotti as $prodotto)
        <div class="col-6 col-md-3">
        <x-object-card 
            img="{{$prodotto['img']}}"
            name="{{$prodotto['name']}}"
            brand="{{$prodotto['brand']}}"
            type="{{$prodotto['type']}}"
            />
        </div>
    @endforeach
    </div>
</div>

</x-layout>


