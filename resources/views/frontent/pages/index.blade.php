@extends('backend.layouts.master')

@section('title','User List | Admin Panel')


@section('admin-content')
<h2> this is frontent page</h2>
<div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col">Category Discription</th>
        <th scope="col">All product</th>
      </tr>
    </thead>

    @foreach ($products as $item)
    <hr>
    <div>
      <tbody>
        <tr>
          <th scope="row">{{ $item->categorie->id }}</th>
          <td>
            <h2>{{ $item->title }}</h2>
          </td>
          <td>{{ $item->categorie->discription }}</td>
          <td><a class="btn btn-primary" href="#" role="button">Here</a></td>
        </tr>
      </tbody>
    </div>
    @endforeach



  </table>



</div>

@endsection