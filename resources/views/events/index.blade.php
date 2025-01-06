<x-layout>

    <h1>Events</h1>

    <!-- Create Event Button -->
    <a href="{{ route('events.create') }}" class="btn btn-primary mb-4">Create Event</a>

    @foreach ($events as $event)
        <a href="{{ route('events.show', $event->id) }}" class="text-decoration-none">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">{{ $event->title }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>Description:</strong> {{ $event->description }}</p>
                    <p class="card-text"><strong>Date:</strong> {{ $event->startDate }}</p>
                    <p class="card-text"><strong>Time:</strong> {{ $event->startTime }}</p>
                    <p class="card-text"><strong>Max Participants:</strong> {{ $event->maxParticipants }}</p>
                </div>
            </div>
        </a>
    @endforeach

</x-layout>
