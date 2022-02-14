<!DOCTYPE html>
<html>
  <head>
    <title>Add Package</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("/uploads/media/default/0001/01/b5edc1bad4dc8c20291c8394527cb2c5b43ee13c.jpeg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
        margin-left: 210px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5);
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7);
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black;
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px;
      border: none;
      background: #26a9e0;
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">Adventure</span>
      </div>
        <ul class="nav-links">
            <li style="background: #000;">
            <a href="testing.php">
              <i class='bx bx-box' ></i>
              <span class="links_name">Add Package</span>
            </a>
          </li>
          <li style="background: #081D45;">
            <a href="adminviewpackage.php">
              <i class='bx bx-list-ul' ></i>
              <span class="links_name">View Package</span>
            </a>
          </li>
          <li style="background: #081D45;">
            <a href="viewcustomer.php">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="links_name">View Bookings</span>
            </a>
          </li>
          <li style="background: #081D45;">
            <a href="custommsg.php">
              <i class='bx bx-coin-stack' ></i>
              <span class="links_name">Customer Message</span>
            </a>
          </li>
          <li style="background: #081D45;">
            <a href="index.php">
              <i class='bx bx-log-out'></i>
              <span class="links_name">Log out</span>
            </a>
          </li>
        </ul>
    </div>
    <div class="main-block">
              <form action="testing1.php" method="post" enctype="multipart/form-data">
        <div class="title">
          <i class="fas fa-pencil-alt"></i>
          <h2>Add Packages</h2>
        </div>
        <div class="info">
          <input  name="name" placeholder="Event Name" class="form-control"  type="text">
          <input name="place" placeholder="Place" class="form-control"  type="text">
          <input  name="service" placeholder="Services" class="form-control"  type="text">
          <input name="guide" placeholder="Guide Name" class="form-control"  type="text">
          <input name="gnumber" placeholder="Mobile Number " class="form-control"  type="text">
          <input name="image1"  class="form-control"  type="file">
          <input name="pricead"  class="form-control" placeholder="Price for Adults"  type="text">
          <input name="pricech"  class="form-control" placeholder="Price for Children"  type="text">
          <textarea name="description" rows="4" cols="80" class="form-control"></textarea>

        </div>

        <button type="submit" name="submit">Submit</button>

      </form>
    </div>
  </body>
</html>
