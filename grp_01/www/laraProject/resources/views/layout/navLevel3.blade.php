<ul class="menu-area-main">
    <li> <a href="{{ route('homePubblica') }}" title="Vai alla Home">Home</a> </li>
    <li> <a href="{{ route('catalogo') }}" title="vai al catalogo"> Catalogo</a> </li>
    <li> <a href="{{ route('newproduct') }}" title="Inserisci nuovi eventi">Inserisci</a></li>
    <li> <a href="{{ route('AreaUtente3') }}" title="Modifica eventi esistenti">Modifica</a></li>
    <li> <a href="{{ route('AreaUtente3') }}" title="Cancella eventi esistenti">Cancella</a></li>
     @auth
        <li><a href="" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth  
</ul>