@extends('tampilan.master')

@section('judul', 'Guru')
@section('judul2', 'Data Table Guru')

@section('isi')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <a href="/Guru/tambah" class="">Tambah Guru</a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Kelamin</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($guru as $g)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{ asset('tampilan/assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $g->nama_guru }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h6 class="text-xs font-weight-bold mb-0">{{ $g->jenkel }}</h6>
                    </td>
                    {{-- <td class="align-middle text-center text-sm">
                      <h6 class="badge badge-sm bg-gradient-success">{{ $g->no_tlp_guru }}</h6>
                    </td> --}}
                    <td class="align-middle text-center">
                      <h6 class="text-secondary text-xs font-weight-bold">{{ $g->alamat_guru }}</h6>
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
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection


{{-- <table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No Telpon</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($guru as $g)
            <tr>
                <td>{{ $g->nama_guru }}</td>
                <td>{{ $g->jenkel }}</td>
                <td>{{ $g->no_tlp_guru }}</td>
                <td>{{ $g->alamat_guru }}</td>
            </tr>
        @endforeach
    </tbody>
</table> --}}