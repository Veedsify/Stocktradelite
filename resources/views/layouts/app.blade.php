<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stocktradelite | Crypto Exchange HTML Template</title>

    <!-- FONT LINKS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('app/dist/app.css') }}">
    <link href=" https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css " rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

    <!-- End Style CSS -->

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo/favicon.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="body header-fixed">
    @yield('content')
    <x-pages.footer />


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuItems = document.querySelectorAll('#menu-primary-menu .menu-item a');

            // Function to update the current menu item
            const updateCurrentMenuItem = (id) => {
                document.querySelectorAll('.current-menu-item').forEach(menuItem => {
                    menuItem.classList.remove('current-menu-item');
                });

                const currentItem = document.querySelector(`#menu-primary-menu .menu-item a[data-id="${id}"]`);
                if (currentItem) {
                    currentItem.parentElement.classList.add('current-menu-item');
                }
            };

            // Check if there's a current menu item saved in localStorage
            const currentMenuItem = localStorage.getItem('currentMenuItem');
            if (currentMenuItem) {
                updateCurrentMenuItem(currentMenuItem);
            }

            menuItems.forEach(item => {
                item.addEventListener('click', function (event) {
                    // Prevent the default action
                    event.preventDefault();

                    // Get the data-id of the clicked link
                    const id = this.getAttribute('data-id');

                    // Update the current menu item
                    updateCurrentMenuItem(id);

                    // Save the current menu item to localStorage
                    localStorage.setItem('currentMenuItem', id);

                    // Redirect to the actual link
                    window.location.href = this.href;
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.easing@1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('app/js/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('app/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('app/js/apexcharts.js') }}"></script>
    <script src="{{ asset('app/js/switchmode.js') }}"></script>

    {{-- <script src="{{ asset('app/js/chart.js') }}"></script> --}}
    <script src=" https://cdn.jsdelivr.net/npm/boxicons@2.1.4/dist/boxicons.min.js "></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="{{ asset('app/js/swiper.js') }}"></script>

    <script src="{{ asset('app/js/app.js') }}"></script>
</body>

</html>
