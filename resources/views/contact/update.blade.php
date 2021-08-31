@extends('layouts.app')
@section('content')
<div class="col-md-8 col-sm-12">
  <h3 class="shadow-sm p-2 mt-2 rounded">Update Contact</h3>
    <form class="shadow  p-5 rounded" method="post" action="{{route('contact.update', $contact->id)}}">
        @csrf
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" value="{{ $contact->firstname }}" @error('firstname') style="border:1px solid red" @enderror class="form-control" id="firstname"  placeholder="Enter first name">
            <small  class="form-text text-danger">
              @error('firstname'){{ $message }}@enderror
          </small>
          </div>
          <div class="form-group">
              <label for="lastname">Last Name:</label>
              <input type="text"  name="lastname" value="{{ $contact->lastname }}" @error('lastname') style="border:1px solid red" @enderror class="form-control" id="lastname"  placeholder="Enter last name">
              <small  class="form-text text-danger">
                  @error('lastname'){{ $message }}@enderror
              </small>
          </div>
          
          <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" name="email" value="{{ $contact->email }}" @error('email') style="border:1px solid red" @enderror class="form-control" id="email"  placeholder="Enter email">
              <small  class="form-text text-danger">
                  @error('email'){{ $message }}@enderror
              </small>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{ $contact->phone }}" @error('phone') style="border:1px solid red" @enderror class="form-control" id="phone"  placeholder="Enter phone">
            <small class="form-text text-danger">
              @error('phone'){{ $message }}@enderror
          </small>
          </div>
       
       
        <button type="submit" class="btn btn-success">Update</button>
      </form>
   
  </div>
@endsection
