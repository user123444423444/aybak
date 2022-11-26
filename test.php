<!doctype html>
<html>
<head>
  <title>Navigation Menu</title>
  <link rel="stylesheet" type="text/css" href="css/test.css">
</head>
<body>
  <ul class="navigation">
    <li class="active">
      <a href="#">
        <span class="icon">
          <ion-icon name="home-outline"></ion-icon>
        </span>
        <span class="text">Home</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="icon">
          <ion-icon name="person-outline"></ion-icon>
        </span>
        <span class="text">Profile</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="icon">
          <ion-icon name="chatbubble-outline"></ion-icon>
        </span>
        <span class="text">Messages</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="icon">
          <ion-icon name="camera-outline"></ion-icon>
        </span>
        <span class="text">Photos</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="icon">
          <ion-icon name="settings-outline"></ion-icon>
        </span>
        <span class="text">Settings</span>
      </a>
    </li>
    <div class="indicator"></div>
  </ul>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    const list = document.querySelectorAll('.navigation li');
		function activelink(){
			list.forEach((item) =>
			item.classList.remove('active'));
			this.classList.add('active');
		}
		list.forEach((item) =>
		item.addEventListener('click', activelink));
  </script>
</body>
</html>