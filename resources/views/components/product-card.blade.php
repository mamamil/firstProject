<style>
    .products{
        display: flex;
        gap: 70px;
    }
    .product-card{
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 10px;
    }
    .out-of-stock{
    color: red;
    }
    .in-stock{
        color: green;
    }
</style>
<div class="product-card">
    <h2>{{ $product['name'] }}</h2>
    <p>Стоимость: {{ number_format($product['cost'], 0, ',', ' ') }} руб.</p>
    <p>Количество: {{ $product['amount'] }}</p>
    @if ($product['amount'] > 0)
        <p class="in-stock">Купить</p>
    @else
        <p class="out-of-stock">Нет в наличии</p>
    @endif
</div>
