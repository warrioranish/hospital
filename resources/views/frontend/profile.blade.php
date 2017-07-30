@extends('frontend.layouts.index')

@section('content')


    <section class="page_breadcrumbs ls ms ms2 section_padding_15 columns_margin_0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <ol class="breadcrumb greylinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li class="active"> Member Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls page_portfolio section_padding_150">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="thumbnail text-center">
                        <img src="{{ asset('theme/images/team/01.jpg') }}" alt="" class="rounded">
                        <div class="caption">
                            <h4>
                                <a href="team-single.html">Vickie Bryant</a>
                            </h4>
                            <p class="small-text">General Doctor</p>
                            <hr class="divider_15">
                            <div class="media inline-block margin_0">
                                <div class="media-left">
                                    <i class="rt-icon2-phone3"></i>
                                </div>
                                <div class="media-body yantramanov">
                                    1 (800) 254 4512
                                </div>
                            </div>
                            <p class="social-icons greylinks margin_0">
                                <a class="social-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
                                <a class="social-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
                                <a class="social-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
                                <a class="social-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                    <p class="bottommargin_10">
                        Ham hock porchetta ball tip, pork belly jerky venison filet mignon prosciutto rump tri-tip beef. Ground round cupim tongue frankfurter, pork loin short ribs cow pork chop ball tip venison shank filet mignon prosciutto leberkas. Tongue picanha beef tenderloin
                        berkas short ribs. Doner kevin sausage ground round. Boudin chuck strip steak porchetta short loin beef salami pork belly meatball spare ribs pork loin drumstick. Pig alcatra tongue prosciutto turkey pancetta rump porchetta jerky short loin meatball
                        tri-tip salami spare ribs.Jowl beef ribs ribeye meatloaf. Kielbasa strip steak pork loin, tongue biltong kevin capicola hamburger ground round short loin bacon pancetta.
                    </p>
                    <ul class="list2 darklinks">
                        <li>
                            <a href="single-service.html">Lorem ipsum dolor sit amet</a>
                        </li>
                        <li>
                            <a href="single-service.html">Sint animi non ut sed</a>
                        </li>
                        <li>
                            <a href="single-service.html">Eaque blanditiis nemo</a>
                        </li>
                        <li>
                            <a href="single-service.html">Amet, consectetur adipisicing</a>
                        </li>
                    </ul>

                    <p>
                        Turkey beef ribs shoulder doner, leberkas swine hamburger jowl kielbasa picanha. Meat short ribs boudin jerky pork chop chuck bresaola ham porchetta cupim jowl. Prosciutto ball tip strip steak salami tenderloin t-bone tri-tip kevin, sirloin shank ham
                        past frankfurter jerky. Chuck tongue sausage doner.
                    </p>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs topmargin_70" role="tablist">
                        <li class="active">
                            <a href="#tab1" role="tab" data-toggle="tab">Biography</a>
                        </li>
                        <li>
                            <a href="#tab2" role="tab" data-toggle="tab">Skills</a>
                        </li>
                        <li>
                            <a href="#tab3" role="tab" data-toggle="tab">Send Message</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content top-color-border with_background bottommargin_80">

                        <div class="tab-pane fade in active" id="tab1">
                            <h4 class="topmargin_0">Biography:</h4>
                            <p>
                                Kevin shankle short ribs turducken chicken porchetta. Andouille salami tri-tip, cow beef pork chop jerky filet mignon prosciutto strip steak corned beef pork belly. Strip steak ribeye pig spare ribs, turducken cow pork chop ground round hamburger chuck
                                pastrami filet mignon. Venison beef cow landjaeger ground round picanha spare ribs ribeye jerky shank pork loin drumstick ham porchetta fatback. Pig sausage biltong ham hock andouille shankle pork belly short loin porchetta.
                            </p>
                            <h4>Professional Life:</h4>
                            <p>
                                Swine pork chop chicken, doner pork tri-tip kevin porchetta chuck gofrger. Leberkas jerky frankfurter beef ribs shank turducken. Leberkas bacon pola landjaeger.
                            </p>

                        </div>

                        <div class="tab-pane fade" id="tab2">
                            <p>
                                <strong class="grey">Skill Name</strong>
                                <span class="pull-right">90%</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="90">
                                    <span>90%</span>
                                </div>
                            </div>

                            <p>
                                <strong class="grey">Skill Name</strong>
                                <span class="pull-right">100%</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="100">
                                    <span>100%</span>
                                </div>
                            </div>

                            <p>
                                <strong class="grey">Skill Name</strong>
                                <span class="pull-right">75%</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="75">
                                    <span>75%</span>
                                </div>
                            </div>

                            <p>
                                <strong class="grey">Skill Name</strong>
                                <span class="pull-right">95%</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="95">
                                    <span>95%</span>
                                </div>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="tab3">
                            <form class="contact-form" method="post" action="./">
                                <p class="contact-form-name">
                                    <label for="name">Name
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" id="name" aria-required="true" size="30" value="" name="name" class="form-control" placeholder="Name">
                                </p>
                                <p class="contact-form-email">
                                    <label for="email">Email
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" id="email" aria-required="true" size="30" value="" name="email" class="form-control" placeholder="Email">
                                </p>
                                <p class="contact-form-message">
                                    <label for="message">Message</label>
                                    <textarea aria-required="true" id="message" rows="8" cols="45" name="message" class="form-control" placeholder="Message"></textarea>
                                </p>
                                <p class="contact-form-submit">
                                    <button type="submit" name="contact_submit" class="theme_button color1">Send Message</button>
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- eof .tab-content -->

                    <p>
                        Kevin jowl hamburger capicola bacon ribeye tail spare ribs kielbasa. Beef ribs kevi flank swine rump, jerky pig bresaola jowl turducken brisket tongue leberkas spare ribs. Drum tongue capicola, swine pig turducken spare ribs filet mignon corned picanha
                        pancetta bresaola. Flank alcatra fatback chicken hamburger strip steak. Drumstick beef brisket cow. Porchetta tenderloin sausage.
                    </p>

                    <div class="topmargin_70 bottommargin_70">
                        <blockquote class="no-border text-center">
                            <p class="yantramanov highlight">“Prosciutto pork belly shank, ham hock capicola flank andouille meatloaf fatback salami beef tri-tip. Capicola short ribs swine.”</p>
                            <div class="item-meta small-text2">
                                aria shine / blood patient
                            </div>
                        </blockquote>
                    </div>

                    <p>
                        Frankfurter andouille pork belly tongue doner. Shank filet mignon brisket ham. Ball tip short ribs bresaola tri-tip filet mignon shoulder, swine jerky ground round andouille. Shankle beef ribs chicken, corned beef kielbasa pork loin cupim fatback.
                    </p>

                </div>

            </div>
        </div>
    </section>

@endsection