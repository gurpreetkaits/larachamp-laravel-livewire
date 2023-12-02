<script>
    document.addEventListener('DOMContentLoaded', function () {
    const darkModeToggle = document.getElementById('neumorphicCheckbox');
    const body = document.body;
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    body.classList.toggle('dark-mode', isDarkMode);
    darkModeToggle.checked = isDarkMode;
    darkModeToggle.addEventListener('change', function () {
        body.classList.toggle('dark-mode', this.checked);
        localStorage.setItem('darkMode', this.checked);
    });
});

</script>
<footer class="py-3 w-full" style="margin-top: auto;">
    <div class="container-fluid" id="footerSection">
        <div class="d-flex justify-content-center">
            @php
            date('Y-m-d')
            @endphp
            <p class="bg-dark text-light p-1 rounded">
                Robin@Larachamp
                <span class="px-1">
                    <a href="https://github.com/robinkashyap-01" class="footer-logo" target="_blank"><img
                            src="{{asset('github.jpeg')}}" alt="github" class="footer-logo-image"
                            style="width:20px;"></a>
                    <a href="https://twitter.com/robinkashyap_01" target="_blank" class="footer-logo"><img
                            src="{{asset('x.avif')}}" alt="twitter (x)" class="footer-logo-image"
                            style="width:20px;"></a>
                </span>
            </p>
        </div>
    </div>
</footer>