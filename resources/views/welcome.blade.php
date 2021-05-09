<!DOCTYPE html>
<html>
<head>
    <title>Crud Application</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">

</head>



<div style="padding: 50px"></div>




<div class="container">


    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Update Students</h5>
                  

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Roll</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>


                       @php

                            $serial=1
                        @endphp


                        @foreach($student as $row)
                        
                            <th scope="row">{{$serial++}}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->class}}</td>
                            <td>{{$row->roll}}</td>
                            <td>

                                <a href="{{url('students/edit/' .$row->id )}}" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Students</h5>
                  @if(session('succes'))

                    <div class="alert alert-success" role="alert">
                      <strong>{{session('succes')}}</strong>
                    </div>
                    </div>
                    @endif
                    <form method="POST" action="{{url('student/store')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="Name" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" @error('Name') is-invalid @enderror value="{{student->name}}">
                            @error('Name')
                         <strong class="text-danger">  {{$message}}</strong>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Class</label>
                            <input type="text" class="form-control"  name="Class" id="exampleInputPassword1" value="{{student->Class}}">
                            @error('Class')
                            <strong class="text-danger">  {{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputRoll" class="form-label">Roll</label>
                            <input type="text" class="form-control" name="Roll" id="exampleInputRoll" value="{{student->roll}}">
                            @error('Roll')
                            <strong class="text-danger">  {{$message}}</strong>
                            @enderror
                        </div>




                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                </div>
            </div>
        </div>
    </div>


</div>








<script type="text/javascript" src="js/jquery-3.5.1.slim.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/all.min.js"></script>
<script type="text/javascript" src="js/fontawesome.min.js"></script>

</body>
</html>
