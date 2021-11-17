@extends('back-end.master')
@section('Main_Admin')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('film.store')}}" class="forms-sample" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Name</label>
                                        <input type="text" class="form-control {{($errors->has('name'))? 'error' : ''}}"
                                            id="title" onkeyup="ChangeToSlug()" placeholder="Film Name" name="name">
                                        @if($errors->has('name'))
                                        <div class="alert-back mt-2" role="alert">
                                            <p><i class="mdi mdi-alert-circle"> </i><strong>Remind!</strong>
                                                {{$errors->first('name')}}</p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Time</label>
                                        <input type="text" class="form-control {{($errors->has('name'))? 'error' : ''}}"
                                            id="exampleInputUsername1" placeholder="Showtime Film" name="time">
                                        <!-- @if($errors->has('time'))
                                        <div class="alert-back mt-2" role="alert">
                                            <p><i class="mdi mdi-alert-circle"> </i><strong>Remind!</strong>
                                                {{$errors->first('time')}}</p>
                                        </div>
                                        @endif -->
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Release Date</label>
                                        <input type="date" class="form-control {{($errors->has('name'))? 'error' : ''}}"
                                            id="exampleInputUsername1" placeholder="Showtime Film" name="release_date">
                                        @if($errors->has('release_date'))
                                        <div class="alert-back mt-2" role="alert">
                                            <p><i class="mdi mdi-alert-circle"> </i><strong>Remind!</strong>
                                                {{$errors->first('release_date')}}</p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Director</label>
                                        <input type="text" class="form-control {{($errors->has('name'))? 'error' : ''}}"
                                            id="exampleInputUsername1" placeholder="Director Name" name="director">
                                        @if($errors->has('director'))
                                        <div class="alert-back mt-2" role="alert">
                                            <p><i class="mdi mdi-alert-circle"> </i><strong>Remind!</strong>
                                                {{$errors->first('director')}}</p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Cast</label>
                                        <input type="text" class="form-control {{($errors->has('name'))? 'error' : ''}}"
                                            id="exampleInputUsername1" placeholder="Famous actors" name="cast">
                                        @if($errors->has('cast'))
                                        <div class="alert-back mt-2" role="alert">
                                            <p><i class="mdi mdi-alert-circle"> </i><strong>Remind!</strong>
                                                {{$errors->first('cast')}}</p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image Upload</label>
                                <div class="input-group col-xs-12">
                                    <input type="file"
                                        class="form-control file-upload-info {{($errors->has('name'))? 'error' : ''}}"
                                        placeholder="Upload Image" name="image">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-gradient-primary btn-icon-text">
                                            <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                                    </span>
                                </div>
                                @if($errors->has('image'))
                                <div class="alert-back mt-2" role="alert">
                                    <p><i class="mdi mdi-alert-circle"> </i><strong>Remind!</strong>
                                        {{$errors->first('image')}}</p>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Photos Upload</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info" placeholder="Upload Image"
                                        name="photos[]" multiple>
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-gradient-primary btn-icon-text">
                                            <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Trailer</label>
                                <div class="input-group col-xs-12">
                                    <input type="file"
                                        class="form-control file-upload-info {{($errors->has('name'))? 'error' : ''}}"
                                        placeholder="Link Trailer" name="trailer">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-gradient-primary btn-icon-text">
                                            <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                                    </span>
                                </div>
                                @if($errors->has('trailer'))
                                <div class="alert-back mt-2" role="alert">
                                    <p><i class="mdi mdi-alert-circle"> </i><strong>Remind!</strong>
                                        {{$errors->first('trailer')}}</p>
                                </div>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Cinema</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        @foreach($listCinema as $value)
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="cinema_id[]"
                                                        value="{{$value->id}}"> {{$value->name}}
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        @foreach($listCate as $value)
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="category_id[]"
                                                        value="{{$value->id}}"> {{$value->name}}
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Slug</label>
                                        <input type="text" class="form-control {{($errors->has('name'))? 'error' : ''}}"
                                            id="slug" placeholder="Slug" name="slug">
                                            @if($errors->has('slug'))
                                        <div class="alert-back mt-2" role="alert">
                                            <p><i class="mdi mdi-alert-circle"> </i><strong>Remind!</strong>
                                                {{$errors->first('slug')}}</p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Status</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="status"
                                                            id="membershipRadios1" value="1" checked=""> Coming soon <i
                                                            class="input-helper"></i><i
                                                            class="input-helper"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="status"
                                                            id="membershipRadios2" value="2"> Published <i
                                                            class="input-helper"></i><i
                                                            class="input-helper"></i></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Description</label>
                                <textarea class="form-control {{($errors->has('name'))? 'error' : ''}}"
                                    id="exampleTextarea1" rows="4" name="description" placeholder="Enter Desccription"
                                    name="description">{{old('description')}}</textarea>
                                @if($errors->has('description'))
                                <div class="alert-back mt-2" role="alert">
                                    <p><i class="mdi mdi-alert-circle"> </i><strong>Remind!</strong>
                                        {{$errors->first('description')}}</p>
                                </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
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

@section('script')
<script>
function ChangeToSlug() {
    var title, slug;

    //Lấy text từ thẻ input title 
    title = document.getElementById("title").value;

    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}
</script>
@stop