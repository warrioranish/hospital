<footer class="page_footer template_footer cs main_bg_color2">
    <div class="container">
        <div class="row display_table_sm divider_40">
            <div class="col-sm-4 col-sm-push-4 text-center display_table_cell_sm">
                <a href="../" class="logo">
                    <img src="{{asset('theme/images/logo-light.png')}}" alt="">
                </a>
            </div>
            <div class="col-sm-4 col-sm-pull-4 text-center text-sm-left contact-teaser display_table_cell_sm">
                <span class="small-text">Emergency cases</span>
                <p class="yantramanov weight-black fontsize_25">+1(800) 450 7550</p>
            </div>
            <div class="col-sm-4 text-center text-sm-right contact-teaser display_table_cell_sm">
                <span class="small-text">online consultation</span>
                <p class="yantramanov weight-black fontsize_25 text-uppercase">valeo@gmail.com</p>
            </div>
        </div>
        <div class="row columns_margin_0 widgets-row display_table_md">
            {{--<div class="col-md-4 col-sm-6 display_table_cell_md">--}}
                {{--<div class="widget widget_mailchimp">--}}
                    {{--<h4 class="text-uppercase bold">Newsletter Signup</h4>--}}
                    {{--<form class="signup form-inline" action="../" method="get">--}}
                        {{--<div class="form-group">--}}
                            {{--<input name="email" type="email" class="mailchimp_email form-control" placeholder="your email address">--}}
                        {{--</div>--}}
                        {{--<button type="submit" class="theme_button">--}}
                            {{--<span class="sr-only">Send</span>--}}
                            {{--<i class="rt-icon2-envelope black"></i>--}}
                        {{--</button>--}}
                        {{--<div class="response"></div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="col-md-4 col-md-push-4 col-sm-6 display_table_cell_md">
                <div class="widget">
                    <h4 class="text-uppercase bold">Meet Our Doctors</h4>
                    <a href="timetable.html" class="theme_button color2 block_button margin_0">doctors timetable</a>
                </div>
            </div>
            <div class="col-md-4 col-md-pull-4 col-sm-12 display_table_cell_md">
                <div class="widget widget_button_map">
                    <h4 class="text-uppercase bold">Search on the map</h4>
                    <a href="/contactus" target="_blank" class="theme_button inverse block_button margin_0">Get directions on the map
                        <i class="fa fa-caret-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="page_copyright cs main_bg_color table_section section_padding_35">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center text-sm-left">
                <p class="small-text black">Valeo - medical clinic / health center &copy; 2016</p>
            </div>
            <div class="col-sm-4 text-center">
                <div class="page_social darklinks">
                    <a href="#" class="social-icon soc-facebook"></a>
                    <a href="#" class="social-icon soc-twitter"></a>
                    <a href="#" class="social-icon soc-youtube"></a>
                    <a href="#" class="social-icon soc-google"></a>
                </div>
            </div>
            <div class="col-sm-4 text-center text-md-right">
                <p class="small-text black">Created with
                    <i class="fa fa-heart-o highlight3"></i> by
                    <a href="http://modernwebtemplates.com">MWTemplates</a>
                </p>
            </div>
        </div>
    </div>
</section>

</div>
<!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARAqBLFDElg-1Ckh9fOxhXcmmJ26tggQc&callback=initMap"></script>
<script src="{{asset('theme/js/compressed.js')}}"></script>
<script src="{{asset('theme/js/main.js')}}"></script>
<script>
    $(function(){
        $('#contact_form_submit').click(function(event){
            var captcha = $('#g-recaptcha-response').val();
            if( captcha == '') {
                $('.g-recaptcha iframe').attr('style','border:1px solid red');
                event.preventDefault();
            }
        });
    });
</script>

</body>

</html>