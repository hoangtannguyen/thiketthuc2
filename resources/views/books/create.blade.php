@extends('admin.index')
@section('content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha256-He3QEBKoL/nMXlVsoM7S2C2kjFQqS5L+mgA+F8LpG+U=" crossorigin="anonymous" />


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm sản phẩm</h1>
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
 <form action="{{ route('book.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('POST')
    <section class="content">
      <div class="row">
        <div class="col-md-12">
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
                <input type="text" name="name"  class="form-control">
              </div>
              @error('name')
                <div class="alert alert-danger">
                    {{ $message}}
                </div>
              @enderror
              <div class="form-group">
                <label for="inputDescription">Title</label>
                <input type="texy" name="title"  class="form-control">
              </div>
              @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
              @enderror
                <div class="form-group">
                <label for="inputStatus">Description</label>
                <textarea name="description"  cols="30" rows="10"></textarea>
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
                        <option value="{{ $item->id }}">{{ $item->description }}</option>
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
            Thêm
          </button>
        </div>
      </div>
    </section>
</form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  @if(session()->has('success'))
  <script >
$.toast({
    heading: 'Success',
    text:  'Chúc mừng bạn đã thêm thành công',
    bgColor: '#FF1356',
    position: 'mid-center',
    stack: false

})
  </script>
  @endif



@endsection

