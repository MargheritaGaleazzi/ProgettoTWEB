<p class="style-1"> {{ number_format($evento->getPrezzo($evento->biglietto_scontato), 2, ',', '.') }} € </p>

@if ($evento->biglietto_scontato == 1)
<p class="style-1">  <del>{{ number_format($evento->getPrezzo(false), 2, ',', '.') }} €</del><br></p>
@endif


