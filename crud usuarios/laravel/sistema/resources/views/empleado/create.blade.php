
@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{url('/empleado')}}" method="post">
@csrf

@include('empleado.form',['modo'=>'Registrar']);


</form>
</div>
@endsection