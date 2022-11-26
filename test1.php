<!DOCTYPE html>
<html>

<head>
  <title>Custom Select Menu</title>
  <link rel="stylesheet" type="text/css" href="css/test1.css">
</head>

<body>
  <div class="box">
    <div class="profile">
      <div class="imgBx">
        <img src="https://d2qp0siotla746.cloudfront.net/img/use-cases/profile-picture/template_3.jpg">
      </div>
      <h4 class="text">Muhammad Irshad<br><span>Creative Designer</span></h4>
    </div>
    <ul class="menu">
      <li>
        <label>
          <span class="title">
            <ion-icon name="wifi"></ion-icon> Wi-Fi
          </span>
          <span class="action">
            <input type="checkbox">
            <i></i>
          </span>
        </label>
      </li>
      <li>
        <label>
          <span class="title">
            <ion-icon name="bluetooth"></ion-icon> Bluetooth
          </span>
          <span class="action">
            <input type="checkbox">
            <i></i>
          </span>
        </label>
      </li>
      <li>
        <label>
          <span class="title">
            <ion-icon name="airplane"></ion-icon> Airplane Mode
          </span>
          <span class="action">
            <input type="checkbox">
            <i></i>
          </span>
        </label>
      </li>
      <li>
        <label>
          <span class="title">
            <ion-icon name="location"></ion-icon> Location
          </span>
          <span class="action">
            <input type="checkbox">
            <i></i>
          </span>
        </label>
      </li>
      <li>
        <label>
          <span class="title">
            <ion-icon name="moon"></ion-icon> Dark Mode
          </span>
          <span class="action">
            <input type="checkbox" id="dark">
            <i></i>
          </span>
        </label>
      </li>
    </ul>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    let body = document.querySelector('body');
    let dark = document.querySelector('#dark');
    dark.onclick = function() {
      if (dark.checked == true) {
        body.classList.add('darkMode');
      } else {
        body.classList.remove('darkMode');
      }
    }
  </script>
</body>

</html>