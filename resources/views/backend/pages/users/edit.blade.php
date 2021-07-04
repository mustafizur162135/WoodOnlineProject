@extends('backend.layouts.master')

@section('title','Edit | Admin Panel')



@section('admin-content')

<h2> Edit User</h2>
<div class="main-content-inner">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                {{-- error show here --}}
                @include('backend.layouts.partial.message')
                <h4 class="header-title">Basic form</h4>
                <form action="{{ route('admin.users.update',$users->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">
                                    Name
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                                    value="{{ $users->name}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="username ">
                                    User Name(Optional-auto generated)
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="ex:fiz123" value="{{$users->username }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">
                                    Email address
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter email" value="{{ $users->email  }} ">
                            </div>
                        </div>
                        <div class="col-6 ">
                            <div class="form-group">
                                <label for="password">
                                    Password
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="phone_no">
                                    Phone No
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" id="phone_no" name="phone_no"
                                    placeholder="Phone No" value="{{ $users->phone_no  }}">
                            </div>
                        </div>
                        <div class=" col-6">
                            <div class="form-group">
                                <label for="present_address">Present Address</label>
                                <input type="text" class="form-control" id="present_address" name="present_address"
                                    placeholder="present Address" value="{{$users->present_address  }}">
                            </div>
                        </div>
                        <div class=" col-6">
                            <div class="form-group">
                                <label for="parmanent_address">Parmanent Address</label>
                                <input type="text" class="form-control" id="parmanent_address" name="parmanent_address"
                                    placeholder="Parmanent Address" value="{{ $users->parmanent_address  }}">
                            </div>
                        </div>
                        <div class=" col-6">
                            <div class="form-group">
                                <label for="status">
                                    status
                                    <span class="text-danger">*</span>
                                </label>
                                <select id="status" name="status" class="form-control">
                                    <option value=""></option>
                                    <option value="Active" {{ $users->status =='Active'? 'selected' : '' }}>Active
                                    </option>
                                    <option value="Inactive" {{ $users->status =='Inactive'? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="image">profile Picture</label>
                                <p>
                                    @if (!is_null($users->image))
                                    <img src="{{ asset('image/users/'.$users->image) }}" style="width:100px">


                                    @endif
                                </p>
                                <input type="file" class="form-control" id="image" name="image"
                                    placeholder="profile Picture">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection