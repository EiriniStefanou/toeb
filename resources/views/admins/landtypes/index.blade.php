@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <h1 class="float-left">Land Types Table</h1>
        <a href="{{ route('admins.landtypes.create') }}" class="btn btn-primary btn-sm float-right">Create New</a>
     </div>

     <landtypes-list :landtypes="{{ $landtypes }}" />
</div>
@endsection