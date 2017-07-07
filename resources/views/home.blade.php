
<!-- Navbar -->
@include('navbar.navbar')


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1200px;margin-top:6%">
    {{--@if (session('status'))--}}
        {{--<div class="alert alert-success">--}}
            {{--{{ session('status') }}--}}
        {{--</div>--}}
{{--@endif--}}
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">

            <!-- Profile -->
            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container">
                    <h4 class="w3-center"> {{ $user->name }} </h4>
                    <p class="w3-center"><img src="/uploads/avatars/{{ $user->avatar }}" class="w3-circle"
                                              style="height:150px;width:150px" alt="Avatar"></p>
                    <hr>
                    <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Web Developer, Service2fruit.com </p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Nijmegen, Nederlands</p>
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>
                        {{ $user->dob->format('j F Y') }} ({{ $user->dob->age }} years old)</p>
                </div>
            </div>
            <br>

            <!-- Accordion -->
            <div class="w3-card-2 w3-round">
                <div class="w3-white">
                    <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
                    <div id="Demo1" class="w3-hide w3-container">
                        <p>Some text..</p>
                    </div>
                    <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
                    <div id="Demo2" class="w3-hide w3-container">
                        <p>Some other text..</p>
                    </div>
                    <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
                    <div id="Demo3" class="w3-hide w3-container">
                        <div class="w3-row-padding">
                            <br>


                            {{--<div class="w3-half">--}}
                                {{--<img src="w3images/lights.jpg" alt="Norway" style="width:100%" class="w3-margin-bottom w3-dropdown-hover">--}}
                                {{--<div class="w3-dropdown-content" style="width:300px">--}}
                                    {{--<img src="w3images/lights.jpg" alt="Norway" style="width:100%">--}}
                                    {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class=" w3-half w3-dropdown-hover"><img src="w3images/lights.jpg" alt="Monterosso" style="width:20%">--}}
                                {{--<div class="w3-dropdown-content w3-margin-bottom" style="width:300px"><br>--}}
                                    {{--<img src="w3images/lights.jpg" alt="Norway" style="width:100%">--}}
                                    {{--<a href="#" class="w3-border">Visit Norway »</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            <div class="w3-half">
                                <img src="w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="w3images/fjords.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- Interests -->
            <div class="w3-card-2 w3-round w3-white w3-hide-small">
                <div class="w3-container">
                    <p>Interests</p>
                    <p>
                        <span class="w3-tag w3-small w3-theme-d5">News</span>
                        <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
                        <span class="w3-tag w3-small w3-theme-d3">Labels</span>
                        <span class="w3-tag w3-small w3-theme-d2">Games</span>
                        <span class="w3-tag w3-small w3-theme-d1">Friends</span>
                        <span href="http://www.friv-2017.com/" class="w3-tag w3-small w3-theme">Games</span>
                        <span class="w3-tag w3-small w3-theme-l1">Friends</span>
                        <span class="w3-tag w3-small w3-theme-l2">Food</span>
                        <span class="w3-tag w3-small w3-theme-l3">Design</span>
                        <span class="w3-tag w3-small w3-theme-l4">Art</span>
                        <span class="w3-tag w3-small w3-theme-l5">Photos</span>
                    </p>
                </div>
            </div>
            <br>

            <!-- Alert Box -->
            <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
                <p><strong>Hey!</strong></p>
                <p>People are looking at your profile. Find out who.</p>
            </div>

            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->
        <div class="w3-col m7">

            @include('posts.createpost')

            @include('posts.index')



                    {{--//Pagination--}}
            <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="w3css_colors.asp">❮ Previous</a>
          <a class="w3-right w3-btn" href="w3css_panels.asp">Next ❯</a>
            {{ $posts->links() }}
          </div>

            {{--//Pagination--}}
            <!-- <div class="w3-pagination">
            <div class="col-md-4 col-md-offset-4">
            {{--{{ $posts->links() }}--}}
            </div>
            </div> -->

            <!-- End Middle Column -->
        </div>


        <!-- Right Column -->
        <div class="w3-col m2">
            <div class="w3-card-2 w3-round w3-white w3-center w3-hover-yellow">
                <div class="w3-container">
                    <p>Upcoming Events:</p>
                    <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
                    <p><strong>Holiday</strong></p>
                    <p>Friday 15:00</p>
                    <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                </div>
            </div>
            <br>

            <div class="w3-card-2 w3-round w3-white w3-center">
                <div class="w3-container">
                    <p>Friend Request</p>
                    <img src="/uploads/avatars/nuro.jpg" alt="Avatar" style="width:80%"><br>
                    <span>Nuradin Dedeic</span>
                    <div class="w3-row w3-opacity">

                        <div class="w3-half">
                            <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i> Accept</button>
                        </div>
                        <div class="w3-half">
                            <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i> Decline</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="w3-card-2 w3-round w3-blue w3-padding-16 w3-center w3-hover-yellow">
                <a href="http://www.friv-2017.com/" title="Play Friv games">
                    <img id="friv" src="http://m.juegosfriv2017.net/games/images/Tomb-Runner.png">
                </a>
                <br> Wanna play some Games? Friv is awesome!!
            </div>
            <br>

            <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center">
                <p><i class="fa fa-bug w3-xxlarge"></i></p>
            </div>

            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>
<br>

@extends('layouts.footer')
