@extends('template_view')

@section('konten')
<!-- =========================
    OVERVIEW SECTION   
============================== -->
<section id="register" class="parallax-section" style="background-position: 50% 242px;">
    <div class="container">
        <div class="row">
            <div class="wow fadeInUp col-md-8 col-sm-6 animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <h3>Profil LBB Study Extra</h3>
                <p>LBB Study Extra berdiri sejak tahun 1996. LBB Study Extra sudah terbukti handal mengantarkan Siswa binaanya menjadi juara dan masuk di PTN dengan Sistem Pembelajaran yang beda dari LBB yang lain. Selain bertekad memajukan ilmu pengetahuan, prestasi Siswa juga bertekad untuk meningkatkan akhlak Siswa.</p>
            </div>
            <div class="wow fadeInUp col-md-4 col-sm-6 animated" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                <img src="/assets/images/logo.png" width="300" height="300" class="img-responsive" alt="Overview">
            </div>
            <div class="wow fadeInLeft col-md-4 col-sm-4" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                <h3>Visi</h3>
                <p>Mendampingi Siswa Selangkah Lebih Maju Dari Yang Termaju Serta Berakhlak Mulia.</p>
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                <h3>Misi</h3>
                <p>Menjadikan Siswa Nomor 1 Berintlektual Tinggi Intelegensi Aktif.</p>
            </div>

            <div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                <h3>Moto</h3>
                <p>LBB Study Extra Selalu Bersemangat Joss Kobong Membara Dan Akan Menempuh Semua Cara Halal Demi Kemajuan Ilmu Dan Akhlak Siswa.</p>
            </div>
        </div>
    </div>
</section>

<!-- =========================
    CONTACT SECTION   
============================== -->
<section id="contact" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                <div class="">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.489136846892!2d112.57465891469049!3d-7.0691455948944295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77fd00dcdbd963%3A0xa7e1435cf4ffc8b2!2sLBB%20Study%20Extra!5e0!3m2!1sen!2sid!4v1651134827066!5m2!1sen!2sid" width="100%" height="543" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>

            <div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                <div class="contact_detail">
                    <div class="section-title">
                        <h2>Kritik dan Saran</h2>
                    </div>
                    <form id="" method="post" action="{{ url('tentang-kami')}}">{{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="nama_siswa" type="text" class="form-control" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="email_siswa" type="email" class="form-control" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="kritik" rows="6" class="form-control" placeholder="Masukkan Kritik dan Saran" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <input name="submit" type="submit" class="form-control" id="submit" value="Kirim">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    @include('sweetalert::alert')

</section>
@endsection