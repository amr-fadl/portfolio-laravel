@extends('admin.layouts.app')


@section('pageTitle' , __('All').' '.__('service'))

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title">@yield('pageTitle', 'no title')</h3>
            <div class="order-3">
                <a href="{{ route('service.create') }}" class="btn btn-info w-100">{{ __('Add') }} {{  __('service')  }}</a>
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
                                        colspan="1" aria-label="Browser: activate to sort column ascending">{{__('Title')}}</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">{{__('Mini Description')}}</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">{{__('Description')}}</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">{{__('Service List')}}</th>

                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">{{__('Option')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $singl)
                                    <tr role="row" class="amr">
                                        <td tabindex="0" class="align-middle text-center sorting_1">{{$singl->id}}</td>
                                        <td class="align-middle">
                                            @if ($singl->images == 'default.png')
                                                <img src="{{ asset('uploads/frontend/services/'.$singl->images) }}" style="height: 100px; width:100px; object-fit: cover;" alt="">
                                            @else
                                                @foreach (json_decode($singl->images) as $image)
                                                    <img src="{{ asset('uploads/frontend/services/'.$image) }}" style="height: 100px; width:100px; object-fit: cover;" alt="">
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="align-middle">{{$singl->title}}</td>
                                        <td class="align-middle">{{$singl->mini_description}}</td>
                                        <td class="align-middle">{!!$singl->description!!}</td>
                                        <td class="align-middle">
                                            @foreach ($singl->ServicesList as $List)
                                            <p>{{$List->name}}</p>
                                            @endforeach
                                            <div class="mt-2">
                                                <a href="{{ route('showlist',['id' => $singl->id] ) }}" class="btn btn-success align-salf-end" style="white-space: pre">{{ __('Show List') }}</a>
                                            </div>
                                        </td>
                                        <td class="align-middle" style="max-width:30%; width:250px">
                                            <div class="d-flex flex-wrap" style="row-gap: 10px">
                                                <div class="col-12 col-sm-6 mt-2">
                                                    <a href="{{ route('service.edit', ['service' => $singl->id]) }}" class="btn btn-info w-100">{{ __('Edit') }}</a>
                                                </div>
                                                <div class="col-12 col-sm-6 mt-2">
                                                    <form method="POST" class="w-100"
                                                        action="{{ route('service.destroy', $singl->id) }}">
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


