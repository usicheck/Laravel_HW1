<?php
use App\Models\Product;
?>
<h3 class="text-center">{{ __('Products List') }}</h3>
<table class="table">
    <thead>
    <tr>
        <th class="text-center" scope="col">{{ __('#') }}</th>
        <th class="text-center" scope="col">{{ __('Image') }}</th>
        <th class="text-center" scope="col">{{ __('Product Name') }}</th>
        <th class="text-center" scope="col">{{ __('Single Price') }}</th>
        <th class="text-center" scope="col">{{ __('Quantity') }}</th>
        <th class="text-center" scope="col">{{ __('Summary') }}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $key => $product)
        <tr>
            <td class="text-center" scope="row">{{ ($key + 1) }}</td>
            <td class="text-center">
            <td class="text-center">{{ __($product->product_id) }}</td>
            <td class="text-center">{{ __(Product::all()->where('id',$product->product_id)) }}</td>


                        <img src="{{  $product->thumbnailUrl  }}" style="max-width: 50px;" alt="{{ __($product->title) }}">
                    </td>
                    <td class="text-center">{{ __($product->title) }}</td>
                    <td class="text-center">{{ __($product->pivot->single_price . '$') }}</td>
                    <td class="text-center">{{ __($product->pivot->quantity) }}</td>
                    <td class="text-center">{{ __($product->pivot->single_price * $product->pivot->quantity . '$') }}</td>
                </tr>
    @endforeach
    </tbody>
</table>
