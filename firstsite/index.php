
<!DOCTYPE html>
<html lang="en">
  <head>
          <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<script src="http://code.jquery.com/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <div class="container">

      <form name="test" method="post">
        <h2 class="form-signin-heading">Please enter car mark and model (KIA, Lada or Audi)</h2>
        <label for="inputMark" class="sr-only">Car mark</label>
        <input type="text" name="inputMark" class="form-control" placeholder="Car mark" required autofocus>
        <label for="inputModel" class="sr-only">Car model</label>
        <input type="text" name="inputModel" class="form-control" placeholder="Car model" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add to garage</button>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div>
        
        <?php

$mark = htmlspecialchars($_POST['inputMark']);
$model = htmlspecialchars($_POST['inputModel']);
$garage = [];
$garage['Lada'] = [
    "Granta", "Priora", "Vesta"
];
$garage['Audi'] = [
    "Q3", "Q7", "A4"
];
$garage['KIA'] = [
    "Ceed", "Cerato", "Magentis"
];

switch ($mark) :
  case 'KIA' : { $mark = 'KIA'; array_push($garage['KIA'], $model); }
  break;
  case 'Audi' : { $mark = 'Audi'; array_push($garage['Audi'], $model); }
  break;
  case 'Lada' : { $mark = 'Lada'; array_push($garage['Lada'], $model); }
  break;
  default: echo 'Wrong';
endswitch;


function info($garage)
{

echo "Cars in your garage: " . PHP_EOL;

foreach($garage as $base_key => $base_value) 
    {
 foreach($base_value as $value) 
      {
  $output .=  $base_key . ' ' . $value . ',' . ' ' . PHP_EOL;
      }
    }
    return $output;
}

echo info($garage);

?>
        
      </form>

    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


  </body>
</html>
