@extends('template_view')

@section('konten')
<!-- =========================
    PROGRAM SECTION   
============================== -->
<section id="programm" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                <div class="section-title">
                    <h3>Program LBB Study Extra</h3>
                    <p>Berikut adalah Program Bimbingan Belajar yang dimiliki oleh LBB Study Extra :</p>
                </div>
            </div>

            <div class="wow fadeInUp col-md-10 col-sm-10" data-wow-delay="0.9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li style="color: #f2545f;"><a>Program Bimbingan LBB Study Extra</a></li>
                </ul>
                <!-- tab panes -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="fday">
                        <div class="col-md-10 col-sm-10">
                            <h3 style="color: #f2545f;">Regular</h3>
                            <li>Diajarkan Semua Mata Pelajaran</li>
                            <li>Satu Minggu 6 Hari</li>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="fday">
                        <div class="col-md-10 col-sm-10">
                            <h3 style="color: #f2545f;">Ekstensif</h3>
                            <li>Diajarkan Mata Pelajaran Pilihan Dan Siswa Dapat Memilih</li>
                            <li>Satu Minggu 3x Hari</li>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="fday">
                        <div class="col-md-10 col-sm-10">
                            <h3 style="color: #f2545f;">Kursus</h3>
                            <li>(Matematika/IPA/Bahasa Inggris/Komputer(Laptop)/Aksara Jawa/Jarimatika/Trik-trik Matematika/Mengaji)</li>
                            <li>Satu Minggu 6 Hari</li>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="fday">
                        <div class="col-md-10 col-sm-10">
                            <h3 style="color: #f2545f;">Privat/Privat Grup</h3>
                            <li>Guru Datang Ke Rumah Siswa</li>
                            <li>Waktu Belajar Sesuai Permintaan Siswa</li>
                            <li>Privat Untuk Satu Guru Satu Siswa</li>
                            <li>Privat Grup Untuk Satu Guru 3 Siswa</li>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="fday">
                        <div class="col-md-10 col-sm-10">
                            <h3 style="color: #f2545f;">Bimbingan</h3>
                            <li>Bimbingan Khusus Olimpiade/PTS/PAS/UKK/UTBK dll.</li>
                            <li>2x Seminggu</li>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection