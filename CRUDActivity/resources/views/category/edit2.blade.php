<x-app-web-layout>


    <x-slot name="title">
        Edit Student
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status')}} </div>
                @endif


                <div class="card">
                    <div class="card-header">
                        <h4>Edit Student
                            <a href="{{ url('teachers')}}" class="btn btn-primary float-end"> Back </a>
                        </h4>
                        
                        <div class="card-body">
                            <form action = "{{ url('students/'.$student->id.'/edit2') }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label> Name </label>
                                    <input type="text" name="name" value="{{ $student->name }}" />
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Age </label>
                                    <input type="integer" name="age" value="{{$student->age }}" />
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Address </label>
                                    <input type="text" name="address" value="{{ $student->address }}" />
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Course </label>
                                    <input type="text" name="course" value="{{ $student->course }}" />
                                    @error('course') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Subject </label>
                                    <input type="text" name="subject" value="{{ $student->subject }}" />
                                    @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>
