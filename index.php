
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework CRUD</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    
    <div class="top-header">
        <div class="container h-100">
            <div class="row d-flex justify-content-between">
                <div class="col-4 d-flex justify-content-center align-items-center">
                    <div class="date-time d-flex p-1">
                        <div><i class="fa-solid fa-calendar-days pe-1 text-secondary fs-5"></i></div>
                        <div class="display-date">
                            <span id="day">day</span>,
                            <span id="daynum">00</span>
                            <span id="month">month</span>
                            <span id="year">0000</span>
                        </div>
                        
                    </div>    
                </div>
                <div class="col-5 d-flex justify-content-center align-items-center">
                    <img src="assets/img/1.png" class="img-fluid logo" alt="">
                    <h5>Product Inventory Management</h5>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-clock fs-5 text-secondary"></i>
                    <div class="display-time p-1 text-end"></div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="v-product mt-1">
            <div class="container w-75">
                <h4 class="add-new">Add new product </h4>
                <div class="row mt-3">
                    <div class="col-12 ">
                        <form method="POST" id="frmInfo">
                            <div class="row gx-3 d-flex justify-content-center align-items-center">
                                <div class="col-6 mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" required>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="brand" class="form-label">Brand Name</label>
                                    <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter product brand" required>
                                </div>
                                <div class="col-6 mb-2">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter product price" required min="0" step="0.01">
                                </div>
                                <div class=" col-6 mb-2">
                                    <label for="stock" class="form-label">Stock Quantity</label>
                                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Enter stock quantity" required min="0">
                                </div>
                                <div class="col-6  mb-1">
                                    <label for="photo" class="form-label">Image</label>
                                    <input type="file" id="photo" name="photo" class="form-control">

                                </div>
                                
                            </div>     
                            <div class="d-flex justify-content-center align-items-center mt-3">
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>                     
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-product mt-3">
            <div class="container w-75">
                <div class="row d-flex justify-content-between">
                    <div class="col-6">
                        <h4 class="list-all">List all products</h4>
                    </div>
                    <div class="col-6 ">
                        <form action="" class="d-flex justify-content-end">
                            <input type="text" id="search" name="search" class="input-search w-50" placeholder="Search by product name">
                            <!-- <label for="search" class="lb-search">Search</label> -->
                           
                        </form>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table header-fixed ">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th class="ps-0">Stock Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbl-products">
                                
                            </tbody>
                        </table>
                        <p class="mb-0 fs-5 mt-2 fw-bold">Total Salary : <span id="span-total"></span></p>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script src="/assets/js/axios.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>