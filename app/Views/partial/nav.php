<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
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
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>