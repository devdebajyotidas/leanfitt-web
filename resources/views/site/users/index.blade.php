@extends('layouts.app')
@section('content')

<!-- Main container -->
<main>

    <!-- Page aside -->
    <aside class="aside aside-expand-md">
        <div class="aside-body">
            <!-- <div class="aside-block"> -->
            <!-- <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-center">+ New Department</button> -->
            <!-- </div> -->

            <!-- <hr> -->

            <div class="aside-block">
                <div class="flexbox mb-1">
                    <h6 class="aside-title">Departments</h6>
                    <a class="btn btn-xs btn-pure btn-primary float-right" href="#"
                       data-provide="tooltip" data-title="Create new label" data-original-title="" title=""
                       data-toggle="modal" data-target="#modal-center">
                        <i class="ti-plus"></i>
                    </a>
                </div>

                <ul class="nav nav-pills flex-column">
                    <li class="nav-item active">
                        <!-- <i class="fa fa-inbox"></i> -->
                        <a class="nav-link" href="#">Finance</a>
                        <span class="badge badge-pill badge-info">6</span>
                        <a class="nav-action hover-info" href="#" data-provide="tooltip" data-title="Edit"
                           data-original-title="" title="">
                            <span class="ti-pencil"></span>
                        </a>
                        <a class="nav-action hover-danger" href="#" data-provide="tooltip" data-title="Remove"
                           data-original-title="" title="">
                            <span class="ti-close"></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <!-- <i class="fa fa-exclamation-circle"></i> -->
                        <a class="nav-link" href="#">HR</a>
                        <span class="badge badge-pill badge-default">+100</span>
                        <a class="nav-action hover-info" href="#" data-provide="tooltip" data-title="Edit"
                           data-original-title="" title="">
                            <span class="ti-pencil"></span>
                        </a>
                        <a class="nav-action hover-danger" href="#" data-provide="tooltip" data-title="Remove"
                           data-original-title="" title="">
                            <span class="ti-close"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- <i class="fa fa-star"></i> -->
                        <a class="nav-link" href="#">Accounts</a>
                        <a class="nav-action hover-info" href="#" data-provide="tooltip" data-title="Edit"
                           data-original-title="" title="">
                            <span class="ti-pencil"></span>
                        </a>
                        <a class="nav-action hover-danger" href="#" data-provide="tooltip" data-title="Remove"
                           data-original-title="" title="">
                            <span class="ti-close"></span>
                        </a>
                    </li>
                </ul>
            </div>


            <hr>


            <div class="aside-block">
                <div class="flexbox align-items-center mb-1">
                    <h6 class="aside-title fs-13">Roles</h6>
                    <a class="float-right text-lighter hover-success" href="#" data-provide="tooltip"
                       data-title="Create New Label" data-toggle="modal" data-target="#modal-add-label"><i
                                class="ti-plus"></i></a>
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span class="badge badge-ring fill badge-danger"></span>
                            <span>Family</span>
                        </a>
                        <a class="nav-action hover-info" href="#" data-provide="tooltip" data-title="Edit"><span
                                    class="ti-pencil"></span></a>
                        <a class="nav-action hover-danger delete-label" href="#" data-provide="tooltip"
                           data-title="Remove"><span class="ti-close"></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="badge badge-ring badge-warning"></span>
                            <span>Fiends</span>
                        </a>
                        <a class="nav-action hover-info" href="#" data-provide="tooltip" data-title="Edit"><span
                                    class="ti-pencil"></span></a>
                        <a class="nav-action hover-danger delete-label" href="#" data-provide="tooltip"
                           data-title="Remove"><span class="ti-close"></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="badge badge-ring badge-info"></span>
                            <span>Work</span>
                        </a>
                        <a class="nav-action hover-info" href="#" data-provide="tooltip" data-title="Edit"><span
                                    class="ti-pencil"></span></a>
                        <a class="nav-action hover-danger delete-label" href="#" data-provide="tooltip"
                           data-title="Remove"><span class="ti-close"></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="badge badge-ring badge-purple"></span>
                            <span>Bills</span>
                        </a>
                        <a class="nav-action hover-info" href="#" data-provide="tooltip" data-title="Edit"><span
                                    class="ti-pencil"></span></a>
                        <a class="nav-action hover-danger delete-label" href="#" data-provide="tooltip"
                           data-title="Remove"><span class="ti-close"></span></a>
                    </li>
                </ul>
            </div>


        </div>

        <button class="aside-toggler"></button>
    </aside>
    <!-- END Page aside -->

    @include('site.users.partials.page-header')

    <div class="main-content">
        <div class="card">
            <div class="media-list media-list-divided media-list-hover">
                <div class="media">
                    <a class="avatar avatar-lg status-success" href="#">
                        <img src="../assets/img/avatar/1.jpg" alt="...">
                    </a>

                    <div class="media-body">
                        <p>
                            <a class="hover-primary" href="#"><strong>Maryam Amiri</strong></a>
                            <small class="sidetitle">Online</small>
                        </p>
                        <p>Designer</p>

                        <nav class="nav no-gutters mt-2">
                            <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
                        </nav>
                    </div>

                    <div class="media-right gap-items">
                        <a class="media-action lead" href="#" data-provide="tooltip" title="" data-original-title="Orders"><i class="ti-shopping-cart"></i></a>
                        <a class="media-action lead" href="#" data-provide="tooltip" title="" data-original-title="Receipts"><i class="ti-receipt"></i></a>
                        <div class="btn-group">
                            <a class="media-action lead" "="" href="#" data-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                            </div>
                        </div>

                    </div>
                </div>




                <div class="media">
                    <a class="avatar avatar-lg" href="#">
                        <img src="../assets/img/avatar/2.jpg" alt="...">
                    </a>

                    <div class="media-body">
                        <p>
                            <a class="hover-primary" href="#"><strong>Hossein Shams</strong></a>
                            <small class="sidetitle">Last seen: 2 hours ago</small>
                        </p>
                        <p>Full Stack Developer</p>

                        <nav class="nav no-gutters mt-2">
                            <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
                        </nav>
                    </div>

                    <div class="media-right gap-items">
                        <a class="media-action lead" href="#" data-provide="tooltip" title="" data-original-title="Orders"><i class="ti-shopping-cart"></i></a>
                        <a class="media-action lead" href="#" data-provide="tooltip" title="" data-original-title="Receipts"><i class="ti-receipt"></i></a>
                        <div class="btn-group">
                            <a class="media-action lead" "="" href="#" data-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                            </div>
                        </div>

                    </div>
                </div>




                <div class="media">
                    <a class="avatar avatar-lg status-warning" href="#">
                        <img src="../assets/img/avatar/3.jpg" alt="...">
                    </a>

                    <div class="media-body">
                        <p>
                            <a class="hover-primary" href="#"><strong>Sarah Conner</strong></a>
                            <small class="sidetitle">Last seen: 12 min ago</small>
                        </p>
                        <p>Support Agent</p>

                        <nav class="nav no-gutters mt-2">
                            <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
                        </nav>
                    </div>

                    <div class="media-right gap-items">
                        <a class="media-action lead" href="#" data-provide="tooltip" title="" data-original-title="Orders"><i class="ti-shopping-cart"></i></a>
                        <a class="media-action lead" href="#" data-provide="tooltip" title="" data-original-title="Receipts"><i class="ti-receipt"></i></a>
                        <div class="btn-group">
                            <a class="media-action lead" "="" href="#" data-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                            </div>
                        </div>

                    </div>
                </div>




                <div class="media">
                    <a class="avatar avatar-lg status-success" href="#">
                        <img src="../assets/img/avatar/4.jpg" alt="...">
                    </a>

                    <div class="media-body">
                        <p>
                            <a class="hover-primary" href="#"><strong>Frank Camly</strong></a>
                            <small class="sidetitle">Online</small>
                        </p>
                        <p>Support Agent</p>

                        <nav class="nav no-gutters mt-2">
                            <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
                        </nav>
                    </div>

                    <div class="media-right gap-items">
                        <a class="media-action lead" href="#" data-provide="tooltip" title="" data-original-title="Orders"><i class="ti-shopping-cart"></i></a>
                        <a class="media-action lead" href="#" data-provide="tooltip" title="" data-original-title="Receipts"><i class="ti-receipt"></i></a>
                        <div class="btn-group">
                            <a class="media-action lead" "="" href="#" data-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                            </div>
                        </div>

                    </div>
                </div>




                <div class="media">
                    <a class="avatar avatar-lg status-success" href="#">
                        <img src="../assets/img/avatar/5.jpg" alt="...">
                    </a>

                    <div class="media-body">
                        <p>
                            <a class="hover-primary" href="#"><strong>Freddie Arends</strong></a>
                            <small class="sidetitle">Last seen: yesterday</small>
                        </p>
                        <p>Marketing Department</p>

                        <nav class="nav no-gutters mt-2">
                            <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
                            <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
                        </nav>
                    </div>

                    <div class="media-right gap-items">
                        <a class="media-action lead" href="#" data-provide="tooltip" title="" data-original-title="Orders"><i class="ti-shopping-cart"></i></a>
                        <a class="media-action lead" href="#" data-provide="tooltip" title="" data-original-title="Receipts"><i class="ti-receipt"></i></a>
                        <div class="btn-group">
                            <a class="media-action lead" "="" href="#" data-toggle="dropdown"><i class="ti-more-alt rotate-90"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-comments"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-phone"></i> Call</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-fw fa-remove"></i> Remove</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <nav class="mt-3">
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

        </div>
    </div><!--/.main-content -->

