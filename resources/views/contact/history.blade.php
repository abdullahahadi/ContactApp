@extends('layouts.app')
@section('content')
<div class="col-md-10 col-sm-12">
  
<a href="{{route('contact')}}" class="btn mt-2 btn-primary">Back</a>
<h3>Edit History</h3>
  <table class="table table-striped shadow mt-4 p-5 rounded table-responsive-md table-responsive-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Old Value</th>
        <th>New Value</th>
        <th>Edited on</th>
        <th>Time</th>
        
        
      </tr>
    </thead>
    @if($contacts->count())
    <tbody>
      <?php $i=0 ?>
      @foreach($contacts as $contact)
      <tr>
        <td>{{++$i}}</td>
        <td>{{$contact->old_value}}</td>
        <td>{{$contact->new_value}}</td>
        <td>{{$contact->created_at}}</td>
        <td>{{\Carbon\Carbon::parse($contact->created_at)->diffForHumans()}}</td>
        
      </tr>
      @endforeach
    </tbody>
    @else
    <tbody>
        
        <tr>
          <td></td>
          <td></td>
          <td class="text-center">No Edit History!</td>
          <td></td>
          <td></td>
          
        </tr>
       
      </tbody>
    @endif
  </table>
    <div class="d-flex">
      {{ $contacts->links("pagination::bootstrap-4") }}
    </div>
  </div>
@endsection