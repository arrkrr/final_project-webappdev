<body>
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/dashboard" class="nav-link px-2 text-secondary">Home</a></li>
            <li>
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo ($currentPage == 'maindishes') ? 'Main Dishes' : 'All Menus'; ?>
                </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item <?php echo ($currentPage == 'maindishes') ? 'active' : ''; ?>" href="/maindishes">Main Dishes</a></li>
                <li><a class="dropdown-item <?php echo ($currentPage == 'sidedishes') ? 'active' : ''; ?>" href="/sidedishes">Side Dishes</a></li>
                <li><a class="dropdown-item <?php echo ($currentPage == 'drinks') ? 'active' : ''; ?>" href="/drinks">Drinks</a></li>
                <li><a class="dropdown-item <?php echo ($currentPage == 'desserts') ? 'active' : ''; ?>" href="/desserts">Desserts</a></li>
                <li><a class="dropdown-item <?php echo ($currentPage == 'soup') ? 'active' : ''; ?>" href="/soup">Soup</a></li>
            </ul>
            </li>
            <li><a href="/viewcart" class="nav-link px-2 text-white">View Cart</a></li>
            <li><a href="/contactus" class="nav-link px-2 text-white">Contact Us</a></li>
            <li><a href="/about" class="nav-link px-2 text-white">About</a></li>
            </ul>
        <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form> -->

        <div class="text-end">
          <button onclick="window.location.href='/'" type="button" class="btn btn-warning">Log-out</button>
        </div>
      </div>
    </div>
  </header>
