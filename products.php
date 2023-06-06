<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="#" alt="">
            <span class="d-none d-lg-block">Admin Panel</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
    
        <div class="search-bar">
          <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
        </div><!-- End Search Bar -->
    
        <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">
    
            <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
              </a>
            </li><!-- End Search Icon-->
    
            <li class="nav-item dropdown">
    
            
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                <li class="dropdown-header">
                  You have 4 new notifications
                  <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="notification-item">
                  <i class="bi bi-exclamation-circle text-warning"></i>
                  <div>
                    <h4>Lorem Ipsum</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>30 min. ago</p>
                  </div>
                </li>
    
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="notification-item">
                  <i class="bi bi-x-circle text-danger"></i>
                  <div>
                    <h4>Atque rerum nesciunt</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>1 hr. ago</p>
                  </div>
                </li>
    
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="notification-item">
                  <i class="bi bi-check-circle text-success"></i>
                  <div>
                    <h4>Sit rerum fuga</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>2 hrs. ago</p>
                  </div>
                </li>
    
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="notification-item">
                  <i class="bi bi-info-circle text-primary"></i>
                  <div>
                    <h4>Dicta reprehenderit</h4>
                    <p>Quae dolorem earum veritatis oditseno</p>
                    <p>4 hrs. ago</p>
                  </div>
                </li>
    
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li class="dropdown-footer">
                  <a href="#">Show all notifications</a>
                </li>
    
              </ul><!-- End Notification Dropdown Items -->
    
            </li><!-- End Notification Nav -->
    
            <li class="nav-item dropdown">
    
              <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-chat-left-text"></i>
                <span class="badge bg-success badge-number">3</span>
              </a><!-- End Messages Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                <li class="dropdown-header">
                  You have 3 new messages
                  <a href="message.php"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="message-item">
                  <a href="message.php">
                    <img src="Avatar/1.png" alt="" class="rounded-circle">
                    <div>
                      <h4>Khizar Raza</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>4 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="message-item">
                  <a href="message.php">
                    <img src="Avatar/2.png" alt="" class="rounded-circle">
                    <div>
                      <h4>Atsam Ali</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>6 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="message-item">
                  <a href="message.php">
                    <img src="Avatar/3.png" alt="" class="rounded-circle">
                    <div>
                      <h4>Farhan Ali</h4>
                      <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                      <p>8 hrs. ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li class="dropdown-footer">
                  <a href="message.php">Show all messages</a>
                </li>
    
              </ul><!-- End Messages Dropdown Items -->
    
            </li><!-- End Messages Nav -->
    
            <li class="nav-item dropdown pe-3">
    
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="Avatar/1.png" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
              </a><!-- End Profile Iamge Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <!-- <h6>Atsam Ali</h6> -->
                  <!-- <span>Web Developer</span> -->
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
<!--     
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                  </a>
                </li> -->
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <!-- <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                  </a>
                </li> -->
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <!-- <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>Need Help?</span>
                  </a>
                </li> -->
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="./logout.php">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Outt</span>
                  </a>
                </li>
    
              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
    
          </ul>
        </nav><!-- End Icons Navigation -->
    
      </header><!-- End Header -->


      <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
    
          <li class="nav-item">
            <a class="nav-link " href="index.php">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="users.php">
              <i class="bi bi-person"></i>
              <span>Users</span>
            </a>
          </li><!-- End Profile Page Nav -->

         
          <li class="nav-item">
            <a class="nav-link collapsed" href="products.php">
              <i class="bi bi-person"></i>
              <span>Products</span>
            </a>
          </li><!-- End Profile Page Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="message.php">
              <i class="bi bi-person"></i><span>Add Products</span>
            </a>
          </li><!-- End Profile Page Nav -->
          
          <li class="nav-item">
            <a class="nav-link collapsed" href="orders.php">
              <i class="bi bi-person"></i>
              <span>Orders</span>
            </a>
          </li><!-- End Profile Page Nav -->
    
         
    
         
          <li class="nav-item">
            <a class="nav-link collapsed" href="profile.html">
              <i class="bi bi-person"></i>
              <span>Profile</span>
            </a>
          </li><!-- End Profile Page Nav -->

        </ul>
    
      </aside><!-- End Sidebar-->

      <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item  active"><a href="users.php">Users</a></li>
             
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section dashboard">
          <div class="row">


          </div>
          <!-- Top Selling -->
        

              <div class="col-md-8">
                <br>
                <br>
                <h1 class="text-center">Products</h1>
                <br>
                <table class="table table-striped table hover">
                <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Dress Type</th>
                        <th>Details</th>
                        <th>Price</th>
                        <!-- <th>Certificate</th>
                        <th>Profile</th> -->
                        <th>Accept</th>
                         <th>Decline</th>
                        <th>Delete</th>
                        
                    </tr>
    
    
    
                    
                    <?php 
                   include "./connection.inc.php"; 
      
    $q = "Select * from products";
    
    $query = mysqli_query($conn,$q);


    
    
    
    
    while($res = mysqli_fetch_array($query)){
    
        ?>

      
       
    
      
       <tr>
            <td><?php echo $res['id']?></td>
            <td><?php echo $res['name']?></td>
            <td><?php echo $res['email']?></td>
            <td><?php echo $res['rank']?></td>
            <td><?php echo $res['detail']?></td>
            <td><?php echo $res['phone']?></td>
  
            <td><button class="btn btn-success "><a class="text-white" href="active.php?id=<?php echo $res['id'];?>">Accept</a></button></td>
            <td><button class="btn btn-primary"><a class="text-white" href="deactive.php?id=<?php echo $res['id'];?>">Decline</a></button></td>
            <td><button class="btn btn-danger "><a class="text-white" href="deleteProduct.php?id=<?php echo $res['id'];?>">Delete</a></button></td>
        </tr>
    
        <?php
    }
        ?>
        
    
                </table>
            </div>

           

            </div>
          </div><!-- End Top Selling -->
        </section>
        
    
      </main><!-- End #main -->


      <script>
    const showImage = () => {
        document.getElementById("first").style.display ='block';
    }
</script>
          

          
    

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <script src="assets/js/main.js"></script>
</body>
</html>