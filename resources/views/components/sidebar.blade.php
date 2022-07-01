<div id="app-sidepanel" class="app-sidepanel">
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none"></a>
        <div class="app-branding">
            <a class="app-logo" href="/home"><img class="logo-icon me-2" src="{{ asset('images/icon-deal.png') }}"
                    alt="logo">
                <span class="logo-text text-primary">HamaNasi</a>

        </div>

        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                @if (session()->get('user')['role'] == 'house_agent')
                    <li class="nav-item">

                        <a class="nav-link active" href="/home">
                            <span class="nav-icon">
                                <i class="mdi mdi-home fs-5"></i>
                            </span>
                            <span class="nav-link-text">Home</span>
                        </a>

                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="/house_agent_bookings">
                            <span class="nav-icon">
                                <i class="mdi mdi-book-plus"></i>
                            </span>
                            <span class="nav-link-text">Bookings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/house_agent_houses">
                            <span class="nav-icon">
                                <i class="mdi mdi-home-modern"></i>
                            </span>
                            <span class="nav-link-text">My Houses</span>
                        </a>
                    </li>
					<li class="nav-item ">
                        <a class="nav-link" href="/transactions">
                            <span class="nav-icon">
                                <i class="mdi mdi-cash-usd"></i>
                            </span>
                            <span class="nav-link-text">Transactions</span>
                        </a>
                    </li>

                    <li class="nav-item mb-3">
                        <a class="nav-link" href="/house_agent_add_house">
                            <span class="nav-icon">
                                <i class="mdi mdi-plus"></i>
                            </span>
                            <span class="nav-link-text">New House</span>
                        </a>
                    </li>

					<li class="nav-item mb-3">
                        <a class="nav-link" href="/transporter_new_vehicle">
                            <span class="nav-icon">
                                <i class="mdi mdi-plus"></i>
                            </span>
                            <span class="nav-link-text">New Vehicle</span>
                        </a>
                    </li>
                @endif

                @if (session()->get('user')['role'] == 'normal_user')
                    <li class="nav-item">

                        <a class="nav-link active" href="/home">
                            <span class="nav-icon">
                                <i class="mdi mdi-home fs-5"></i>
                            </span>
                            <span class="nav-link-text">Home</span>
                        </a>

                    </li>



                    <!--//nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="/house_rent">
                            <span class="nav-icon">
                                <i class="mdi  mdi-home-assistant"></i>
                            </span>
                            <span class="nav-link-text">House for Rent</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/house_sell">
                            <span class="nav-icon">
                                <i class="mdi mdi-home-modern"></i>
                            </span>
                            <span class="nav-link-text">House for Sale</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/transport">
                            <span class="nav-icon">
                                <i class="mdi mdi-truck-fast"></i>
                            </span>
                            <span class="nav-link-text">Transport</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/my_requests">
                            <span class="nav-icon">
                                <i class="mdi mdi-led-on"></i>
                            </span>
                            <span class="nav-link-text">My Requests</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/my_bookings">
                            <span class="nav-icon">
                                <i class="mdi mdi-book-plus"></i>
                            </span>
                            <span class="nav-link-text">My Bookings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/my_wishlist">
                            <span class="nav-icon">
                                <i class="mdi mdi-heart"></i>
                            </span>
                            <span class="nav-link-text">My WishList</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/checkout">
                            <span class="nav-icon">
                                <i class="mdi mdi-cash-usd"></i>
                            </span>
                            <span class="nav-link-text">Checkout</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/profile">
                            <span class="nav-icon">
                                <i class="mdi mdi-account"></i>
                            </span>
                            <span class="nav-link-text">Profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <hr class="mx-3">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin_dashboard">
                            <span class="nav-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/users">
                            <span class="nav-icon">
                                <i class="mdi mdi-account-multiple"></i>
                            </span>
                            <span class="nav-link-text">All users</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin_transport">
                            <span class="nav-icon">
                                <i class="mdi mdi-truck-fast"></i>
                            </span>
                            <span class="nav-link-text">Transports</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin_houses">
                            <span class="nav-icon">
                                <i class="mdi mdi-home-modern"></i>
                            </span>
                            <span class="nav-link-text">Houses</span>
                        </a>
                    </li>

                    <li class="nav-item mb-3">
                        <a class="nav-link" href="/transactions">
                            <span class="nav-icon">
                                <i class="mdi mdi-cash-usd"></i>
                            </span>
                            <span class="nav-link-text">Transactions</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <hr class="mx-3">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/transporter_requests">
                            <span class="nav-icon">
                                <i class="mdi mdi-led-on"></i>
                            </span>
                            <span class="nav-link-text">Requests</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/transporter_routes">
                            <span class="nav-icon">
                                <i class="mdi mdi-map-marker-radius"></i>
                            </span>
                            <span class="nav-link-text">Routes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/transporter_services">
                            <span class="nav-icon">
                                <i class="mdi mdi-car-connected"></i>
                            </span>
                            <span class="nav-link-text">My Services</span>
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" href="/transporter_new_vehicle">
                            <span class="nav-icon">
                                <i class="mdi mdi-plus"></i>
                            </span>
                            <span class="nav-link-text">New Vehicle</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <hr class="mx-3">
                    </li>
                @endif


            </ul>
            <!--//app-menu-->
        </nav>
    </div>

</div>
