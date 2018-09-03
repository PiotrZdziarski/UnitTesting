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
                        <div class="summary--item"><p class="summary--chart" data-trigger="sparkline"
                                                      data-type="bar" data-width="5" data-height="38"
                                                      data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>
                            <p class="summary--title">This Month</p>
                            <p class="summary--stats text-green">2,371,527</p></div>
                        <div class="summary--item"><p class="summary--chart" data-trigger="sparkline"
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
                    <form action="#" class="search flex-wrap flex-md-nowrap"><input type="text" class="form-control"
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
                <table id="recordsListView">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th class="not-sortable">Image</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Created Date</th>
                        <th>Status</th>
                        <th class="not-sortable">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-warning">Not Published</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-danger">Deleted</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-info">Available</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-warning">Not Published</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-danger">Deleted</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-info">Available</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn-link">#315321</a></td>
                        <td><a href="#" class="btn-link"> <img src="{{asset('img/products/thumb-80x60.jpg')}}"
                                                               alt="">
                            </a></td>
                        <td><a href="#" class="btn-link">Baby Dress</a></td>
                        <td><a href="#" class="btn-link">Baby Products</a></td>
                        <td>$12.00</td>
                        <td>1</td>
                        <td>12 June 2017</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                            <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                         class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <footer class="main--footer main--footer-light"><p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.
        </p></footer>
</main>

@endsection
