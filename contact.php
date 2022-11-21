<?php
// Menghubungkan Ke Database 
$conn = mysqli_connect("localhost", "root", "", "finaltest");

// Cek tombol submit
if (isset($_POST['submit'])) {
  // Ambil data dari tiap elemen
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  // var_dump($name);

  // Tambah Data
  $query = "INSERT INTO contact 
              VALUES
              ('$name', '$phone', '$email', '$subject', '$message', '')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    // <div class="alert alert-success" role="alert">Your message was successfully sent</div>
    echo "
            <script>
               alert('Pesan berhasil Terkirim!');
            </script>
        ";
  } else {
    // <div class="alert alert-danger" role="alert">Your message has not been sent, restart</div>
    echo "
            <script>
               alert('Pesan Gagal Terkirim!');
            </script>
        ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">

  <title>PORTOFOLIO || Contact</title>

  <link href="./main.3f6952e4.css" rel="stylesheet">
</head>

<body class="">
  <div id="site-border-left"></div>
  <div id="site-border-right"></div>
  <div id="site-border-top"></div>
  <div id="site-border-bottom"></div>
  <!-- Add your content of header -->
  <header>
    <nav class="navbar  navbar-fixed-top navbar-default">
      <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav ">
            <li><a href="./index.html" title="">01 : Home</a></li>
            <li><a href="./about.html" title="">02 : About me</a></li>
            <li><a href="./works.html" title="">03 : My Galery</a></li>
            <li><a href="./contact.php" title="">04 : Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-container-spacer text-center">
            <h1 class="h2">04 : Contact me</h1>
          </div>

          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <form action="" method="POST" class="reveal-content">
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" class="form-control" id="Name" placeholder="Name" name="name" required>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" id="Phone" placeholder="Phone Number" name="phone" required>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="Email" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="Subject" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="5" placeholder="Enter your message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-default btn-lg" name="submit">Send</button>
                  </div>
                  <div class="col-md-5 address-container">
                    <ul class="list-unstyled">
                      <li>
                        <span class="fa-icon">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        + 62 811 2345 6789
                      </li>
                      <li>
                        <span class="fa-icon">
                          <i class="fa fa-at" aria-hidden="true"></i>
                        </span>
                        e-mail@gmail.io
                      </li>
                      <li>
                        <span class="fa-icon">
                          <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                        </span>
                        Kota Makassar Sulawesi Selatam
                      </li>
                    </ul>
                    <h3>Follow me on social networks</h3>
                    <a href="http://www.facebook.com" title="" class="fa-icon">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="http://www.twitter.com" title="" class="fa-icon">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="http://www.instagram.com" title="" class="fa-icon">
                      <i class="fa fa-instagram"></i>
                    </a>

                  </div>
                </div>
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>


  <footer class="footer-container text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p><b>© Andi Zulfikar | My Portofolio</b></p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
      navActivePage();
    });
  </script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->
  <script type="text/javascript" src="./main.70a66962.js"></script>
</body>

</html>