<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('home') }}">My Toko</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('home') }}">MT</a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Menu</li>
            <ul class="sidebar-menu">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>User Manajement</span></a>
                    <ul class="dropdown-menu">
                        <li class=''>
                            <a class="nav-link" href="{{ route('user.index') }}">Users</a>
                        </li>

                    </ul>
                    <ul class="dropdown-menu">
                        <li class=''>
                            <a class="nav-link" href="
                            {{ route('customer.index') }}
                            ">Customer</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="sidebar-menu">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Warehouse</span></a>
                    <ul class="dropdown-menu">
                        <li class=''>
                            <a class="nav-link" href="
                            {{ route('flower.index') }}
                            ">Product</a>
                        </li>

                        <li class=''>
                            <a class="nav-link" href="
                            {{ route('delivery.index') }}
                            ">Delivery</a>
                        </li>

                        <li class=''>
                            <a class="nav-link" href="
                            {{ route('order.index') }}
                            ">Order</a>
                        </li>

                        <li class=''>
                            <a class="nav-link" href="
                            {{ route('orderdetail.index') }}
                            ">Order Detail</a>
                        </li>

                        <li class=''>
                            <a class="nav-link" href="
                            {{ route('payment.index') }}
                            ">Payment</a>
                        </li>

                    </ul>
                   <ul class="dropdown-menu">
                        <li class=''>
                            <a class="nav-link" href="
                            {{ route('courier.index') }}
                            ">Kurir</a>
                        </li>
                    </ul>
                </li>
            </ul>

            {{-- <li>
                <a href="{{ route('user.index') }}" class="nav-link"><i class="fas fa-users"></i><span>Users</span></a>
            </li> --}}


        </ul>

    </aside>
</div>
