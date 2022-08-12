@extends('admin.layouts.app')


@section('title-page')
    Stock New
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Создание Акции</h3>
        </div>
        <form action="{{ route('admin-stock-create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Заголовок</label>
                    <input name="title" id="title" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Старая цена</label>
                    <input name="old_price"  id="old_price" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Новая цена</label>
                    <input name="new_price"  id="new_price" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="is_active">Активна</label>
                    <input class="" type="checkbox" value="1" id="is_active" name="is_active">
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