</main>
<!-- END Main container -->


<div class="fab fab-fixed">
    <a class="btn btn-float btn-primary" href="#dock-compose" title="New Email" data-provide="tooltip"
       data-toggle="dock"><i class="ti-pencil"></i></a>
</div>


<!-- Modal - Add new label -->
<div class="modal modal-top fade" id="modal-add-label" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body pt-30">
                <input class="form-control" type="text" placeholder="Label name">
                <br>
                <div class="text-center">
                    <div class="color-selector color-selector-sm">
                        <label>
                            <input type="radio" name="color-label" checked>
                            <span class="bg-primary"></span>
                        </label>

                        <label>
                            <input type="radio" name="color-label">
                            <span class="bg-success"></span>
                        </label>

                        <label>
                            <input type="radio" name="color-label">
                            <span class="bg-info"></span>
                        </label>

                        <label>
                            <input type="radio" name="color-label">
                            <span class="bg-warning"></span>
                        </label>

                        <label>
                            <input type="radio" name="color-label">
                            <span class="bg-danger"></span>
                        </label>

                        <label>
                            <input type="radio" name="color-label">
                            <span class="bg-purple"></span>
                        </label>

                        <label>
                            <input type="radio" name="color-label">
                            <span class="bg-pink"></span>
                        </label>

                        <label>
                            <input type="radio" name="color-label">
                            <span class="bg-yellow"></span>
                        </label>

                        <label>
                            <input type="radio" name="color-label">
                            <span class="bg-brown"></span>
                        </label>

                        <label>
                            <input type="radio" name="color-label">
                            <span class="bg-dark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-bold btn-pure btn-primary">Add label</button>
            </div>
        </div>
    </div>
