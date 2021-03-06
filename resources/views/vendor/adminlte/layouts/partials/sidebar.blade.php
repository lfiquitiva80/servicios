<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    @if (! Auth::guest())
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
      </div>
    </div>
    @endif

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
      <!-- Optionally, you can add icons to the links -->
      @if(Auth::user()->type==1 ) <!-- Administrador -->
      <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>

      <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-tachometer" aria-hidden="true"></i><span> Dashboard</span></a></li>

      <!--   <li><a href="{{ route('ordenesdeservicio.index') }}"><i class='fa fa-rocket'></i> <span>Servicios Adicionales</span></a></li> -->

      <!-- <li><a href="{{ route('wo.index') }}"><i class="fa fa-list-ol" aria-hidden="true"></i> <span>Crear WO</span></a></li> -->



            <!-- <li><a href="{{ route('servicios_adicionales.index') }}"><i class='fa fa-subway'></i> <span>Prefactura</span></a></li>
              <li><a href="{{ route('occidental.index') }}"><i class='fa fa-space-shuttle'></i> <span>Prefactura Occidental</span></a></li> -->
              <li><a href="{{route('Clientes.index')}}"><i class='fa  fa-user'></i> <span>Clientes</span></a></li>
              <li><a href="{{route('Escolta.index')}}"><i class='fa fa-male'></i> <span>Escolta</span></a></li>
              
              <li><a href="{{route('controlhorario.index')}}"><i class="fa fa-clock-o"></i> <span>Control horario</span></a></li>
                 
              <li><a href="{{route('Vehiculo.index')}}"><i class='fa fa-automobile'></i> <span>Vehiculo</span></a></li>
              <li><a href="{{route('Rentadora.index')}}"><i class='fa  fa-suitcase'></i> <span>Rentadora</span></a></li>
              <li><a href="{{route('Agenda.index')}}"><i class='fa  fa-calendar'></i> <span>Agenda</span></a></li>
              <li><a href="{{route('reportes.index')}}"><i class="fa fa-cubes" ></i> <span>Reportes</span></a></li>
              
              <li><a href="{{route('usuario.index')}}"><i class="fa fa- fa-users" ></i> <span>Usuarios</span></a></li>
              

               <li class="treeview">
                <a href="{{route('provision.index')}}">
                  <i class="fa fa-folder"></i>
                  <span>Provision</span>
                   
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('proveedores.index')}}"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                  <li><a href="{{route('puc.index')}}"><i class="fa fa-circle-o"></i> PUC</a></li>
                  <li><a href="{{route('centro_de_costos.index')}}"><i class="fa fa-circle-o"></i> Centro de costos</a></li>
                  <li><a href="{{route('ot.index')}}"><i class="fa fa-circle-o"></i> OT</a></li>
                  <li><a href="{{route('linea_de_negocio.index')}}"><i class="fa fa-circle-o"></i> Linea de negocio</a></li>
                  <li><a href="{{route('anticipo.index')}}"><i class="fa fa-circle-o"></i> Anticipo</a></li>
                </ul>
              </li>

            
             

              @elseif(Auth::user()->type==4) <!-- Estándar -->

              <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>

              <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-tachometer" aria-hidden="true"></i><span> Dashboard</span></a></li>
              <li><a href="{{route('Clientes.index')}}"><i class='fa  fa-user'></i> <span>Clientes</span></a></li>
              <li><a href="{{route('Escolta.index')}}"><i class='fa fa-male'></i> <span>Escolta</span></a></li>
              
              <li><a href="{{route('controlhorario.index')}}"><i class="fa fa-clock-o"></i> <span>Control horario</span></a></li>
              <li><a href="{{route('Vehiculo.index')}}"><i class='fa fa-automobile'></i> <span>Vehiculo</span></a></li>
              <li><a href="{{route('Rentadora.index')}}"><i class='fa  fa-suitcase'></i> <span>Rentadora</span></a></li>
              <li><a href="{{route('Agenda.index')}}"><i class='fa  fa-calendar'></i> <span>Agenda</span></a></li>
              <li><a href="{{route('reportes.index')}}"><i class="fa fa-cubes" ></i> <span>Reportes</span></a></li>
              <li><a href="{{route('escaner.index')}}"><i class="fa fa-folder-open" ></i> <span>Escaner</span></a></li>

              @elseif(Auth::user()->type==3) <!-- Consulta -->
              <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>

              <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-tachometer" aria-hidden="true"></i><span> Dashboard</span></a></li>

              <li><a href="{{route('Agenda.index')}}"><i class='fa  fa-calendar'></i> <span>Agenda</span></a></li>
              <li><a href="{{route('reportes.index')}}"><i class="fa fa-cubes" ></i> <span>Reportes</span></a></li>

              @elseif(Auth::user()->type==5) <!-- Solicud otro cliente -->
              
              <li><a href="{{route('solicitudserviciocliente')}}"><i class="fa fa-home" ></i> <span>Solicitud Nueva</span></a></li>
              
              <li><a href="{{route('solicitudcliente.index')}}"><i class="fa fa-user-secret" aria-hidden="true"></i> <span>Listado de Servicios</span></a></li>              
              

              @else <!-- SupraAdmin -->

              <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>

              <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-tachometer" aria-hidden="true"></i><span> Dashboard</span></a></li>

              <!--   <li><a href="{{ route('ordenesdeservicio.index') }}"><i class='fa fa-rocket'></i> <span>Servicios Adicionales</span></a></li> -->

              <!-- <li><a href="{{ route('wo.index') }}"><i class="fa fa-list-ol" aria-hidden="true"></i> <span>Crear WO</span></a></li> -->



            <!-- <li><a href="{{ route('servicios_adicionales.index') }}"><i class='fa fa-subway'></i> <span>Prefactura</span></a></li>
              <li><a href="{{ route('occidental.index') }}"><i class='fa fa-space-shuttle'></i> <span>Prefactura Occidental</span></a></li> -->
              <li><a href="{{route('Clientes.index')}}"><i class='fa  fa-user'></i> <span>Clientes</span></a></li>
              <li><a href="{{route('Escolta.index')}}"><i class='fa fa-male'></i> <span>Escolta</span></a></li>
              
              {{-- <li class="treeview">
                  <a href="#">
                    <i class="fa fa-clock-o"></i>
                    <span>Horarios</span>
                     
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="{{route('controlhorario.index')}}"><i class="fa fa-circle-o"></i> Control horario</a></li>
                      <li><a href="{{route('horario.index')}}"><i class="fa fa-circle-o"></i> Horario</a></li>
                    </ul>
               </li> --}}
              <li><a href="{{route('controlhorario.index')}}"><i class="fa fa-clock-o"></i> <span>Control horario</span></a></li>
              <li><a href="{{route('Vehiculo.index')}}"><i class='fa fa-automobile'></i> <span>Vehiculo</span></a></li>
              <li><a href="{{route('Rentadora.index')}}"><i class='fa  fa-suitcase'></i> <span>Rentadora</span></a></li>
              <li><a href="{{route('Agenda.index')}}"><i class='fa  fa-calendar'></i> <span>Agenda</span></a></li>
              <li><a href="{{route('reportes.index')}}"><i class="fa fa-cubes" ></i> <span>Reportes</span></a></li>
              <li><a href="{{route('escaner.index')}}"><i class="fa fa-folder-open" ></i> <span>Escaner</span></a></li>
             
              <li class="treeview">
                <a href="{{route('prefacturacliente.index')}}">
                  <i class="fa  fa-certificate"></i>
                  <span> Prefactura otros clientes  </span>
                   
                </a>
                <ul class="treeview-menu">

                  <li><a href="{{route('revision.index')}}"><i class="fa fa-circle-o"></i> Ordenes de servicio</a></li>
                  <li><a href="{{route('fs.index')}}"><i class="fa fa-circle-o"></i> Fs</a></li>
                  <li><a href="{{route('codigociudad.index')}}"><i class="fa fa-circle-o"></i> Código ciudad</a></li>
                  <li><a href="{{route('revisionprefactura.index')}}"><i class="fa fa-circle-o"></i> Revisión prefactura</a></li>
                  <li><a href="{{route('calendarioprefactura.index')}}"><i class="fa fa-circle-o"></i>  Calendario</a></li>

                </ul>
              </li>

              <li class="treeview">
                  <a href="{{route('propuestaeconomica.index')}}">
                    <i class="fa fa-cloud"></i>
                    <span>Propuesta Economica </span>
                     
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="{{route('tarifas.index')}}"><i class="fa fa-circle-o"></i> Tarifas estándar</a></li>
                    <li><a href="{{route('horaadicionales.index')}}"><i class="fa fa-circle-o"></i> Horas adicionales</a></li>
                    <li><a href="{{route('tipodetarifa.index')}}"><i class="fa fa-circle-o"></i> Tipo de tarifa</a></li>

                  </ul>
                </li>

              <li><a href="{{route('revisionprefacturaoxy.index')}}"><i class="fa fa-archive" ></i><span>Revisión prefactura Oxy</span></a></li>
              <li class="treeview">
                <a href="{{route('prefacturaoxy.index')}}">
                  <i class="fa fa-briefcase"></i>
                  <span>Prefactura Oxy</span>
                   
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('ordenesdeserviciooxy.index')}}"><i class="fa fa-circle-o"></i>  Ordenes de servicio </a></li>
                  <li><a href="{{route('tarifasbarranca.index')}}"><i class="fa fa-circle-o"></i> Tarifas Barranca</a></li>
                  <li><a href="{{route('tarifasbogota.index')}}"><i class="fa fa-circle-o"></i> Tarifas Bogotá </a></li>
                  <li><a href="{{ url('correcciones') }}"><i class="fa fa-circle-o"></i> Correcciones</a></li>
                  <li><a href="{{route('prefacturaoxy.index')}}"><i class="fa fa-circle-o"></i> Revisión Prefactura OXY</a></li>
                  
                  
                </ul>
              </li>
              <li class="treeview">
                <a href="{{route('provision.index')}}">
                  <i class="fa fa-folder"></i>
                  <span>Provisión</span>
                   
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('proveedores.index')}}"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                  <li><a href="{{route('puc.index')}}"><i class="fa fa-circle-o"></i> PUC</a></li>
                  <li><a href="{{route('centro_de_costos.index')}}"><i class="fa fa-circle-o"></i> Centro de costos</a></li>
                  <li><a href="{{route('ot.index')}}"><i class="fa fa-circle-o"></i> OT</a></li>
                  <li><a href="{{route('linea_de_negocio.index')}}"><i class="fa fa-circle-o"></i> Linea de negocio</a></li>
                  <li><a href="{{route('anticipo.index')}}"><i class="fa fa-circle-o"></i> Anticipo</a></li>
                </ul>
              </li>
              <li><a href="{{route('usuario.index')}}"><i class="fa fa- fa-users" ></i> <span>Usuarios</span></a></li>
              <li><a href="{{asset('log-viewer')}}"><i class="fa fa-cogs" aria-hidden="true"></i> <span> Logs</span></a></li>


              @endif

            {{-- <!-- <li class="treeview">
                <a href="#"><i class='fa fa-bell'></i> <span></span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
              </li> --> --}}
            </ul><!-- /.sidebar-menu  -->
          </section>
          <!-- /.sidebar -->
        </aside>
