@extends('admin.layouts.app', [
    'activePage' => 'setting',
  ])

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Data Transaksi</h3>
                  <h6 class="font-weight-normal mb-0">Data Barang Masuk</h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <a href="/" target="_blank">
                    <button type="button" class="btn btn-outline-primary btn-md"><i class="ti-home mr-2"></i> Visit Homepage</button>
                  </a>
                 </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h3><i class="ti-pencil"></i> Edit Data barang</h3>
                    <a href="/admin/barang_masuk">
                      <button type="button" class="btn btn-inverse-info btn-rounded btn-sm"><i class="ti-arrow-left mr-1"></i> Back</button>
                    </a>
                  </div>
                  <hr>
                  <form class="forms-sample" action="/admin/barang_masuk/update/{{$barang_masuk->id}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                   
                    <div class="form-group">
                        <label>Barang</label>
                        <select required name="id_barang" class="js-example-basic-single w-100">
                          <option value="{{$barang->id}}">{{$barang->nama}}-</option>
                          @foreach($barangAll as $data)
                          <option value="{{$data->id}}">{{$data->nama}}</option>
                          @endforeach
                        </select>
                      </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Tanggal</label>
                      <input type="date" autofocus required class="form-control" name="tanggal" value="{{$barang_masuk->tanggal}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Jumlah</label>
                      <input type="text" autofocus required class="form-control" name="jumlah" placeholder="Masukan Jumlah Barang..." value="{{$barang_masuk->jumlah}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Keterangan</label>
                      <input type="text" autofocus required class="form-control" name="keterangan" placeholder="Masukan Jumlah Barang..." value="{{$barang_masuk->keterangan}}">
                    </div>

                    <button type="submit" class="btn btn-primary mt-1 mr-2"><i class="mdi mdi-content-save-all"></i> Update Data</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
@endsection
