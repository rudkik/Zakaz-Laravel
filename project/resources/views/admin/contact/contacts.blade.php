@extends('layouts.app')


@section('title-page')
    Contacts
@endsection

@section('content')
    <main class="page page-contacts">
        <div class="container">
            <ul id="tab-status" class="nav nav-tabs pull-right ui-sortable-handle">
                <li class="pull-left header">
                    <a href="{{ route('admin-contacts-new') }}" class="btn bg-purple btn-flat pull-left margin-r-5">
                        <i class="fa fa-fw fa-plus"></i>
                        Добавить контакт
                    </a>
                </li>
            </ul>
            <table class="table table-hover table-db table-tr-line">
                <tr>
                    <th>Заголовок</th>
                    <th>Адрес</th>
                    <th>Телефон</th>
                    <th>E-mail</th>
                    <th class="tr-header-buttom"></th>
                </tr>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->title }}</td>
                    <td>{{ $contact->adres }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                        <ul class="list-inline tr-button delete">
                            <li><a href="{{ route('admin-contact-update', ['id' => $contact->id ]) }}" class="link-blue"><i class="fa fa-edit margin-r-5"></i> Изменить</a></li>
                            <li class="tr-remove"><a href="{{ route('admin-contact-delete', ['id' => $contact->id ]) }}" class="link-red text-sm"><i class="fa fa-remove margin-r-5"></i> Удалить</a></li>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>


@endsection
