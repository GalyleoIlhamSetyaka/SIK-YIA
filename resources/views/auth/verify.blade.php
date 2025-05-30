@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link verifikasi email telah telah terkirim silahkan cek email anda') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, harap periksa email Anda untuk mendapatkan tautan verifikasi.') }}
                    {{ __('Jika tidak mendapatkan email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik disini') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
