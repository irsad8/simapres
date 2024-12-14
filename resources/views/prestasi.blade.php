@extends('layout.template')

@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0 pb-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Data Laporan Prestasi</h4>
                    </div>
                    <div class="header-buttons">
                        @if (auth()->user()->role == 'admin')
                            <button class="btn btn-info">Export Laporan</button>
                        @endif
                        @if (auth()->user()->role == 'mahasiswa')
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_modal">Tambah Prestasi</button>
                        @endif
                    </div>
                 </div>
               <div class="card-body">
                  <div class="custom-datatable-entries">
                     <table id="datatable" class="table table-striped" data-toggle="data-table">
                        <thead>
                           <tr>
                                <th>No</th>
                                <th>Mahasiswa</th>
                                <th>Kategori</th>
                                <th>Pelaksanaan</th>
                                <th>Peserta > 10PT</th>
                                <th>Nama Kegiatan</th>
                                <th>Jumlah Peserta</th>
                                <th>Capaian</th>
                                <th>Mulai Pelaksanaan</th>
                                <th>Selesai Pelaksanaan</th>
                                <th>Sertifikat</th>
                                <th>Link Penyelenggaraan</th>
                                <th>Foto Penyerahan</th>
                                <th>Surat Tugas mhs</th>
                                <th>Dosbim</th>
                                <th>Surat Tugas dosbim</th>
                                <th>status</th>
                                {!! (auth()->user()->role == 'dosen' || auth()->user()->role == 'mahasiswa') ? '<th>Action</th>' : '' !!}
                           </tr>
                        </thead>
                        <tbody>
                            @forelse ($prestasi as $key => $item)
                                <tr>
                                    <td>bambang</td>
                                    <td>budiarto</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    @if (auth()->user()->role == 'dosen')
                                    <td>
                                        <a class="btn btn-sm btn-icon btn-warning" data-bs-toggle="modal" data-bs-target="#form_modal" href="#">
                                            <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V10C2 6.22876 2 4.34315 3.17157 3.17157C4.34315 2 6.23869 2 10.0298 2C10.6358 2 11.1214 2 11.53 2.01666C11.5166 2.09659 11.5095 2.17813 11.5092 2.26057L11.5 5.09497C11.4999 6.19207 11.4998 7.16164 11.6049 7.94316C11.7188 8.79028 11.9803 9.63726 12.6716 10.3285C13.3628 11.0198 14.2098 11.2813 15.0569 11.3952C15.8385 11.5003 16.808 11.5002 17.9051 11.5001L18 11.5001H21.9574C22 12.0344 22 12.6901 22 13.5629V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22Z" fill="#1C274C"/>
                                                <path d="M10.5606 15.4983C10.8358 15.1887 10.8079 14.7146 10.4983 14.4395C10.1887 14.1643 9.71464 14.1921 9.43945 14.5017L7.33334 16.8711L6.56056 16.0017C6.28538 15.6921 5.81132 15.6643 5.50174 15.9395C5.19215 16.2146 5.16426 16.6887 5.43945 16.9983L6.77278 18.4983C6.91511 18.6584 7.11911 18.75 7.33334 18.75C7.54757 18.75 7.75157 18.6584 7.8939 18.4983L10.5606 15.4983Z" fill="#1C274C"/>
                                                <path d="M11.5092 2.2601L11.5 5.0945C11.4999 6.1916 11.4998 7.16117 11.6049 7.94269C11.7188 8.78981 11.9803 9.6368 12.6716 10.3281C13.3629 11.0193 14.2098 11.2808 15.057 11.3947C15.8385 11.4998 16.808 11.4997 17.9051 11.4996L21.9574 11.4996C21.9698 11.6552 21.9786 11.821 21.9848 11.9995H22C22 11.732 22 11.5983 21.9901 11.4408C21.9335 10.5463 21.5617 9.52125 21.0315 8.79853C20.9382 8.6713 20.8743 8.59493 20.7467 8.44218C19.9542 7.49359 18.911 6.31193 18 5.49953C17.1892 4.77645 16.0787 3.98536 15.1101 3.3385C14.2781 2.78275 13.862 2.50487 13.2915 2.29834C13.1403 2.24359 12.9408 2.18311 12.7846 2.14466C12.4006 2.05013 12.0268 2.01725 11.5 2.00586L11.5092 2.2601Z" fill="#1C274C"/>
                                            </svg>
                                            </span>
                                        </a>
                                    </td>    
                                    @endif
                                    @if (auth()->user()->role == 'mahasiswa')
                                    <td>
                                        <a class="btn btn-sm btn-icon btn-danger" href="#" onclick="if(confirm('apakah anda yakin ingin menghapus data ini?')){document.getElementById('delete-{{$item->id}}').submit()}">
                                            <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            </span>
                                        </a>
                                        <form action="" method="post" id="delete-{{ $item->id }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                            @empty
                                <p>data tidak ada</p>
                            @endforelse
                        </tbody>
                        <tfoot>
                           <tr>
                                <th>No</th>
                                <th>Mahasiswa</th>
                                <th>Kategori</th>
                                <th>Pelaksanaan</th>
                                <th>Peserta > 10PT</th>
                                <th>Nama Kegiatan</th>
                                <th>Jumlah Peserta</th>
                                <th>Capaian</th>
                                <th>Mulai Pelaksanaan</th>
                                <th>Selesai Pelaksanaan</th>
                                <th>Sertifikat</th>
                                <th>Link Penyelenggaraan</th>
                                <th>Foto Penyerahan</th>
                                <th>Surat Tugas mhs</th>
                                <th>Dosbim</th>
                                <th>Surat Tugas dosbim</th>
                                <th>status</th>
                                {!! (auth()->user()->role == 'dosen' || auth()->user()->role == 'mahasiswa') ? '<th>Action</th>' : '' !!}
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </div>
         </div>
    </div>
