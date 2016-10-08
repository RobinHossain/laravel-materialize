<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CRM') }}</title>

    <!-- CSS  -->
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Styles * End -->
</head>
<body>
<div class="navbar-fixed">
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="{{ url('/') }}" class="brand-logo center">{{ config('app.name', 'CRM') }}</a>
            <ul class="left hide-on-med-and-down">
                <li><a href="#!" class="dropdown-button lft" data-activates="clients-dropdown" data-beloworigin="true"><i class="fa fa-users"></i> Clients</a>
                </li>
                <li><a href="#!" class="dropdown-button lft" data-activates="orders-dropdown" data-beloworigin="true"><i class="fa fa-first-order" aria-hidden="true"></i> Orders</a>
                </li>
                <li><a href="#!" class="dropdown-button lft" data-activates="support-dropdown" data-beloworigin="true"><i class="fa fa-life-ring" aria-hidden="true"></i> Support</a>
                </li>
                <li><a href="#!" class="dropdown-button lft" data-activates="payments-dropdown" data-beloworigin="true"><i class="fa fa-credit-card" aria-hidden="true"></i> Payments</a>
                </li>
            </ul>

            <!-- Sub Menues -->
            <ul id="clients-dropdown" class="dropdown-content">
                <li><a href="#!">Manage Clients</a></li>
                <li><a href="#!">Add new clients</a></li>
                <li><a href="#!">Client groups</a></li>
                <li><a href="#!">Send bulk email</a></li>
            </ul>

            <ul id="orders-dropdown" class="dropdown-content">
                <li><a href="#!">All orders</a></li>
                <li><a href="#!">Add new order</a></li>
                <li><a href="#!">Pending order</a></li>
                <li><a href="#!">Active order</a></li>
                <li><a href="#!">Fraud order</a></li>
                <li><a href="#!">Cancelled order</a></li>
            </ul>

            <ul id="support-dropdown" class="dropdown-content">
                <li><a href="#!">Kb Categories</a></li>
                <li><a href="#!">Kb Articles</a></li>
                <li><a href="#!">All support tickets</a></li>
                <li><a href="#!">All active tickets</a></li>
                <li><a href="#!">Customer replied tickets</a></li>
                <li><a href="#!">Answer ticket</a></li>
                <li><a href="#!">Closed ticket</a></li>
                <li><a href="#!">Create a new ticket</a></li>
            </ul>

            <ul id="payments-dropdown" class="dropdown-content">
                <li><a href="#!">Transitions</a></li>
                <li><a href="#!">Invoices</a></li>
                <li><a href="#!">Add invoice</a></li>
                <li><a href="#!">Recurring invoice</a></li>
            </ul>
            <!-- Sub Menues ** END -->

            <ul class="right hide-on-med-and-down">
                <li><a href="#!" class="dropdown-button rht" data-activates="applications-dropdown"
                       data-beloworigin="true"><i class="fa fa-archive" aria-hidden="true"></i> Apps</a></li>
                <li><a href="#!" class="dropdown-button rht" data-activates="finance-dropdown" data-beloworigin="true"><i class="fa fa-money" aria-hidden="true"></i> Finance</a>
                </li>
                <li><a href="#!" class="dropdown-button rht" data-activates="setup-dropdown" data-beloworigin="true"><i class="fa fa-wrench" aria-hidden="true"></i> Setup</a>
                </li>
                <!--<li><a href="#!" class="dropdown-button rht" data-activates="tools-dropdown" data-beloworigin="true">Tools</a>-->
                <!--</li>-->
                <li class="account avatar dropdown-button rht" data-activates="account-dropdown"
                    data-beloworigin="true">
                    <a href="#!">
                        <div class="account-image"><img class="circle" width="38px" src="https://randomuser.me/api/portraits/thumb/women/19.jpg" alt="">
                        </div>
                        <small>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</small>
                    </a>
                </li>
            </ul>

            <!-- Sub Menues -->
            <ul id="applications-dropdown" class="dropdown-content">
                <li><a href="#!">To Do</a></li>
                <li><a href="#!">Sticky notes</a></li>
                <li><a href="#!">Notice Board</a></li>
                <li><a href="#!">CMS</a></li>
            </ul>

            <ul id="finance-dropdown" class="dropdown-content">
                <li><a href="#!">All accounts</a></li>
                <li><a href="#!">Income entry</a></li>
                <li><a href="#!">Revenue graph</a></li>
                <li><a href="#!">Express entry</a></li>
                <li><a href="#!">Transfers</a></li>
                <li><a href="#!">Transactions</a></li>
                <li><a href="#!">Balance sheet</a></li>
                <li><a href="#!">Coa help</a></li>
            </ul>

            <ul id="setup-dropdown" class="dropdown-content">
                <li><a href="#!">Products and services</a></li>
                <li><a href="#!">Administrators</a></li>
                <li><a href="#!">Administrators role</a></li>
                <li><a href="#!">Payments gatways</a></li>
                <li><a href="#!">Email templates</a></li>
                <li><a href="#!">Support departments</a></li>
                <li><a href="#!">System settings</a></li>
            </ul>

            <ul id="tools-dropdown" class="dropdown-content">
                <li><a href="#!">System logs</a></li>
                <li><a href="#!">Send email logs</a></li>
                <li><a href="#!">System status</a></li>
                <li><a href="#!">Database cleanup</a></li>
                <li><a href="#!">Developer tools</a></li>
            </ul>
            <ul id="account-dropdown" class="dropdown-content">
                <!--<small>Acount Name</small>-->
                <li><a href="#!">Profile</a></li>
                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </ul>
            <!-- Sub Menues ** END -->


            <ul id="nav-mobile" class="side-nav">
                <li><a href="!#">Clients</a></li>
                <li><a href="!#">Payments</a></li>
                <li><a href="!#">Orders</a></li>
                <li><a href="!#">Finance</a></li>
                <li><a href="!#">Support</a></li>
                <li><a href="!#">Setup</a></li>
                <li><a href="!#">Tools</a></li>
                <li><a href="!#">Modules</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

@yield('content')


<footer class="page-footer orange">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>

                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's
                    our full time job. Any amount would help support and continue development on this project and is
                    greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="js/app.js"></script>
<!--  Scripts-- * End JS -->
@yield('scripts')


</body>
</html>
