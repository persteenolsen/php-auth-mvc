<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
   <title>PHP User Registration and Login System</title> 
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>


<script>

// Collapsing the menu when the user click somewhere at the content   		 
$('body').click(function(evt){    

  if(!$(evt.target).is('#App')) {
                                    
      if(!$(".navbar-collapse").is(":hidden")){
          $('.navbar-collapse').collapse('hide');
             // alert("The mobile menu will be hidden....");
       }
    }
 });
                                
</script>