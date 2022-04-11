
<nav id="mainnav-container">
    <div id="mainnav">
        <div class="mainnav-brand">
            <a href="index.html" class="brand">
                <img src="{{asset('template/img/logo.png')}}" alt="Nifty Logo" class="brand-icon">
                <span class="brand-text">Gestion E-taxes</span>
            </a>
            <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
        </div>
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap text-center">
                         
                            <div class="pad-btm">
                                <img class="img-circle img-md" src="{{asset('template/img/profile-photos/dev.png')}}" alt="Republique de Guinée">
                            </div>
                          
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name">{{ Auth::user()->nom.' '.Auth::user()->prenom }}</p>
                                
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                            </a>
                            <div class="pad-all text-right">
                            <a class="btn btn-primary" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                                <i class="demo-pli-unlock">&nbsp;</i>Deconnexion
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        </div>
                    </div>


                    <!--Shortcut buttons-->
                    <!--================================-->
                    <div id="mainnav-shortcut" class="hidden">
                        <ul class="list-unstyled shortcut-wrap">
                            <li class="col-xs-3" data-content="My Profile">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                    <i class="demo-pli-male"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Messages">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                    <i class="demo-pli-speech-bubble-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                    <i class="demo-pli-thunder"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Lock Screen">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                    <i class="demo-pli-lock-2"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End shortcut buttons-->

<ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <li class="list-header">Navigation</li>

                        <!--Menu list item-->
                        <li class="{{ Request::is('/') ? 'active-link' : '' }}">
                            <a href="{{url('/')}}">
                                <i class="demo-pli-layout-grid"></i>
                                <span class="menu-title">
                                    <strong>Tableau de bord</strong>
                                </span>
                            </a>
                        </li>
                        <li class=" {{ Request::is('Quartier') ? 'active-link' : '' }}">

                            <a href="#">
                                <i class="demo-psi-home"></i>
                                <span class="menu-title">Gestion des Impots</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse ">
                                @can('see', App\Quartier::class)
                                    <li class="{{ Request::is('Quartier') ? 'active-link' : '' }}">
                                        <a href="{{route('Quartier.index')}}">
                                            <i class="demo-psi-bar-chart"></i>
                                            <span class="menu-title">
                                            <strong>Quartier</strong>
                                        </span>
                                        </a>
                                    </li>
                                     @endcan
                                @can('see', App\Taxes::class)
                                        <li class="{{ Request::is('taxes') ? 'active-link' : '' }}">
                                            <a href="{{route('taxes.index')}}">
                                                 <i class="demo-psi-split-vertical-2"></i>
                                                <span class="menu-title">
                                                <strong>Taxes</strong>
                                            </span>
                                            </a>
                                        </li>
                                   @endcan
                                    @can('see', App\Redevables::class)
                                        <li class="{{ Request::is('Redevables') ? 'active-link' : '' }}">
                                            <a href="{{route('Redevables.index')}}">
                                               <i class="demo-pli-male icon-lg icon-fw"></i>
                                                <span class="menu-title">
                                                <strong>Redevables</strong>
                                            </span>
                                            </a>
                                        </li>
                                   @endcan
                                   @can('see', App\Activites::class)
                                        <li class="{{ Request::is('Activites') ? 'active-link' : '' }}">
                                            <a href="{{route('Activites.index')}}">
                                                <i class="demo-psi-file-html"></i>
                                                <span class="menu-title">
                                                <strong>Activites</strong>
                                            </span>
                                            </a>
                                        </li>
                                   @endcan
                                    @can('see', App\Zones::class)
                                        <li class="{{ Request::is('zones') ? 'active-link' : '' }}">
                                            <a href="{{route('zones.index')}}">
                                               <i class="demo-psi-receipt-4"></i>
                                                <span class="menu-title">
                                                <strong>Zones</strong>
                                            </span>
                                            </a>
                                        </li>
                                   @endcan
                                   @can('see', App\Redevabilites::class)
                                        <li class="{{ Request::is('typeRedevabilites') ? 'active-link' : '' }}">
                                            <a href="{{route('typeRedevabilites.index')}}">
                                               <i class="demo-psi-inbox-full"></i>
                                                <span class="menu-title">
                                                <strong>TypeRedevabilites</strong>
                                            </span>
                                            </a>
                                        </li>
                                   @endcan

                            </ul>
                          <!-- Utilisateurs -->
                             @can('see', App\User::class)
                           <li class="{{ Request::is('user') ? 'active-link' : '' }}">
                              <a href="{{route('user.index')}}">
                           <i class="demo-pli-add-user-star icon-2x"></i>
                            <span class="menu-title">Gestion Utilisateurs</span>
                            <!-- <i class="arrow"></i> -->
                             </a>
                                </li>
                              @endcan
                              <!-- endutilisateurs -->
                              <!-- roles -->
                                @can('see', App\Role::class)
                              <li class="{{ Request::is('role') ? 'active-link' : '' }}">
                                  <a href="{{route('role.index')}}">
                                      <i class="demo-psi-home"></i>
                                      <span class="menu-title">Gestion Roles</span>
                                      <!-- <i class="arrow"></i> -->
                                  </a>

                              </li>
                                @endcan
                              <!-- endRole -->
                              <!-- paiement -->

                              @can('see', App\Payements::class)
                              <li class="{{ Request::is('Payements') ? 'active-link' : '' }}">
                                  <a href="{{route('Payements.index')}}">
                                      <i class="demo-pli-credit-card-2 icon-lg icon-fw"></i>
                                      <span class="menu-title">Payements</span>
                                      <!-- <i class="arrow"></i> -->
                                  </a>
                              </li>
                               @endcan
                                <!-- paiement -->
                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->
