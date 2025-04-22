@extends('partials.main')

@section('content')
    <table style="width: 100%; height: 100vh;">
        <tr style="height: 13%;" class="text-dark">
            <td style="vertical-align: midle; text-align: center; font-size: 65px" class="fw-bold " id="grand_total">
                0
            </td>
            <td class="bg-light text-center" style="width: 20%">
                <img src="pic_trulli.jpg" alt="Italian Trulli" style="width:100%;height:100%;">
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%; height: 100%">
                    <tr>
                        <td class="bg-info-subtle"></td>
                    </tr>
                    <tr style="height: 15%" class="bg-success-subtle">
                        <td>

                        </td>
                    </tr>
                </table>
            </td>
            <td style="vertical-align: top">
                <div class="d-grid gap-2 m-2">
                    <button class="btn btn-primary" type="button">[F1] <br> Cari Barang</button>
                    <button class="btn btn-primary" type="button">[F2] <br> Pembayaran</button>
                    <button class="btn btn-success" type="button">[F3] <br> Tutup Kasir</button>
                    <a class="btn btn-warning" type="button" href="{{ route('logout') }}">[F12] <br> Keluar</a>
                    <a class="btn btn-danger" type="button" href="{{ route('quit') }}">[Esc] <br> Tutup Aplikasi</a>
                </div>
            </td>
        </tr>
    </table>
@endsection

@push('javascript')
    <script>
        @if (session('message'))
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "Login success!",
                    text: "Welcome to {{ env('APP_NAME') }}",
                    icon: "success"
                });
            });
        @endif
    </script>
@endpush
