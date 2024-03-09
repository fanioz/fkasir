@extends('layout.layout')
@section('content')
    <!--**********************************
                        Content body start
                    ***********************************-->
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
                        <form method="POST" action="/transaksi/store">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">{{ $title }}</h4>
                                </div>
                                <hr />
                                <button class="btn btn-primary" type="button" data-target="#modalCreate"
                                    data-toggle="modal">
                                    <i class="fa fa-plus"></i>Tambah Data
                                </button>
                                <hr />
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>No</th>
                                            <th>Barang</th>
                                            <th>Harga</th>
                                            <th>Qty</th>
                                            <th>SubTotal</th>
                                        </tr>
                                        <tr>
                                            <td>No</td>
                                            <td>Barang</td>
                                            <td>Harga</td>
                                            <td>Qty</td>
                                            <td>SubTotal</td>
                                        </tr>
                                        <tr>
                                            <th colspan="4">Diskon</th>
                                            <td colspan="4">Diskon</td>
                                        </tr>
                                        <tr>
                                            <th colspan="4">Total Bayar</th>
                                            <td colspan="4">total</td>
                                        </tr>
                                    </table>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col md-6">
                                        <div class="form-group">
                                            <label>No Transaksi</label>
                                            <input type="text" class="form-control" name="no_transaksi" value="NT_001"
                                                required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Transaksi</label>
                                            <input type="text" class="form-control" value="{{ date('d/M/Y') }}" required
                                                readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Uang Pembeli</label>
                                            <input type="number" class="form-control" name="uang_pembeli" value="NT_001"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kembalian</label>
                                            <input type="number" class="form-control" name="no_transaksi" value="NT_001"
                                                required readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <button type="submit" class="btn btn-primary btn-round"><i class="=fa fa-safe"></i>Save
                                    Changes</button>
                                <a href="/transaksi" class="btn btn-danger"><i class="fa fa-undo">cancel</i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!-- modal -->
    <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create {{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form method="POST" action="/transaksi/chart">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Jenis Barang</label>
                            <select class="form-control" name="id_barang" required>
                                <option value="" hidden>--- Pilih Nama Barang ---</option>

                            </select>
                        </div>
                        <div id="tampil_barang">

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
    <!--**********************************
                        Content body end
                    ***********************************-->
@endsection
