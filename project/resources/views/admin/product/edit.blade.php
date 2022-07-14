@extends('admin.layouts.app')


@section('title-page')
    Contacts
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Изменение Акции</h3>
        </div>
        <form action="{{ route('admin-product-submit', $stock->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Заголовок</label>
                    <input name="title" id="title" type="text" class="form-control" value="{{ $stock->title }}">
                </div>
                <div class="form-group">
                    <label>Старая цена</label>
                    <input name="old_price"  id="old_price" type="text" class="form-control" value="{{ $stock->old_price }}">
                </div>
                <div class="form-group">
                    <label>Новая цена</label>
                    <input name="new_price"  id="new_price" type="text" class="form-control" value="{{ $stock->new_price }}">
                </div>
                <div class="form-group">
                    <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" <?= ($stock->is_active > 0) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="is_active">Активна</label>
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
