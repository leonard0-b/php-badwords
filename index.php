<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BAD WORDS NONO</title>
</head>
<body>
  <div class="paragraph">
    <p>
      <span>Chiamata Get</span><br>
      <?php
        $testo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ante metus, vehicula sed luctus id, imperdiet nec erat. Nam at fringilla nibh. Maecenas tincidunt metus ornare lacus faucibus, a lacinia ante hendrerit. Etiam eget imperdiet diam, sit amet sagittis massa. Pellentesque quis porttitor nisl, ullamcorper facilisis diam. Etiam velit sapien, condimentum ac augue id, blandit sollicitudin nunc. Vestibulum non tellus eget est aliquam congue sed nec justo. In vitae consectetur lectus, consectetur volutpat ex. Donec tortor nulla, malesuada in ipsum sit amet, ultricies varius velit.";
        $testo = str_replace($_GET["badword"], "***", $testo);
        echo $testo;
      ?>
    </p>
    <p>
      <?php
        $length = strlen($testo);
        echo "Lunghezza paragrafo:" . " " . $length;
      ?>
    </p>
  </div>
  <div class="paragraph-two">
    <p>
      <span>Sostituita la parola "ipsum"<span><br>
      <?php
        $testo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ante metus, vehicula sed luctus id, imperdiet nec erat. Nam at fringilla nibh. Maecenas tincidunt metus ornare lacus faucibus, a lacinia ante hendrerit. Etiam eget imperdiet diam, sit amet sagittis massa. Pellentesque quis porttitor nisl, ullamcorper facilisis diam. Etiam velit sapien, condimentum ac augue id, blandit sollicitudin nunc. Vestibulum non tellus eget est aliquam congue sed nec justo. In vitae consectetur lectus, consectetur volutpat ex. Donec tortor nulla, malesuada in ipsum sit amet, ultricies varius velit.";
        $testo = str_replace("ipsum", "***", $testo);
        echo $testo;
      ?>
    </p>
    <p>
      <?php
        $length = strlen($testo);
        echo "Lunghezza paragrafo:" . " " . $length;
      ?>
    </p>
  </div>
  
</body>
</html>