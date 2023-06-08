@extends('layouts.main')

@section('isi')

                   <!-- Begin Page Content -->
                <div class="container-fluid">
                {{-- Alert --}}
                @if(session()->has('Success'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('Success') }}
                    
                </div>
                @endif
                @if(session()->has('Konfirm'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('Konfirm') }}
                    
                </div>
                @endif
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tables</h6>
                        </div> 
                        <form action='/datauser/confirm/{id}' method="PUT">
                            
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Berat Plastik</th>
                                            <th>Berat Besi</th>
                                            <th>Berat Kaleng</th>
                                            <th>Alamat Penjemputan</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ts as $ts)
                                        <tr>
                                            <td>{{ $ts->id }}</td>
                                            <td>{{ $ts->nama }}</td>
                                            <td>{{ $ts->berat_plastik }}</td>
                                            <td>{{ $ts->berat_besi }}</td>
                                            <td>{{ $ts->berat_kaleng }}</td>
                                            <td>{{ $ts->alamat_penjemputan }}</td>
                                            <td>{{ $ts->total }}</td>
                                            <td>{{ $ts->status }}</td>
                                            <td><a class="text-success" href="{{url('delivered',$ts->id)}}">KONFIRMASI </a>|<a class="text-danger" href="{{url('delete',$ts->id)}}"> DELETE</a></td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
@endsection