<div class="card" style="width: 18rem;">
        <img src="/img/{{$img}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$name}}</h5>
            <p class="card-text">{{$brand}}</p>
            <p class="card-text">
            <a href="{{route('prodotti.genere', ['genere' => $type])}}">{{$type}}
            </a></p>
        </div>
</div>