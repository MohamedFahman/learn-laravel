<x-layout>
    <x-slot name="title">
        Add Student
    </x-slot>
    <h1>Fill the form for add a student</h1>
    <x-slot name="text">
        <form method="POST" action="/students">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="address" class="form-control" id="address" name="address">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">  E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </x-slot>
</x-layout>
