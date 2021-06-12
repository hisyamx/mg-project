<!-- Footer -->
<footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
                &copy; 2020 Powered By <a href="https://www.botika.online" class="font-weight-bold ml-1"
                    target="_blank">Botika</a>
            </div>
        </div>
        <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                    <a href="dasboard.index" class="nav-link" target="_blank">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="division.index" class="nav-link" target="_blank">Division</a>
                </li>
                <li class="nav-item">
                    <a href="/profile" class="nav-link" target="_blank">Profil</a>
                </li>
                <li class="nav-item">
                    <a href="/project" class="nav-link" target="_blank">Project</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</div>
</div>
<script src="{{asset('/assets')}}/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{asset('/assets')}}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/assets')}}/vendor/js-cookie/js.cookie.js"></script>
<script src="{{asset('/assets')}}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="{{asset('/assets')}}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="{{asset('/assets')}}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{asset('/assets')}}/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="{{asset('/assets')}}/js/argon.js?v=1.2.0"></script>
{{-- Datepicker --}}
<script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<div style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border: none; box-sizing: content-box;
    height: 200px; margin: 0px; padding: 0px; width: 200px;">
    <div style="border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"></div>
</div>

<script type="text/javascript">
    $('.date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
</script>
