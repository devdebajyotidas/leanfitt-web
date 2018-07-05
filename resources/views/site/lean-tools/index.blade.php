@extends('layouts.app')
@section('content')

    <!-- Main container -->
    <main>

        @include('site.lean-tools.partials.page-header')

        <div class="main-content">
            {{--<header class="flexbox align-items-center media-list-header bg-transparent b-0 py-16 pl-20">--}}
                {{--<div class="flexbox align-items-center">--}}
                    {{--<label class="custom-control custom-checkbox">--}}
                        {{--<input type="checkbox" class="custom-control-input">--}}
                        {{--<span class="custom-control-indicator"></span>--}}
                    {{--</label>--}}

                    {{--<span class="divider-line mx-1"></span>--}}

                    {{--<div class="dropdown">--}}
                        {{--<a class="btn btn-sm dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">Sort--}}
                            {{--by</a>--}}
                        {{--<div class="dropdown-menu" x-placement="bottom-start"--}}
                             {{--style="position: absolute; top: 30px; left: 0px; will-change: top, left;">--}}
                            {{--<a class="dropdown-item" href="#">Date</a>--}}
                            {{--<a class="dropdown-item" href="#">Name</a>--}}
                            {{--<a class="dropdown-item" href="#">Balance</a>--}}
                            {{--<a class="dropdown-item" href="#">Popular</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div>--}}
                    {{--<div class="lookup lookup-circle lookup-right">--}}
                        {{--<input type="text" data-provide="media-search">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</header>--}}

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="flexbox align-items-center px-20 pt-20">
                            <label class="toggler toggler-yellow fs-16">
                                <input type="checkbox" checked="">
                                <i class="fa fa-star"></i>
                            </label>
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#" aria-expanded="false"><i
                                            class="ti-more-alt rotate-90 text-muted"></i></a>
                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                     style="position: absolute; top: 19px; left: 13px; will-change: top, left;">
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-download"></i> Download
                                        Resume</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center pt-1 pb-20">
                            <a href="#">
                                <img class="avatar avatar-xxl" src="assets/img/avatar/1.jpg">
                            </a>
                            <h5 class="mt-2 mb-0"><a class="hover-primary" href="#qv-user-details"
                                                     data-toggle="quickview">Maryam Amiri</a></h5>
                            <span>Designer</span>
                            <div class="mt-20">
                                <span class="badge badge-default">Photoshop</span>
                                <span class="badge badge-default">Illustrator</span>
                                <span class="badge badge-default">Animation</span>
                            </div>
                        </div>

                        <footer class="card-footer flexbox">
                            <div>
                                <i class="fa fa-map-marker pr-1"></i>
                                <span>Blackwood, NJ</span>
                            </div>
                            <div>
                                <i class="fa fa-money pr-1"></i>
                                <span>$55 / hour</span>
                            </div>
                        </footer>
                    </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="flexbox align-items-center px-20 pt-20">
                            <label class="toggler toggler-yellow fs-16">
                                <input type="checkbox">
                                <i class="fa fa-star"></i>
                            </label>
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#" aria-expanded="false"><i
                                            class="ti-more-alt rotate-90 text-muted"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-download"></i> Download
                                        Resume</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center pt-1 pb-20">
                            <a href="#">
                                <img class="avatar avatar-xxl" src="assets/img/avatar/2.jpg">
                            </a>
                            <h5 class="mt-2 mb-0"><a class="hover-primary" href="#qv-user-details"
                                                     data-toggle="quickview">Hossein Shams</a></h5>
                            <span>Full Stack Developer</span>
                            <div class="mt-20">
                                <span class="badge badge-default">PHP</span>
                                <span class="badge badge-default">HTML</span>
                                <span class="badge badge-default">CSS</span>
                                <span class="badge badge-default">jQuery</span>
                            </div>
                        </div>

                        <footer class="card-footer flexbox">
                            <div>
                                <i class="fa fa-map-marker pr-1"></i>
                                <span>Stockbridge, GA</span>
                            </div>
                            <div>
                                <i class="fa fa-money pr-1"></i>
                                <span>$65 / hour</span>
                            </div>
                        </footer>
                    </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="flexbox align-items-center px-20 pt-20">
                            <label class="toggler toggler-yellow fs-16">
                                <input type="checkbox">
                                <i class="fa fa-star"></i>
                            </label>
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#" aria-expanded="false"><i
                                            class="ti-more-alt rotate-90 text-muted"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-download"></i> Download
                                        Resume</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center pt-1 pb-20">
                            <a href="#">
                                <img class="avatar avatar-xxl" src="assets/img/avatar/3.jpg">
                            </a>
                            <h5 class="mt-2 mb-0"><a class="hover-primary" href="#qv-user-details"
                                                     data-toggle="quickview">Sarah Conner</a></h5>
                            <span>Developer</span>
                            <div class="mt-20">
                                <span class="badge badge-default">C++</span>
                                <span class="badge badge-default">C#</span>
                                <span class="badge badge-default">SQL Server</span>
                            </div>
                        </div>

                        <footer class="card-footer flexbox">
                            <div>
                                <i class="fa fa-map-marker pr-1"></i>
                                <span>Miami, FL</span>
                            </div>
                            <div>
                                <i class="fa fa-money pr-1"></i>
                                <span>$30 / hour</span>
                            </div>
                        </footer>
                    </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="flexbox align-items-center px-20 pt-20">
                            <label class="toggler toggler-yellow fs-16">
                                <input type="checkbox">
                                <i class="fa fa-star"></i>
                            </label>
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#" aria-expanded="false"><i
                                            class="ti-more-alt rotate-90 text-muted"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-download"></i> Download
                                        Resume</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center pt-1 pb-20">
                            <a href="#">
                                <img class="avatar avatar-xxl" src="assets/img/avatar/4.jpg">
                            </a>
                            <h5 class="mt-2 mb-0"><a class="hover-primary" href="#qv-user-details"
                                                     data-toggle="quickview">Frank Camly</a></h5>
                            <span>Web Developer</span>
                            <div class="mt-20">
                                <span class="badge badge-default">ASP.Net</span>
                                <span class="badge badge-default">MVC.Net</span>
                                <span class="badge badge-default">HTML/CSS</span>
                            </div>
                        </div>

                        <footer class="card-footer flexbox">
                            <div>
                                <i class="fa fa-map-marker pr-1"></i>
                                <span>Lehigh Acres, FL</span>
                            </div>
                            <div>
                                <i class="fa fa-money pr-1"></i>
                                <span>$40 / hour</span>
                            </div>
                        </footer>
                    </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="flexbox align-items-center px-20 pt-20">
                            <label class="toggler toggler-yellow fs-16">
                                <input type="checkbox">
                                <i class="fa fa-star"></i>
                            </label>
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#" aria-expanded="false"><i
                                            class="ti-more-alt rotate-90 text-muted"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-download"></i> Download
                                        Resume</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center pt-1 pb-20">
                            <a href="#">
                                <img class="avatar avatar-xxl" src="assets/img/avatar/5.jpg">
                            </a>
                            <h5 class="mt-2 mb-0"><a class="hover-primary" href="#qv-user-details"
                                                     data-toggle="quickview">Freddie Arendes</a></h5>
                            <span>Marketer Guy</span>
                            <div class="mt-20">
                                <span class="badge badge-default">MBA</span>
                                <span class="badge badge-default">Persuasive</span>
                                <span class="badge badge-default">Team plating</span>
                            </div>
                        </div>

                        <footer class="card-footer flexbox">
                            <div>
                                <i class="fa fa-map-marker pr-1"></i>
                                <span>Akron, OH</span>
                            </div>
                            <div>
                                <i class="fa fa-money pr-1"></i>
                                <span>$50 / hour</span>
                            </div>
                        </footer>
                    </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="flexbox align-items-center px-20 pt-20">
                            <label class="toggler toggler-yellow fs-16">
                                <input type="checkbox" checked="">
                                <i class="fa fa-star"></i>
                            </label>
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#" aria-expanded="false"><i
                                            class="ti-more-alt rotate-90 text-muted"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-download"></i> Download
                                        Resume</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center pt-1 pb-20">
                            <a href="#">
                                <img class="avatar avatar-xxl" src="assets/img/avatar/6.jpg">
                            </a>
                            <h5 class="mt-2 mb-0"><a class="hover-primary" href="#qv-user-details"
                                                     data-toggle="quickview">Gary Camara</a></h5>
                            <span>Marketing</span>
                            <div class="mt-20">
                                <span class="badge badge-default">Good writing</span>
                                <span class="badge badge-default">Creativity</span>
                                <span class="badge badge-default">Influencer</span>
                            </div>
                        </div>

                        <footer class="card-footer flexbox">
                            <div>
                                <i class="fa fa-map-marker pr-1"></i>
                                <span>Seekonk, MA</span>
                            </div>
                            <div>
                                <i class="fa fa-money pr-1"></i>
                                <span>$50 / hour</span>
                            </div>
                        </footer>
                    </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="flexbox align-items-center px-20 pt-20">
                            <label class="toggler toggler-yellow fs-16">
                                <input type="checkbox">
                                <i class="fa fa-star"></i>
                            </label>
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#" aria-expanded="false"><i
                                            class="ti-more-alt rotate-90 text-muted"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-download"></i> Download
                                        Resume</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center pt-1 pb-20">
                            <a href="#">
                                <img class="avatar avatar-xxl" src="assets/img/avatar/7.jpg">
                            </a>
                            <h5 class="mt-2 mb-0"><a class="hover-primary" href="#qv-user-details"
                                                     data-toggle="quickview">Tim Hank</a></h5>
                            <span>Marketing Department</span>
                            <div class="mt-20">
                                <span class="badge badge-default">Negotiation</span>
                                <span class="badge badge-default">Expression</span>
                                <span class="badge badge-default">Writing</span>
                            </div>
                        </div>

                        <footer class="card-footer flexbox">
                            <div>
                                <i class="fa fa-map-marker pr-1"></i>
                                <span>Fremont, CA</span>
                            </div>
                            <div>
                                <i class="fa fa-money pr-1"></i>
                                <span>$55 / hour</span>
                            </div>
                        </footer>
                    </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="flexbox align-items-center px-20 pt-20">
                            <label class="toggler toggler-yellow fs-16">
                                <input type="checkbox" checked="">
                                <i class="fa fa-star"></i>
                            </label>
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#" aria-expanded="false"><i
                                            class="ti-more-alt rotate-90 text-muted"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-download"></i> Download
                                        Resume</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center pt-1 pb-20">
                            <a href="#">
                                <img class="avatar avatar-xxl" src="assets/img/avatar/8.jpg">
                            </a>
                            <h5 class="mt-2 mb-0"><a class="hover-primary" href="#qv-user-details"
                                                     data-toggle="quickview">Fidel Tonn</a></h5>
                            <span>Android Developer</span>
                            <div class="mt-20">
                                <span class="badge badge-default">Android</span>
                                <span class="badge badge-default">Java</span>
                                <span class="badge badge-default">Perl</span>
                            </div>
                        </div>

                        <footer class="card-footer flexbox">
                            <div>
                                <i class="fa fa-map-marker pr-1"></i>
                                <span>Columbus, OH</span>
                            </div>
                            <div>
                                <i class="fa fa-money pr-1"></i>
                                <span>$45 / hour</span>
                            </div>
                        </footer>
                    </div>
                </div>


                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="flexbox align-items-center px-20 pt-20">
                            <label class="toggler toggler-yellow fs-16">
                                <input type="checkbox" checked="">
                                <i class="fa fa-star"></i>
                            </label>
                            <div class="dropdown">
                                <a data-toggle="dropdown" href="#" aria-expanded="false"><i
                                            class="ti-more-alt rotate-90 text-muted"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-fw fa-download"></i> Download
                                        Resume</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body text-center pt-1 pb-20">
                            <a href="#">
                                <img class="avatar avatar-xxl" src="assets/img/avatar/default.jpg">
                            </a>
                            <h5 class="mt-2 mb-0"><a class="hover-primary" href="#qv-user-details"
                                                     data-toggle="quickview">Mark Owto</a></h5>
                            <span>iOS Developer</span>
                            <div class="mt-20">
                                <span class="badge badge-default">Swift</span>
                                <span class="badge badge-default">Xcode</span>
                                <span class="badge badge-default">Objective-C</span>
                            </div>
                        </div>

                        <footer class="card-footer flexbox">
                            <div>
                                <i class="fa fa-map-marker pr-1"></i>
                                <span>Seattle, WA</span>
                            </div>
                            <div>
                                <i class="fa fa-money pr-1"></i>
                                <span>$35 / hour</span>
                            </div>
                        </footer>
                    </div>
                </div>


            </div>


            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">
                            <span class="ti-arrow-left"></span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <span class="ti-arrow-right"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div><!--/.main-content -->
    </main>
    <!-- END Main container -->



    <div class="fab fab-fixed">
        <a class="btn btn-float btn-primary" href="#qv-user-add" title="New Employee" data-provide="tooltip"
           data-toggle="quickview"><i class="ti-plus"></i></a>
    </div>




    <!-- Quickview - Add user -->
    <div id="qv-user-add" class="quickview quickview-lg">
        <header class="quickview-header">
            <p class="quickview-title lead fw-400">Add New Organization</p>
            <span class="close"><i class="ti-close"></i></span>
        </header>

        <div class="quickview-body">

            <div class="card">
                <div class="card-body">
                    <div data-provide="wizard">
                        <ul class="nav nav-process nav-process-circle">
                            <li class="nav-item">
                                <span class="nav-title">Account</span>
                                <a class="nav-link" data-toggle="tab" href="#wizard-basic-1"></a>
                            </li>

                            <li class="nav-item">
                                <span class="nav-title">Social</span>
                                <a class="nav-link" data-toggle="tab" href="#wizard-basic-2"></a>
                            </li>

                            <li class="nav-item">
                                <span class="nav-title">Billing</span>
                                <a class="nav-link" data-toggle="tab" href="#wizard-basic-3"></a>
                            </li>

                        </ul>


                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="wizard-basic-1">
                                <p class="my-2">Professionally harness user friendly e-business through sticky human
                                    capital. Intrinsicly enable installed base infrastructures with client-centered
                                    opportunities. Collaboratively synergize reliable niches via resource.</p>
                            </div>


                            <div class="tab-pane fade" id="wizard-basic-2">
                                <p class="my-2">Continually underwhelm value-added infrastructures whereas inexpensive
                                    architectures. Dramatically whiteboard economically sound total linkage vis-a-vis
                                    client-based technology.</p>
                            </div>


                            <div class="tab-pane fade" id="wizard-basic-3">
                                <p class="my-2">Dynamically extend collaborative deliverables whereas collaborative
                                    human capital. Professionally reinvent distinctive communities without parallel
                                    alignments. Authoritatively network top-line best practices.</p>
                            </div>


                        </div>
                        <hr>

                        <div class="flexbox">
                            <button class="btn btn-secondary" data-wizard="prev">Back</button>
                            <button class="btn btn-secondary" data-wizard="next">Next</button>
                            <button class="btn btn-primary d-none" data-wizard="finish">Finish</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END  quickview-body -->

    </div>
    <!-- END Quickview - Add user -->




    <!-- Quickview - User detail -->
    <div id="qv-user-details" class="quickview quickview-lg">
        <div class="quickview-body">

            <div class="card card-inverse" style="margin-bottom: 0 !important;">
                <div class="flexbox px-20 pt-20">
                    <label class="toggler text-white">
                        <input type="checkbox">
                        <i class="fa fa-star"></i>
                    </label>

                    <a class="text-white fs-20 lh-1" href="#"><i class="fa fa-trash"></i></a>
                </div>

                <div class="card-body text-center pb-50">
                    <a href="#">
                        <img class="avatar avatar-xxl avatar-bordered" src="assets/img/avatar/1.jpg">
                    </a>
                    <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">Maryam Amiri</a></h4>
                    <span><i class="fa fa-map-marker w-20px"></i> San Fransisco</span>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified nav-tabs-info">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home-wide">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile-wide">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages-wide">Messages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#settings-wide">Settings</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="home-wide">
                                Globally syndicate resource sucking ideas through interactive networks. Proactively
                                underwhelm technically sound growth strategies after high-payoff customer service.
                                Professionally provide.
                            </div>
                            <div class="tab-pane fade" id="profile-wide">
                                Professionally embrace proactive value whereas customized solutions. Monotonectally
                                formulate high standards in e-business with cost effective ideas. Objectively cultivate
                                maintainable.
                            </div>
                            <div class="tab-pane fade" id="messages-wide">
                                Globally optimize market positioning experiences with an expanded array of users.
                                Seamlessly underwhelm backward-compatible customer service after extensive web services.
                            </div>
                            <div class="tab-pane fade" id="settings-wide">
                                Collaboratively optimize covalent technologies through high standards in models.
                                Objectively synthesize premier process improvements with granular functionalities.
                                Phosfluorescently disseminate technically.
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection