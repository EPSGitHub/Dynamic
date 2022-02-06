<div class="sidebar" id="sidebar" style="background-color:#0D6B4F;">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="{{ (Route::currentRouteName()=='admin.dashboard')? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>


                <!-- <li class="submenu">
                    <a href="#"><i class="fe fe-activity"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                     <li class="{{ (Route::currentRouteName()=='blogpost.create')? 'ok' : '' }}"><a href="{{ route('blogpost.create')}}">Add Blog Post</a></li>
                      <li class="{{ (Route::currentRouteName()=='blogpost.index')? 'ok' : '' }}"><a href="{{ route('blogpost.index')}}">Blog Post List</a></li> -->
                        <!-- <li class="{{ (Route::currentRouteName()=='post.create')? 'ok' : '' }}"><a href="{{ route('post.create')}}">Create Post</a></li>
                        <li class="{{ (Route::currentRouteName()=='post.index')? 'ok' : '' }}"><a href="{{ route('post.index')}}">All Post</a></li> -->
                        <!-- <li class="{{ (Route::currentRouteName()=='postcat.index')? 'ok' : '' }}"><a href="{{ route('postcat.index') }}">Category</a></li>
                        <li class="{{ (Route::currentRouteName()=='post-tag.index')? 'ok' : '' }}"><a href="{{ route('post-tag.index') }}">Tag</a></li>
                    </ul>
                </li> -->
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Home</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                

            <a href="#"><i class="fe fe-document"></i> <span>Benifits</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
            <li class="{{ (Route::currentRouteName()=='benifit.index')? 'ok' : '' }}"><a href="{{ route('benifit.index') }}">All Benifits</a></li>
            <li class="{{ (Route::currentRouteName()=='benifit.create')? 'ok' : '' }}"><a href="{{ route('benifit.create') }}">Add Benifits</a></li>

           </ul>
           <a href="#"><i class="fe fe-document"></i> <span>About</span> <span class="menu-arrow"></span></a>
           <ul style="display: none;">
           <li class="{{ (Route::currentRouteName()=='about.index')? 'ok' : '' }}"><a href="{{ route('about.index') }}">All Abouts</a></li>
           <li class="{{ (Route::currentRouteName()=='about.create')? 'ok' : '' }}"><a href="{{ route('about.create') }}">Add Abouts</a></li>

          </ul>

        </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="login.html"> user </a></li>
                        <li><a href="register.html"> permission </a></li>
                        <li><a href="forgot-password.html"> Role </a></li>
                        <li><a href="lock-screen.html"> Lock Screen </a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="login.html"> user </a></li>
                        <li><a href="register.html"> permission </a></li>
                        <li><a href="forgot-password.html"> Role </a></li>
                        <li><a href="lock-screen.html"> Lock Screen </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-vector"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="login.html"> slider </a></li>
                        <li><a href="register.html"> Contact US </a></li>
                        <li><a href="register.html">Social Icons</a></li>

                    </ul>
                </li>

                <li class="nav-item mt-auto">
                  <a href="{{ route('website') }}" class="nav-link" target="_blank">
                  <i class="fe fe-logout"></i>
                  <span> View Web Site</span>
                </a>
              </li>



            </ul>
        </div>
    </div>
</div>
