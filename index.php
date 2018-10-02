<?php include('includes/init.php');
$current_page_id="index";
?>

<!DOCTYPE html>
<html>

  <head>
    <div id="myheader">
    <?php include('includes/header.php'); ?>
    <h1>Welcome to my website</h1>
    </div>


  </head>

  <body>

    <div id="bio">
      <p1>I am a student at Cornell University studying Information Science. I
        am also completing my two minors in Business and Environmental Science.
        I am interested in the intersection between technology and business, as
        well as living a sustainable lifestyle.</p1>
    </div>

    <div id="work">
      <p1>Here are some of the projects I have worked on during my time at Cornell
        which is where I got introduced to the tech field for the first time.</p1>

        <div id="pic">
          <a href="https://plantbasedlife.herokuapp.com/"><img src="/images/plantlife.png"/></a>

          <a href="https://cheeseandwine.herokuapp.com/"><img src="/images/cheesewine.png"/></a>
        </div>
    </div>


  </body>

</html>
