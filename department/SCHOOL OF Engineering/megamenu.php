<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Basic megamenu styling */
.megamenu {
  width: 100%;
  background-color: #fff;
  padding: 20px;
  border: 1px solid #ddd;
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
}

.megamenu-row {
  display: flex;
  justify-content: space-between;
}

.col4 {
  width: 30%;
}

.list-dashed li {
  margin-bottom: 10px;
}

.font-weight-600 {
  font-weight: 600;
}

.navbar .dropdown-menu .dropdown-item {
  padding: 5px 15px;
  color: #333;
}

.navbar .dropdown-menu .dropdown-item:hover {
  background-color: #f8f9fa;
  color: #007bff;
}

/* Show megamenu on hover */
.nav-item.dropdown:hover .megamenu {
  display: block;
}

/* Responsive adjustments for medium and small screens */
@media (max-width: 991px) {
  .megamenu-row {
    flex-direction: column;
  }

  .col4 {
    width: 100%;
    padding-bottom: 15px;
  }
}

@media (max-width: 767px) {
  .megamenu {
    padding: 10px;
  }

  .font-weight-600 {
    font-size: 16px;
  }

  .dropdown-item {
    font-size: 14px;
  }
}

    </style>
</head>
<body>

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAcademics" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Academics
  </a>
  <div class="dropdown-menu megamenu" aria-labelledby="navbarDropdownAcademics">
    <div class="megamenu-row">
      <div class="col4">
        <ul class="list-unstyled list-dashed">
          <li><h5 class="font-weight-600">Bachelor of Technology</h5></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/btech-computer-engineering">Computer Engineering</a></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/btech-civil-engineering">Civil Engineering</a></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/btech-electrical-engineering">Electrical Engineering</a></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/btech-information-engineering">Information Technology</a></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/btech-mechanical-engineering">Mechanical Engineering</a></li>
        </ul>
      </div>
      <div class="col4">
        <ul class="list-unstyled list-dashed">
          <li><h5 class="font-weight-600">Master of Technology</h5></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/mtech-computer-engineering">Computer Engineering</a></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/mtech-construction-technology">Construction Technology</a></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/mtech-electrical-power-system">Electrical Power System</a></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/mtech-machine-design">Machine Design</a></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/mtech-structural-engineering">Structural Engineering</a></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/mtech-thermal-sciences">Thermal Sciences</a></li>
        </ul>
      </div>
      <div class="col4">
        <ul class="list-unstyled list-dashed">
          <li><h5 class="font-weight-600">Computer Science</h5></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/bca">Bachelor of Computer Application</a></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/mca">Master of Computer Application</a></li>
          <li><a class="dropdown-item" href="https://soe.rku.ac.in/humanities-applied-science">Humanities & Applied Science</a></li>
        </ul>
      </div>
    </div>
  </div>
</li>

    
</body>
</html>