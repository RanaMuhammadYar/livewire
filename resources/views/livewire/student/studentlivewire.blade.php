<div>

    @if($studentEdit)
    @include('livewire.student.update')
    @else
    @include('livewire.student.create')
    @endif




    <div class="container">

        <div class="row mt-3 justify-content-center">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card py-4">
                    <div class="card-body">
                        <button class=" btn btn-primary" style="float:right;" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add Student</button>
                        <h5 class="card-title">Student Data </h5>

                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Colour</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($students as $student)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td><div style="height:100px;width:100px; background-color: {{ $student->color }};"  ></div>  </td>
                                        <td><img src="{{ asset('storage/' . $student->image) }}" alt=""
                                                height="100" width="200"></td>
                                        <td>
                                            <button wire:click="edit({{ $student->id }})"
                                                class="btn btn-primary btn-sm"  data-bs-toggle="modal"
                                                data-bs-target="#exampleModal1">Edit</button>
                                            <button wire:click="delete({{ $student->id }})"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>






</div>
