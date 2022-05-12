@extends('admin.layouts.master')
@section('title', 'Dashboard')
@section('content')

<div class="row">
  <div class="col-sm-10 title">
    <h1><i class="fa fa-bars"></i> TỔNG QUAN</h1>
  </div>

  <div class="col-sm-12">
    <div class="content">
      <h2>Chào mừng đến với trang Tổng quan</h2>
      <p class="welcome-text">Chúng tôi đã tập hợp một số liên kết để bạn bắt đầu.</p>
      <div class="row">
        <div class="col-sm-4">
          <h4>Bắt đầu</h4><br>
          <button type="button" class="btn btn-lg btn-primary">Tài liệu</button>
        </div>
        <div class="col-sm-4 quick-links">
          <h4>Xem bản ghi</h4>
          <p><a href="#"><i class="fa fa-bookmark-o"></i> Xem tất cả bài viết</a></p>
          <p><a href="#"><i class="fa fa-image"></i> Xem tất cả hình ảnh</a></p>
          <p><a href="#"><i class="fa fa-video-camera"></i> Xem tất cả các video</a></p>
          <p><a href="#"><i class="fa fa-file"></i> Xem tất cả các trang</a></p>
          <p><a href="#"><i class="fa fa-bar-chart"></i> Xem tất cả các báo cáo</a></p>
          <p><a href="#"><i class="fa fa-users"></i> Xem tất cả người dùng</a></p>
        </div>
        <div class="col-sm-4 quick-links">
          <h4>Thêm bản ghi</h4>
          <p><a href="#"><i class="fa fa-bookmark-o"></i> Thêm bài đăng</a></p>
          <p><a href="#"><i class="fa fa-image"></i> Thêm hình ảnh</a></p>
          <p><a href="#"><i class="fa fa-video-camera"></i> Thêm video</a></p>
          <p><a href="#"><i class="fa fa-file"></i> Thêm trang</a></p>
          <p><a href="#"><i class="fa fa-bar-chart"></i> Thêm báo cáo</a></p>
          <p><a href="#"><i class="fa fa-users"></i> Thêm người dùng</a></p>
        </div>
      </div>
    </div>

    <div class="content">
      
      <div class="col-sm-9">
        
        <div class="row">
          <ul class="nav navbar-nav">
            <li><a href="#">Photoshop</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">jQuery</a></li>
            <li><a href="#">PHP cơ bản</a></li>
            <li><a href="#">phương thức PHP</a></li>
            <li><a href="#">PHP hướng đối tượng </a></li>
            <li><a href="#">Laravel</a></li>
            <li><a href="#">Wordpress</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@stop