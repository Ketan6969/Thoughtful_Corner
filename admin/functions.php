<?php ob_start(); ?>
<?php
    include("conn.php");
    global $conn;
    //Insert Function
    function insert($quote,$author,$cate){
            $quote = $_POST["quote"];
            $author = $_POST["author"];
            $cate  = $_POST["category"];
            
            $sql = "insert into quotes_mst (quote,author,cate) values ('$quote' , '$author' , '$cate')";
            if($quote == NULL || $author == NULL || $cate == NULL)
            {
                echo '<script>alert("Plea   se fill all the details!")</script>';
            }   
            else
            {
                $result = mysqli_query($conn,$sql);
                if($result){
                echo '<script>alert("Data Inserted")</script>';
            }
            else{
                die('<script>alert("Error occured while insertion!")</script>');
            }
            }
        }
    //Delete Function
    //Update Function

    function update($quote_id,$quote,$author,$cate)
    {
        global $conn;
        $sql = "update quotes_mst set quote_id = '$quote_id' , quote = '$quote' , author = '$author' , cate = '$cate' where quote_id = '$quote_id'";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            echo "Data Updated Successfully!";
        }  
    }

?>

<?php
    include("conn.php");
    function quote_count(){
        global $conn;
        $sql = "select * from quotes_mst";
        $result = mysqli_query($conn,$sql);
       // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);   
        echo '<h4>'  . $count . " quotes." . '</h4>'; 

    }
    ?>

<?php
    include("conn.php");
    function user_count(){
        global $conn;
        $sql = "select * from user_mst";
        $result = mysqli_query($conn,$sql);
       // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);   
        echo '<h4>' .  $count . " Users." . '</h4>'; 

    }
    ?>

    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
?>

<?php
    function checkPasswordStrength($password) {
        // Define password strength requirements using regular expressions
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        $specialChar = preg_match('@[^\w]@', $password);
    
        // Define minimum length for the password
        $minLength = 8;
    
        // Check if the password meets all the requirements
        return ($uppercase && $lowercase && $number && $specialChar && strlen($password) >= $minLength);
    }
?>

<?php
    
    function cate_count($category){
        include("conn.php");
        $sql = "select * from quotes_mst where cate = '$category'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        echo '<tr>';
        echo '<td>' . $category . '</td>';
        echo '<td>' . $count . '</td>';
        echo '</tr>';
    }
?>

<?php
    
    function greetTime() {
        date_default_timezone_set('Asia/Kolkata'); // Set your timezone here
        
        $time = date('H'); // Get the current hour in 24-hour format
        
        if ($time < 12) {
            return "Morning";
        } elseif ($time < 17) {
            return "Afternoon";
        } else {
            return "Evening";
        }
    }
    
        
?>
<?php ob_end_flush(); ?>
