@extends('layout.template')

@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0 pb-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Data Mahasiswa</h4>
                    </div>
                    <div class="header-buttons">
                        <button class="btn btn-primary">Import</button>
                        <button class="btn btn-success">Export</button>
                    </div>
                 </div>
               <div class="card-body">
                  <div class="custom-datatable-entries">
                     <table id="datatable" class="table table-striped" data-toggle="data-table">
                        <thead>
                           <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>NIM</th>
                                <th>Jurusan</th>
                                <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>Edit | delete</td>
                            </tr>
                        </tbody>
                        <tfoot>
                           <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>NIM</th>
                                <th>Jurusan</th>
                                <th>Action</th>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </div>
         </div>
    </div>
</div>
@endsection