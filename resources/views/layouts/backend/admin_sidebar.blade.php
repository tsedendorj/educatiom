<div class="site-menubar-body">
  <div>
    <div>
      <ul class="site-menu" data-plugin="menu">
        <!-- <li class="site-menu-category">General</li> -->
        <li class="site-menu-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Удирдах хэсэг</span>
            </a>
        </li>
         <li class="site-menu-item {{ request()->is('admin/user*') ? 'active' : '' }}">
            <a href="{{ route('admin.users') }}">
                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">Хэрэглэгчийн менежмент</span>
            </a>
        </li>
        <li class="site-menu-item {{ request()->is('admin/categor*') ? 'active' : '' }}">
            <a href="{{ route('admin.categories') }}">
                <i class="site-menu-icon wb-tag" aria-hidden="true"></i>
                <span class="site-menu-title">Ангиллууд</span>
            </a>
        </li>
        <li class="site-menu-item {{ request()->is('admin/withdraw-requests') ? 'active' : '' }}">
            <a href="{{ route('admin.withdraw.requests') }}">
                <i class="site-menu-icon fas fa-hand-holding-usd" aria-hidden="true"></i>
                <span class="site-menu-title">Төлбөрийн хүсэлтүүд</span>
            </a>
        </li>
        <li class="site-menu-item {{ request()->is('admin/blog*') ? 'active' : '' }}">
            <a href="{{ route('admin.blogs') }}">
                <i class="site-menu-icon fas fa-blog" aria-hidden="true"></i>
                <span class="site-menu-title">Блогууд</span>
            </a>
        </li>

        <li class="site-menu-item has-sub {{ request()->is('admin/config/page-*') ? 'active open' : '' }}">
            <a href="javascript:void(0)">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                <span class="site-menu-title">Хуудаснууд</span>
                <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">
                <li class="site-menu-item {{ request()->is('admin/config/page-home') ? 'active' : '' }}">
                  <a href="{{ route('admin.pageHome') }}">
                    <span class="site-menu-title">Нүүр хуудас</span>
                  </a>
                </li>
                <li class="site-menu-item {{ request()->is('admin/config/page-about') ? 'active' : '' }}">
                  <a href="{{ route('admin.pageAbout') }}">
                    <span class="site-menu-title">Бидний тухай</span>
                  </a>
                </li>
                <li class="site-menu-item {{ request()->is('admin/config/page-contact') ? 'active' : '' }}">
                  <a href="{{ route('admin.pageContact') }}">
                    <span class="site-menu-title">Холбоо барих</span>
                  </a>
                </li>
            </ul>
        </li>

        <li class="site-menu-item has-sub {{ request()->is('admin/config/setting-*') ? 'active open' : '' }}">
            <a href="javascript:void(0)">
                <i class="site-menu-icon fas fa-cogs" aria-hidden="true"></i>
                <span class="site-menu-title">Тохиргоо</span>
                <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub">
                <li class="site-menu-item {{ request()->is('admin/config/setting-general') ? 'active' : '' }}">
                  <a href="{{ route('admin.settingGeneral') }}">
                    <span class="site-menu-title">Ерөнхий</span>
                  </a>
                </li>
                <li class="site-menu-item {{ request()->is('admin/config/setting-payment') ? 'active' : '' }}">
                  <a href="{{ route('admin.settingPayment') }}">
                    <span class="site-menu-title">Төлбөр</span>
                  </a>
                </li>
                <!-- <li class="site-menu-item {{ request()->is('admin/config/setting-email') ? 'active' : '' }}">
                  <a href="{{ route('admin.settingEmail') }}">
                    <span class="site-menu-title">Email</span>
                  </a>
                </li> -->
            </ul>
        </li>
        
      </ul>

      
    </div>
  </div>
</div>