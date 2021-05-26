@extends('layouts.app')

@section('content')

<div class="row">

<div class="col-md-3">
<a class="btn btn-primary" href="/"  style="margin-left:100px">Go Home</a>
</div>
<div class="col-md-6 ">

<table style="margin-top:50px" class="table table-striped responsive">
<tr>
<td>Full Name</td>
<td>{{ $student->full_name}}</td>
</tr>
<tr>
<td>Course Study</td>
<td>{{ $student->course}}</td>
</tr>
<tr>
<td>Age</td>
<td>{{ $student->age}}</td>
</tr>
<tr>
<td>Gender</td>
<td>{{ $student->gender}}</td>
</tr>
<tr>
<td>Phone Number</td>
<td>{{ $student->phone_no}}</td>
</tr>
<tr>
<td>Address</td>
<td>{{ $student->address}}</td>
</tr>
</table>


</div>
<div class="col-md-3"></div>

</div>

@endsection