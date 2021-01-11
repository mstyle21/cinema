<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{--<div class="p-6 bg-white border-b border-gray-200">--}}
                    {{--<h1>{{ $movie->name }}</h1>--}}
                {{--</div>--}}
                <div class="row movie">
                    <div class="col-4">
                        <img src="/images/2.jpg" alt="imaginea 1" class="img-thumbnail">
                    </div>
                    <div class="col-8">
                        <h2 class="p-8">{{ $movie->name }}</h2>
                        <span class="d-block m-8">{{ $movie->description }}</span>
                        <span class="d-block m-8">Cast: {{ $movie->actors }}</span>
                        <button type="button" class="btn btn-primary d-block m-8">Rezerva!</button>
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>
