<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
            <tr style="background-color:blue;color:white;">
                <td>pavan</td>
                <td>kunnathu</td>
                <td>pavankumar@gmail.co0m</td>
            </tr>
        <?php 
        
        $list_of_students =
            ["usha"=>["fname"=>"u","email"=>"usha@gmail.com"],
            "uday"=>["fname"=>"u","email"=>"uday@gmail.com"],
            'pavan'=>["fname"=>"p","email"=>"pk@gmail.com"],
            'kirthika'=>["fname"=>"k","email"=>"kirthika@gmail.com"],
            'divya'=>["fname"=>"d","email"=>"divya@gmail.com"],
            'mohana'=>["fname"=>"m","email"=>"mohana@gmail.com"],
            'anusha'=>["fname"=>"a","email"=>"anusha@gmail.com"],
            'priti'=>["fname"=>"p","email"=>"priti@gmail.com"],
            'parvathi'=>["fname"=>"p","email"=>"parvathi@gmail.com"],
            'prtika'=>["fname"=>"p","email"=>"pritika@gmail.com"],
            "anitha"=>["fname"=>"a","email"=>"anitha@gmail.com"]];
        
        
        foreach($list_of_students as $i=>$x)
        {
            $firstname = $i;
            $lastname = $x["fname"];
            $email = $x["email"];

            if($email == "anusha@gmail.com"){
                echo "
                <tr style='background-color:pink;color:white;'>
                    <td>$firstname</td>
                    <td>$lastname</td>
                    <td>$email</td>
                </tr>
                    ";
            }
            else{

                echo "
                <tr>
                    <td>$firstname</td>
                    <td>$lastname</td>
                    <td>$email</td>
                </tr>
                    ";
            }
        }

        
        ?>
    
     
    </tbody>
  </table>
</div>

</body>
</html>
