{{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
{{-- <script src="{{ asset('js\sweet-alert.js') }}"></script> --}}
<script>
    const themeToggle = document.getElementById('theme-toggle');
    const darkIcon = document.getElementById('theme-toggle-dark-icon');
    const lightIcon = document.getElementById('theme-toggle-light-icon');

    themeToggle.addEventListener('click', function() {
        const isDarkMode = document.documentElement.classList.toggle('dark');

        if (isDarkMode) {
            darkIcon.classList.add('hidden');
            lightIcon.classList.remove('hidden');
            localStorage.setItem('theme', 'dark');
        } else {
            lightIcon.classList.add('hidden');
            darkIcon.classList.remove('hidden');
            localStorage.setItem('theme', 'light');
        }
    });
</script>
<script src="{{ asset('build/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('build/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('build/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('build/assets/js/custom.js') }}"></script>
