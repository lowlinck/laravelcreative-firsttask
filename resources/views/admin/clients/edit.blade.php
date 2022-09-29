@extends('admin.layouts.app')
@section('content')
    @include('admin.include.asside')
    @include('admin.include.header')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Редактирование </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">


                    <form action="{{route('admin.clients.update', $client->id)}}" method="POST" class="w-25">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label >Введите название организации</label>
                            <input type="text" class="form-control" name="name" value="{{$client->name}}">
                        </div>
                        <div class="form-group">
                            <label >Введите дату договора</label>
                            <input type="text" class="form-control" name="data" value="{{$client->data}}">
                        </div>
                        <div class="form-group">
                            <label>Стоимость поставки</label>
                            <input type="text" class="form-control" name="delivery_cost" value="{{$client->delivery_cost}}">
                        </div>
                        <div class="form-group">
                            <label>Регион</label>
                            <input type="text" class="form-control" name="region" value="{{$client->region}}">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Update">
                        @error('name')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </form>
                    </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.layouts.footer')



    <!-- /.control-sidebar -->
</div>
@endsection
