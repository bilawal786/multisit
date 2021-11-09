
</aside>
<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Tableau de bord</h2>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Chercher...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</section>
<!-- Jquery Core Js -->
<script src="{{asset('admin/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{asset('admin/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('admin/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->
<script src="{{asset('admin/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('admin/assets/bundles/morrisscripts.bundle.js')}}"></script> <!-- Morris Plugin Js -->
<script src="{{asset('admin/assets/bundles/sparkline.bundle.js')}}"></script> <!-- sparkline Plugin Js -->
<script src="{{asset('admin/assets/bundles/doughnut.bundle.js')}}"></script>

<script src="{{asset('admin/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/index.js')}}"></script>
</body>
</html>
