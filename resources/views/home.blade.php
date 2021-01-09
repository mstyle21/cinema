<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <label>Cautare film:</label>
                    <input type="text" id="searchMovie">
                    <div id="movieResults">
                        @foreach ($movies as $movie)
                            <div class="p-12">
                                <div class="p-4">Poza</div>
                                <div class="p-8"><a href="/movie/{{ $movie->id }}">{{ $movie->name }}</a></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
