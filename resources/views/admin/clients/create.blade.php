@extends('admin.layouts.app')
@section('content')
@include('admin.include.header')
    @include('admin.include.asside')



    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление клиентов</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Добавление клиентов</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{route('admin.clients.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="form-group">
                            <label >Введите название организации</label>
                            <input type="text" class="form-control" name="name" placeholder="Введите название организации">
                        </div>
                        <div class="form-group">
                            <label >Введите дату договора</label>
                            <input type="text" class="form-control" name="data" placeholder="Введите дату договора">
                        </div>
                        <div class="form-group">
                            <label>Стоимость поставки</label>
                            <input type="text" class="form-control" name="delivery_cost" placeholder="Стоимость поставки">
                        </div>
                        <div class="form-group">
                            <label>Регион</label>
                            <input type="text" class="form-control" name="region" placeholder="Регион">
                        </div>

                        <input type="submit" class="btn btn-primary" value="Добавить">
                        @error('title')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </form>
                    </div>
            </div>
        </section>
    </div>
    @include('admin.layouts.footer')
</div>
@endsection
