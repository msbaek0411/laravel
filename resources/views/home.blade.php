@extends('layouts.app')

@section('content')
<div class="container">
   
     <thechat v-bind:current-user="{{auth()->id()}}"></thechat>
</div>
@endsection
