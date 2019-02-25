<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('back/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route ('posts.index')}}"><i class="fa fa-circle-o"></i> All Posts</a></li>
            <li><a href="{{route('posts.create')}}"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-folder"></i> 
          <span>Categories</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route ('category.index')}}"><i class="fa fa-circle-o"></i> All categories</a></li>
          <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i> Add categories</a></li>
        </ul>
      </li>
      </ul>
    </section>