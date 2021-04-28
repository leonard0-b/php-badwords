<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="master.css">
  <title>BAD WORDS NONO</title>
</head>
<body class="flex">
  <div class="paragraph">
    <p>
      <span>Chiamata Get</span><br>
      <?php
        $testo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ante metus, vehicula sed luctus id, imperdiet nec erat. Nam at fringilla nibh. Maecenas tincidunt metus ornare lacus faucibus, a lacinia ante hendrerit. Etiam eget imperdiet diam, sit amet sagittis massa. Pellentesque quis porttitor nisl, ullamcorper facilisis diam. Etiam velit sapien, condimentum ac augue id, blandit sollicitudin nunc. Vestibulum non tellus eget est aliquam congue sed nec justo. In vitae consectetur lectus, consectetur volutpat ex. Donec tortor nulla, malesuada in ipsum sit amet, ultricies varius velit.";
        $badwordget = $_GET["badword"];
        $newtext = str_replace($badwordget, "***", $testo);
        echo $newtext;
      ?>
    </p>
    <p>
      <?php
        $length = strlen($newtext);
        echo "Lunghezza paragrafo:" . " " . $length;
      ?>
    </p>
  </div>
  <div class="paragraph-two">
    <p>
      <span>Sostituita la parola "ipsum"</span><br>
      <?php
        $testo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ante metus, vehicula sed luctus id, imperdiet nec erat. Nam at fringilla nibh. Maecenas tincidunt metus ornare lacus faucibus, a lacinia ante hendrerit. Etiam eget imperdiet diam, sit amet sagittis massa. Pellentesque quis porttitor nisl, ullamcorper facilisis diam. Etiam velit sapien, condimentum ac augue id, blandit sollicitudin nunc. Vestibulum non tellus eget est aliquam congue sed nec justo. In vitae consectetur lectus, consectetur volutpat ex. Donec tortor nulla, malesuada in ipsum sit amet, ultricies varius velit.";
        $badword = "ipsum";
        $textcensored = str_replace($badword, "***", $testo);
        echo $textcensored;
      ?>
    </p>
    <p>
      <?php
        $length = strlen($textcensored);
        echo "Lunghezza paragrafo:" . " " . $length;
      ?>
    </p>
  </div>
</body>
</html>