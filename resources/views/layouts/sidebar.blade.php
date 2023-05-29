<nav class="page-sidebar sidebar-fixed " id="sidebar"  >
    <div id="sidebar-collapse"  >
        <!-- <div class="admin-block d-flex">
            <div>
                <img src="./assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">James Brown</div><small>Administrator</small></div>
        </div> -->
        <ul class="side-menu metismenu ">
            <li>
                <a href="{{ url('/dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li> 
            <li>
                <a href="{{ url('/scanner')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Scanner</span>
                </a>
            </li> 
            <li>
                <a href="{{ url('/user/list')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">User List</span>
                </a>
            </li>  
           
        </ul>
    </div>
</nav>

 

