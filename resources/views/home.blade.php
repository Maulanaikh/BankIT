@extends('layouts.main')

@section('isi')
    {{-- Content Miptah --}}
        <nav id="navbar-example2" class="navbar bg-light px-3 mb-3">
            <ul class="nav nav-pills">
                <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading1">Tentang Kami</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading2">Cara Kontribusi </a>
                </li>

            </ul>
        </nav>

        <h1 class="judul text-center text-light">Welcome To BankIT</h1>
        
        <!-- bar scroll -->
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">
            
            <div class="bg-w4c-white-1 shadow-w4c-smooth-jumbotron text-center font-nunito flex flex-col md:flex-row justify-between items-center text-w4c-black-11 px-16 py-8 gap-4 md:gap-0">
            <div>
                <h3 class="text-w4c-20 md:text-w4c-24 font-bold lg:text-left uppercase" id="scrollspyHeading1">Pencapaian Kami</h3>
                <p class="lg:text-left opacity-60" > Kontribusi dari Individu</p>
                <hr class="my-2 mx-auto lg:hidden w-10 h-1 bg-w4c-green">
            </div>
            <div class="md:-mt-3">
                <h3 class="counter  text-w4c-40 text-w4c-green font-bold uppercase" number="22148" count="22148" speed="1800">22.148</h3>
                <span class="text-sm text-w4c-14 opacity-60 md:opacity-100">Pengguna Aktif</span>
            </div>
            <div class="md:pr-32 md:-mt-3">
                <h3><span class="counter text-w4c-40 text-w4c-green font-bold uppercase" number="31221" count="31221" speed="1800">31.221</span><span class="normal-case text-w4c-16 font-bold text-w4c-black-14">kg</span></h3>
                <span class="text-sm text-w4c-14 opacity-60 md:opacity-100">Sampah Terkelola</span>
            </div>
            </div>
            
        <img class="mt-10 md:mt-0 " src="https://waste4change.com/2.8.assets/img/sendyourwaste/kontribusi.webp">
        </div>

        <!-- buat card cara mengikuti -->
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">
            <div id="cara-mengikuti" class="container pt-20 pb-36">
            <h3 class="text-w4c-20 md:text-w4c-28 font-nunito text-center text-w4c-black-11 px-4 font-bold uppercase" id="scrollspyHeading1">Cara Mengikuti</h3>
            <hr class="mt-4 mb-10 w-20 mx-auto h-1 bg-w4c-green">
            <p class="font-open-sans text-w4c-black-17 text-center">Kami menerima berbagai jenis sampah yang masih dapat digunakan kembali melalui proses daur ulang </p>
            <div class="flex flex-col lg:flex-row justify-between text-center gap-10 mt-10 aos-init aos-animate" data-aos="fade-up" data-aos-offset="300" data-aos-delay="200" data-aos-duration="1000">
                <div class="flex gap-4 md:gap-0 md:flex-col justify-center">
                <img width="80" height="80" class="object-contain md:w-[140px] md:h-[140px] mx-auto" src="https://waste4change.com/2.8.assets/img/sendyourwaste/step-1.webp" alt="">
                <div class="text-left md:text-center">
                    <h5 class="font-nunito font-semibold text-w4c-16 text-w4c-black-11 mt-2">Pilah dan Kemas</h5>
                    <p class="font-open-sans text-w4c-14 text-w4c-black-17 mt-2">Pilah dan pastikan sampah dalam keadaan bersih dan kering. Kemas sampah dengan baik dan aman.</p>
                </div>
                </div>
            <div class="flex gap-4 md:gap-0 md:flex-col justify-center">
                <img width="80" height="80" class="object-contain md:w-[140px] md:h-[140px] mx-auto" src="https://waste4change.com/2.8.assets/img/sendyourwaste/step-2.webp" alt="">
                <div class="text-left md:text-center">
                <h5 class="font-nunito font-semibold text-w4c-16 text-w4c-black-11 mt-2">Buat Transaksi</h5>
                <p class="font-open-sans text-w4c-14 text-w4c-black-17 mt-2">Buat transaksi pada website sebelum Anda menyetorkan sampah.</p>
                </div>
            </div>
            <div class="flex gap-4 md:gap-0 md:flex-col justify-center">
                <img width="80" height="80" class="object-contain md:w-[140px] md:h-[140px] mx-auto" src="https://waste4change.com/2.8.assets/img/sendyourwaste/step-3.webp" alt="">
                <div class="text-left md:text-center">
                <h5 class="font-nunito font-semibold text-w4c-16 text-w4c-black-11 mt-2">Kirim Sampah</h5>
                <p class="font-open-sans text-w4c-14 text-w4c-black-17 mt-2">Kirimkan sampah melalui ekspedisi atau datang langsung ke mitra BankIT terdekat.</p>
                </div>
            </div>
            <div class="flex gap-4 md:gap-0 md:flex-col justify-center">
                <img width="80" height="80" class="object-contain md:w-[140px] md:h-[140px] mx-auto" src="https://waste4change.com/2.8.assets/img/sendyourwaste/step-4.webp" alt="">
                <div class="text-left md:text-center">
                <h5 class="font-nunito font-semibold text-w4c-16 text-w4c-black-11 mt-2">Sampah Terkelola</h5>
                <p class="font-open-sans text-w4c-14 text-w4c-black-17 mt-2">Sampah yang telah sampai akan dikelola secara bertanggung jawab oleh mitra BankIT. </p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">
            <div class="container py-14 md:py-20 overflow-hidden">
            <div class="grid grid-cols-2 items-center">
                <div class="col-span-2 md:col-span-1 -mt-16 md:mt-0 text-center md:text-left md:hidden aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h2 class="font-nunito text-w4c-32 text-w4c-black-11 font-bold leading-tight hidden md:block"  id="scrollspyHeading2">Ayo Berkontribusi<br>sebagai Individu!</h2>
                <br>
                <p class="text-w4c-12 md:text-w4c-14 my-8 font-open-sans lg:w-[32rem] text-w4c-black-17">Saatnya ambil bagian dalam upaya menyelamatkan lingkungan dengan bertanggung jawab atas sampah yang Anda hasilkan dengan Send Your Waste melalui 3 langkah mudah</p>
                <a class="btn-w4c min-w-0 mt-1" href="http://127.0.0.1:8000/TukarSampah#scrollspyHeading2">Kirim Sekarang</a>
                </div>

            </div>
            </div>
        </div>
@endsection