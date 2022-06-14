@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <h1 class="float-left">Charge Types Table</h1>
        <a href="{{ route('admins.chargetypes.create') }}" class="btn btn-primary btn-sm float-right">Create New</a>
     </div>

     <chargetypes-list :chargetypes="{{ $chargetypes }}" />
</div>
@endsection