<!--**********************************
    Content body start
***********************************-->
@extends('layout.layout')
@section('content')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title }}</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @foreach ($data_diskon as $d)
                    <form method="POST" action="/setdiskon/update/{{ $d->id }}">
                        @csrf
                        <div class="card-body">                        
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">{{ $title }}</h4>    
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Total Belanja</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="number" name="total_belanja" value="{{ $d->total_belanja }}" class="form-control" placeholder="Total Belanja" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Diskon</label>
                                    <div class="input-group mb-3">                                
                                        <input type="number" class="form-control" name="diskon" value="{{ $d->diskon }}" placeholder="Diskon" required>
                                        <div class="input-group-append"><span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i>
                                Save changes
                            </button>        
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

<!--**********************************
    Update Modal
***********************************-->

@foreach ($data_diskon as $d)

<div class="modal fade" id="modalEdit{{ $d->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit {{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form method="POST" action="/jenisbarang/update/{{ $d->id }}">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <input type="text" value="{{ $d->nama_jenis }}" class="form-control" name="nama_jenis" placeholder="Jenis Barang" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <li class="fa fa-undo"></li>
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <li class="fa fa-save"></li>
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<!--**********************************
    Content body end
***********************************-->
@endsection