@extends('admin.admin_template')
@push('page_header')
<section class="content-header">
    <h1>
    Dashboard
    <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Markets</a></li>
    <li class="active">Dashboard</li>
    </ol>
    </section>
@endpush
@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Markets Registered</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="vanaho"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                @if(!empty($markets))
                <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <tr>
                      <th>ID</th>
                      <th>Market Name</th>
                      <th>Cell Name</th>
                      <th>Sector Name</th>
                      <th>District Name</th>
                      <th>Province Name</th>
                    </tr>
                     @foreach ($markets as $market)
                    <tr>
                      <td>{{ $market->id }}</td>
                      <td>{{ $market->market_name }}</td>
                      <td>{{ $market->cell ? $market->cell->cell_name : " " }}</td>
                      <td>{{ $market->cell->sector ? $market->cell->sector->sector_name : " " }}</td>
                      <td>{{ $market->cell->sector->district ? $market->cell->sector->district->district_name : " " }}</td>
                      <td>{{ $market->cell->sector->district->Province ? $market->cell->sector->district->Province->province_name : " " }}</td>
                     </tr>
                    @endforeach
                  </table> 
                  {!! $markets->render() !!}
                  </div>
                  @else
                  <div class="alert alert-success">No Markets Registered Yet!</div>
                  @endif
                </div><!-- /.box-body -->
                <div class="box-footer">
                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection