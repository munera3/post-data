<!DOCTYPE html>
<html>
  <head>
    <title> GET&POST DATA</title>
	    <style> 
        body {
        font-family: Arial, sans-serif;
        background-color: #F5F5F5;
      }
        header{
        background-color: #F5F5F5;
        padding: 15px;
        text-align: center;
        box-shadow: 0 0 3px #887575;
    }
        header li {
       display: inline-block;
       padding-right: 50px;
      }
     
      form {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 10px #ccc;
        border-radius: 5px;
      }
      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
      }
      input[type="text"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
       textarea{
    background-color: #F5F5F5;
    padding: 15px;
    box-shadow: 0 0 3px #887575;
    width: 60%;
    height: 40%;
    }
      input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;

			
	  </style>
	 
  </head>
  <body>
     <header> 
        <ul>
            <li><img src="logosmart.png"alt=""></li>
        
        </ul>
    </header>

   

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "datapost";

     
      $conn = new mysqli($servername, $username, $password, $dbname);

    
      if(isset($_POST["btn"]))
            {  
       $yourname= $_POST["name"];
       $yourmessage= $_POST["message"];

  
      $sql = "INSERT INTO data ( name , message) VALUES ('$yourname' , '$yourmessage')";
       
      $result = $conn->query($sql);

    }

    ?>

   
    <form method="post">
      <label for="name">NAME:</label>
      <input type="text" name="name">

      <label for="message">MESSAGE:</label>
      <textarea  name="message">
      </textarea>

      <input type="submit" name="btn">

    </form>
    

   


  </body>
</html>