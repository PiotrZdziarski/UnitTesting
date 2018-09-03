@extends('layouts.app')

@section('content')
    <main class="main--container">
        <section class="page--header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6"><h2 class="page--title h5">Products</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="ecommerce.html">Ecommerce</a></li>
                            <li class="breadcrumb-item active"><span>Products</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="summary--widget">
                            <div class="summary--item">
                                <p class="summary--chart" data-trigger="sparkline"
                                   data-type="bar" data-width="5" data-height="38"
                                   data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>
                                <p class="summary--title">This Month</p>
                                <p class="summary--stats text-green">2,371,527</p></div>
                            <div class="summary--item">
                                <p class="summary--chart" data-trigger="sparkline"
                                   data-type="bar" data-width="5" data-height="38"
                                   data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>
                                <p class="summary--title">Last Month</p>
                                <p class="summary--stats text-orange">2,527,371</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main--content">
            <div class="panel">
                <div class="records--header">
                    <div class="title fa-shopping-bag"><h3 class="h3">Ecommerce Products <a href="#"
                                                                                            class="btn btn-sm btn-outline-info">Manage
                                Products</a></h3>
                        <p>Found Total 1,330 Products</p></div>
                    <div class="actions">
                        <form action="#" class="search flex-wrap flex-md-nowrap">
                            <input type="text" class="form-control"
                                   placeholder="Product Name..."
                                   required> <select name="select"
                                                     class="form-control">
                                <option value="" selected>Product Category</option>
                            </select>
                            <button type="submit" class="btn btn-rounded"><i class="fa fa-search"></i></button>
                        </form>
                        <a href="#" class="addProduct btn btn-lg btn-rounded btn-warning">Add Product</a></div>
                </div>
            </div>
            <div class="panel">
                <div class="records--list" data-title="Product Listing">
                    <products-list api_link="@php echo getenv('APP_URL').'/api/products' @endphp"></products-list>
                </div>
            </div>
        </section>
        <footer class="main--footer main--footer-light"><p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.
            </p></footer>
    </main>

@endsection
