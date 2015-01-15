<nav id="sidebar">
    <div id="main-menu">
        <ul class="sidebar-nav">
            <li>
                <a href="/"><i class="fa fa-dashboard"></i><span class="sidebar-text">Escritorio</span></a>
            </li>

            <li>
                <a href="#/portales"><i class="fa fa-columns"></i><span class="sidebar-text">Portales</span></a>
            </li>

            <li>
                <a href="#/encargados"><i class="fa fa-user"></i><span class="sidebar-text">Encargados</span></a>
            </li>
    
            {{--@if(isset($current) && $current->estado == 'aceptado')
            <li>
                <a href="/documentos"><i class="fa fa-folder"></i><span class="sidebar-text">Documentos</span></a>
            </li>

            <li>
                <a href="/calendario"><i class="fa fa-calendar"></i><span class="sidebar-text">Calendario</span></a>
            </li>
            @endif--}}
            
            <br>
        </ul>
    </div>

    
</nav>