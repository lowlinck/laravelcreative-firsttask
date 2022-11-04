@extends('admin.layouts.app')
@section('content')
    @include('admin.include.header')

    @include('admin.include.asside')
    <!-- Modal -->

                @include('admin.include.filter')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">


                        <h1 class="m-0">Удобрения</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Удобрения</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-1">
                        <a href="{{route('admin.fertilizers.create')}}" class="btn btn-block btn-primary btn-lg">Добавить</a>
                    </div>
                    <div class="col-1">
                        <a href="{{route('admin.trash')}}" class="btn btn-block btn-primary btn-lg">Удаленные</a>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center">Опрерации с категориями</h3>
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
                                    @foreach($fertilizers as $fertilizer)
                                    <tr>


                                        <td>{{$fertilizer->id}}</td>
                                        <td>{{$fertilizer->name}}</td>
                                        <td>{{$fertilizer->azot_norm}}</td>
                                        <td>{{$fertilizer->phosphor_norm}}</td>
                                        <td>{{$fertilizer->kali_norm}}</td>

                                        <td>{{$fertilizer->culture->name}}</td>

                                        <td>{{$fertilizer->rigeon}}</td>
                                        <td>{{$fertilizer->price}}</td>
                                        <td>{{$fertilizer->description}}</td>
                                        <td>{{$fertilizer->purpose}}</td>

                                        <td><a href="{{route('admin.fertilizers.show',$fertilizer->id)}}"><i class="fa-solid fa-eye"></i></a></td>
                                        <td><a href="{{route('admin.fertilizers.edit',$fertilizer->id)}}"><i class="fas fa-pencil-alt"></i></a></td>
                                        <td>
                                            <form  method="POST" action="{{route('admin.fertilizers.delete',$fertilizer->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fas fa-solid fa-trash text-danger" role="button"></i>
                                                </button>

                                            </form>

                                        </td>



                                    </tr>
                                    @endforeach

                                </table>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    </div>
                {{ $fertilizers->withQueryString()->links() }}
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.layouts.footer')



    <!-- /.control-sidebar -->
</div>
@endsection
