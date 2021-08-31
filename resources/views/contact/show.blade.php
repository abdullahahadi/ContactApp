@extends('layouts.app')
@section('content')
<div class="col-md-10 col-sm-12">
    <div class="card mt-4">
        <h5 class="card-header">{{$contact->firstname}}</h5>
        <div class="card-body">
          
            <h6>First name: {{$contact->firstname}}</h6>
            <h6>Last name: {{$contact->lastname}}</h6>
            <h6>Email: {{$contact->email}}</h6>
            <h6>Phone: {{$contact->phone}}</h6>
            <h6>Created: {{$contact->created_at->diffForHumans()}}</h6>
            <a href="{{route('contact.history', $contact->id)}}" class="btn btn-sm btn-success">View Edit History</a>
            
            <hr>
          <a href="{{route('contact')}}" class="btn btn-primary">Back</a>
        </div>
      </div>
 
</div>
@endsection