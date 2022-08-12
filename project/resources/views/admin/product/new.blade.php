@extends('admin.layouts.app')


@section('title-page')
    Products New
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Создание товара/продукта</h3>
        </div>
        <form action="{{ route('admin-product-create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input name="title" id="title" type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Цена</label>
                            <input name="price"  id="price" type="text" class="form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="availability">Наличие</label>
                    <input class="" type="checkbox" value="1" id="availability" name="availability"></div>
                <div class="form-group">
                    <select name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <h1>Характеристики</h1>
                <div class="form-group">
                    <label>Обьем</label>
                    <input name="volume"  id="volume" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Материал</label>
                    <input name="material"  id="material" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Применимо для</label>
                    <input name="usebility"  id="usebility" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Размеры</label>
                    <input name="size"  id="size" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Вес</label>
                    <input name="weight"  id="weight" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Артикул</label>
                    <input name="article"  id="article" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Срок гарантии</label>
                    <input name="garenti_count"  id="garenti_count" type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Способ олпты</label>
                    <input name="payment"  id="payment" type="text" class="form-control" value="">
                </div>
                <h1>Отображение на страницах</h1>
                <div class="form-group">
                    <label class="form-check-label" for="is_active">Активна</label>
                    <input class="" type="checkbox" value="1" id="is_active" name="is_active">
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="is_new">Новое</label>
                    <input class="" type="checkbox" value="1" id="is_new" name="is_new">
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="is_popular">Популярное</label>
                    <input class="" type="checkbox" value="1" id="is_popular" name="is_popular">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Картинка</label>
                    <input type="file" class="" id="image_uri" name="image_uri[]" multiple placeholder="">
                </div>
            </div>
            <!-- /.card-body -->
            <script>
                // Get a reference to the file input element
                const inputElement = document.querySelector('input[type="file"]');

                // Create a FilePond instance
                const pond = FilePond.create(inputElement);
            </script>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>

@endsection
