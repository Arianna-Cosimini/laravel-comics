<div id="card-item">
    <div class="container d-flex flex-column">

        <button class="mx-4 text-uppercase align-self-start" type="button">current serie</button>

        <div id="container-cards" class="container d-flex flex-wrap">

            @foreach ($cards as $item)
                <div class="cards">

                    <div class="content-card">
                        <img src="{{ $item['thumb'] }}" alt="">
                        <div class="card-title text-center">{{ $item['title'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="align-self-center mt-5 text-uppercase fw-semibold">Load more</button>

    </div>
</div>
