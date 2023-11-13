
@extends('layout.app')
@section('index')
<section class="hero-section position-relative bg-light-blue padding-medium">
    <div class="hero-content">
      <div class="container">
        <div class="row">
          <div class="text-center padding-large no-padding-bottom">
            <h1 class="display-2 text-uppercase text-dark">Shop</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="index-2.html">Home ></a>
              </span>
              <span class="item">Shop</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="shopify-grid padding-large">
    <div class="container">
      <div class="row">
        <main class="col-md-9">
          <div class="filter-shop d-flex justify-content-between">
            <div class="showing-product">
              <p>Showing 1–9 of 55 results</p>
            </div>
            <div class="sort-by">
              <select id="input-sort" class="form-control" data-filter-sort="" data-filter-order="">
                <option value="">Default sorting</option>
                <option value="">Name (A - Z)</option>
                <option value="">Name (Z - A)</option>
                <option value="">Price (Low-High)</option>
                <option value="">Price (High-Low)</option>
                <option value="">Rating (Highest)</option>
                <option value="">Rating (Lowest)</option>
                <option value="">Model (A - Z)</option>
                <option value="">Model (Z - A)</option>
              </select>
            </div>
          </div>
          <div class="product-content product-store d-flex justify-content-between flex-wrap">
            @foreach ($catagories as $catagory )
            <div class="col-lg-4 col-md-6">
              <div class="product-card position-relative pe-3 pb-3">
                <div class="image-holder">
                  <img src="admin/catagories/{{$catagory->image}}" alt="product-item" class="img-fluid imgpost">
                </div>
                <div class="cart-concern position-absolute">
                  <div class="cart-button d-flex">
                    <div class="btn-left">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                      <svg class="cart-outline position-absolute">
                        <use xlink:href="#cart-outline"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="card-detail d-flex justify-content-between pt-3 pb-3">
                  <h3 class="card-title text-uppercase">
                    <a href="#">{{$catagory->name}}</a>
                  </h3>
                  <span class="item-price text-primary">${{$catagory->price}}</span>
                </div>
              </div>
            </div>
            @endforeach

          </div>
          <nav class="navigation paging-navigation text-center padding-medium" role="navigation">
            <div class="pagination loop-pagination d-flex justify-content-center align-items-center">
              <a href="#">
                <svg class="chevron-left pe-3">
                  <use xlink:href="#chevron-left"></use>
                </svg>
              </a>
              <span aria-current="page" class="page-numbers current pe-3">1</span>
              <a class="page-numbers pe-3" href="#">2</a>
              <a class="page-numbers pe-3" href="#">3</a>
              <a class="page-numbers pe-3" href="#">4</a>
              <a class="page-numbers" href="#">5</a>
              <a href="#">
                <svg class="chevron-right ps-3">
                  <use xlink:href="#chevron-right"></use>
                </svg>
              </a>
            </div>
          </nav>
        </main>
        <aside class="col-md-3">
          <div class="sidebar">
            <div class="widget-menu">
              <div class="widget-search-bar">
                <form role="search" method="get" class="d-flex">
                  <input class="search-field" placeholder="Search" type="search">
                  <div class="search-icon bg-dark">
                    <a href="#">
                      <svg class="search text-light">
                        <use xlink:href="#search"></use>
                      </svg>
                    </a>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget-product-categories pt-5">
              <h5 class="widget-title text-decoration-underline text-uppercase">Categories</h5>
              <ul class="product-categories sidebar-list list-unstyled">
                <li class="cat-item">
                  <a href="https://demo.templatesjungle.com/collections/categories">All</a>
                </li>
                <li class="cat-item">
                  <a href="#">Phones</a>
                </li>
                <li class="cat-item">
                  <a href="#">Accessories</a>
                </li>
                <li class="cat-item">
                  <a href="#">Tablets</a>
                </li>
                <li class="cat-item">
                  <a href="#">Watches</a>
                </li>
              </ul>
            </div>
            <div class="widget-product-tags pt-3">
              <h5 class="widget-title text-decoration-underline text-uppercase">Tags</h5>
              <ul class="product-tags sidebar-list list-unstyled">
                <li class="tags-item">
                  <a href="#">White</a>
                </li>
                <li class="tags-item">
                  <a href="#">Cheap</a>
                </li>
                <li class="tags-item">
                  <a href="#">Mobile</a>
                </li>
                <li class="tags-item">
                  <a href="#">Modern</a>
                </li>
              </ul>
            </div>
            <div class="widget-product-brands pt-3">
              <h5 class="widget-title text-decoration-underline text-uppercase">Brands</h5>
              <ul class="product-tags sidebar-list list-unstyled">
                <li class="tags-item">
                  <a href="#">Apple</a>
                </li>
                <li class="tags-item">
                  <a href="#">Samsung</a>
                </li>
                <li class="tags-item">
                  <a href="#">Huwai</a>
                </li>
              </ul>
            </div>
            <div class="widget-price-filter pt-3">
              <h5 class="widget-titlewidget-title text-decoration-underline text-uppercase">Filter By Price</h5>
              <ul class="product-tags sidebar-list list-unstyled">
                <li class="tags-item">
                  <a href="#">Less than $10</a>
                </li>
                <li class="tags-item">
                  <a href="#">$10- $20</a>
                </li>
                <li class="tags-item">
                  <a href="#">$20- $30</a>
                </li>
                <li class="tags-item">
                  <a href="#">$30- $40</a>
                </li>
                <li class="tags-item">
                  <a href="#">$40- $50</a>
                </li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <section id="subscribe" class="container-grid padding-large position-relative overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="subscribe-content bg-dark d-flex flex-wrap justify-content-center align-items-center padding-medium">
          <div class="col-md-6 col-sm-12">
            <div class="display-header pe-3">
              <h2 class="display-7 text-uppercase text-light">Subscribe Us Now</h2>
              <p>Get latest news, updates and deals directly mailed to your inbox.</p>
            </div>
          </div>
          <div class="col-md-5 col-sm-12">
            <form class="subscription-form validate">
              <div class="input-group flex-wrap">
                <input class="form-control btn-rounded-none" type="email" name="EMAIL" placeholder="Your email address here" required="">
                <button class="btn btn-medium btn-primary text-uppercase btn-rounded-none" type="submit" name="subscribe">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
