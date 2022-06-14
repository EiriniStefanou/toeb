@extends('layouts.app')

@section('content')
<div class="container">
    <create-payment :clients="{{ $clients }}"/>
</div>
@endsection