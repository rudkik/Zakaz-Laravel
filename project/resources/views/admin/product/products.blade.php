@extends('admin.layouts.app')


@section('title-page')
    Contacts
@endsection

@section('content')
    <div class="row">
        <div class="col-ml-12">
            <ul id="tab-status" class="nav nav-tabs pull-right ui-sortable-handle">
                <li class="pull-left header">
                    <a href="{{ route('admin-product-new') }}" class="btn bg-purple btn-flat pull-left margin-r-5">
                        <i class="fa fa-fw fa-plus"></i>
                        Добавить продукт
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Акции</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Заголовок</th>
                            <th>Цена</th>
                            <th>Наличие</th>
                            <th>Категория</th>
                            <th>Картинка</th>
                            <th class="tr-header-buttom" style="width: 100px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->new_string }}</td>
                                <td>{{ $product->availability }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td> <img src="{{ Storage::url($product->image_uri) }}" alt=""></td>
                                <td>
                                    <ul class="list-inline d-inline-flex">
                                        <li><a href="{{ route('admin-product-update', ['id' => $product->id ]) }}" class="btn btn-block btn-primary"><i class="fa fa-edit margin-r-5"></i> Изменить</a></li>
                                        <li class="tr-remove"><a href="{{ route('admin-product-delete', ['id' => $product->id ]) }}" class="btn btn-block btn-danger"><i class="fa fa-remove margin-r-5"></i> Удалить</a></li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>



@endsection
