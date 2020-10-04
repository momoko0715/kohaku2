<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, inisial-scale=1">
  <title>Kohaku's Home ver.2</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="contact/styles.css">
</head>
<body>
  <div class="top" id="top">

    <header>
      <nav id="menu">
        <span class="material-icons" id="close">close</span>
        <ul>
          <li><a href="index.html">TOP</a></li>
          <li><a href="profile.html">PROFILE</a></li>
          <li><a href="photo.html">PHOTO</a></li>
          <li><a href="https://www.instagram.com/__asu__koha__/" target="_blank">INSTAGRAM</a></li>
          <li><a href="contact.html">CONTACT</a></li>
        </ul>
      </nav>
    </header>

    <main>

      <div class="title">
        <div class="sp-menu">
          <span class="material-icons" id="open">menu</span>
        </div>
    
        <div class="logo">
          <h1><a href="index.html">Kohaku's Home</a></h1>
          <h2>- Contact -</h2>
        </div>
      </div>

      <div class="thanks">Thank you!</div>
      <div class="contact-form">
        <div class="form-title">Message</div>
          <div class="form">
            <div class="form-item">◇Name</div>
            <?php echo $_POST['name']; ?>
  
            <div class="form-item">◇E-Mail</div>
            <?php echo $_POST['email']; ?>
            
            <div class="form-item">◇Main</div>
            <?php echo $_POST['body']; ?>
          </div>

      </div>
        
      </div>

    </main>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="contact/main.js"></script>
</body>
</html>