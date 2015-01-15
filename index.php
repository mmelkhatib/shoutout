<?php include 'database.php';?>
<?php 
/*
 * Create select query
 * 
 */

$query = "SELECT * FROM shouts ORDER BY id";
$shouts = mysqli_query($con, $query);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <title>Shout out Box!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div id="container">
            <header>
                <h1>Shout out!</h1>
                
            </header>
            <div id="shouts">
                <ul>
                    <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li class="message"><span class="time"><?php echo $row['time'] ?></span><strong><?php echo $row['user'] ?></strong> posted.<p><?php echo $row['message'] ?></p></li>
                    <?php  endwhile; ?>
                            
                            
                </ul>
                  
            </div> 
                        
            <div id="input">
                <?php if(isset($_GET['error'])): ?>
                <div class="error"><?php echo $_GET['error']; ?></div>
                    <?php endif; ?>
                <form method="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter your name" />
                    <input type="text" name="message" placeholder="Enter Your Message" />
                    <input class="button" type="submit" name="submit" value="Shout it out" />                    
                    
                </form>
                
            </div>           
        </div>
        
        
    </body>
</html>

