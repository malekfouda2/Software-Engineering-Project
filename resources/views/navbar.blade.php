<header class="header-section header-normal">
    <div class="container-fluid">
        <div class="container">
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        @if(!Auth::check())
                            <li><a href="./">Home Page</a></li>
                            <li><a href="./aboutus">About us</a></li>
                            <li><a href="./schedule">Schedule</a></li>
                            <li><a href="./gallery">Gallery</a></li>
                            <li><a href="./blog">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="./aboutus">About Us</a></li>
                                    <li><a href="./singleblog">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact">Contact Us</a></li>
                            <li><a href="./login">Login</a></li>
                            <li><a href="./signup">Sign Up</a></li>

                        @elseif(Auth::user()->type == '1')

                            <li><a href="./admin">View Members</a></li>
                            <li><a href="./addmember">Add Member</a></li>
                            <li><a href="./viewcoaches">View Coaches</a></li>
                            <li><a href="./addcoach">Add Coach</a></li>
                            <li><a href="./viewsupplements">View Supplements</a></li>
                            <li><a href="./addsupplement">Add Supplement</a></li>
                            <li><a href="/logout">Logout</a></li>

                        @elseif(Auth::user()->type == '2')

                            <li><a href="./coach">View Members</a></li>
                            <li><a href="./addmember">Add Member</a></li>
                            <li><a href="./viewsupplements">View Supplements</a></li>
                            <li><a href="./addsupplement">Add Supplement</a></li>
                            <li><a href="./profile">Profile</a></li>
                            <li><a href="/logout">Logout</a></li>

                        @elseif(Auth::user()->type == '3')

                            <li><a href="./member">Member Area</a></li>
                            <li><a href="./viewmembership">Check Your MemberShip</a></li>
                            <li><a href="./viewdiet">Check Your Nutrition Plan</a></li>
                            <li><a href="./viewcoach">Check Your Coach</a></li>
                            <li><a href="./viewsupplements">Supplements</a></li>
                            <li><a href="/profile">Profile</a></li>
                            <li><a href="/logout">Logout</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
