@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <h1 class="float-left">Payments Table</h1>
        <a href="{{ route('payments.create') }}" class="btn btn-primary btn-sm float-right">Entry New</a>
     </div>

     <payments-list :payments="{{ $payments }}" />
</div>
@endsection