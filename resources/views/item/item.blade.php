@extends('layouts.layouts')

@section('title', 'Item Add')

@section('content')
	<div class="Container">
		<h2>Add Item</h2>

		{!! Form::open(['route' => 'item.store', 'Method' => 'POST']) !!}

			{!! Form::label('Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '20']) !!}

			{!! Form::label('Description') !!}
			{!! Form::text('description', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) !!}

			{!! Form::label('Price') !!}
			{!! Form::text('price', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '100']) !!}

			{!! form::submit('Save', ['class' => 'btn btn-success', 'style' => 'margin-top: 20px'])!!}

			
				

		{!! Form::close() !!}

		
	</div>
@section('script')
	<script type="text/javascript">

	

@endsection