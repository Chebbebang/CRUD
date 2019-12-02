@extends('layouts.layouts')

@section('title', 'Item Add')

@section('content')
	<div class="Container">
		<h2>Add Item</h2>
		
		@foreach ($item as $items)
		{!! Form::open(['url' => "/itemupdate/"."$items->id", 'Method' => 'POST']) !!}
			{{-- {!! Form::hidden('id', "$items->id" )  !!} --}}
			{!! Form::label('Name') !!}
			{!! Form::text('name', "$items->name", ['class' => 'form-control', 'required' => '', 'maxlength' => '20']) !!}

			{!! Form::label('Description') !!}
			{!! Form::text('description', "$items->description", ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) !!}

			{!! Form::label('Price') !!}
			{!! Form::text('price', "$items->price", ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) !!}

			{!! form::submit('Update', ['class' => 'btn btn-success', 'style' => 'margin-top: 20px'])!!}
		{!! Form::close() !!}
		@endforeach
		

		
	</div>
@section('script')
	<script type="text/javascript">

	

@endsection