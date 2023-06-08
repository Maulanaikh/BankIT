@extends('layouts.main')

@section('isi')
<!-- buat card tukar sampah -->
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-7">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5">
              <div class="mb-md-5 mt-md-4 pb-8">
                <div>
                <h2 class="fw-bold mb-2 text-center" style="font-size: 35px" id="scrollspyHeading2">Jenis sampah yang akan dikirim</h2>
                <p class="text-center" style="font-size: 20px">Isi data berikut sesuai jenis sampah yang akan dikirim</p>
                <br>
                
                <form action="/TSstore" method="POST">
                  @csrf
                  {{-- <label class="form-label">Nama</label>
                  <div class="input-group mb-3">
                  <input type="text" name="nama" value={{ auth()->user()->name }}
                  class="form-control form-control-lg">
                  </div>
                  <br> --}}

                  <label class="form-label">Berat Plastik ( Rp.500/Kg )</label>
                  <div class="input-group mb-3">
                  <input type="number" name="berat_plastik" value="0"
                  class="form-control form-control-lg">
                  <span class="input-group-text">Kg</span>
                  </div>
                  <br>
                  <label class="form-label">Berat Besi ( Rp.1000/Kg )</label>
                  <div class="input-group mb-3">
                  <input type="number" name="berat_besi" value="0"
                  class="form-control form-control-lg">
                  <span class="input-group-text">Kg</span>
                  </div>
                  <br>
                  <label class="form-label">Berat Kaleng ( Rp.500/Kg )</label>
                  <div class="input-group mb-3">
                  <input type="number" name="berat_kaleng" value="0"
                  class="form-control form-control-lg">
                  <span class="input-group-text">Kg</span>
                </div>
                  <br>
                  <label class="form-label">Alamat Penjemputan</label>
                  <input type="text" name="alamat_penjemputan"
                  placeholder="Alamat" class="form-control form-control-lg">
                  <br>
                  <br>
                  {{-- <input type="submit" name="submit" value="Send" class="form-control form-control-lg"> --}}



                  <div class=" text-center">
                    <button type="button" class="btn btn-outline-light btn-light btn-lg px-5 text-dark" data-bs-toggle="modal" data-bs-target="#CSModal">
                    Kirim
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="CSModal" tabindex="-1" aria-labelledby="CSModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title text-dark" id="CSModal">Pesan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-dark" style="font-size: 20px">
                            <p>Penukaran sampah akan segera diproses.</p>
                        </div>
                        <div class="modal-footer">
                        <input type="submit" name="submit" value="Ok" class="form-control form-control-lg text-decoration-none text-dark bg-success">
                        </div>
                    </div>
                    </div>
                </div>
 
                  {{-- <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeAlamat">Alamat Penjemputan :</label>
                  <input type="alamat" id="typeAlamat" class="form-control form-control-lg"/>
                <br>
                <div class="text-center">
                    <button class="btn btn-outline-light btn-light btn-lg px-5" type="submit"> <a href="http://127.0.0.1:8000/TukarSampah/Pengiriman" class="text-decoration-none text-light text-dark">Selanjutnya</a></button>
                </div> --}}
                </form>
              </div>          
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection