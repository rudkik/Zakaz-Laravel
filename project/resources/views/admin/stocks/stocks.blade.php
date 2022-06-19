@extends('layouts.app')


@section('title-page')
    Contacts
@endsection

@section('content')
    <main class="page page-contacts">
        <div class="container">
            <ul id="tab-status" class="nav nav-tabs pull-right ui-sortable-handle">
                <li class="pull-left header">
                    <a href="{{ route('admin-stock-new') }}" class="btn bg-purple btn-flat pull-left margin-r-5">
                        <i class="fa fa-fw fa-plus"></i>
                        Добавить контакт
                    </a>
                </li>
            </ul>
            <table class="table table-hover table-db table-tr-line">
                <tr>
                    <th>Заголовок</th>
                    <th>Старая цена</th>
                    <th>Новая цена</th>
                    <th>Активно</th>
                    <th class="tr-header-buttom"></th>
                </tr>
                @foreach($stocks as $stock)
                <tr>
                    <td>{{ $stock->title }}</td>
                    <td>{{ $stock->old_price }}</td>
                    <td>{{ $stock->new_price }}</td>
                    <td>{{ $stock->is_active }}</td>
                    <td>
                        <ul class="list-inline tr-button delete">
                            <li><a href="{{ route('admin-stock-update', ['id' => $stock->id ]) }}" class="link-blue"><i class="fa fa-edit margin-r-5"></i> Изменить</a></li>
                            <li class="tr-remove"><a href="{{ route('admin-stock-delete', ['id' => $stock->id ]) }}" class="link-red text-sm"><i class="fa fa-remove margin-r-5"></i> Удалить</a></li>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>


@endsection
