<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
        <link rel="icon" href="{{ asset('asset/image2.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1XB+3uZAbOv4PzGZwC6iO+riHOZ5O/03+qZyC6vYuZgVpMLc6Prx9hWLqla3XG7n7gukFbDiJ1Ine2bb//dQ0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

            
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js"></script>
    
    
    

</head>

<body style="font-family: 'Open Sans', sans-serif;">
    <!-- navbar -->
    @include('layouts.frontend.partials.navbar')

    <!-- content -->
    @yield('content')

    <!-- toastr -->
    @include('sweetalert::alert')

    <!-- footer -->
    @include('layouts.frontend.partials.footer')

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
    <script type="text/javascript">
        function deleteData(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true
            })

            swalWithBootstrapButtons.fire({
                title: 'Apakah anda ingin mengeluarkan item ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, tolong!',
                cancelButtonText: 'Nope!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Data kamu aman !',
                        '',
                        'error'
                    )
                }
            })
        }
    </script>
    @stack('js')
</body>

</html>
