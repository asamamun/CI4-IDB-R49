<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">    
    <?php echo anchor("/","Navbar",["class"=>"navbar-brand"]) ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="#">Users</a> -->
          <?php echo anchor('users',"Users",['class'=>"nav-link"]) ?>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="#">Users</a> -->
          <?php echo anchor('posts',"Posts",['class'=>"nav-link"]) ?>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Register
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><?php echo anchor('register',"Register User",['class'=>"dropdown-item"]) ?></li>
            <li><?php echo anchor('login',"Login",['class'=>"dropdown-item"]) ?></li>
            <!-- <li><a class="dropdown-item" href="#">Register User</a></li>
            <li><a class="dropdown-item" href="#">Login</a></li> -->
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ch3
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><?php echo anchor('products',"All Products",['class'=>"dropdown-item"]) ?></li>
            <li><?php echo anchor('product/create',"Add Product",['class'=>"dropdown-item"]) ?></li>
            <li><?php echo anchor('category',"All Categories",['class'=>"dropdown-item"]) ?></li>
            <li><?php echo anchor('category/cerate',"Add Categories",['class'=>"dropdown-item"]) ?></li>
            <li><?php echo anchor('cart',"<i class='fas fa-shopping-cart'></i>",['class'=>"dropdown-item"]) ?></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ch4
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><?php echo anchor('email',"Email",['class'=>"dropdown-item"]) ?></li>
            <li><?php echo anchor('datatable',"DataTable",['class'=>"dropdown-item"]) ?></li>
            <li><?php echo anchor('text',"Text Helper",['class'=>"dropdown-item"]) ?></li>
            <li><?php echo anchor('layouts',"Layouts",['class'=>"dropdown-item"]) ?></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ch9
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><?php echo anchor('pdf',"PDF",['class'=>"dropdown-item"]) ?></li>
            <li><?php echo anchor('fileupload',"File Upload",['class'=>"dropdown-item"]) ?></li>
            <li><?php echo anchor('customhelper',"Custom Helper",['class'=>"dropdown-item"]) ?></li>
            
          </ul>
        </li>        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?= $this->renderSection('content') ?>
</div>
<?= $this->renderSection('script') ?>
</body>
</html>