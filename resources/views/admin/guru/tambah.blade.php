@extends('tampilan.master')


@section('isi')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
        <form action="/Guru" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nama Guru</label>
                  <input class="form-control" type="text" name="nama_guru">
                  <div class="text-danger text-sm">
                      @error('nama_guru')
                          {{ $message }}
                      @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                  <select class="form-select" name="jenkel" aria-label="Default select example">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  <div class="text-danger text-sm">
                    @error('jenkel')
                        {{ $message }}
                    @enderror
                </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nomor Telepon</label>
                  <input class="form-control" type="text" name="no_tlp_guru">
                    <div class="text-danger text-sm">
                        
                    </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Alamat</label>
                  <input class="form-control" type="text" name="alamat_guru">
                  <div class="text-danger text-sm">
                    @error('alamat_guru')
                        {{ $message }}
                    @enderror
                </div>
                </div>
              </div>
            </div>
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                  {{-- <p class="mb-0">Edit Profile</p> --}}
                  <button type="submit" class="btn btn-primary btn-sm ms-auto">Settings</button>
                </div>
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection