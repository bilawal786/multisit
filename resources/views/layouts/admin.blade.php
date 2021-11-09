@include('include.admin.header')
    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="#"><img src="{{asset('admin/assets/images/profile_av.jpg')}}" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6>Admin</h6>
                            <p class="m-b-0">admin@gmail.com</p>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-facebook-box"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-linkedin-box"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter-box"></i></a>
                        </div>
                    </div>
                </li>
                <li class="header">MAIN</li>
                <li class="active open"> <a href="{{route('home')}}"><i class="zmdi zmdi-home"></i><span>Tableau de bord</span></a></li>
                <li><a href="{{route('admin.websites')}}" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Sites Internet</span> <span class="badge badge-success float-right"></span></a>

                </li>
            </ul>
        </div>
    </div>
@include('include.admin.footer')
