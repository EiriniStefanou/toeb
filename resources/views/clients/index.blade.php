@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <h1 class="float-left">Clients Table</h1>
        <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm float-right">Create New</a>
     </div>

     <clients-list :clients="{{ $clients }}" />
</div>
@endsection