</div>
<!-- END Modal - Add new label -->


<div class="dock-list">

    <!-- Dock - Compose an email -->
    <div id="dock-compose" class="dock">
        <header class="dock-header dock-header-inverse bg-info">
            <div class="dock-title">
                <span><i class="fa fa-envelope"></i></span>
                <span>New Email</span>
            </div>

            <div class="dock-actions">
                <span title="Close" data-provide="tooltip" data-dock="close"></span>
                <span title="Maximize" data-provide="tooltip" data-dock="maximize"></span>
                <span title="Minimize" data-provide="tooltip" data-dock="minimize"></span>
                <a title="Settings" data-provide="tooltip"><i class="ti-settings"></i></a>
            </div>
        </header>

        <form class="dock-body">
            <input class="form-control form-control-lg b-0 bb-1" type="text" placeholder="To">
            <input class="form-control form-control-lg b-0 bb-1" type="text" placeholder="Subject">
            <div class="quill-no-border">
                <div data-provide="quill" data-placeholder="Write something..." style="height: 206px"></div>
            </div>
            <div class="gap-items-2 text-right p-10 bg-lightest bt-1">
                <button class="btn btn-secondary" type="button" data-dock="close">Cancel</button>
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal - Add new department -->
<div class="modal modal-center fade" id="modal-center" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Department</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group m-b-15">
                    <input class="form-control form-control-lg" type="text" placeholder="Department Name"/>
                </div>
                <div class="form-group m-b-15">
                        <textarea class="form-control form-control-lg" rows="8"
                                  placeholder="Department Description"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close
                </button>
                <button type="button" class="btn btn-bold btn-pure btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- END Modal - Add new department -->

<!-- Global quickview -->
<div id="qv-global" class="quickview" data-url="assets/data/quickview-global.html">
    <div class="spinner-linear">
        <div class="line"></div>
    </div>
</div>
<!-- END Global quickview -->

@endsection

<script>
    app.ready(function () {

        // Delete label
        //
        $('.delete-label').on('click', function () {
            $(this).closest('.nav-item').fadeOut(700, function () {
                app.toast('Label removed successfully.', {
                    actionTitle: 'Undo'
                })
            });
        });
    });
</script>

