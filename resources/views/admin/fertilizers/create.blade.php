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
                        <h1 class="m-0">Добавление Удобрения</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Добавление Удобрения</li>
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


                    <form action="{{route('admin.fertilizers.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="form-group">
                            <label >Введите название yдобрения</label>
                            <input type="text" class="form-control" name="name" placeholder="Введите название yдобрения">
                            <label >Введите норму азот</label>
                            <input type="text" class="form-control" name="azot_norm" placeholder="Введите норму азот">
                        </div>
                        <div class="form-group">
                            <label >Введите норму фосфора</label>
                            <input type="text" class="form-control" name="phosphor_norm" placeholder="Введите норму фосфора">
                        </div>
                        <div class="form-group">
                            <label >Введите норму калия</label>
                            <input type="text" class="form-control" name="kali_norm" placeholder="Введите норму калия">
                        </div>
                        <div class="form-group">
                            <label >Введите группу культур</label>
                            <input type="text" class="form-control" name="culture_id" placeholder="Введите группу культур">
                        </div>
                        <div class="form-group">
                            <label >Введите район</label>
                            <input type="text" class="form-control" name="rigeon" placeholder="Введите район">
                        </div>
                        <div class="form-group">
                            <label >Введите цену</label>
                            <input type="text" class="form-control" name="price" placeholder="Введите цену">
                        </div>
                        <div class="form-group">
                            <label >Введите описание</label>
                            <input type="text" class="form-control" name="description" placeholder="Введите описание">
                        </div>
                        <div class="form-group">
                            <label >Введите назначение</label>
                            <input type="text" class="form-control" name="purpose" placeholder="Введите название назначения">
                        </div>

                        <input type="submit" class="btn btn-primary" value="Добавить">
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
