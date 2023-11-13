@extends('layout.app')
@section('index')
 <section class="hero-section position-relative bg-light-blue padding-medium">
      <div class="hero-content">
        <div class="container">
          <div class="row">
            <div class="text-center padding-large no-padding-bottom">
              <h1 class="display-2 text-uppercase text-dark">Cart</h1>
              <div class="breadcrumbs">
                <span class="item">
                  <a href="index-2.html">Home ></a>
                </span>
                <span class="item">Cart</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="shopify-cart padding-large">
      <div class="container">
        <div class="row">
          <div class="cart-table">
            <div class="cart-header">
              <div class="row d-flex text-uppercase">
                <h3 class="cart-title col-lg-4 pb-3">Product</h3>
                <h3 class="cart-title col-lg-3 pb-3">Quantity</h3>
                <h3 class="cart-title col-lg-4 pb-3">Subtotal</h3>
              </div>
            </div>
            @php $total=0;
            $sub_total=0;@endphp
            @if (session('cart'))
            @foreach (session('cart') as $id=>$catagory )
            @php $sub_total=$catagory['price']* $catagory['quantity'];
            $total+=$sub_total;
            @endphp
            <div class="cart-item border-top border-bottom padding-small">
              <div class="row align-items-center">
                <div class="col-lg-4 col-md-3">
                  <div class="cart-info d-flex flex-wrap align-items-center mb-4">
                    <div class="col-lg-5">
                      <div class="card-image">
                        <img src="admin/catagories/{{$catagory['image']}}" alt="cloth" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card-detail ps-3">
                        <h3 class="card-title text-uppercase">
                          <a href="#">{{$catagory['name']}}</a>
                        </h3>
                        <div class="card-price">
                          <span class="money text-primary" data-currency-usd="$1200.00">${{$catagory['price']}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<div class="col-lg-6 col-md-7">
                  <div class="row d-flex">
                    <div class="col-md-6">
                      <div class="qty-field">
                        <div class="qty-number d-flex">
                          <div class="quntity-button incriment-button">+</div>
                          <input class="spin-number-output bg-light no-margin" type="text" readonly="" value="{{$catagory['quantity']}}">
                          <div class="quntity-button decriment-button">-</div>
                        </div>
                        <div class="regular-price"></div>
                        <div class="quantity-output text-center bg-primary"></div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="total-price">
                        <span class="money text-primary">${{$catagory['price']}}</span>
                      </div>
                    </div>
                  </div>
                </div>
  <div class="col-lg-1 col-md-2">
                  <div class="cart-remove">
                    <a href="{{route('remove',[$id])}}">
                      <svg class="close" width="38px">
                        <use xlink:href="#close"></use>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>@endforeach
                @endif
          </div>
          <div class="cart-totals bg-grey padding-medium">
            <h2 class="display-7 text-uppercase text-dark pb-4">Cart Totals</h2>
            <div class="total-price pb-5">
              <table cellspacing="0" class="table text-uppercase">
                <tbody>
                  <tr class="subtotal pt-2 pb-2 border-top border-bottom">
                    <th>Subtotal</th>
                    <td data-title="Subtotal">
                      <span class="price-amount amount text-primary ps-5">
                        <bdi>
                          <span class="price-currency-symbol">$</span>{{$sub_total}}
                        </bdi>
                      </span>
                    </td>
                  </tr>
                  <tr class="order-total pt-2 pb-2 border-bottom">
                    <th>Total</th>
                    <td data-title="Total">
                      <span class="price-amount amount text-primary ps-5">
                        <bdi>
                          <span class="price-currency-symbol">$</span>{{$total}}</bdi>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="button-wrap">
                <a href="{{route('index')}}" class="btn btn-black btn-medium text-uppercase me-2 mb-3 btn-rounded-none">Continue Shopping</a>
                <a href="" class="btn btn-black btn-medium text-uppercase me-2 mb-3 btn-rounded-none">Proceed to checkout</a>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
