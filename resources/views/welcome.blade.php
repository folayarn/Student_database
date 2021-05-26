@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">

<div class="col-md-5">
@include('includes.filter')

</div>
<div class="col-md-6" >
    @include('includes.submit_record')

</div>
<div class="col-md-1"></div>

</div>


</div>




@endsection
