@extends('layouts.app')

@section('content')
<div class="container">
    <create-estate :clients="{{ $clients }}"/>
</div>
@endsection