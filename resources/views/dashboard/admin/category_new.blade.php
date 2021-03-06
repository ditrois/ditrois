@extends('dashboard.layout.layout')

@section('title', 'Create New Category')

@section('sidebar')
@include('dashboard.admin.sidebar')
@endsection

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <!-- <div class="section-header-back">
              <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div> -->
            <h1>Create New Category</h1>
            <!-- <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Posts</a></div>
              <div class="breadcrumb-item">Create New Post</div>
            </div> -->
          </div>

          <div class="section-body">
            <!-- <h2 class="section-title">Create New Post</h2>
            <p class="section-lead">
              On this page you can create a new post and fill in all fields.
            </p> -->

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <!-- <div class="card-header">
                    <h4>Write Your Post</h4>
                  </div> -->
                  <div class="card-body">
                    
                    {{-- menampilkan error validasi --}}
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                  <form action="/dashboard/admin/category/new" method="post">
                      @csrf
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea name="description" class="summernote-simple">{{ old('description') }}</textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Create Category</button>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection
