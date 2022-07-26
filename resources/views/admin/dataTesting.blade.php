@extends('admin.layout')
@section('title','Data Klasifikasi | E-Sentiment Analysis' )
@section('content')

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Data Klasifikasi</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button> -->
                        </p>
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Opini</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($klasifikasi as $k)
                            <tr>
                                <td class="text-center">{{++$i}}</td>
                                <td>{{$k->tgl_waktu}}</td>
                                <td>{{ Str::limit($k->opini, 98) }}</td>
                                <td class="text-center">{{$k->category}}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$k->id}}">Edit</button>
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detail{{$k->id}}">Detail</button>
                                    <div style="float:right;">
                                    <form action="{{ route('data-klasifiaksi.destroy',$k->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>

<!-- Modal Edit -->
@foreach ($klasifikasi as $k)
<div class="modal fade" id="detail{{$k->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left input_mask" action="{{route('data-baru.update', $k->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Tanggal & Waktu</label>
                        <div class="col-md-10">
                            <input class="form-control" type="datetime-local" id="example-datetime-local-input" value="{{$k->tgl_waktu}}" name="tgl_waktu" readonly>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Opini</label>
                        <div class="col-md-10">
                            <textarea required="" class="form-control" rows="3" name="opini" readonly>{{$k->tweet}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Kategori</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-datetime-local-input" value="{{$k->category}}" name="category" readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
        