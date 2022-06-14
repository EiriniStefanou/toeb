@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <h1 class="float-left">Regions Table</h1>
        <a href="{{ route('regions.create') }}" class="btn btn-primary btn-sm float-right">Create New</a>
     </div>

     <regions-list :regions="{{ $regions }}" />
</div>
@endsection