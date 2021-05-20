<ul class="menu-area-main">
    <li> <a href="{{ route('homePubblica') }}" title="Home">Home</a> </li>
    <li> <a href="{{ route('catalogo') }}" title="Catalogo"> Catalogo</a> </li>
    <li> <a href="{{ route('info') }}" title="Info">Info</a> </li>
    <li> <a href="{{ route('faq') }}" title="FAQ">FAQ</a> </li>
    <li> <a href="#" title="Inserisci">Inserisci</a></li>
    <li> <a href="#" title="Modifica">Modifica</a></li>
    <li> <a href="#" title="Cancella">Cancella</a></li>
     @auth
        <li><a href="" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth  
</ul>

