<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('admin/images/user.png')}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin
            </div>
            <div class="email">admin@gmail.com
        </div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="{{route('logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="index.html">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{route('feature')}}">
                    <i class="material-icons">widgets</i>
                    <span>View Feature</span>
                </a>
            </li>
            <li>
                 <a href="{{route('service')}}">
                    <i class="material-icons">build</i>
                    <span>View Services</span>
                </a>
            </li>

            <li>
                 <a href="{{route('blog')}}">
                    <i class="material-icons">open_in_new</i>
                    <span>View Blogs</span>
                </a>
            </li>

            <li>
                 <a href="{{route('team-member')}}">
                    <i class="material-icons">people</i>
                    <span>View Member</span>
                </a>
            </li>
             <li>
                 <a href="{{route('portfolio')}}">
                    <i class="material-icons">apps</i>
                    <span>View Portfolio</span>
                </a>
            </li>
            <li>
                 <a href="{{route('all-slider')}}">
                    <i class="material-icons">games</i>
                    <span>View Slider</span>
                </a>
            </li>

              <li>
                 <a href="{{route('all-priceplan')}}">
                    <i class="material-icons">shopping_cart</i>
                    <span>View Product</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>