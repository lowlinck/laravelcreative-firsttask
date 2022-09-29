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
                        <h1 class="m-0">Редактирование удобрений</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Редактирование  категории</li>
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


                    <form action="{{route('admin.fertilizers.update', $fertilizer->id)}}" method="POST" class="w-25">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label >Введите название yдобрения</label>
                            <input type="text" class="form-control" name="name" value="{{$fertilizer->name}}">
                            <label >Введите норму азот</label>
                            <input type="text" class="form-control" name="azot_norm" value="{{$fertilizer->azot_norm}}">
                        </div>
                        <div class="form-group">
                            <label >Введите норму фосфора</label>
                            <input type="text" class="form-control" name="phosphor_norm" value="{{$fertilizer->phosphor_norm}}">
                        </div>
                        <div class="form-group">
                            <label >Введите норму калия</label>
                            <input type="text" class="form-control" name="kali_norm" value="{{$fertilizer->kali_norm}}">
                        </div>
                        <div class="form-group">
                            <label >Введите группу культур</label>
                            <input type="text" class="form-control" name="culture_id" value="{{$fertilizer->culture_id}}">
                        </div>
                        <div class="form-group">
                            <label >Введите район</label>
                            <input type="text" class="form-control" name="rigeon" value="{{$fertilizer->rigeon}}">
                        </div>
                        <div class="form-group">
                            <label >Введите цену</label>
                            <input type="text" class="form-control" name="price" value="{{$fertilizer->rigeon}}">
                        </div>
                        <div class="form-group">
                            <label >Введите описание</label>
                            <input type="text" class="form-control" name="description" value="{{$fertilizer->description}}">
                        </div>
                        <div class="form-group">
                            <label >Введите назначение</label>
                            <input type="text" class="form-control" name="purpose" value="{{$fertilizer->purpose}}">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Update">
                        @error('title')
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
