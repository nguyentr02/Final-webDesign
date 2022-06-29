<?php

  session_start(); /* Starts the session */

  
  
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/style.css" type="text/css">
</head>
<style>
    body {
    
    background-size: cover;
}

.container {
    background: #E8F0F9;
}
  </style>
    

<body>
    <form>
    <div class="container col-8 my-5 br-2 rounded">
        <div class="row g-3">
            <div class="col-4 order-md-last">
                <h4 class="d-flex justify-content-between align-item-center">
                    <span class="text-muted">Your Cart</span>
                    <span class="badge bg-secondary rounded-pill">3</span>
                </h4>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6>Product name</h6>
                            <span class="text-muted">Brief Description</span>
                        </div>
                        <span class="text-muted">Rs 500</span>
                    </li>
                    
                    
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6>Total </h6>
                        </div>
                        <span class="text-muted">Rs 500</span>
                    </li>
                </ul>
            </div>
            <div class="col-8">
                <h4>Billing Address</h4>
                <form>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="firstname">First Name</label>
                            <input type="text" id="firstname" class="form-control">
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="lastname">Last name</label>
                            <input type="text" id="lastname" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="from-label" for="username">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="usrname">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="email">Email
                                <span class="text-muted"> (Optional)</span>
                            </label>
                            <input type="text" id="email" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="address">Address </label>
                            <input type="text" id="address" class="form-control">
                        </div>
                        <div class="col-5">
                            <label class="form-label" for="country">Country </label>
                            <select class="form-select" id="country">
                                <option>Choose</option>
                                <option>India</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="state">State </label>
                            <select class="form-select" id="state">
                                <option>Choose</option>
                                <option>Gujarat</option>
                                <option>Karnataka</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="zip">Zip </label>
                            <input type="text" id="zip" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">Shipping address is the same as my billing address</label>
                    </div>
                    <hr>
                    
                    
                    <button type="submit" class="btn btn-primary btn-block mb-4">Continue To Checkout</button>
                </form>
            </div>
        </div>
    </div>
    </form>
</body>

</html>