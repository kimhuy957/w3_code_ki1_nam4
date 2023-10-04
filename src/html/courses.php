<!-- load data -->
<?php
    $link = new mysqli('localhost', 'root', '', 'btlcnpm');
 
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./courses.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">courses management</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Buttons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Alerts</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Card</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Typography</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Sample Page</span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-strech">
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                          <h5 class="card-title fw-semibold">Thêm Khóa Học </h5>
                        </div>
                    </div> 
                    <div class="from">
                        <form method="post" action="courses.php">
                              <label for="examplenameCourse" class="form-label ">Nhập mã khóa học</label>
                              <input type="text" class="form-control" id="examplenameCourse" aria-describedby="emailHelp" name="maLop">
                              <p><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dòng văn bản này được coi là bản in đẹp.</font></font></small></p>
                              <div class="row d-flex">
                                <div class="col-lg-6 ">
                                  <label for="exampleNickCourse" class="form-label ">Nhập tên viết tắt khóa học</label>
                                  <input type="text" class="form-control" id="exampleNickCourse" aria-describedby="emailHelp" name="tenLop">
                                  <p><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dòng văn bản này được coi là bản in đẹp.</font></font></small></p>
                                </div>
                                <div class="col-lg-6">
                                  <label for="exampleBuyCourse" class="form-label ">Nhập tên đầy đủ khóa học</label>
                                  <div class="d-flex">
                                    <input type="text" class="form-control" id="exampleBuyCourse" aria-describedby="emailHelp" name="tenLopD">
                                  </div>
                                    <p><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dòng văn bản này được coi là bản in đẹp.</font></font></small></p>
                                </div>
                              </div>
                              <fieldset>

                                <div class="mb-3">
                                  <label for="disabledSelect" class="form-label">Mức độ quan tâm</label>
                                  <select id="disabledSelect" class="form-select" name="QuanTam">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                  </select>
                                </div>
                              </fieldset>
                            <button type="submit" name="insert" class="btn btn-primary">Thêm </button>
                        </form>

                        <!-- insert new courses -->
                        <?php

                          if (isset($_POST['insert'])) {
                                    
                            $maLop = $_POST['maLop'];
                            $tenLop = $_POST['tenLop'];
                            $tenLopD = $_POST['tenLopD'];
                            $QuanTam = $_POST['QuanTam'];

                            if (!empty($maLop) && !empty($tenLop) && !empty($tenLopD)) {
                              
                              $sqlCmm = "INSERT INTO class(id, tenLop, TenDu, QuanTam) VALUES ('$maLop', '$tenLop', '$tenLopD', '$QuanTam');";
                              mysqli_query($link, $sqlCmm) or die("Thất bại");

                            }
                          }
                        
                        ?>
                    </div>
                  </div>
                </div>
            </div>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Thông Tin Các Khóa học</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tên</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Quan Tâm</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Chỉnh sửa</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Show all exsited courses -->
                      <?php

                        $sqlCmm = "SELECT id, tenLop, TenDu, QuanTam FROM class;";  
                        $result = mysqli_query($link, $sqlCmm);

                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td class='border-bottom-0'><h6 class='fw-semibold mb-0'>" .$row['id'] ."</h6></td>
                                <td class='border-bottom-0'>
                                    <h6 class='fw-semibold mb-1'>" .$row['tenLop'] ."</h6>
                                    <span class='fw-normal'>" .$row['TenDu'] ."</span>                          
                                </td>";
                            switch ($row['QuanTam']){
                                  case '1':
                                    echo "
                                      <td class='border-bottom-0'>
                                        <div class='d-flex align-items-center gap-2'>
                                          <span class='badge bg-primary rounded-3 fw-semibold'>Low</span>
                                        </div>
                                      </td> 
                                    ";
                                  
                                    break;

                                  case '2':
                                      echo "
                                        
                                        <td class='border-bottom-0'>
                                        <div class='d-flex align-items-center gap-2'>
                                          <span class='badge bg-danger rounded-3 fw-semibold'>High</span>
                                        </div>
                                      </td>
                                      ";
                                    
                                      break;

                                  case '3':
                                    echo "
                                    <td class='border-bottom-0'>
                                    <div class='d-flex align-items-center gap-2'>
                                      <span class='badge bg-success rounded-3 fw-semibold'>Critical</span>
                                    </div>
                                  </td>
                                    ";
                                    break;
                                  
                                  default:
                                    # code...
                                    break;
                                }
                                
                                echo"
                                    <td class='border-bottom-0'>
                                    <a href='#'>
                                    </a>
                                      
                                    <button type='button' class='btn btn-success'><i class='ti ti-edit-circle'></i></button>
                                  </td>
                                  <td>
        
                                  </td>
                                </tr> 
                                ";
                            }};

                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>  
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>