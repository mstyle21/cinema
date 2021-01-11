<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 style="text-align: center;">Rezervare {{ $movie->name }}</h1>
                </div>
                <form action="/movie/reservation/{{ $movie->id }}" method="POST">
                    <div class="user-form">
                        <div>
                            <div>
                                <label>Nume:</label>
                                <input type="text" name="name" placeholder="Nume prenume">
                            </div>
                            <div>
                                <label>Email:</label>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div>
                                <label>Numar de telefon:</label>
                                <input type="text" name="phone" placeholder="Nr telefon">
                            </div>
                        </div>
                        <div>
                            <input type="text" name="date">
                        </div>
                    </div>
                    <h1 style="display: block; text-align: center;">Vezi locuri disponibile:</h1>
                    <div class="room-displacement">
                        <table class="table">
                            <tbody>
                                @foreach($seats as $row => $seat)
                                    @if (($row + 1) % 10 == 1)
                                        <tr>
                                    @endif
                                        <td>
                                            @if ($seat->user_id !== null)
                                                <div class="seat-details seat-reserved">
                                                    <p class="seat-name">{{ $seat->seat_number }}</p>
                                                </div>
                                            @else
                                                <div class="seat-details seat-empty">
                                                    <label for="seat_{{ $seat->seatId }}" class="seat-name">{{ $seat->seat_number }}</label>
                                                    <input type="checkbox" name="selectedSeats" id="seat_{{ $seat->seatId }}" value="{{ $seat->seatId }}">
                                                </div>
                                            @endif
                                        </td>
                                    @if (($row + 1) % 10 == 0)
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <label>Locuri selectate:</label>
                        <ul id="selectedSeats"></ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
