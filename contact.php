<!DOCTYPE HTML>
<html>

<head>
  <title>Dr. Roy Chowdhury's Polyclinic</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <?php include "header.php"; ?>
    <div id="site_content">
    <?php include "sidebar.php"; ?>
      <div id="content">
        <h2>Contact Us</h2>
        <p>Email us with you name</p>
        <form action="#" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_enquiry"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>
        </form>
      </div>
    </div>
     <?php include "footer.php"; ?>
  </div>
</body>
</html>
