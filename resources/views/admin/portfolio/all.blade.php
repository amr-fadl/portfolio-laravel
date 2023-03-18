@extends('admin.layouts.app')


@section('pageTitle' , __('All').' '.__('Portfolio'))

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title">@yield('pageTitle', 'no title')</h3>
            <div class="order-3">
                <a href="{{ route('portfolio.create') }}" class="btn btn-info w-100">{{ __('Add') }} {{  __('Portfolio')  }}</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                            aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">{{__('#')}}</th>

                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">{{__('Image')}}</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">{{__('Name')}}</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">{{__('mini_description')}}</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">{{__('description')}}</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">{{__('Option')}}</th>
                                </tr>
                            </thead>
                            {{-- @dd($orderPortfolio) --}}
                            <tbody>
                                @foreach ($allData as $singl)
                                    <tr role="row" class="amr">
                                        <td tabindex="0" class="align-middle text-center sorting_1">{{$singl->id}}</td>
                                        <td class="align-middle"><img src="{{ asset('uploads/frontend/Portfolio/'.$singl->image) }}" style="height: 100px; width:100px; object-fit: cover;" alt=""></td>
                                        <td class="align-middle">{{$singl->name}}</td>
                                        <td class="align-middle">{{$singl->mini_description}}</td>
                                        <td class="align-middle">{{$singl->description}}</td>
                                        <td class="align-middle" style="max-width:30%; width:250px">
                                            <div class="d-flex flex-wrap" style="row-gap: 10px">
                                                <div class="col-12 col-sm-6">
                                                    <a href="{{ route('portfolio.edit', $singl->id) }}" class="btn btn-info w-100">{{ __('Edit') }}</a>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <form method="POST" class="w-100"
                                                        action="{{ route('portfolio.destroy', $singl->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger w-100">{{ __('Delete') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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


