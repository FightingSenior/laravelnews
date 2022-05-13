@extends('admin.layouts.master')
@section('title','Categories')
@section('content')

<div class="row">
	<div class="col-sm-12 title">
		<h1><i class="fa fa-bars"></i> THỂ LOẠI</h1>
	</div>

	<div class="col-sm-4 cat-form">
		@if(Session::has('message'))
		<div class="alert alert-success alert-dismissable fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{{Session('message')}}
		</div>
		@endif
		<h3>Thêm danh mục mới</h3>
		<form method="post" action="{{url('addcategory')}}">
			{{csrf_field()}}
			<input type="hidden" name="tbl" value="{{encrypt('categories')}}">
			<div class="form-group">
				<label>Tên</label>
				<input type="text" name="title" id="category_name" class="form-control">
				<p>Tên là cách nó xuất hiện trên trang web của bạn.</p>
			</div>

			<div class="form-group">
				<label>Slug</label>
				<input type="text" name="slug" id="slug" class="form-control" readonly="">
				<p>“Slug” là phiên bản thân thiện với URL của tên. Nó thường là tất cả các chữ thường và chỉ chứa các chữ cái, số và dấu gạch ngang.</p>
			</div>
			<div class="form-group">
				<label>Trạng thái</label>
				<select calss="form-control" name="status">
					<option value='1'>on</option>
					<option value='0'>off</option>
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Thêm</button>
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
						<option value="0">Hành động hàng loạt</option>
						<option value="1">Di chuyển vào thùng rác</option>
					</select>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-default">Nộp đơn</button>
				</div>
				<div class="col-sm-3 col-sm-offset-4">
					<input type="text" id="search" class="form-control" placeholder="Tìm kiếm danh mục">
				</div>
			</div>

			<div class="content">
				<table class="table table-striped">
					<thead>
						<tr>
							<th><input type="checkbox" id="select-all"> Tên</th>
							<th>Slug</th>
							<th>Trạng thái</th>
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