</div>

<!-- modal form -->
@if (auth()->user()->role == 'mahasiswa')
    <div class="modal fade" id="form_modal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="form modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content mdl-primary" style="overflow: scroll">
                <form action="{{ url('prestasi') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-label">tambah laporan prestasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="from-group col-md-4 mb-3">
                                <b><label for="kategori">kategori lomba</label></b>
                                <select class="form-select" id="kategori" name="kategori" required>
                                    <option disabled selected>Pilih kategori</option>
                                    <option value="provinsi">provinsi</option>
                                    <option value="nasional">nasional</option>
                                    <option value="internasional">internasional</option>
                                </select>
                            </div>
                            <div class="from-group col-md-4 mb-3">
                                <b><label for="pelaksanaan">pelaksanaan lomba</label></b>
                                <select class="form-select" id="pelaksanaan" name="pelaksanaan" required>
                                    <option disabled selected>Pilih pelaksanaan</option>
                                    <option value="daring">daring</option>
                                    <option value="luring">luring</option>
                                </select>
                            </div>
                            <div class="from-group col-md-4 mb-3">
                                <b><label for="diatas_10PT">Peserta Perguruan Tinggi</label></b>
                                <select class="form-select" id="diatas_10PT" name="diatas_10PT" required>
                                    <option disabled selected>Pilih jumlah PT</option>
                                    <option value="true">lebih dari 10 PT</option>
                                    <option value="false">kurang/sama 10 PT</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="from-group col-md-10 mb-3">
                                <b><label for="nama_kegiatan">nama kegiatan</label></b>
                                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="nama kegiatan">
                            </div>
                        </div>
                        <div class="row">
                            <div class="from-group col-md-4 mb-3">
                                <b><label for="jumlah_peserta">jumlah peserta</label></b>
                                <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" placeholder="jumlah peserta">
                            </div>
                            <div class="from-group col-md-4 mb-3">
                                <b><label for="capaian">capaian lomba</label></b>
                                <select class="form-select" id="capaian" name="capaian" required>
                                    <option disabled selected>Pilih capaian</option>
                                    <option value="juara 1">juara 1</option>
                                    <option value="juara 2">juara 2</option>
                                    <option value="juara 3">juara 3</option>
                                    <option value="harapan 1">harapan 1</option>
                                    <option value="harapan 2">harapan 2</option>
                                    <option value="harapan 3">harapan 3</option>
                                    <option value="peserta">peserta</option>
                                </select>
                            </div>
                            <div class="from-group col-sm-6 col-md-2 mb-3">
                                <b><label for="mulai_pelaksanaan">tgl mulai</label></b>
                                <input type="date" class="form-control" id="mulai_pelaksanaan" name="mulai_pelaksanaan" placeholder="mulai pelaksanaan">
                            </div>
                            <div class="from-group col-sm-6 col-md-2 mb-3">
                                <b><label for="selesai_pelaksanaan">tgl selesai</label></b>
                                <input type="date" class="form-control" id="selesai_pelaksanaan" name="selesai_pelaksanaan" placeholder="selesai pelaksanaan">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <b><label for="link_sertifikat">link sertifikat</label></b>
                                <input type="text" class="form-control" id="link_sertifikat" name="link_sertifikat" placeholder="drive sertifikat">
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <b><label for="link_penyelenggara">link penyelenggara</label></b>
                                <input type="text" class="form-control" id="link_penyelenggara" name="link_penyelenggara" placeholder="link penyelenggara">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <b><label for="foto_penyerahan">foto penyerahan</label></b>
                                <input type="text" class="form-control" id="foto_penyerahan" name="foto_penyerahan" placeholder="drive foto penyerahan">
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <b><label for="surat_tugas_mhs">surat tugas mahasiswa</label></b>
                                <input type="text" class="form-control" id="surat_tugas_mhs" name="surat_tugas_mhs" placeholder="drive surat tugas MHS">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <b><label for="dosen_pendamping">dosen pendamping</label></b>
                                <select class="form-select" id="dosen_pendamping" name="dosen_id">
                                    <option disabled selected>dosen pendamping</option>
                                    @foreach ($dosen as $i)
                                        <option value="{{$i->user_id}}">{{$i->account->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group col-md-6 mb-3">
                                <b><label for="surat_tugas_dosen">surat tugas dosen pendamping</label></b>
                                <input type="text" class="form-control" id="surat_tugas_dosen" name="surat_tugas_dosen" placeholder="drive surat tugas dosbim">
                            </div> --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

<!-- end modal form -->

@push('script')
    {{-- <script>
        function clearForm() {

        }

        function editForm(url, prestasi) {

        }
    </script> --}}
@endpush

@endsection