@extends('layouts.sidebar')

@section('content')
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">720</h3>
                        <p class="fs-5">Reservation</p>
                    </div>
                    <i class="fas fa-swimmer fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">490</h3>
                        <p class="fs-5">Message</p>
                    </div>
                    <i
                        class="fas fa-envelope fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">99</h3>
                        <p class="fs-5">Newsletter</p>
                    </div>
                    <i class="fas fa-address-card fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">25</h3>
                        <p class="fs-5">FeedBack</p>
                    </div>
                    <i class="fas fa-comment-dots fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <h3 class="fs-4 mb-3">Recent Resetvation </h3>
            <div class="col">
                <table class="table bg-white rounded shadow-sm  table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="50">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Television</td>
                            <td>Jonny</td>
                            <td>$1200</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Laptop</td>
                            <td>Kenny</td>
                            <td>$750</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Cell Phone</td>
                            <td>Jenny</td>
                            <td>$600</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Fridge</td>
                            <td>Killy</td>
                            <td>$300</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Books</td>
                            <td>Filly</td>
                            <td>$120</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Gold</td>
                            <td>Bumbo</td>
                            <td>$1800</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Pen</td>
                            <td>Bilbo</td>
                            <td>$75</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Notebook</td>
                            <td>Frodo</td>
                            <td>$36</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
