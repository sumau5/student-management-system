<div class="card mb-3">
  <img src="https://worldportesl.com/wp-content/uploads/2020/07/header.jpg"class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">You can find here all the information about students in the system</p>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">S.id</th>
          <th scope="col">First name</th>
          <th sco  pe="col">Last name</th>
          <th scope="col">Age</th>
          <th scope="col">Speciality</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($students as $student)
          <tr>
              <td>{{$student->sid}}</td>
              <td>{{$student->firstName}}</td>
              <td>{{$student->lastName}}</td>
              <td>{{$student->age}}</td>
              <td>{{$student->speciality}}</td>
              <td>
                  {{-- <a href ="#" class="btn-sm btn-info">Show</a> --}}
                  <a href ="{{url('edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
                  <a href ="{{url('delete/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr> 
          @endforeach
       
      </tbody>
    </table>
  </div>
</div>
   
