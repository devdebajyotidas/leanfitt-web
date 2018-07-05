@extends('layouts.app')
@section('content')

<!-- Main container -->
<main>
    <div class="main-content">
        <div class="board-wrapper">
            <div class="board-scroller">
                <div class="">
                    <div class="card">
                        <h4 class="card-title">Divided and hoverable</h4>

                        <div id="first" class="media-list media-list-divided media-list-hover">
                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/1.jpg" alt="...">
                                <span>Maryam Amiri</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/2.jpg" alt="...">
                                <span>Hossein Shams</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/3.jpg" alt="...">
                                <span>Sarah Conner</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/4.jpg" alt="...">
                                <span>Tim Hank</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/5.jpg" alt="...">
                                <span>Frank Camly</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card">
                        <h4 class="card-title">Divided and hoverable</h4>

                        <div id="second" class="media-list media-list-divided media-list-hover">
                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/1.jpg" alt="...">
                                <span>Maryam Amiri</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/2.jpg" alt="...">
                                <span>Hossein Shams</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/3.jpg" alt="...">
                                <span>Sarah Conner</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/4.jpg" alt="...">
                                <span>Tim Hank</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/5.jpg" alt="...">
                                <span>Frank Camly</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card">
                        <h4 class="card-title">Divided and hoverable</h4>

                        <div id="third" class="media-list media-list-divided media-list-hover">
                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/1.jpg" alt="...">
                                <span>Maryam Amiri</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/2.jpg" alt="...">
                                <span>Hossein Shams</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/3.jpg" alt="...">
                                <span>Sarah Conner</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/4.jpg" alt="...">
                                <span>Tim Hank</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/5.jpg" alt="...">
                                <span>Frank Camly</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card">
                        <h4 class="card-title">Divided and hoverable</h4>

                        <div id="second" class="media-list media-list-divided media-list-hover">
                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/1.jpg" alt="...">
                                <span>Maryam Amiri</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/2.jpg" alt="...">
                                <span>Hossein Shams</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/3.jpg" alt="...">
                                <span>Sarah Conner</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/4.jpg" alt="...">
                                <span>Tim Hank</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/5.jpg" alt="...">
                                <span>Frank Camly</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card">
                        <h4 class="card-title">Divided and hoverable</h4>

                        <div id="third" class="media-list media-list-divided media-list-hover">
                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/1.jpg" alt="...">
                                <span>Maryam Amiri</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/2.jpg" alt="...">
                                <span>Hossein Shams</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/3.jpg" alt="...">
                                <span>Sarah Conner</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/4.jpg" alt="...">
                                <span>Tim Hank</span>
                            </div>

                            <div class="media media-single">
                                <img class="avatar avatar-sm" src="assets/img/avatar/5.jpg" alt="...">
                                <span>Frank Camly</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.main-content -->
</main>
<!-- END Main container -->

@endsection


<!-- Dragula dependencies -->

<link rel="stylesheet" href="{{ asset('assets/vendor/dragula/dragula.min.css') }}">
<script src="{{ asset('assets/vendor/dragula/dragula.min.js') }}"></script>

<script src="{{ asset('assets/vendor/dom-autoscroller/dom-autoscroller.min.js') }}"></script>

<!-- Dragula script-->
<script>

    app.ready(function () {

        var drake = dragula(
            $('.board-scroller .media-list').get()
        );

        var scroll = autoScroll([
            document.querySelector('.board-wrapper')
        ],{
            direction: 'horizontal',
            margin: 20,
            pixels: 10,
            maxSpeed: 25,
            scrollWhenOutside: true,
            autoScroll: function(){
                return this.down && drake.dragging;
            }
        });
    });

</script>