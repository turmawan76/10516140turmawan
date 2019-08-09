@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <br><div class="card-header">Dashboard</div><br>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <br><br><center><b>DAGANGAN PALSU</b><br><br><br>
                       <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kode</th>
                                 <th>Nama Barang</th>
                                <th>Kondisi Barang</th>
                                <th>Harga Barang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>001</td>
                                <td>Motor Vario</td>
                                <td>Baru</td>
                                <td>Rp.23.000.000</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>002</td>
                                <td>Motor CB150R</td>
                                <td>Baru</td>
                                <td>Rp.27.000.000</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>023</td>
                                <td>Motor MIO/td>
                                    <td>Second</td>
                                    <td>Rp.20.000.000</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>4</td>
                                    <td>234</td>
                                    <td>Terigu</td>
                                    <td>Baru</td>
                                    <td>Rp.2.000.000</td>
                                </tr>
                            </tbody>
                        </table>

                        @push('scripts')
                        <script>
                            $(function() {
                                $('#users-table').DataTable();
                            });
                        </script>
                        @endpush

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

