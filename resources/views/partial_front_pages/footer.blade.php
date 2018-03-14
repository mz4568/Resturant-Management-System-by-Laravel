 <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2015 <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jquery.mixitup.min.js')}}" ></script>
        <script src="{{asset('frontend/js/wow.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.validate.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jquery.hoverdir.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jQuery.scrollSpeed.js')}}"></script>
        <script src="{{asset('frontend/js/script.js')}}"></script>
        <script src="{{asset('frontend/js/toastr.min.js')}}"></script>
        <script type="text/javascript">
     $('#datepicker').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('#datepicker').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('#datepicker').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
{!! Toastr::message() !!}