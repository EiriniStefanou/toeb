@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <h1 class="float-left">Estates Table</h1>
        <a href="{{ route('estates.create') }}" class="btn btn-primary btn-sm float-right">Create New</a>
     </div>

     <estates-list :estates="{{ $estates }}" />
</div>
@endsection