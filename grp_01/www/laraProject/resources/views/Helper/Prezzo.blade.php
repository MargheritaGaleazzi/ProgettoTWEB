<p class="style-1"> {{ number_format($product->getPrice($product->discounted), 2, ',', '.') }} € </p>

@if ($product->discounted == 1)
<p class="style-1">  <del>{{ number_format($product->getPrice(false), 2, ',', '.') }} €</del><br></p>
@endif


