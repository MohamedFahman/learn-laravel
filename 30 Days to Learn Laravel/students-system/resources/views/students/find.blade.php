<x-layout>
    <x-slot name="title">
        Students
    </x-slot>
    <h1>Student List</h1>
    <x-slot name="text">
        <p>{{$student['name']}}</p>
        <p>{{$student['address']}}</p>
        <p>{{$student['email']}}</p>
        <a href="/student/{{$student->id}}/edit"><button type="button" class="btn btn-primary">Edit</button></a>
        <a href="/students"><button type="button" class="btn btn-secondary">Back</button></a>


    </x-slot>
</x-layout>
