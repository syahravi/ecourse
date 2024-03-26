<footer class="bg-white shadow-md">
    <div class="container px-6 py-6 mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 justify-items-center md:justify-items-start">
            <div class="text-center sm:text-start col-span-2">
                <a href="/" class="font-bold text-2xl text-black">
                    E-Unusia
                </a>
                <p class="max-w-md mt-2 text-sm text-center md:text-start text-slate-800 hover:text-teal-500">
                    Jl. Taman Amir Hamzah No.5, RT.8/RW.4, Pegangsaan, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10320
                </p>
            </div>
            <div>
                <div>
                    <h3 class="text-black uppercase">Informasi</h3>
                    <a href="{{route('tentang')}}" class="block mt-2 text-sm text-slate-800 hover:text-teal-500 hover:underline">
                        Tentang Kami
                    </a>
                    <a href="{{route('faq')}}" class="block mt-2 text-sm text-slate-800 hover:text-teal-500 hover:underline">FAQ</a>
                    <a href=" {{route('tim')}}" class="block mt-2 text-sm text-slate-800 hover:text-teal-500 hover:underline">Tim Kami</a>
                </div>
            </div>
            <div>
                <div>
                    <h3 class="text-black uppercase">Komunitas</h3>
                    <a href="{{route('review')}}" class="block mt-2 text-sm text-slate-800 hover:text-teal-500 hover:underline">
                        Ulasan Member
                    </a>
                    <a href="https://t.me/+z4Bf1UgLJZZlYTI9" class="block mt-2 text-sm text-slate-800 hover:text-teal-500 hover:underline">Grup Telegram</a>
                    <a href="https://discord.com/invite/hsASa2uV" class="block mt-2 text-sm text-slate-800 hover:text-teal-500 hover:underline">Komunitas Discord</a>
                </div>
            </div>
        </div>
        <hr class="h-px my-6 bg-black border-none">
        <div>
            <p class="text-center text-black">
                © E-course Unusia {{ date('Y') }}
            </p>
        </div>
    </div>
</footer>
