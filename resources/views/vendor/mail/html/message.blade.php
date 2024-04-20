<x-mail::layout>
    {{-- Header --}}
    <x-slot:header>
        <x-mail::header :url="config('app.url')">
            {{ config('app.name') }}
        </x-mail::header>
    </x-slot:header>

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        <x-slot:subcopy>
            <x-mail::subcopy>
                {{ $subcopy }}
            </x-mail::subcopy>
        </x-slot:subcopy>
    @endisset

    {{-- Footer --}}
    {{-- Footer --}}
    {{-- Footer --}}
    <x-slot:footer>
        <x-mail::footer>
            <table width="570px" cellspacing="0" cellpadding="0" border="0" style="background-color: #14b8a6;">
                <tr>
                    <td align="center" style="padding: 20px 0;">
                        <!-- Icon Facebook -->
                        <a href="https://twitter.com/SaefulMuminin7" target="_blank"
                            style="display: inline-block; margin-right: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                style="width: 30px; height: 30px;">
                                <path
                                    d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm4.396 8.325c.007.154.01.309.01.465 0 4.747-3.61 10.226-10.223 10.226a10.134 10.134 0 0 1-5.978-1.941 7.198 7.198 0 0 0 .874.044c1.78 0 3.423-.595 4.745-1.599-1.675-.032-3.093-1.134-3.578-2.649.233.044.474.066.718.066.346 0 .683-.045 1.005-.13a3.158 3.158 0 0 1-2.516-3.1v-.04c.426.236.915.375 1.43.39a3.15 3.15 0 0 1-.785-2.54c0-.56.15-1.078.412-1.527a8.994 8.994 0 0 0 6.52 3.303c-.034-.155-.05-.313-.05-.474 0-1.146.927-2.074 2.073-2.074.595 0 1.13.25 1.503.652.468-.092.91-.264 1.315-.5-.154.48-.48.88-.905 1.138.415-.05.81-.16 1.183-.32a2.066 2.066 0 0 0 2.43-.39 4.134 4.134 0 0 1-1.984 2.276c.726-.09 1.418-.278 2.067-.557-.242.714-.718 1.314-1.348 1.694a4.15 4.15 0 0 1-1.828.505c.535 1.036 1.313 1.795 2.202 2.322a8.862 8.862 0 0 1-2.314.305c-.569 0-1.112-.056-1.645-.16a12.58 12.58 0 0 0 4.396 1.028c.305-.607.473-1.276.473-1.964 0-4.214-3.213-9.083-9.086-9.083-.036 0-.072.002-.108.002l.001-.002z" />
                            </svg>
                        </a>
                        <!-- Icon Twitter -->
                        <!-- Icon Facebook -->
                        <a href="https://web.facebook.com/saeful.m.73744?locale=id_ID" target="_blank"
                            style="display: inline-block; margin-right: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                style="width: 30px; height: 30px;">
                                <path
                                    d="M21 2H3a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h9.74v-7.2h-2.58v-2.816h2.58v-2.04c0-2.547 1.554-3.935 3.827-3.935 1.088 0 2.025.082 2.295.119v2.67h-1.57c-1.236 0-1.477.588-1.477 1.45v1.9h2.957l-.387 2.816h-2.57V23H21a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                            </svg>
                        </a>
                        <!-- Icon Instagram -->
                        <a href="https://www.instagram.com/saeful.m.73744/" target="_blank"
                            style="display: inline-block; margin-right: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                style="width: 30px; height: 30px;">
                                <path
                                    d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 15.4c0 .3-.2.6-.5.6H8.5c-.3 0-.6-.2-.6-.5v-8.9c0-.3.3-.6.6-.6h8.9c.3 0 .5.3.5.6v8.9z" />
                                <circle cx="16.032" cy="7.258" r="1.285" />
                            </svg>
                        </a>
                        <!-- Icon Youtube -->
                        <a href="https://github.com/saefulmuminin?tab=repositories" target="_blank"
                            style="display: inline-block; margin-right: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                style="width: 30px; height: 30px;">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zM9.5 16.1V8.9l6.4 3.6-6.4 3.6z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="color: white; font-size: 12px; line-height: 20px;">
                        Unusia Course Jl. Taman Amir Hamzah No.5, RT.8/RW.4, Pegangsaan, Kec. Menteng, Kota Jakarta
                        Pusat, Daerah Khusus
                        Ibukota Jakarta 10320.
                    </td>
                </tr>
                <tr>
                    <td align="center" style="color: white; font-size: 12px; line-height: 20px;">
                        © {{ date('Y') }} Unusia Course
                    </td>
                </tr>
            </table>
        </x-mail::footer>
    </x-slot:footer>


</x-mail::layout>
