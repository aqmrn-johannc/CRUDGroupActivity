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

                <h4 class="text-center fs-2">Edit Teacher</h4>

                <div class="card">
                    <div class="card-header">

                        <a href="{{ url('teachers')}}" class="btn btn-secondary float-end me-3 mt-2"> Back </a>

                        <div class="card-body">
                            <form action="{{ url('teachers/'.$teacher->id.'/edit') }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-floating mt-5">
                                    <input class="form-control mb-3" id="floatingInput" type="text" name="name" value="{{ $teacher->name }}" />
                                    <label> Name </label>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control mb-3" id="floatingInput" type="integer" name="age" value="{{ $teacher->age }}" />
                                    <label> Age </label>
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control mb-3" id="floatingInput" type="text" name="address" value="{{ $teacher->address }}" />
                                    <label> Address </label>
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control mb-3" id="floatingInput" type="text" name="department" value="{{  $teacher->department }}" />
                                    <label> Department </label>
                                    @error('department') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success float-end submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>