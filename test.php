<!doctype html> <html> 
​
<head>
    <title>Your Results</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
​
<style>
​
body {
      font-family: 'Open Sans', sans-serif;
      background-color: #dfc368;
}
​
.container {
     position:absolute;
     margin: auto;
     width: 100%;
     height: 350px;
     text-align: center;
     color: solid black;
     top: 50%;
     left: 50%;
     -ms-transform: translate(-50%, -50%);
     transform: translate(-50%, -50%);
    }
​
.result{
     display: block;
     position:absolute;
 }
 table, th, td {
  border: 1px solid black;
}
​
 
</style>
</head> 
​
<body> 
  <!-- As a heading -->
  <nav class="navbar navbar-light bg-dark ">
    <span class="navbar-brand mb-0 h1 text-light">DeepFake Classifier</span>
    </nav>
    
  <div class="container" id="maintext">
    <h1 class="mb-5"> Your Prediction </h1>
        <table class="table-bordered" style="width:100%">
          <tr>
            <th>Input</th>
            <th>Confidence</th>
            </tr>
            <tr>
            <td><!--Add the document root for here to display the uploaded image--></td>
            <td>{{ predictions.prob1 }}</td>
            </tr>            
         </table> 
      <a href="test.php"><button class="button mt-3">Try again?</button></a>
  </div>
​
  <div>
    <p style=" position: absolute; bottom: 0; left: 0; width: 100%; text-align: center; color: #686867">
    Website developed by Muhammad Mustafa Ispahani , Salman Azhar, Nazzal Naseer, Odunayo Onifade, Noman Tanveer, Sheetal Gour. Copyright &copy; 2020 </p>	
    </div>
</body>
</html>
