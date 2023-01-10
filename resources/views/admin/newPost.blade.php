@extends('admin.layout.main')

@section('content')
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>ایجاد پست</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span>
                            </button>
                            {{Session::get('success')}}
                        </div>
                    @elseif(Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span>
                            </button>
                            {{Session::get('error')}}
                        </div>
                    @endif
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <form action="{{ route('newPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input type="text" id="title" name="title" class="form-control" placeholder="عنوان مطلب" required="" oninvalid="this.setCustomValidity('لطفاً عنوان پست را وارد کنید')" oninput="this.setCustomValidity('')"/>
                            @if ($errors->has('title'))
                                <h5><span class="text-danger">{{$errors->first('title')}}</span></h5>
                            @endif
                        </div>
                        <br>
                        <div>
                            <textarea id="mymce" name="content" class="form-control" placeholder="نام نقش" required="" oninvalid="this.setCustomValidity('لطفاً عنوان پست را وارد کنید')" oninput="this.setCustomValidity('')"></textarea>
                            @if ($errors->has('content'))
                                <h5><span class="text-danger">{{$errors->first('content')}}</span></h5>
                            @endif
                        </div>
                        <br>
                        <div>
                            <label>
                                تصویر شاخص
                                <input type="file" id="thumbnail input-file-now" name="thumbnail" class="dropify" data-allowed-file-extensions="jpg jpeg"/>
                            </label>
                            @if ($errors->has('thumbnail'))
                                <h5><span class="text-danger">{{$errors->first('thumbnail')}}</span></h5>
                            @endif
                        </div>
                        <br>
                        <div>
                            <label>
                                <input type="checkbox" name="enable"/> انتشار
                            </label>
                        </div>
                        <br>

                        <div>
                            <button class="btn btn-default submit" type="submit">ذخیره</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /page content -->
<script>
    $(document).ready(function() {
    // Basic
    $('.dropify').dropify({
        messages: {
            default: 'فایل مورد نظر را بکشید و اینجا رها کنید یا کلیک کنید',
            replace: 'برای جایگزین کردن این فایل، فایل جدید را بکشید و اینجا رها کنید یا کلیک کنید',
            remove: 'حذف',
            error: 'خطا',
        }
    });
    });

    if ($("#mymce").length > 0) {
        tinymce.init({
            selector: "textarea#mymce",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | ltr rtl | print preview media fullpage | forecolor backcolor emoticons",

        });
    }
</script>
</div>
</div>
@stop


