@extends('layouts.frontend.app', ['title' => 'Sertifikat'])

@section('content')
    <div class="bg-white py-10">
        <section class="bg-[#FCF8F1] bg-opacity-30 py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-start grid-cols-1 gap-10 lg:grid-cols-12">
                    <div class="lg:col-span-9 w-full h-auto ">
                        <!-- Konten grid kedua untuk mobile -->
                        <a href="{{ route('Landing.certificates.pdf', ['user' => $certificate->user->name, 'course' => $courseName, 'serialNumber' => $certificate->serial_number]) }}"
                            target="_blank" rel="noopener noreferrer"
                            class="relative overflow-hidden transition-transform transform-gpu duration-300 ease-in-out hover:scale-105 block">
                            <div class=" shadow-lg" id="pdf-viewer"></div>
                            <div
                                class="absolute inset-0 w-full  flex items-center justify-center bg-black bg-opacity-70 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                                <p class="text-white font-bold">Klik untuk Lihat Penuh</p>
                            </div>
                        </a>
                    </div>

                    <div class="lg:col-span-3">
                        <!-- Konten grid pertama -->
                        <div
                            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex flex-col text-center items-center pb-10">
                                <img class="w-20 h-auto mb-3 rounded-full shadow-lg"
                                    src="{{ $certificate->user()->first()->avatar }}"
                                    alt="{{ $certificate->user->name }}" />
                                <h5 class="mb-1 text-xl font-extrabold text-black  dark:text-white">
                                    {{ strtoupper($certificate->user->name) }}
                                </h5>

                                <div class="flex flex-col items-center mt-4">
                                    <span class="text-sm text-gray-500 dark:text-gray-400 mb-2">ID</span>
                                    <h2 class="mb-4 text-sm font-medium text-gray-900 dark:text-white">
                                        {{ $certificate->serial_number }}
                                    </h2>

                                    <span class="text-sm text-gray-500 dark:text-gray-400 mb-2">Kelas</span>
                                    <h2 class="mb-4 text-sm font-medium text-gray-900 dark:text-white">
                                        {{ $certificate->course->name }}
                                    </h2>

                                    <span class="text-sm text-gray-500 dark:text-gray-400 mb-2">Lulus Pada</span>
                                    <h2 class="mb-4 text-sm font-medium text-gray-900 dark:text-white">
                                        {{ $certificate->created_at->format('M d, Y') }}
                                    </h2>

                                    <span class="text-sm text-gray-500 dark:text-gray-400 mb-2">Dengan Nilai</span>
                                    <h2 class="text-sm font-medium text-gray-900 dark:text-white">
                                        {{ $certificate->score }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <h5 class="mb-1 text-base text-center pt-2  text-slate-700 text-uppercase dark:text-white">
                            Bagikan sertifikat:
                        </h5>
                        <div class="flex space-x-4 mt-4 justify-center">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-block overflow-hidden transform transition duration-300 ease-in-out bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg hover:scale-105 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                    viewBox="88.428 12.828 107.543 207.085" id="facebook">
                                    <path fill="#3c5a9a"
                                        d="M158.232 219.912v-94.461h31.707l4.747-36.813h-36.454V65.134c0-10.658 2.96-17.922 18.245-17.922l19.494-.009V14.278c-3.373-.447-14.944-1.449-28.406-1.449-28.106 0-47.348 17.155-47.348 48.661v27.149H88.428v36.813h31.788v94.461l38.016-.001z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}" target="_blank"
                                rel="noopener noreferrer"
                                class="inline-block overflow-hidden transform transition duration-300 ease-in-out bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg hover:scale-105 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 512 512"
                                    id="twitter">
                                    <g clip-path="url(#clip0_84_15698)">
                                        <rect width="512" height="512" fill="#fff" rx="60"></rect>
                                        <path fill="#000"
                                            d="M355.904 100H408.832L293.2 232.16L429.232 412H322.72L239.296 302.928L143.84 412H90.8805L214.56 270.64L84.0645 100H193.28L268.688 199.696L355.904 100ZM337.328 380.32H366.656L177.344 130.016H145.872L337.328 380.32Z">
                                        </path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_84_15698">
                                            <rect width="512" height="512" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(Request::url()) }}"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-block overflow-hidden transform transition duration-300 ease-in-out bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg hover:scale-105 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 16 16" id="linkedin">
                                    <g fill="#1976D2">
                                        <path
                                            d="M0 5h3.578v11H0zM13.324 5.129c-.038-.012-.074-.025-.114-.036a2.32 2.32 0 0 0-.145-.028A3.207 3.207 0 0 0 12.423 5c-2.086 0-3.409 1.517-3.845 2.103V5H5v11h3.578v-6s2.704-3.766 3.845-1v7H16V8.577a3.568 3.568 0 0 0-2.676-3.448z">
                                        </path>
                                        <circle cx="1.75" cy="1.75" r="1.75"></circle>
                                    </g>
                                </svg>
                            </a>

                            <!-- Tombol Copy Link -->
                            <a href="javascript:void(0)" onclick="copyLink()" id="copyButton"
                                class="inline-block overflow-hidden transform transition duration-300 ease-in-out bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg hover:scale-105 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 64 64" id="link">
                                    <path
                                        d="m59.61 38.26-14.33-14.1c-.37-.38-.78-.71-1.19-1.04 1.48 3.39 1.71 7.2.63 10.79l9.37 9.22a7.443 7.443 0 0 1 0 10.62 7.69 7.69 0 0 1-5.39 2.2c-1.95 0-3.9-.73-5.39-2.2L29.56 40.21a7.318 7.318 0 0 1-2.12-4.08v-.02c-.01-.01-.01-.02-.01-.04-.4-2.35.39-4.78 2.12-6.48a7.662 7.662 0 0 1 5.39-2.21c.16 0 .3.01.44.02a6.57 6.57 0 0 0-1.67-2.88l-3.93-3.86a14.864 14.864 0 0 0-9.4 9.44c-1.33 4.07-.82 8.49 1.41 12.13.62 1.03 1.37 1.98 2.26 2.85l14.31 14.09c5.86 5.77 15.39 5.77 21.24 0 5.86-5.76 5.86-15.15.01-20.91z">
                                    </path>
                                    <path
                                        d="m19.28 30.1-9.37-9.23c-1.45-1.41-2.23-3.3-2.23-5.31s.78-3.88 2.23-5.31a7.678 7.678 0 0 1 5.39-2.2c2.03 0 3.95.78 5.39 2.2L34.45 23.8a7.276 7.276 0 0 1 2.12 4.11l.01.01v.02c.39 2.35-.4 4.77-2.13 6.48a7.725 7.725 0 0 1-5.38 2.2c-.15 0-.3-.03-.44-.04.29 1.1.85 2.09 1.67 2.91l3.92 3.86c2.15-.72 4.13-1.92 5.73-3.51 1.7-1.67 2.97-3.71 3.69-5.92 1.32-4.06.81-8.46-1.39-12.1v-.01a.138.138 0 0 1-.03-.04c-.61-1.02-1.37-1.97-2.25-2.84L25.65 4.83C22.81 2.03 19.04 .5 15.02 .5 11 .5 7.23 2.04 4.39 4.83 1.57 7.63 0 11.34 0 15.29c.01 3.95 1.57 7.67 4.41 10.46l14.31 14.08c.38.38.78.72 1.2 1.05-1.49-3.38-1.72-7.2-.64-10.78z">
                                    </path>
                                </svg>
                            </a>
                            <!-- End Tombol Copy Link -->

                            <!-- Notifikasi Link Tersalin -->
                            <!-- End Notifikasi Link Tersalin -->


                        </div>
                        <div id="copyNotification" class="text-center bg-slate-800  mt-2 text-sm text-white hidden">Link
                            telah
                            disalin!</div>
                    </div>

                </div>
            </div>
        </section>
    </div>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
    <script>
        const url = '{{ https://ecourse.syahravi.my.id/certificates('Landing.certificates.pdf', ['user' => $certificate->user->name, 'course' => $courseName , 'serialNumber' => $certificate->serial_number]) }}';
        const pdfViewer = document.getElementById('pdf-viewer');

        // Load PDF
        pdfjsLib.getDocument(url).promise.then(function(pdf) {
            pdf.getPage(1).then(function(page) {
                let scale = 1; // Default scale for desktop

                // Check if it's a mobile device (max-width: 767px)
                if (window.matchMedia("(max-width: 767px)").matches) {
                    scale = 0.5; // Scale for mobile
                }

                const viewport = page.getViewport({
                    scale: scale
                });

                // Prepare canvas using PDF page dimensions
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render PDF page into canvas context
                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                page.render(renderContext);
                pdfViewer.innerHTML = '';
                pdfViewer.appendChild(canvas);
            });
        });


        function copyLink() {
            const copyText = document.createElement("input");
            copyText.value = "{{ Request::url() }}";
            document.body.appendChild(copyText);
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
            document.execCommand("copy");
            document.body.removeChild(copyText);

            // Tampilkan notifikasi
            const notification = document.getElementById('copyNotification');
            notification.classList.remove('hidden');

            // Sembunyikan notifikasi setelah 2 detik
            setTimeout(function() {
                notification.classList.add('hidden');
            }, 3000);
        }
    </script>
@endsection
