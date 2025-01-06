<x-layout>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5>{{ $event->title }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Description:</strong> {{ $event->description }}</p>
                <p class="card-text"><strong>Date:</strong> {{ $event->startDate }}</p>
                <p class="card-text"><strong>Time:</strong> {{ $event->startTime }}</p>
                <p class="card-text"><strong>Max Participants:</strong> {{ $event->maxParticipants }}</p>
                <div class="mt-4">
                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                    </form>
                    <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Events</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>