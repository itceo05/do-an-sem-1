<style>
.Action {
    color: #000;
    font-size: 24px;
    margin-left: 10px;
}

.Action:hover {
    color: red;
}

.pagination {
    padding: 25px;
    justify-content: center;
}

.modal-4 a {
    margin: 0 5px;
    padding: 0;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 100%;
    background-color: #F7C12C;
    padding: 6px 10px;
    /* border: 1px solid #000; */
}

.modal-4 a.prev {
    -moz-border-radius: 50px 0 0 50px;
    -webkit-border-radius: 50px;
    border-radius: 50px 0 0 50px;
    width: 100px;
}

.modal-4 a.next {
    -moz-border-radius: 0 50px 50px 0;
    -webkit-border-radius: 0;
    border-radius: 0 50px 50px 0;
    width: 100px;
}

.modal-4 a:hover {
    background-color: #FFA500;
}

.modal-4 a.active,
.modal-4 a:active {
    background-color: #FFA100;
}

.error {
    border: 1px solid red;
}

.ImaPro {
    border-radius: 0 !important;
    width: 200px !important;
    height: auto !important;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
@extends('back-end.master')
@section('Main_Admin')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('logo.update', $finbyId->id)}}" class="forms-sample" method="POST"
                            enctype="multipart/form-data">
                            @METHOD('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Related Photos</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info error" placeholder="Upload Image"
                                        name="image">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-gradient-primary btn-icon-text">
                                            <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                                    </span>
                                </div>
                                <img src="{{url('Uploads')}}/{{$finbyId->image}}" class="ImaPro" alt="">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="status"
                                                    id="membershipRadios1" value="1" {{($finbyId->status == 1)? 'checked' : ''}}> Show <i
                                                    class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="status"
                                                    id="membershipRadios2" value="2" {{($finbyId->status == 2)? 'checked' : ''}}> Hide <i
                                                    class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td><img src="{{url('Uploads')}}/{{$finbyId->image}}" class="ImaPro" alt=""></td>
                                    <td><label
                                            class="{{($finbyId->status == 1)? 'badge-outline-warning' : 'badge-outline-danger'}} badge  badge-pill">{{($finbyId->status == 1)? 'Show' : 'Hide'}}</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                    bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                        href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                        templates </a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
</div>
@stop