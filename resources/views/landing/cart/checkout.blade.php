@extends('layouts.frontend.app', ['title' => 'Checkout'])

@section('content')
    <section class="pt-20 bg-gray-100 dark:bg-slate-900 sm:pt-16 lg:pt-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight dark:text-white sm:text-4xl lg:text-5xl lg:leading-tight"> Pesanan anda telah kami konfirmasi, Silahkan lanjutkan dengan melakukan
                    pembayaran</h2>
                <p class="mt-6 text-lg text-gray-900 dark:text-white">Mohon pilih metode pembayaran yang Anda preferensikan.
                </p>
                <button   id="pay-button"  title="" class="inline-flex items-center justify-center px-6 py-4 mt-12 text-base font-semibold text-white transition-all duration-200 bg-teal-600 border border-transparent rounded-md hover:bg-teal-700 focus:bg-teal-700" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet mr-1" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12">
                    </path>
                    <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4"></path>
                </svg>
                    Bayar Sekarang
                </button>
            </div>
        </div>
    
        <div class="container mx-auto 2xl:px-12">
            <div class="flex justify-center mt-6">
                <img class="h-auto max-w-lg rounded-lg" src="{{asset('asset/Mobile payments-pana.svg')}}" alt="" />
            </div>
        </div>        
    </section>
    
@endsection

@push('js')
    <script type="text/javascript" src="{{ config('services.midtrans.snap_url') }}"
        data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            window.snap.pay('{{ $snapToken }}', {
                // Optional
                onSuccess: function() {
                    window.location.href = "{{ route('home') }}";
                },
                // Optional
                onPending: function() {
                    window.location.href = "{{ route('home') }}";
                },
                // Optional
                onError: function() {
                    window.location.href = "{{ route('home') }}";
                }
            });
        });
    </script>
@endpush
