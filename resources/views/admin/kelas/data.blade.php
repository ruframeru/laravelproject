@extends('tampilan.master')

@section('isi')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <button type="submit" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#smallModal">button</button>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Wali Kelas</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Telpon</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($kelas as $k)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{ asset('tampilan/assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $k->nama_kelas }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h6 class="text-xs font-weight-bold mb-0">{{ $k->guru->nama_guru }}</h6>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <h6 class="badge badge-sm bg-gradient-success"></h6>
                    </td>
                    <td class="align-middle">
                      <a href="javascript:;" class="ni ni-ruler-pencil" data-toggle="tooltip" data-original-title="Edit user">
                        
                      </a>
                      <button type="submit" class="fa-sharp fa-light fa-trash"></button>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>

              <div class="modal fade" id="smallModal" tabindex="-1">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Small Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/Kelas/tambah" method="POST" autocomplete="off">
                        @csrf
                    <div class="modal-body">
                      <div class="mb-1"><label for="nilai" class="">Kelas</label></div>
                      <div class="">
                        <input type="text" class="form-control" name="nama_kelas">
                      </div>
                    </div>
                    <div class="modal-body">
                        <div class="mb-1"><label for="nilai" class="">Wali Kelas</label></div>
                        <select class="form-select" name="guru_id" aria-label="Default select example">
                            <option selected>Pilih Guru</option>
                            @foreach($walikelas as $guru)
                            <option value="{{$guru->id}}">{{$guru->nama_guru}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                    </div>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection