@extends('admin.layout')
@section('title','Data Training | E-Sentiment Analysis' )
@section('content')

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Data Baru</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
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
                            @foreach($new as $news)
                            <tr>
                                <td class="text-center">{{++$i}}</td>
                                <td>{{$news->tgl_waktu}}</td>
                                <td>{{ Str::limit($news->opini, 98) }}</td>
                                <td class="text-center">{{$news->predict_categorie}}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$news->id}}">Edit</button>
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detail{{$news->id}}">Detail</button>
                                    <div style="float:right;">
                                    <form action="{{ route('data-baru.destroy',$news->id) }}" method="POST">
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

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <!-- </div> -->
            <div class="modal-body">
                <form class="form-horizontal form-label-left input_mask" action="{{route('data-baru.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Tanggal & Waktu</label>
                        <div class="col-md-10">
                            <input class="form-control" type="datetime-local" id="example-datetime-local-input" name="tgl_waktu">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Opini</label>
                        <div class="col-md-10">
                            <textarea required="" class="form-control" rows="3" name="opini"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Prediksi Kategori</label>
                        <div class="col-md-10">
                            <select class="form-select" name="predict_categorie">
                                <option>- Pilih Prediksi Emosi -</option>
                                <option>Happiness</option>
                                <option>Sadness</option>
                                <option>Anger</option>
                                <option>Fear</option>
                                <option>Disgust</option>
                            </select>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3" align="right">
                            <button type="button" class="btn btn-primary" aria-label="Close" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-dark" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
@foreach ($new as $news)
<div class="modal fade" id="edit{{$news->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left input_mask" action="{{route('data-baru.update', $news->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Tanggal & Waktu</label>
                        <div class="col-md-10">
                            <input class="form-control" type="datetime-local" id="example-datetime-local-input" value="{{$news->tgl_waktu}}" name="tgl_waktu">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Opini</label>
                        <div class="col-md-10">
                            <textarea required="" class="form-control" rows="3" name="opini">{{$news->opini}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Prediksi Kategori</label>
                        <div class="col-md-10">
                            <select class="form-select" name="predict_categorie">
                                <option>{{$news->predict_categorie}}</option>
                                <option>Happiness</option>
                                <option>Sadness</option>
                                <option>Anger</option>
                                <option>Fear</option>
                                <option>Disgust</option>
                            </select>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3" align="right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-dark" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Modal Edit -->
@foreach ($new as $news)
<div class="modal fade" id="detail{{$news->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left input_mask" action="{{route('data-baru.update', $news->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Tanggal & Waktu</label>
                        <div class="col-md-10">
                            <input class="form-control" type="datetime-local" id="example-datetime-local-input" value="{{$news->tgl_waktu}}" name="tgl_waktu" readonly>
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Opini</label>
                        <div class="col-md-10">
                            <textarea required="" class="form-control" rows="3" name="opini" readonly>{{$news->opini}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Prediksi Kategori</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-datetime-local-input" value="{{$news->predict_categorie}}" name="predict_categorie" readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
        