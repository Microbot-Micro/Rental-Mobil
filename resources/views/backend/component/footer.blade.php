<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; {{App\Setting::where('slug','nama-toko')->get()->first()->description}} {{date('Y')}} | Repost by <a href='https://github.com/Microbot-Micro/Rental-Mobil.git' title='Microbot' target='_blank'>Microbot</a>
            </span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
