<x-layout>
    <x-slot name="title">
        Edit Student
    </x-slot>

    <h1 class="mb-4">Edit Student Information</h1>

    <x-slot name="text">
        <form method="POST" action="/student/{{ $student->id }}">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-danger" onclick="document.getElementById('delete-form').submit();">Delete</button>
            <button type="submit" class="btn btn-secondary">Cancel</button>
        </form>

        <form action="/student/{{ $student->id }}" method="POST" id="delete-form" class="d-none">
            @csrf
            @method('DELETE')
        </form>
    </x-slot>
</x-layout>
