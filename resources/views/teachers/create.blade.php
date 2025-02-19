@extends('layout')
  
@section('content')
<div  class="container-fluid col-sm-6">
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul> 

        @endif
    </div>
    <div class="container">
        <h1 class="text-center mb-4">Create Teachers</h1>
        
        <form action="{{route('teachers.store')}}" method="post">
          @csrf
          @method('post')
  
          <div class="form-group">
            <label>Teacher_id:</label>
            <input type="text" class="form-control" name="Teacher_id" placeholder="Teacher_id">
          </div>
          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="Name" placeholder="Name">
          </div>
          <div class="form-group">
            <label>Age:</label>
            <input type="text" class="form-control" name="Age" placeholder="Age">
          </div>
          <div class="form-group">
            <label>Birth_Date:</label>
            <input type="text" class="form-control" name="Birth_Date" placeholder="Birth_Date">
          </div>
          <div class="form-group">
            <label>Phone:</label>
            <input type="text" class="form-control" name="Phone" placeholder="Phone">
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" name="Email" placeholder="Email">
          </div>
          <div class="form-group">
            <label>Gander:</label>
            <input type="text" class="form-control" name="Gander" placeholder="Gander">
          </div>
          <div class="form-group">
            <label>Department:</label>
            <input type="text" class="form-control" name="Department" placeholder="Department">
          </div>
          <div class="form-group">
            <label>Possession:</label>
            <input type="text" class="form-control" name="Possession" placeholder="Possession">
          </div>
          <div class="form-group">
            <label>Address:</label>
            <input type="text" class="form-control" name="Address" placeholder="Address">
          </div>
          <div class="form-group">
            <label>Salary:</label>
            <input type="text" class="form-control" name="Salary" placeholder="Salary">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      

</div>


@endsection