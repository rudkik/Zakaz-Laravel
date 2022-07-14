@extends('admin.layouts.app')


@section('title-page')
    Contacts New
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Создание Акции</h3>
        </div>
        <form action="{{ route('admin-category-create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Название</label>
                    <input name="title" id="title" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Картинка</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image_uri" name="image_uri" placeholder="">
                            <label class="custom-file-label" for="image_uri">Выбрать</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>

@endsection
