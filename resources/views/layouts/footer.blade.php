<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2020 <div class="bullet">
            </div> Sistem Kartu Rencana Studi Online
    </div>
    <div class="footer-right">

    </div>
</footer>
</div>
</div>

@yield('modal')

<!-- General JS Scripts -->
<script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/stisla.js') }}"></script>
<script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

@yield('script')

</body>

</html>
