<x-app-web-layout>


    <x-slot name="title">
        Edit Teacher
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status')}} </div>
                @endif


                <div class="card">
                    <div class="card-header">
                        <h4>Edit Teacher
                            <a href="{{ url('teachers')}}" class="btn btn-primary float-end"> Back </a>
                        </h4>
                        
                        <div class="card-body">
                            <form action = "{{ url('teachers/'.$teacher->id.'/edit') }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label> Name </label>
                                    <input type="text" name="name" value="{{ $teacher->name }}" />
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Age </label>
                                    <input type="integer" name="age" value="{{ $teacher->age }}" />
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Address </label>
                                    <input type="text" name="address" value="{{ $teacher->address }}" />
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label> Department </label>
                                    <input type="text" name="department" value="{{  $teacher->department }}" />
                                    @error('department') <span class="text-danger">{{ $message }}</span> @enderror
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

