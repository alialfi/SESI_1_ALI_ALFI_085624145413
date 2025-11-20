@extends('layouts.app')

@section('content')
<style>
    .welcome-section {
        background: linear-gradient(135deg, #e3f2fd, #ffffff);
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .welcome-title {
        color: #0d5cab;
        font-weight: 600;
    }
    .welcome-sub {
        color: #555;
    }
    .info-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .info-label {
        color: #0d47a1;
        font-weight: 600;
    }
    .footer-note {
        margin-top: 40px;
        color: #777;
        font-size: 14px;
    }
</style>

<div class="container mt-5">
    <div class="text-center welcome-section">
        <h2 class="welcome-title">Selamat Datang, <span style="text-transform: uppercase;">{{ Auth::user()->name ?? Auth::user()->id_karyawan }} </span>👋</h2>
        <p class="welcome-sub">
            Anda telah berhasil login ke <strong>Human Capital Development System</strong>  
            <br><strong> PT Leuwijaya Utama Textile (Leuwitex)</strong>
        </p>

        <div class="card info-card mx-auto mt-4" style="max-width: 420px;">
            <div class="card-body text-start">
                <h5 class="text-center mb-3 text-primary">Informasi Akun</h5>
                <p style="text-transform: uppercase;"><span>Nama:</span> {{ Auth::user()->name ?? '-' }}</p>
                <p style="text-transform: uppercase;"><span>Email:</span> {{ Auth::user()->email ?? '-' }}</p>
            </div>
        </div>

        <div class="mt-4">
            <a href="#" class="btn btn-outline-primary btn-sm me-2">Lihat Data Karyawan</a>
            <a href="#" class="btn btn-outline-success btn-sm">Laporan Aktivitas</a>
        </div>

        <div class="footer-note">
            © {{ date('Y') }} PT Leuwijaya Utama Textile
        </div>
    </div>
</div>
@endsection
