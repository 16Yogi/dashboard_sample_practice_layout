<?php
session_start();
$servername = "localhost";
$username = "Admin";
$password = "Test@123";
$_SERVER
//connect to index.php
// $conn = mysqli_connect($servername, $username, $password);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index |</title>
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/ec51b9d2d0.js"
      crossorigin="anonymous"
    ></script>
    <!-- css -->
    <link rel="stylesheet" href="asset/css/index.css" />
  </head>
  <body>
    <!-- navigation bar -->
    <div class="container-fluid bg-light" id="nav">
      <nav class="navbar navbar-expand-lg navbar-light d-flex justify">
        <a class="navbar-brand" href="#"><b>Dashboard</b></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav left">
            <li class="nav-item">
              <a class="nav-link" href="#">Date: <span id="date"></span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa-solid fa-angle-down"></i
              ></a>
              <div class="dropdown-menu">
                <a href="index.php" class="dropdown-item"
                  >Logout</a
                >
                <a href="" class="dropdown-item">Profile</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- end navigation -->
    <!-- dashboard -->
    <div class="container-fluid py-3 px-4" id="dash-cf">
      <div class="row">
        <div class="col-2 py-2" id="left-side">
          <div
            class="nav flex-column nav-pills"
            id="v-pills-tab"
            role="tablist"
            aria-orientation="vertical"
          >
            <!-- button for home -->
            <button
              class="nav-link active text-left"
              id="v-pills-profile-tab"
              data-toggle="pill"
              data-target="#v-pills-home"
              type="button"
            >
              <i class="fa-solid fa-home pr-3"></i>Home
            </button>
            <!-- end button for home -->
            <!-- button for list upload -->
            <button
              class="nav-link text-left"
              id="v-pills-users-tab"
              data-toggle="pill"
              data-target="#v-pills-list-upload"
              type="button"
            >
              <i class="fa-solid fa-file pr-3"></i>List Upload
            </button>
            <!-- end button for list upload -->
            <!-- button for add user -->
            <button
              class="nav-link text-left"
              id="v-pills-users-tab"
              data-toggle="pill"
              data-target="#v-pills-add-user"
              type="button"
            >
              <i class="fa-solid fa-user pr-3"></i>add user
            </button>
            <!-- end button for add user -->
          </div>
        </div>

        <div class="col-9 mx-3 py-3 px-4" id="right-side">
          <div class="tab-content" id="v-pills-tabContent">
            <!-- profile -->
            <div
              class="tab-pane fade profile show active"
              id="v-pills-home"
              role="tabpanel"
            >
              <div class="row">
                <div class="col-6">
                  <h1>Home</h1>
                </div>
                <div class="col-6">
                  <h6 class="text-success mt-3 text-right">
                    Active <i class="fa-solid fa-circle"></i>
                  </h6>
                </div>
              </div>
              <hr />
            </div>
            <!-- end profile -->
            <!-- start meeting -->
            <div class="tab-pane fade" id="v-pills-list-upload" role="tabpanel">
              <h1>list upload</h1>
              <hr />
              <!-- form -->
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter email"
                  />
                  <small id="emailHelp" class="form-text text-muted"
                    >We'll never share your email with anyone else.</small
                  >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    placeholder="Password"
                  />
                </div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1"
                  />
                  <label class="form-check-label" for="exampleCheck1"
                    >Check me out</label
                  >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- end meeting -->

            <!-- assingment -->
            <div class="tab-pane fade" id="v-pills-add-user" role="tabpanel">
              <div class="row py-2">
                <div class="col-10">
                  <h3>Add user</h3>
                </div>
              </div>
              <hr />
            </div>
            <!-- end assingment -->
          </div>
        </div>
      </div>
    </div>
    <script>
      setInterval(() => {
        const d = new Date();
        document.getElementById("date").innerHTML = d.toLocaleString();
      }, 1000);
    </script>
  </body>
</html>
