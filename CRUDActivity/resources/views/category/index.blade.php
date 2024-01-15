<x-app-web-layout>

    <x-slot name="title">
        Teachers
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Teachers
                            <a href="{{ url('teachers/create')}}" class="btn btn-primary float-end"> Add Teacher </a>
                        </h4>
                        
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->age}}</td>
                                        <td>{{ $item->address}}</td>
                                        <td>{{ $item->department}}</td>
                                        <td>
                                            <a href="{{ url('teachers/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>

                                            <a href="{{ url('teachers/'.$item->id.'/delete') }}" class="btn btn-danger mx-1">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>

