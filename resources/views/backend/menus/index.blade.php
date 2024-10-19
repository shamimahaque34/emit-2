@extends('backend.master')

@section('title')
    Menu
@endsection

@push('style')

@endpush


@section('body')

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h3>Manage Menu</h3>
                    <a href="{{ route('menus.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0">Create</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="myTable">
                                    <thead style="border: 3px solid black">
                                    <tr>
                                        <th>SL</th>
                                        <th>Menu Title </th>
                                        <th>Url</th>
                                         <th>Parent Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($menus as $menu)
                                        <tr style="border: 3px solid black">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $menu->title }}</td>
                                            <td>{{ $menu->url }}</td>
                                            <td>{{ $menu->parent->title ?? ''}}</td>


                                            <td class="d-flex" style="border: none">
                                                <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-primary btn-sm mr-2 edit me-1">edit</a>
                                                <form action="{{ route('menus.destroy', $menu->id) }}" method="post" id="deleteItem">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm mr-2 delete-item">delete</button>
                                                </form>
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



@endsection


