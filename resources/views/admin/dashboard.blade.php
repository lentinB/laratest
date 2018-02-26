@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="jumbotron">
                    <span class="label label-primary">Категорий 0</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron">
                    <span class="label label-primary">Материалов 0</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron">
                    <span class="label label-primary">Посетителей 0</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron">
                    <span class="label label-primary">Посетителей сегодня 0</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-block btn-default" href="#">Создать категорию</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Категория первая</h4>
                    <p class="list-group-item-text">Количество материалов</p>
                </a>
            </div>
            <div class="col-md-6">
                <a class="btn btn-block btn-default" href="#">Создать материал</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Категория вторая</h4>
                    <p class="list-group-item-text">Последний добавленый материал</p>
                </a>
            </div>
        </div>
    </div>

@endsection