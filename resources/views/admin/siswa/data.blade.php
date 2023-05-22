@extends('tampilan.master')

@section('judul', 'Siswa')
@section('judul2', 'Data Table Siswa')

@section('isi')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            {{-- <a href="/Guru/tambah" class="">Tambah Guru</a> --}}
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIS</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Telpon</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($datasiswa as $siswa)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{ asset('tampilan/assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $siswa->name }}</h6>
                          <p class="text-xs text-secondary mb-0">{{ $siswa->email }}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h6 class="text-xs font-weight-bold mb-0">{{ $siswa->nis }}</h6>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <h6 class="badge badge-sm bg-gradient-success">{{ $siswa->gender }}</h6>
                    </td>
                    <td>
                        <h6 class="badge badge-sm bg-gradient-success">{{ $siswa->gender }}</h6>
                    </td>
                    <td>
                        <a href="/Siswa/{{$siswa->id}}/edit" class="">Ubah</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection