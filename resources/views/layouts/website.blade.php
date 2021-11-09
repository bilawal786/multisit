@include('include.admin.header')

<div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li><a href="{{route('home')}}"><i class="zmdi zmdi-home"></i><span>Tableau de bord</span> </a> </li>
                <li class="active open"><a href=""><i class="zmdi zmdi-blogger"></i><span>Tableau de bord Web</span> </a> </li>
                <li> <a href="#"><i class="zmdi zmdi-plus-circle"></i><span>New Product</span> </a> </li>
                <li><a href="#"><i class="zmdi zmdi-sort-amount-desc"></i><span>Product List</span> </a> </li>
                <li><a href="#"><i class="zmdi zmdi-grid"></i><span>Categories</span> </a> </li>
                <li><a href="#"><i class="zmdi zmdi-label-alt"></i><span>Orders</span> </a> </li>
                <li class="header">Paramètres du site Web</li>
                <li><a href="{{route('website.slider', ['id' => request()->id])}}" class="waves-effect waves-block"><i class="zmdi zmdi-circle-o col-green"></i><span>Curseurs</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-circle-o col-red"></i><span>Paramètres</span> </a>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-circle-o col-amber"></i><span>À propos</span> </a>
                </li>
                <li><a href="javascript:void(0);" class="waves-effect waves-block"><i class="zmdi zmdi-circle-o col-purple"></i><span>Nos offres</span></a></li>
            </ul>
        </div>
    </div>

@include('include.admin.footer')
