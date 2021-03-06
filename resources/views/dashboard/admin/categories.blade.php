@extends('dashboard.layout.layout')

@section('title', 'All Categories')

@section('sidebar')
@include('dashboard.admin.sidebar')
@endsection

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
        </div>
        
        @include('dashboard.alert')

        <div class="section-body">

        <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Latest Category</h4>
                  <div class="card-header-action">
                    <a href="/dashboard/admin/category/new" class="btn btn-primary">New Category</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($categories as $category)
                        <tr>
                          <td>
                            {{$category->name}}
                            <div class="table-links">
                              <a href="/{{$category->slug}}">View Page</a>
                            </div>
                          </td>
                          <td>
                            <a href="/dashboard/admin/category/edit/{{$category->id}}" class="btn btn-primary btn-action mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="/dashboard/admin/category/delete/{{$category->id}}" class="btn btn-danger btn-action" onclick="return confirm ('Hapus kategori?')">
                                    <i class="fas fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
    </section>
</div>
@endsection
