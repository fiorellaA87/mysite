<header id="head">

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />



  <nav>
    <a href='index.php'><h1>Fiorella Atoche</h1></a>

    <ul>
      <?php
      foreach($pages as $pg_id => $page_name) {
        if ($pg_id == $current_page_id) {
          $css_id = "id='current_page'";
        } else {
          $css_id = "";
        }
        echo "<li ".$css_id."><a href='" . $pg_id. ".php'>$page_name</a></li>";
        }
      ?>
    </ul>
  </nav>

  <div id="line">
  
  </div>

</header>
