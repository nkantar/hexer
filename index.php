<?php
if($_GET['name']) {
  $name = ($_GET['name']);
  $hash = hash('sha256', $name);
  $hex = substr($hash, 0, 6);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hexer // Turn a string into a web color.</title>
    <link href='http://fonts.googleapis.com/css?family=Exo:300,300italic,900italic' rel='stylesheet' type='text/css'>
    <style>
      /*reset*/
      body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td{margin:0;padding:0;}
      table{border-collapse:collapse;border-spacing:0;}
      fieldset,img{border:0;}
      address,caption,cite,code,dfn,em,strong,th,var{font-style:normal;font-weight:normal;}
      ol,ul{list-style:none;}
      caption,th{text-align:left;}
      h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}
      q:before,q:after{content:'';}
      abbr,acronym{border:0;}
      /* NameHexer */
      <?php echo "body { background: #$hex;"; ?>
        min-height: 500px;
        font-family: 'Exo', sans-serif;
        font-weight: 300;
      }
      #topbar {
        padding: 25px 50px 25px 50px;
        min-width: 530px;
        background: #000000;
        color: #bbbbbb;
      }
      h1 {
        font-size: 96px;
        color: #ffffff;
        letter-spacing: 5px;
        font-weight: 900;
        font-style: italic;
      }
      h2 {
        font-size: 14px;
        line-height: 21px;
        margin-bottom: 15px;
      }
      p {
        font-size: 14px;
      }
      #field {
        background: #000000;
        border: none;
        border-bottom: 1px solid #bbbbbb;
        color: #ffffff;
        font-family: 'Fugaz One', sans-serif;
        font-size: 14px;
      }
      .big {
        font-size: 150%;
        color: #ffffff;
      }
      a { color: #ffffff; text-decoration: none; }
      a#again { font-style: italic; }
    </style>
  </head>
  <body>
    <div id="topbar">
      <h1><a href="/">Hexer</a></h1>
      <h2>The text you enter is encrypted using the <a target="_blank" href="http://en.wikipedia.org/wiki/SHA-2">SHA-256</a> algorithm and the first five digits of the result are used as a <a target="_blank" href="http://en.wikipedia.org/wiki/Web_colors">hex color code</a>.</h2>

<?php

// if the name has already been passed
if($_GET['name']) {


?>

      <p>Text: <span class="big"><?php echo $name; ?></span><br />
        Web color: <span class="big"><?php echo strtoupper($hex); ?></span><br /><br />
        <a id="again" href="/">Again?</p>


<?php

// if no name has been passed yet
} else {

?>

      <p><form action="/" method="get">
        Text: <input type="text" size="50" name="name" id="field" />
        &nbsp;<input type="submit" />
      </p>
        
<?php

}

?>

    </div>
  </body>
</body>