@extends('layouts.app')

@section('content')
<div class="container">
    <create-landtype :chargetypes="{{ $chargetypes }}" />
</div>
@endsection