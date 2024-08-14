<x-layout>
    <x-slot name="title">
        Students
    </x-slot>

    <h1 class="text-center mb-4">Students' List</h1>

    <x-slot name="text">
        <a href="/student/create" class="btn btn-primary mb-4">+ Add Student</a>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($students as $student)
                <div class="col">
                    <div class="card h-100 border-0 shadow-lg">
                        <div class="card-header bg-primary text-white text-center py-4">
                            <div class="avatar bg-light rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-person-fill" style="font-size: 2rem; color: #007bff;" aria-hidden="true"></i>
                            </div>
                            <h5 class="card-title mb-0">{{$student['name']}}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><strong>Address:</strong> {{$student['address']}}</p>
                            <p class="card-text"><strong>Email:</strong> {{$student['email']}}</p>
                        </div>
                        <div class="card-footer bg-light text-center">
                            <a href="/student/{{$student->id}}" class="btn btn-outline-primary btn-sm">View Profile</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{$students->links('pagination::bootstrap-4')}}
        </div>
    </x-slot>
</x-layout>
