@extends('admin.layouts.app')
@section('content')
    @include('admin.include.header')
    @include('admin.include.asside')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-red text-bold ">Удаленные строки</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Уаленные</li>
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
                <div class="row ">


                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Опрерации с удаленными строками</h3>
                            </div>
                            <div class=" card-body table-responsive ">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Norm Azot</th>
                                        <th>Norm Phosphor</th>
                                        <th>Norm kali</th>
                                        <th>Culture</th>
                                        <th>Region</th>
                                        <th>Price</th>
                                        <th>Desctiption</th>
                                        <th>Purpose</th>

                                        <th>Show</th>
                                        <th>Action</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($trashs as $trash)
                                    <tr>
                                        <td>{{$trash->id}}</td>
                                        <td>{{$trash->name}}</td>
                                        <td>{{$trash->azot_norm}}</td>
                                        <td>{{$trash->phosphor_norm}}</td>
                                        <td>{{$trash->kali_norm}}</td>
                                        <td>{{$trash->culture_id}}</td>
                                        <td>{{$trash->rigeon}}</td>
                                        <td>{{$trash->price}}</td>
                                        <td>{{$trash->description}}</td>
                                        <td>{{$trash->purpose}}</td>




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

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.layouts.footer')



    <!-- /.control-sidebar -->
</div>
@endsection
