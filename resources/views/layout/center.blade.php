
<div id="page-content" >
<div class="row">
                  <div class="col-lg-7" >

                      <!--Network Line Chart-->
                      <!--===================================================-->
                      <div id="demo-panel-network" class="panel">
                          <!--chart placeholder-->
                          <!-- <div class="pad-all">
                            <img src="{{asset('template/img/devi.png')}}">
                          </div> -->
                          <!--Chart information-->
                          <div class="panel-body" style="background-image:url('img/index1.jpg');background-repeat:no-repeat; background-position:center;background-size:cover;">

                              <div class="row">
                                  <div class="col-lg-8">
                                      <p class="text-semibold text-uppercase text-main">CPU Temperature</p>
                                      <div class="row">

                                          <div class="col-xs-7 text-sm">
                                              <p>
                                                  <span></span>
                                                  <span class="pad-lft text-semibold">
                                                  <span class="text-lg"></span>
                                                  <span class="labellabel-success mar-lft">
                                                      <i class="pci-caret-down text-success"></i>
                                                      <smal></smal>
                                                  </span>
                                                  </span>
                                              </p>
                                              <p>
                                                  <span></span>
                                                  <span class="pad-lft text-semibold">
                                                  <span class="text-lg"></span>
                                                  <span class="labellabel-danger mar-lft">
                                                      <i class="pci-caret-up text-danger"></i>
                                                      <smal></smal>
                                                  </span>
                                                  </span>
                                              </p>
                                          </div>
                                      </div>

                                      <hr>

                                      <div class="pad-rgt">
                                          <p class="text-semibold text-uppercase text-main">Today Tips</p>
                                          <p class="text-muted mar-top">Republique de Guinée</p>
                                      </div>
                                  </div>

                                  <div class="col-lg-4">
                                      <p class="text-uppercase text-semibold text-main">La Commune de Matoto</p>
                                      <ul class="list-unstyled">
                                          <li>
                                              <div class="media pad-btm">
                                                  <!-- <div class="media-left">
                                                      <span class="text-2x text-thin text-main">754.9</span>
                                                  </div> -->
                                                  <!-- <div class="media-body">
                                                      <p class="mar-no">Mbps</p>
                                                  </div> -->
                                              </div>
                                          </li>
                                          <li class="pad-btm">


                                          </li>
                                          <li>
                                              <div class="clearfix">

                                              </div>

                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>


                      </div>
                      <!--===================================================-->
                      <!--End network line chart-->

                  </div>
                  <div class="col-lg-5">
                      <div class="row">
                          <div class="col-sm-6 col-lg-6">

                              <!--Sparkline Area Chart-->
                              <div class="panel panel-success panel-colorful">
                                  <div class="pad-all">
                                      <p class="text-lg text-semibold"><i class="demo-pli-data-storage icon-fw"></i>Gestion Redevables</p>
                                      <p class="mar-no">
                                          <span class="pull-right text-bold">{{$redevables->count()}}</span> Nombres
                                      </p>
                                  </div>
                                  <div class="pad-top text-center">
                                      <!--Placeholder-->
                                      <div id="demo-sparkline-area" class="sparklines-full-content"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6 col-lg-6">
                              <!--Sparkline Line Chart-->
                              <div class="panel panel-info panel-colorful">
                                  <div class="pad-all">
                                      <p class="text-lg text-semibold">Gestion Taxes</p>
                                      <p class="mar-no">
                                          <span class="pull-right text-bold">{{$taxes->count()}}</span> Nombres de taxes
                                      </p>
                                  </div>
                                  <div class="pad-top text-center">

                                      <!--Placeholder-->
                                      <div id="demo-sparkline-line" class="sparklines-full-content"></div>

                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-6 col-lg-6">

                              <!--Sparkline bar chart -->
                              <div class="panel panel-purple panel-colorful">
                                  <div class="pad-all">
                                      <p class="text-lg text-semibold"><i class="demo-pli-basket-coins icon-user"></i> Gestion Utilisateurs</p>
                                      <p class="mar-no">
                                          <span class="pull-right text-bold">{{$User->count()}}</span> Nombres Utilisateur
                                      </p>
                                  </div>
                                  <div class="text-center">

                                      <!--Placeholder-->
                                      <div id="demo-sparkline-bar" class="box-inline"></div>

                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6 col-lg-6">

                              <!--Sparkline pie chart -->
                              <div class="panel panel-warning panel-colorful">
                               <div class="pad-all">
                                      <p class="text-lg text-semibold"> Gestion des Quartiers</p>
                                      <p class="mar-no">
                                          <span class="pull-right text-bold">{{$Quartier->count()}}</span> Nombres Quartiers
                                      </p>
                                  </div>
                                
                                  <div class="pad-all">
                                      <div class="pad-btm">
                                          
                                      </div>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>


                      <!--Extra Small Weather Widget-->
                      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                      <div class="panel">
                          
                      </div>

                      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                      <!--End Extra Small Weather Widget-->


                  </div>
              </div>
</div>
