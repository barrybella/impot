<nav id="mainnav-container">
    <div id="mainnav">
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                  <!--Profile Widget-->
                  <!--================================-->
                  <div id="mainnav-profile" class="mainnav-profile">
                      <div class="profile-wrap">
                          <div class="pad-btm">
                              <span class="label label-success pull-right">New</span>
                              <img class="img-circle img-sm img-border" src="{{asset('backend/img/profile-photos/1.png')}}" alt="Profile Picture">
                          </div>
                          <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                              <span class="pull-right dropdown-toggle">
                                  <i class="dropdown-caret"></i>
                              </span>
                              <p class="mnp-name">Aaron Chavez</p>
                              <span class="mnp-desc">aaron.cha@themeon.net</span>
                          </a>
                      </div>
                      <div id="profile-nav" class="collapse list-group bg-trans">
                          <a href="#" class="list-group-item">
                              <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                          </a>
                          <a href="#" class="list-group-item">
                              <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                          </a>
                          <a href="#" class="list-group-item">
                              <i class="demo-pli-information icon-lg icon-fw"></i> Help
                          </a>
                          <div class="pad-all text-right">
                              <a class="btn btn-primary" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();" >
                                  <i class="demo-pli-unlock"></i>logout
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </div>
                  </div>

                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <li class="list-header">Navigation</li>

                        <!--Menu list item-->
                        <li class="{{ Request::is('/') ? 'active-link' : '' }}">
                            <a href="{{url('/')}}">
                                <i class="demo-psi-home"></i>
                                <span class="menu-title">
                                    <strong>Tableau de bord</strong>
                                </span>
                            </a>
                        </li>
                        <!-- Quartier -->
                        <li class=" {{ Request::is('Quartier') ? 'active-link' : '' }}">

                            <a href="#">
                                <i class="demo-psi-home"></i>
                                <span class="menu-title">Gestion Quartier</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse ">
                                @can('see', App\Quartier::class)
                                    <li class="{{ Request::is('Quartier') ? 'active-link' : '' }}">
                                        <a href="{{route('Quartier.index')}}">
                                            <i class="demo-psi-home"></i>
                                            <span class="menu-title">
                                            <strong>Afficher</strong>
                                        </span>
                                        </a>
                                    </li>
                                     @endcan
                                @can('see', App\Quartier::class)
                                        <li class="{{ Request::is('Quartier') ? 'active-link' : '' }}">
                                            <a href="{{route('Quartier.create')}}">
                                                <i class="demo-psi-home"></i>
                                                <span class="menu-title">
                                                <strong>Ajouter</strong>
                                            </span>
                                            </a>
                                        </li>
                                   @endcan

                            </ul>
                        </li>
                          <!-- end Quartier -->
                        <!-- taxes -->
                        <li>
                            <a href="#">
                                <i class="demo-psi-home"></i>
                                <span class="menu-title">Gestion Taxes</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                @can('see', App\Taxes::class)
                                    <li class="{{ Request::is('Taxes') ? 'active-link' : '' }}">
                                        <a href="{{route('taxes.index')}}">
                                            <i class="demo-psi-home"></i>
                                            <span class="menu-title">
                                            <strong>Afficher</strong>
                                        </span>
                                        </a>
                                    </li>
                                     @endcan
                                @can('see', App\Taxes::class)
                                        <li class="{{ Request::is('Taxes') ? 'active-link' : '' }}">
                                            <a href="{{route('taxes.create')}}">
                                                <i class="demo-psi-home"></i>
                                                <span class="menu-title">
                                                <strong>Ajouter</strong>
                                            </span>
                                            </a>
                                        </li>
                                   @endcan

                            </ul>
                        </li>
                        <!-- endtaxes -->
                        <!-- Activites -->
                        <li>
                            <a href="#">
                                <i class="demo-psi-home"></i>
                                <span class="menu-title">Gestion Activites</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                                @can('see', App\Activites::class)
                                    <li class="{{ Request::is('Activites') ? 'active-link' : '' }}">
                                        <a href="{{route('Activites.index')}}">
                                            <i class="demo-psi-home"></i>
                                            <span class="menu-title">
                                            <strong>Afficher</strong>
                                        </span>
                                        </a>
                                    </li>
                                    @endcan
                                @can('see', App\Activites::class)
                                        <li class="{{ Request::is('Activites') ? 'active-link' : '' }}">
                                            <a href="{{route('Activites.create')}}">
                                                <i class="demo-psi-home"></i>
                                                <span class="menu-title">
                                                <strong>Ajouter</strong>
                                            </span>
                                            </a>
                                        </li>
                                   @endcan

                            </ul>
                        </li>

                        <!-- end Activites -->
                        <!-- zones -->
                        <li>
                            <a href="#">
                                <i class="demo-psi-home"></i>
                                <span class="menu-title">Gestion Zones</span>
                                <i class="arrow"></i>
                            </a>
                            <ul class="collapse">
                              @can('see', App\Zones::class)
                                    <li class="{{ Request::is('Zones') ? 'active-link' : '' }}">
                                        <a href="{{route('zones.index')}}">
                                            <i class="demo-psi-home"></i>
                                            <span class="menu-title">
                                            <strong>Afficher</strong>
                                        </span>
                                        </a>
                                    </li>
                                     @endcan
                                @can('see', App\Zones::class)
                                        <li class="{{ Request::is('Zones') ? 'active-link' : '' }}">
                                            <a href="{{route('zones.create')}}">
                                                <i class="demo-psi-home"></i>
                                                <span class="menu-title">
                                                <strong>Ajouter</strong>
                                            </span>
                                            </a>
                                        </li>
                                   @endcan

                            </ul>
                        </li>
                      <!-- zones -->
                      <!-- typesRedevabilites -->
                      <li>
                          <a href="#">
                              <i class="demo-psi-home"></i>
                              <span class="menu-title">Gestion typesRedevabilites</span>
                              <i class="arrow"></i>
                          </a>
                          <ul class="collapse">
                            @can('see', App\Redevabilites::class)
                                  <li class="{{ Request::is('Redevabilites') ? 'active-link' : '' }}">
                                      <a href="{{route('typeRedevabilites.index')}}">
                                          <i class="demo-psi-home"></i>
                                          <span class="menu-title">
                                          <strong>Afficher</strong>
                                      </span>
                                      </a>
                                  </li>
                                   @endcan
                              @can('see', App\Redevabilites::class)
                                      <li class="{{ Request::is('Redevabilites') ? 'active-link' : '' }}">
                                          <a href="{{route('typeRedevabilites.create')}}">
                                              <i class="demo-psi-home"></i>
                                              <span class="menu-title">
                                              <strong>Ajouter</strong>
                                          </span>
                                          </a>
                                      </li>
                                 @endcan

                          </ul>
                      </li>
                      <!-- typesRedevabilites -->

                             <!-- Utilisateurs -->
                                              <li>
                                                  <a href="#">
                                                      <i class="demo-psi-home"></i>
                                                      <span class="menu-title">Gestion Utilisateurs</span>
                                                      <i class="arrow"></i>
                                                  </a>
                                                  <ul class="collapse">
                                                      @can('see', App\User::class)
                                                          <li class="{{ Request::is('user') ? 'active-link' : '' }}">
                                                              <a href="{{route('user.index')}}">
                                                                  <i class="demo-psi-home"></i>
                                                                  <span class="menu-title">
                                                                  <strong>Liste</strong>
                                                              </span>
                                                              </a>
                                                          </li>
                                                      @endcan

                                                @can('see', App\User::class)
                                  <li class="{{ Request::is('user') ? 'active-link' : '' }}">
                                                      <a href="{{route('user.create')}}">
                                              <i class="demo-psi-home"></i>
                                            <span class="menu-title">
                                          <strong>Ajouter</strong>
                                        </span>
                                      </a>
                                      </li>
                              @endcan
                              </ul>
                              </li>
                              <!-- endutilisateurs -->
                              <!-- roles -->
                              <li>
                                  <a href="#">
                                      <i class="demo-psi-home"></i>
                                      <span class="menu-title">Gestion Roles</span>
                                      <i class="arrow"></i>
                                  </a>
                                  <ul class="collapse">
                                  @can('see', App\Role::class)
                                          <li class="{{ Request::is('role') ? 'active-link' : '' }}">
                                              <a href="{{route('role.index')}}">
                                                  <i class="demo-psi-home"></i>
                                                  <span class="menu-title">
                                                  <strong>Afficher</strong>
                                              </span>
                                              </a>
                                          </li>
                                      @endcan
                                      @can('see', App\Role::class)
                                              <li class="{{ Request::is('role') ? 'active-link' : '' }}">
                                                  <a href="{{route('role.create')}}">
                                                      <i class="demo-psi-home"></i>
                                                      <span class="menu-title">
                                                      <strong>Ajouter</strong>
                                                  </span>
                                                  </a>
                                              </li>
                                          @endcan

                                  </ul>
                              </li>
                              <!-- endRole -->
                              <!-- paiement -->
                              <li>
                                  <a href="#">
                                      <i class="demo-psi-home"></i>
                                      <span class="menu-title">Gestion Payements</span>
                                      <i class="arrow"></i>
                                  </a>
                                  <ul class="collapse">
                                  @can('see', App\Role::class)
                                          <li class="{{ Request::is('Payements') ? 'active-link' : '' }}">
                                              <a href="{{route('Payements.index')}}">
                                                  <i class="demo-psi-home"></i>
                                                  <span class="menu-title">
                                                  <strong>Afficher</strong>
                                              </span>
                                              </a>
                                          </li>
                                      @endcan
                                      @can('see', App\Payements::class)
                                              <li class="{{ Request::is('Payements') ? 'active-link' : '' }}">
                                                  <a href="{{route('Payements.create')}}">
                                                      <i class="demo-psi-home"></i>
                                                      <span class="menu-title">
                                                      <strong>Ajouter</strong>
                                                  </span>
                                                  </a>
                                              </li>
                                          @endcan

                                  </ul>
                              </li>
                              <!-- paiement -->
                              <!-- redevables -->
                              <li>
                                  <a href="#">
                                      <i class="demo-psi-home"></i>
                                      <span class="menu-title">Gestion Redevables</span>
                                      <i class="arrow"></i>
                                  </a>
                                  <ul class="collapse">
                                    @can('see', App\Redevables::class)
                                          <li class="">
                                              <a href="{{route('Redevables.index')}}">
                                                  <i class="demo-psi-home"></i>
                                                  <span class="menu-title">
                                                  <strong>Afficher</strong>
                                              </span>
                                              </a>
                                          </li>
                                           @endcan
                                      @can('see', App\Redevables::class)
                                              <li class="">
                                                  <a href="{{route('Redevables.create')}}">
                                                      <i class="demo-psi-home"></i>
                                                      <span class="menu-title">
                                                      <strong>Ajouter</strong>
                                                  </span>
                                                  </a>
                                              </li>
                                         @endcan

                                  </ul>
                              </li>
                              endredevable

                    </ul>


                </div>
            </div>
        </div>

    </div>
</nav>
