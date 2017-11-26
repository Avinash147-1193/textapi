<?php
error_reporting( E_ALL );
require_once 'request/src/Unirest.php';

if(isset($_POST['submit_1'])){
$text = $_POST['text_1'];



$url = "https://textapis.p.mashape.com/nounphrases/?text=";
//print all the value which are in the array
$url = $url.$text;

$response = Unirest\Request::get($url,
  array(
    "X-Mashape-Key" => "y5dMrg2xgsmshX5qD4y2hGcvZRLZp1XH5hAjsnybRMIYq0c1c4",
    "Accept" => "application/json"
  )
);
$text_1 = json_encode($response);
$data = json_decode($text_1, TRUE);

$i = 0;
$array = [];
foreach($data['body']['noun_phrases'] as $child) { $array[$i] = $child;  $i+=1; }
//print_r($data['body']['noun_phrases']);
//echo $text_1[1];

}

if(isset($_POST['submit_2'])){
$text = $_POST['text_1'];
//echo $text;


$url = "https://textapis.p.mashape.com/language/detect/?text=";
//print all the value which are in the array
$url = $url.$text;

$response = Unirest\Request::get($url,
  array(
    "X-Mashape-Key" => "y5dMrg2xgsmshX5qD4y2hGcvZRLZp1XH5hAjsnybRMIYq0c1c4",
    "Accept" => "application/json"
  )
);
$text_1 = json_encode($response);
$data = json_decode($text_1, TRUE);
//var_dump($data);
$i = 0;
$array = [];
foreach($data['body']['language'] as $child) { $array[$i] = $child;  $i+=1; }
//print_r($data['body']['language']);
//echo $text_1[1];

}

if(isset($_POST['submit_3'])){
$text = $_POST['text_1'];
//echo $text;


$url = "https://textapis.p.mashape.com/spelling/correct/?text=";
//print all the value which are in the array
$url = $url.$text;

$response = Unirest\Request::get($url,
  array(
    "X-Mashape-Key" => "y5dMrg2xgsmshX5qD4y2hGcvZRLZp1XH5hAjsnybRMIYq0c1c4",
    "Accept" => "application/json"
  )
);
$text_1 = json_encode($response);
$data = json_decode($text_1, TRUE);
//var_dump($data);
$i = 0;
$array = [];
foreach($data['body']['text'] as $child) { $array[$i] = $child;  $i+=1; }
//print_r($data['body']['text']);
//echo $text_1[1];

}

if(isset($_POST['submit_4'])){
$text = $_POST['text_1'];
//echo $text;


$url = "https://textapis.p.mashape.com/ocr/?url=";
//print all the value which are in the array
$url = $url.$text;

$response = Unirest\Request::get($url,
  array(
    "X-Mashape-Key" => "y5dMrg2xgsmshX5qD4y2hGcvZRLZp1XH5hAjsnybRMIYq0c1c4",
    "Accept" => "application/json"
  )
);
$text_1 = json_encode($response);
$data = json_decode($text_1, TRUE);
//var_dump($data);
$i = 0;
$array = [];
foreach($data['body']['text'] as $child) { $array[$i] = $child;  $i+=1; }
print_r($data['body']['language']);
//echo $text_1[1];

}

