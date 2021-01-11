<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <input id="searchMovie" class="form-control" type="text" placeholder="Search" aria-label="Search">
                    <div id="movieResults" class="container">
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
                                        <button type="button" class="btn btn-primary d-block m-8"><a href="/movie/{{ $movie->id }}">Detalii</a></button>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
