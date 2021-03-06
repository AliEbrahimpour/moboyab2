@extends('layouts.admin_panel')

@section('script')
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'description' );
        CKEDITOR.replace( 'body' );
    </script>
@endsection

@section('body')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2 style="margin-top: 10px;">ایجاد محتوا</h2>
        </div>
        <form class="form-horizontal" action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="title" class="control-label">عنوان مقاله</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="عنوان را وارد کنید" value="{{ old('title') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="description" class="control-label">توضیحات کوتاه</label>
                    <textarea rows="5" class="form-control" name="description" id="description" placeholder="توضیحات را وارد کنید">{{ old('description') }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="body" class="control-label">متن</label>
                    <textarea rows="5" class="form-control" name="body" id="body" placeholder="متن مقاله را وارد کنید">{{ old('body') }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="images" class="control-label">تصویر مقاله</label>
                    <input type="file" class="form-control" name="images" id="images" placeholder="تصویر مقاله را وارد کنید">
                </div>
                {{--<div class="col-sm-6">--}}
                    {{--<label for="tags" class="control-label">تگ ها</label>--}}
                    {{--<input type="text" class="form-control" name="tags" id="tags" placeholder="تگ ها را وارد کنید" value="{{ old('tags') }}">--}}
                {{--</div>--}}
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success">ارسال</button>
                    <button type="reset" class="btn btn-danger">بازیابی</button>
                </div>
            </div>
        </form>
    </div>
@endsection