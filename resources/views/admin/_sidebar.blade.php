<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('assets')}}/admin/assets/img/sidebar-2.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Admin Yönetici Sayfası
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="./dashboard.html">
                    <i class="material-icons">dashboard</i>
                    <p>Ana Sayfa</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_category')}}">
                    <i class="material-icons">person</i>
                    <p>Kategoriler</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_cars')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Araba İlanları</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_setting')}}">
                    <i class="material-icons">library_books</i>
                    <p>Ayarlar</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_message')}}">
                    <i class="material-icons">library_books</i>
                    <p>Mesajlar</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_faq')}}">
                    <i class="material-icons">library_books</i>
                    <p>FAQ</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_logout')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Logout</p>
                </a>
            </li>

            <!-- <li class="nav-item active-pro ">
                  <a class="nav-link" href="./upgrade.html">
                      <i class="material-icons">unarchive</i>
                      <p>Upgrade to PRO</p>
                  </a>
              </li> -->
        </ul>
    </div>
</div>
