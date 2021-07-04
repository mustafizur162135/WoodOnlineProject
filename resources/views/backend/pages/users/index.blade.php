@extends('backend.layouts.master')

@section('title','User List | Admin Panel')



@section('admin-content')
<div class="page-title-area">
    <div class="row align-items-center">

        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li><span>user List</span></li>


                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Dark table start -->
@include('backend.layouts.partial.message')
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">USER LIST</h4>
            <div class="data-tables datatable-dark">
                <table id="dataTable3" class="text-center">
                    <thead class="text-capitalize">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Profile</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)

                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone_no }}</td>
                            <td>
                                <img src="{{ asset('image/users/'.$item->image) }}" style="width:50px">

                            </td>
                            <td>
                                <a href="{{ route('admin.users.edit',$item->id) }}"
                                    class="btn btn-outline-success">Edit</a>
                                <a href="{{ route('admin.users.edit',$item->id) }}"
                                    class="btn btn-outline-danger ml-2">Delete</a>
                            </td>
                        </tr>


                        @endforeach
                    </tbody>




                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Dark table end -->

@endsection