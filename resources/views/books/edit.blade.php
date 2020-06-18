@extends('admin.index')
@section('content')



 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
 <form action="{{ route('book.update',$books->id) }}" enctype="multipart/form-data" method="POST" >
    @csrf
    @method('PUT')
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Sản phẩm</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" name="name"  class="form-control" value="{{ $books->name }}">
              </div>
              @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
              @enderror
              <div class="form-group">
                <label for="inputDescription">Title</label>
                <input type="text" name="title"  class="form-control"  value="{{ $books->title }}">
              </div>
              @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
              @enderror
              <div class="form-group">
                <label for="inputStatus">Description</label>
                <textarea name="description"  cols="30" rows="10" >{{  $books->description }}</textarea>
              </div>
              @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
              @enderror
              <div class="form-group">
                <label for="inputStatus">Description_id</label>
                 <select class="form-control custom-select" name="description_id" size="10">
                    @foreach ($categorys as $item)
                        <option  {{ $item->id == $books->description_id   ? 'selected':'' }} value="{{ $item->id }}">{{ $item->description }}</option>
                    @endforeach
               </select>
              </div>
              @error('description_id')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
      <div class="row">
        <div class="col-12">
          <a href="{{ route('book.index') }}" class="btn btn-secondary">Trở về</a>
          <button type="submit" class="btn btn-success swalDefaultSuccess">
            Sửa
          </button>
        </div>
      </div>
    </section>
</form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

