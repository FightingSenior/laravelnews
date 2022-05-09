@extends('admin.layouts.master')
@section('title','Edit Category')
@section('content')

<div class="row">
	<div class="col-sm-12 title">
		<h1><i class="fa fa-bars"></i> Edit Category </h1>
	</div>

	<div class="col-sm-4 cat-form">
		@if(Session::has('message'))
		<div class="alert alert-success alert-dismissable fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{{Session('message')}}
		</div>
		@endif
		<h3>Edit Category</h3>
		<form method="post" action="{{url('updatecategory')}}/{{$singledata->category_id}}">
			{{csrf_field()}}
			<input type="hidden" name="tbl" value="{{encrypt('categories')}}">
			<input type="hidden" name="category_id" value="{{$singledata->category_id}}">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="title" id="category_name" class="form-control" value="{{$singledata->title}}">
				<p>The name is how it appears on your site.</p>
			</div>

			<div class="form-group">
				<label>Slug</label>
				<input type="text" name="slug" id="slug" class="form-control" value="{{$singledata->slug}}">
				<p>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</p>
			</div>
			<div class="form-group">
				<label>Status</label>
				<select calss="form-control" name="status">
					<option value="{{$singledata->status}}">On</option>
					@if($singledata->status == 1)
					<option value='0'>Off</option>
					@else
					<option value='1'>On</option>
					@endif
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Update Category</button>
			</div>
		</form>


	</div>

	<div class="col-sm-8 cat-view">
		<form method="post" action="{{url('multipledelete')}}">
			<div class="row">
				{{csrf_field()}}
				<input type="hidden" name="tbl" value="{{encrypt('categories')}}">
				<input type="hidden" name="tblid" value="{{encrypt('category_id')}}">
				<div class="col-sm-3">
					<select name="bulk-action" class="form-control">
						<option value="0">Bulk Action</option>
						<option value="1">Move to Trash</option>
					</select>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-default">Apply</button>
				</div>
				<div class="col-sm-3 col-sm-offset-4">
					<input type="text" id="search" class="form-control" placeholder="Search Category">
				</div>
			</div>

			<div class="content">
				<table class="table table-striped">
					<thead>
						<tr>
							<th><input type="checkbox" id="select-all"> Name</th>
							<th>Slug</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@if(count($data)>0)
						@foreach($data as $category)
						<tr>
							<td>
								<input type="checkbox" name="select-data[]" value="{{$category->category_id}}">
								<a href="{{url('edit-category')}}/{{$category->category_id}}">{{$category->title}}</a>
							</td>
							<td>{{$category->slug}}</td>
							<td>@if($category->status==1)
								<span class="label label-success">on</span>
								@else
								<span class="label label-danger">off</span>
								@endif
							</td>
						</tr>
						@endforeach
						@else
						<tr>
							<td colspan="3">No data found</td>
						</tr>
						@endif
					</tbody>
				</table>
			</div>
		</form>
	</div>
</div>

@stop