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

.comment {
    display: block;
    margin: 10px;
    color: red;
    font-size: 14px;
    border: 1px solid #000;
    background-color: yellow;
    padding: 5px;
}
</style>
@extends('back-end.master')
@section('Main_Admin')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Blog</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ho Than Chinh</td>
                                    <td>The Battle of Algiers (Di Algeri)</td>
                                    <td >Dramatically grow market positioning human capital rather <br> than professional data.</td>
                                    <td><label class="badge badge-outline-danger badge-pill">Hide</label></td>
                                    <td><a href="" class="btn btn-gradient-dark btn-sm w-75"> <i
                                                class="far fa-edit"></i></a>
                                        <form action="" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-gradient-dark btn-sm mt-1 w-75"> <i
                                                    class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Ho Than Chinh</td>
                                    <td>The Battle of Algiers (Di Algeri)</td>
                                    <td>Good Good Good Good Good Good</td>
                                    <td><label class="badge badge-outline-warning badge-pill">Show</label></td>
                                    <td><a href="" class="btn btn-gradient-dark btn-sm w-75"> <i
                                                class="far fa-edit"></i></a>
                                        <form action="" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-gradient-dark btn-sm mt-1 w-75"> <i
                                                    class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class="pagination modal-4">
                            <li><a href="#" class="prev">
                                    <i class="fa fa-chevron-left"></i>
                                    Previous
                                </a>
                            </li>
                            <li><a href="#" class="active">1</a>
                            </li>
                            <li><a href="#" class="S">2</a>
                            </li>
                            <li><a href="#" class="S">3</a>
                            </li>
                            <li><a href="#" class="S">4</a>
                            </li>
                            <li><a href="#" class="next">
                                    Next
                                    <i class="fa fa-chevron-right"></i>
                                </a></li>
                        </ul>
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