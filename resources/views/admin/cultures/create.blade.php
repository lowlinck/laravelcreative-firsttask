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
                        <h1 class="m-0">Добавление групп культур</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Добавление групп культур</li>
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


                    <form action="{{route('admin.cultures.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="form-group">
                            <label >Введите название культуры растений</label>
                            <input type="text" class="form-control" name="name" placeholder="Введите название культуры растений">
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
