@foreach ($movies as $movie)
    <div class="rows-container">
        <div class="row movie">
            <div class="col-4">
                <img src="/images/2.jpg" alt="imaginea 1" class="img-thumbnail">
            </div>
            <div class="col-8">
                <span class="p-8"><a href="/movie/{{ $movie->id }}">{{ $movie->name }}</a></span>
                <span class="d-block m-8">{{ $movie->description }}</span>
                <span class="d-block m-8">Cast: {{ $movie->actors }}</span>
                <button type="button" class="btn btn-primary d-block m-8">Detalii</button>
            </div>
        </div>
@endforeach
