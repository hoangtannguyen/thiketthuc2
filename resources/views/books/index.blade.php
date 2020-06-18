@extends('admin.index')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha256-He3QEBKoL/nMXlVsoM7S2C2kjFQqS5L+mgA+F8LpG+U=" crossorigin="anonymous" />



<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects Customers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('book.home') }}" class="btn btn-warning btn-sm" >Home</a></li>
              <li class="breadcrumb-item active">
                <a class="btn btn-success btn-sm" href="{{ route('book.showa') }}">
                    Đã đọc
                </a> /
                <a class="btn btn-danger btn-sm" href="{{ route('book.showi') }}">
                    Chưa đọc
                </a>

                </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
         <a class="btn btn-primary btn-sm"  href="{{ route('book.create') }}">
            <i class="fas fa-plus-circle">
            </i>
            Thêm
        </a>


    </h3>
         <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                         Name
                      </th>
                      <th>
                        Title
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Description_id
                     </th>
                      <th style="width: 8%" class="text-center">
                        Active
                      </th>
                      <th style="width: 20%">

                      </th>
                  </tr>
              </thead>
              <tbody>
                  @if (count($books) == 0)
                     <th class="list-inline">KCDL</th>
                  @else
                 @foreach ($books as $key => $book)
                  <tr>
                      <td>
                          {{ ++$key }}
                      </td>
                      <td>
                          <a>
                              {{ $book->name }}
                          </a>
                          <br/>
                          <small>
                              Tạo {{ $book->created_at }}
                          </small>
                      </td>
                      <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                              {{ $book->title }}
                            </li>
                        </ul>
                    </td>

                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                {{ $book->description }}
                            </li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                {{  $book->category->description }}
                            </li>
                        </ul>
                    </td>
                      <td class="project-state">
                        @if ($book->active == 0)
                            <a href="{{ route('book.active',$book->id) }}"> <span class="badge badge-success">Đã đọc</span></a>
                        @else
                            <a href="{{ route('book.intive',$book->id) }}"> <span class="badge badge-danger">Chưa đọc</span></a>
                        @endif
                      </td>
                      <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="{{ route('book.edit',$book->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
                          </a>
                      </td>
                  </tr>
                  @endforeach
                  @endif
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->


<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>




</body>



@if(session()->has('success'))
  <script >
$.toast({
    heading: 'Success',
    text:  'Chúc mừng bạn đã sửa thành công',
    bgColor: '#FF1356',
    position: 'mid-center',
    stack: false

})
  </script>
  @endif

  @if(session()->has('succe'))
  <script >
$.toast({
    heading: 'Success',
    text:  'Chúc mừng bạn đã xóa thành công',
    bgColor: 'green',
    position: 'mid-center',
    stack: false

})
  </script>
  @endif


  @if(session()->has('active'))
  <script >
$.toast({
    heading: 'Success',
    text:  'Bạn đã đánh dấu chưa đọc',
    bgColor: 'red',
    icon: 'success',
    position:'bottom-right',
    stack: false

})
  </script>
  @endif


  @if(session()->has('intive'))
  <script >
$.toast({
    heading: 'Success',
    text:  'Bạn đã đánh dấu đã đọc',
    bgColor: 'green',
    icon: 'success',
    position:'bottom-right',
    stack: false

})
  </script>
  @endif



@endsection

<script src="js/crud.js"></script>
