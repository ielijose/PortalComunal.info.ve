<nav id="sidebar">
    <div id="main-menu">
        <ul class="sidebar-nav">
            

            @if(!Auth::user()->hasPortal())
            <li class="<?= Request::is('/crear-portal') ? 'current' : '' ?>">
                <a href="/crear-portal"><i class="fa fa-columns"></i><span class="sidebar-text">Crear portal</span></a>
            </li>

            @else 

            <li class="<?= Request::is('/') ? 'current' : '' ?>">
                <a href="/"><i class="fa fa-dashboard"></i><span class="sidebar-text">Mi portal</span></a>
            </li>
          
            <li class="<?= Request::is('*cartelera-informativa*') ? 'current' : '' ?>">
                <a href="/cartelera-informativa"><i class="fa fa-columns"></i><span class="sidebar-text">Cartelera informativa</span></a>
            </li>

            <li class="<?= Request::is('*mision-vision*') ? 'current' : '' ?>">
                <a href="/mision-vision"><i class="fa fa-quote-left"></i><span class="sidebar-text">Misión y Visión</span></a>
            </li>

            <li class="<?= Request::is('*directiva*') ? 'current' : '' ?>">
                <a href="/directiva"><i class="fa fa-group"></i><span class="sidebar-text">Directiva</span></a>
            </li>

            <li class="<?= Request::is('*proyectos*') ? 'current' : '' ?>">
                <a href="/proyectos"><i class="fa fa-road"></i><span class="sidebar-text">Proyectos</span></a>
            </li>

            <li class="<?= Request::is('*faq*') ? 'current' : '' ?>">
                <a href="/faq"><i class="fa fa-question"></i><span class="sidebar-text">Preguntas</span></a>
            </li>


            <li class="<?= Request::is('*miembros*') ? 'current' : '' ?>">
                <a href="/miembros"><i class="fa fa-user"></i><span class="sidebar-text">Miembros</span></a>
            </li>

            @endif
           
            <br>
        </ul>
    </div>

    
</nav>