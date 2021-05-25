<ul class="menu-area-main">
    <li> <a href="{{ route('homePubblica') }}" title="Vai alla Home">Home</a> </li>
    <li> <a href="{{ route('catalogo') }}" title="vai al catalogo"> Catalogo</a> </li>
    <li> <a href="{{ route('gestioneEventi', [Auth::user()->id]) }}" title="Inserisci nuovi eventi">Gestione Eventi</a></li>
     @auth
        <li><a href="" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth  
</ul>