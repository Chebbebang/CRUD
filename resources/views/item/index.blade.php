

@extends('layouts.layouts')

@section('title', 'Item List')

@section('content')

	<div class="Container">
		<div class="page-body">
		<h2>Inventory List</h2>
		</div>

		<a href="{{ route('item.create') }}" class="btn btn-primary" role="button" data-toggle="modal" data-target="#modaladd">Add Item</a>

		<table class="table table-hover">
			<thead>
				<tr>
					<td><h3>Name</h3></td>
					<td><h3>Description</h3></td>
					<td><h3>User</h3></td>
					<td><h3>Price</h3></td>
					<td><h3>Time Created</h3></td>
				</tr>
			</thead>
			<tbody>
			@if ($item != null)
				@foreach($item as $item)
					<tr>
					
						<td>{{ $item->name }}</td>
						<td>{{ $item->description }}</td>
						<td > {{$item->email }}</td>
						<td>{{ $item->price }}</td>
						<td>{{ $item->created_at}}</td>
						<td><a href="{{ URL('/change/'.$item->id) }}" class="btn btn-primary">Edit</a></td>
						<td><a href="{{ URL('/erase/'.$item->id) }}" class="btn btn-danger">Delete</a></td>
						
					</tr>
				@endforeach
			@endif
			</tbody>
		</table>
	</div>

@section('script')

	<script type="text/javascript">
@endsection
