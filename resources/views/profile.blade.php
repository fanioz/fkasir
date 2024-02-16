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
                    @foreach ($data_profile as $d)
                    <form method="POST" action="/profile/updateprofile/{{ $d->id }}">
                        @csrf
                        <div class="card-body">                        
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">{{ $title }}</h4>    
                            </div>
                            <hr>
                            <input type="hidden" value="{{ $d->role }}" name="role" required>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" value="{{ $d->name }}" class="form-control" name="name" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{ $d->email }}" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
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
    Content body end
***********************************-->
@endsection