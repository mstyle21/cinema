@foreach ($movies as $movie)
    <div class="p-12">
        <div class="p-4">Poza</div>
        <div class="p-8"><a href="/movie/{{ $movie->id }}">{{ $movie->name }}</a></div>
    </div>
@endforeach
