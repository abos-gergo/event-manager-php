<x-layout>
    <h1>Edit event</h1>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5>Edit Event: {{ $event->title }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('events.update', $event->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $event->title }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') ?? $event->description }}">
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="startDate" class="form-label">Start Date</label>
                        <input type="date" class="form-control @error('startDate') is-invalid @enderror" id="startDate" name="startDate" value="{{ old('startDate') ?? $event->startDate }}">
                        @error('startDate')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="startTime" class="form-label">Start Time</label>
                        <input type="time" class="form-control @error('startTime') is-invalid @enderror" id="startTime" name="startTime" value="{{ old('startTime') ?? $event->startTime }}">
                        @error('startTime')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="maxParticipants" class="form-label">Max Participants</label>
                        <input type="number" class="form-control @error('maxParticipants') is-invalid @enderror" id="maxParticipants" name="maxParticipants" value="{{ old('maxParticipants') ?? $event->maxParticipants }}">
                        @error('maxParticipants')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Update Event</button>
                    <a href="{{ route('events.show', $event->id) }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>

</x-layout>