if(isset($_POST['submit_5'])){
$text = $_POST['text_1'];
//echo $text;


$url = "https://textapis.p.mashape.com/sentiment/?text=";
//print all the value which are in the array
$url = $url.$text;

$response = Unirest\Request::get($url,
  array(
    "X-Mashape-Key" => "y5dMrg2xgsmshX5qD4y2hGcvZRLZp1XH5hAjsnybRMIYq0c1c4",
    "Accept" => "application/json"
  )
);
$text_1 = json_encode($response);
$data = json_decode($text_1, TRUE);
//var_dump($data);
$i = 0;
$array = [];
foreach($data['body'][0]['probability'] as $child) { $array[$i] = $child;  $i+=1; }
 
//echo $text_1[1];

}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pucho technology- Task 1</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Text API functionings</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#noun_phrases">Noun extraction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#language_translate">Sentiment Analysis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#language_detect">Language detection</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#ocr">OCR</a>
            </li>
            
            <li class="nav-item" >
              <a class="nav-link js-scroll-trigger" href="#spelling">Spelling correction</a>
            </li>

             <li class="nav-item" style="visibility: hidden; width:0px; height:0px;">
              <a class="nav-link js-scroll-trigger" href="#xyz">Spelling correction</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Hello there, welcome to beautiful world of magical API's</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">I am using TEXT API to perform different tasks, Hit the navigation bar to persorm a certain task!</p>
            
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="noun_phrases">
      <div class="container   ">
        <div class="container   ">
           <div class="row">
          <form method="post" action="">
              <div class="form-group row">
                <label class="col-sm-offset-2 col-sm-10" for="email">Enter your sentence to detect nouns in it: </label>
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="text" class="form-control" name="text_1" id="text_1" placeholder="Enter sentence">
                </div>
              </div>
              
              
              <div class="form-group row">
                <div >
                  <button type="submit" name="submit_1" id="submit_1" class="btn btn-info" >Submit</button>
                </div>
              </div>
             </form>
              </div>
            
            <div class="row ">
            <ul class="list-group" style="width: 100%;">
              <?php
             
              if(isset($_POST['submit_1'])){
              $count = 0;
              $color = 2;
              ?>
              
              <div class="alert alert-success" role="alert"  style="text-align:center">Your sentence have below mentioned nouns!</div>
              <?php
              foreach($array as $child){
                if($count%$color == 0){
                  $list_style= "list-group-item list-group-item-info";
                }
                else{
                   $list_style= "list-group-item list-group-item-warning";
                }
              ?>
               
                <li class= '<?php echo $list_style; ?>'  style="text-align:center"> <?php echo $child; ?> </li>
              
             
              <?php $count+=1;} }?>
               </ul>
             </div>
        
      </div>
      </div>
      <div class="container   ">
      </div>
    </section>

    <section id="language_translate" style="background-color: #7bef6e">
      <div class="container   ">
        <div class="container   ">
           <div class="row">
          <form method="post" action="">
              <div class="form-group row">
                <label class="col-sm-offset-2 col-sm-10" for="email">Enter your sentence to detect sentiments in it: </label>
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="text" class="form-control" name="text_1" id="text_1" placeholder="Enter sentence">
                </div>
              </div>
              
              
              <div class="form-group row">
                <div >
                  <button type="submit" name="submit_5" id="submit_5" class="btn btn-info" >Submit</button>
                </div>
              </div>
             </form>
              </div>
            
            <div class="row ">
            <ul class="list-group" style="width: 100%;">
              <?php
             
              if(isset($_POST['submit_5'])){
              $count = 0;
              $color = 2;
              $msg = "";
              ?>
              
              <div class="alert alert-success" role="alert"  style="text-align:center">Your sentence have below mentioned sentiments!</div>
              <?php
              foreach($array as $child){
                if($count%$color == 0){
                  $list_style= "list-group-item list-group-item-info";
                }
                else{
                   $list_style= "list-group-item list-group-item-warning";
                }
                if ($count == 0){
                  $msg = "neg";
                }
                if ($count == 1){
                  $msg = "neu";
                }
                if ($count == 2){
                  $msg = "pos";
                }
                if ($count == 3){
                  $msg = "compound";
                }
              ?>
               
                <li class= '<?php echo $list_style; ?>'  style="text-align:center"> <?php echo $msg."= "; echo $child; ?> </li>
              
             
              <?php $count+=1;} }?>
               </ul>
             </div>
        
      </div>
      </div>
      <div class="container   ">
      </div>
    </section>

     <section id="language_detect" style="background-color: #6eddef">
      <div class="container   ">
        <div class="container   ">
           <div class="row">
          <form method="post" action="">
              <div class="form-group row">
                <label class="col-sm-offset-2 col-sm-10" for="email">Enter your sentence to detect language: </label>
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="text" class="form-control" name="text_1" id="text_1" placeholder="Enter sentence">
                </div>
              </div>
              
              
              <div class="form-group row">
                <div >
                  <button type="submit" name="submit_2" id="submit_2" class="btn btn-info" >Submit</button>
                </div>
              </div>
             </form>
              </div>
            
            <div class="row ">
            <ul class="list-group" style="width: 100%;">
              <?php
             
              if(isset($_POST['submit_2'])){
              $count = 0;
              $color = 2;
              ?>
              
              <div class="alert alert-success" role="alert"  style="text-align:center">Your sentence is in below language!</div>
              <?php
              foreach($array as $child){
                if($count%$color == 0){
                  $list_style= "list-group-item list-group-item-info";
                }
                else{
                   $list_style= "list-group-item list-group-item-warning";
                }
              ?>
               
                <li class= '<?php echo $list_style; ?>'  style="text-align:center"> <?php echo $child; ?> </li>
              
             
              <?php $count+=1;} }?>
               </ul>
             </div>
        
      </div>
      </div>
      <div class="container">
        
      </div>
    </section>

  

   

    <section id="ocr" style="background-color: #7bef6e">
      <div class="container">
        
            <div class="container   ">
        
           <div class="row">
          <form method="post" action="">
              <div class="form-group row">
                <label class="col-sm-offset-2 col-sm-10" for="email">Enter wrong text input to correct it's spelling: </label>
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="text" class="form-control" name="text_1" id="text_1" placeholder="Enter a URL">
                </div>
              </div>
              
              
              <div class="form-group row">
                <div >
                  <button type="submit" name="submit_3" id="submit" class="btn btn-info" >Submit</button>
                </div>
              </div>
             </form>
              </div>
            
            <div class="row ">
            <ul class="list-group" style="width: 100%;">
              <?php
             
              if(isset($_POST['submit_3'])){
              $count = 0;
              $color = 2;
              ?>
              
              <div class="alert alert-success" role="alert"  style="text-align:center">Your inout has been corrected below!</div>
              <?php
              
                if($count%$color == 0){
                  $list_style= "list-group-item list-group-item-info";
                }
                else{
                   $list_style= "list-group-item list-group-item-warning";
                }
              ?>
               
                <li class= '<?php echo $list_style; ?>'  style="text-align:center"> <?php print_r($data['body']['text']); ?> </li>
              
             
              <?php $count+=1; }?>
               </ul>
             </div>
        
      </div>
         <div class="container">
        
      </div>
        
      </div>

      
        
    </section>

     <section id="spelling" style="background-color: #47d19e">
       <div class="container" >
        <div class="container" >
           <div class="row">
          <form method="post" action="">
              <div class="form-group row">
                <label class="col-sm-offset-2 col-sm-10" for="email">Enter a URL to detect text written in it! </label>
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="text" class="form-control" name="text_1" id="text_1" placeholder="Enter a URL" >
                </div>
              </div>
              
              
              <div class="form-group row">
                <div >
                  <button type="submit" name="submit_4" id="submit_4" class="btn btn-info" >Submit</button>
                </div>
              </div>
             </form>
              </div>
            
            <div class="row ">
            <ul class="list-group" style="width: 100%;">
              <?php
             
              if(isset($_POST['submit_4'])){
              $count = 0;
              $color = 2;
              ?>
              
              <div class="alert alert-success" role="alert"  style="text-align:center">Your URL have below texts!</div>
              <?php
              
                if($count%$color == 0){
                  $list_style= "list-group-item list-group-item-info";
                }
                else{
                   $list_style= "list-group-item list-group-item-warning";
                }
              ?>
               
                <li class= '<?php echo $list_style; ?>'  style="text-align:center"> <?php echo $data['body']['text']; ?> </li>
              
             
              <?php $count+=1;} ?>
               </ul>
             </div>
        
      </div>
      </div>
       <div class="container">
        
      </div>
      </section>
     
     <section id="xyz" style="display: none;">
      <div class="container">
      </div>
      </section>

     
    <!-- Bootstrap core JavaScript -->
    </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>


