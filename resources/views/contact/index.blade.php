@extends('layouts.app')
@section('content')
<div class="col-md-10 col-sm-12">
  
  @if ($contact = Session::get('success'))
      <div class="alert alert-success mt-2 " role="alert" dir="ltr">{{ $contact }}</div>
  @endif
  @if ($contact = Session::get('danger'))
      <div class="alert alert-danger mt-2 " role="alert" dir="ltr">{{ $contact }}</div>
  @endif
  <h3 class="shadow-sm p-2 mt-2 rounded">Contacts List</h3>
  <table class="table table-striped shadow  p-5 rounded table-responsive-md table-responsive-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=0 ?>
      @foreach($contacts as $contact)
      <tr>
        <th>{{++$i}}</th>
        <td>{{$contact->firstname}}</td>
        <td>{{$contact->lastname}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->phone}}</td>
        <td>
          <a href="{{route('contact.show', $contact->id)}}"><i class="fa fa-eye pr-2 text-dark" title="details"></i></a>
          <a href="{{route('contact.edit', $contact->id)}}"><i class="fas fa-edit pr-2 text-primary" title="edit"></i></a>
          <a href="{{route('contact.delete', $contact->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash text-danger" title="delete" ></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <div class="d-flex">
      {{ $contacts->links("pagination::bootstrap-4") }}
    </div>
  </div>
@endsection