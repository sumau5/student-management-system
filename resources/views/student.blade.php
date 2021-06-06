@extends('layouts.app')

@section('title')
    student maangement system
@endsection

@section('content')
    
@if (Auth::guest())
<h4 style="text-align: center;">You need to login to access.</h4>    

@else
@if ($layout == 'index')
<div class="container-fluid mt-4">
<div class="container-fluid mt-4">
 <div class="row justify-content-center">
   <section class ="col-md-7">
       @include("studentslist")
   </section>
 </div>
</div>
</div>
@elseif($layout == 'create')
<div class="container-fluid mt-4">
<div class="row">
<section class ="col-md-7">
   @include("studentslist");
</section>
<section class = "col-md-5">
 <div class="card mb-3">
   <img src="https://images.theconversation.com/files/45159/original/rptgtpxd-1396254731.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=754&h=502&fit=crop&dpr=1"class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">Enter information of students</h5>
   <form action ="{{url('/store')}}" method="post">
       @csrf
   <div class="form-group">
       <label>S.id</label>
       <input name ="sid" type="text" class="form-control" placeholder="enter student id">
     </div>
     <div class="form-group">
       <label>First name</label>
       <input name ="firstName" type="text" class="form-control" placeholder="enter first name">
     </div>
     <div class="form-group">
       <label>Last Name</label>
       <input name ="lastName"type="text" class="form-control" placeholder="enter last name">
     </div>
     <div class="form-group">
       <label>Age</label>
       <input name ="age"type="text" class="form-control" placeholder="enter age">
     </div>
     <div class="form-group">
       <label>speciality</label>
       <input name ="speciality"type="text" class="form-control" placeholder="enter speciality">
     </div>
     <input type="submit" class="btn btn-info" value="Save">
     <input type="reset" class="btn btn-warning" value="Reset">
   </form>
   </div>
 </div>
</section>
</div>
</div>

@elseif($layout == 'show')
<div class="container-fluid mt-4">
<div class="row">
<section class ="col">
   @include("studentslist");
</section>
<section class = "col"></section>
</div>
</div>

@elseif($layout == 'edit')
<div class="container-fluid mt-4">
<div class="row">
<section class ="col-md-7">
   @include("studentslist");
</section>
<section class = "col-md-5">
 <div class="card mb-3">
   <img src="https://images.theconversation.com/files/45159/original/rptgtpxd-1396254731.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=754&h=502&fit=crop&dpr=1"class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">Update information of students</h5>
   <form action ="{{url('/update/'.$student->id)}}" method="post">
       @csrf
   <div class="form-group">
       <label>S.id</label>
       <input value="{{$student->sid}}" name ="sid" type="text" class="form-control" placeholder="enter student id">
     </div>
     <div class="form-group">
       <label>First name</label>
       <input value="{{$student->firstName}}" name ="firstName" type="text" class="form-control" placeholder="enter first name">
     </div>
     <div class="form-group">
       <label>Last Name</label>
       <input value="{{$student->lastName}}"name ="lastName"type="text" class="form-control" placeholder="enter last name">
     </div>
     <div class="form-group">
       <label>Age</label>
       <input value="{{$student->age}}"name ="age"type="text" class="form-control" placeholder="enter age">
     </div>
     <div class="form-group">
       <label>speciality</label>
       <input value="{{$student->speciality}}"name ="speciality"type="text" class="form-control" placeholder="enter speciality">
     </div>
     <input type="submit" class="btn btn-info" value="Update">
     <input type="reset" class="btn btn-warning" value="Reset">
   </form>
   </div>
 </div>
</section>
</div>
</div>
@endif
@endif 


@endsection
   
     
   









    
 