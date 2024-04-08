<div id="card-item">
    <div class="container">

        <button class="mx-4 text-uppercase" type="button">current serie</button>

        @foreach ($cards as $item)
        <div class="cards">
            <img src="{{ $item ['thumb'] }}" alt="">
            <div class="card-title">{{$item ['title']}}</div>
        </div>
        @endforeach

    </div>
</div>
