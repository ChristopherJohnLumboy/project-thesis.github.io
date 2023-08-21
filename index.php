<?php
    $num = "";
    $result = "";
    $cookie_name1 = "num";
    $cookie_value1 = "";
    $cookie_name2 = "op";
    $cookie_value2 = "";


    
   


    if(isset($_POST['display'])){
        $num = $_POST['display'];
        
    }
    else{
        $num= "";
    }


    if(isset($_POST['submit'])){
        $num = $_POST['display'] . $_POST['submit'];
    }
    else{
        $num="";

    }

    if(isset($_POST['op'])){

        $cookie_value1 = $_POST['display'];
        setcookie($cookie_name1, $cookie_value1, time()+(86400*30),"/");

        $cookie_value2 = $_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time()+(86400*30),"/");
        $num= "";

    }

    if (isset($_POST['equals'])){
        $num=$_POST['display'];
       
        switch($_COOKIE['op']){
            case "+":
                $result =  $_COOKIE['num'] + $num;
                break;
            case "/":
                $result =$_COOKIE['num'] / $num;
                break;
            case "-":
                $result = $_COOKIE['num'] - $num;
                break;
            case "*":
                $result = $_COOKIE['num'] * $num;
                break;
        }
        $num = $result;
    }

    if (isset($_POST['delete'])){
        unset($_POST);
        unset($_COOKIE);
    }





?>
<!DOCtype html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name=" viewport" content="width=device-width">
        <link rel="stylesheet" href="index.css" type="text/css">

        <title>
            Calculator
        </title>

    </head>


    <bodybb style="background-image: url('drstone.jpg');">
        <Center>
        <h2 style="color: #ff8e00;">Theres nothing you can't do if you try</h2>
        <form action="#" method="post">
        <table border="1">
            <tr>
                <td colspan="4">
                    <input type="text" name="display" class="" value=<?php echo $num; ?>>
                   
                </td>
            </tr>
            <tr >
                <td> <input class="btn" type="submit" name="submit" value="7"> </td>
                <td> <input class= "btn" type="submit" name="submit" value="8"> </td>
                <td> <input class= "btn" type="submit" name="submit" value="9"> </td>
                <td> <input class= "btn" type="submit" name="op" value="/"> </td>
            </tr>

            <tr>
                <td> <input class= "btn" type="submit" name="submit" value="4"> </td>
                <td> <input class= "btn" type="submit" name="submit" value="5"> </td>
                <td> <input class= "btn" type="submit" name="submit" value="6"> </td>
                <td> <input class= "btn" type="submit" name="op" value="+"> </td>
            </tr>

            <tr>
                <td> <input class= "btn" type="submit" name="submit" value="1"> </td>
                <td> <input class= "btn" type="submit" name="submit" value="2"> </td>
                <td> <input class= "btn" type="submit" name="submit" value="3"> </td>
                <td> <input class= "btn" type="submit" name="op" value="-"> </td>
            </tr>

            <tr>
                <td> <input class= "btn" type="submit" name="submit" value="0"> </td>
                <td> <input class= "btn" type="submit" name="delete" value="C"> </td>
                <td> <input class= "btn" type="submit" name="equals" value="="> </td>
                <td> <input class= "btn" type="submit" name="op" value="*"> </td>
            </tr>
        </table>
        </form>

      
        </Center>
       
        
    </body>
</html>