@extends('admin.layouts.app')


@section('pageTitle' , __('All').' '.__('message'))

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title">@yield('pageTitle', 'no title')</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="post">
                            <div class="user-block">
                              <span class="username ml-0">
                                <a href="#">{{$contactMessage->name}}</a>
                                <a href="{{ route('contactMessage.index') }}" class="float-right btn-tool ml-0"><i class="fas fa-times"></i></a>
                              </span>
                              <span class="description ml-0">Email: {{$contactMessage->email}}</span>
                              <span class="description ml-0">Phone: {{$contactMessage->phone_number}}</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                              {{$contactMessage->message}}
                            </p>

                          </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.row -->
@endsection

@section('page_style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <style>
        .odd{
            background-color: #fff !important;
        }
        div.dataTables_wrapper div.dataTables_filter {
            display: flex;
            justify-content: flex-end;
        }
    </style>
@endsection

@section('page_script')
    <!-- DataTables -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
                order: [[5, 'desc']],
                @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
                    "language": {
                        "url": '//cdn.datatables.net/plug-ins/1.13.1/i18n/ar.json'
                    }
                @endif
            });
        });
    </script>
@endsection


