@extends('template_view')

@section('konten')
<!-- =========================
    SPEAKERS SECTION   
============================== -->
<section id="alumni" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                <div class="section-title">
                    <h3 style="color: #ffffff;">Alumni LBB Study Extra</h3>
                    <p style="color: #ffffff;">Berikut adalah Profil Alumni LBB Study Extra yang telah lulus :</p>
                </div>
            </div>
            <div id="owl-speakers" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                @foreach($alumnis as $alumni)
                <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s" style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                    <div class="alumni-gambar">
                        <img src="{{ asset('img/alumni/'. $alumni->foto_siswa) }}" class="" alt="">
                        <div class="alumni-wrapper">
                            <h4 style="color: #222;">{{ $alumni->nama_siswa}}</h4>
                            <h6 style="color: #666;">{{ $alumni->nama_sekolah_siswa}}</h6>
                            <hr>
                            <strong>Kontak</strong>
                            <h6 style="color: #666;">{{ $alumni->email_siswa}}</h6>
                            <hr>
                            <strong>Alamat</strong>
                            <h6 style="color: #666;">{{ $alumni->alamat_lengkap_rumah_siswa}}</h6>
                            <hr>
                            <strong>Pengalaman</strong>
                            <h6 style="color: #666;">{!! $alumni->pengalaman !!}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-4">
            <div class="box-footer">
                {{-- <div class="box-body"> --}}
                {{ $alumnis->links() }}
            </div>
        </div>
    </div>
</section>

@endsection