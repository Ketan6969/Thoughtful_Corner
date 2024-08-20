<?php ob_start(); ?>
<?php
// function for random quote generator
    function ran_quote(){
        include("conn.php");
        $sql = "SELECT quote, author, quote_id FROM quotes_mst ORDER BY RAND() LIMIT 1";
        
        
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $quote_id = $row['quote_id'];
        $_SESSION['quote_id'] = $quote_id;
        echo '<div class="quote-card">';
        echo '<p class="quote" data-quote-id = "' . $row['quote_id'] . '">' . $row['quote'] . '</p>';
        echo '<p class="author">- ' . $row['author'] . '</p>';
        echo '<br>';
        echo '</div>';
        
    }    
    ?>
<?php ob_end_flush(); ?>
