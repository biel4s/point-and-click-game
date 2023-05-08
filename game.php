<?php
    session_start();
    if (isset($_SESSION['x'])) {
        $x = $_SESSION['x'];
        // echo($_SESSION['x']);
    }
    else {
        $x = 0;
        $_SESSION['x'] = $x;
    }

    if (isset($_POST['restart'])) {
        $_SESSION['x'] = 0; 
        header('Location: game.php'); 
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="item-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Escape Room</h1>

            <?php
                
                if ($x==1) { 
                    echo "<img src='img/escape-room1.png' alt='escape-room1' usemap='#image-map1' />";
                    
                    echo "<div class='found'>";
                        echo "<h1 class='message'>You have found the first key and a penknife!</h1>";
                    echo "</div>";
                    echo "<script>
                            const alert = document.getElementsByClassName('message')[0];
                            setTimeout(function() {
                                alert.style.display = 'none';
                            }, 5000);
                        </script>";
                }
                else if ($x==2) {
                    echo "<img src='img/escape-room2.png' alt='escape-room2' usemap='#image-map2' />";

                    echo "<div class='found'>";
                        echo "<h1 class='message'>You have found the second key and a lighter!</h1>";
                    echo "</div>";
                    echo "<script>
                            const alert = document.getElementsByClassName('message')[0];
                            setTimeout(function() {
                                alert.style.display = 'none';
                            }, 5000);
                        </script>";
                }
                else if ($x==3) {
                    echo "<img src='img/escape-room3.png' alt='escape-room3' usemap='#image-map3' />";

                    echo "<div class='found'>";
                        echo "<h1 class='message'>You have found the last key!</h1>";
                    echo "</div>";
                    echo "<script>
                            const alert = document.getElementsByClassName('message')[0];
                            setTimeout(function() {
                                alert.style.display = 'none';
                            }, 5000);
                        </script>";
                }
                else if ($x==4) {
                    echo "<img src='img/escape-room4.png' alt='escape-room4' usemap='#image-map4' />";
                }
                else if ($x==5) {
                    echo "<img src='img/escape-room5.png' alt='escape-room5' usemap='#image-map5' />";
                }
                else {
                    echo "<img src='img/escape-room.png' alt='escape-room' usemap='#image-map' />";
                }
            ?>

            <!-- FIRST DRAWER -->
            <map name="image-map">
                <area alt="drawer" title="drawer" href="drawer.php" coords="556,398,557,429,610,423,610,394" shape="poly">
            </map>

            <!-- SECOND DRAWER AND BOXES-->
            <map name="image-map1">
                <area alt="drawer2" title="drawer2" href="drawer2.php" coords="557,457,610,448,610,479,558,488" shape="poly">
                <area alt="drawer3" title="drawer3" href="" class="padlock" onclick="showMessage()" coords="557,428,556,457,609,449,610,433,585,436" shape="poly">
                <area alt="box" title="box" href="box.php" class="padlock" onclick="showMessage()" coords="109,450,111,497,177,508,275,469,272,429,214,427" shape="poly">
                <area alt="box2" title="box2" href="" class="padlock" onclick="showMessage()" coords="819,332,814,349,813,379,910,386,911,334" shape="poly">
                <area alt="box3" title="box3" href="" class="padlock" onclick="showMessage()" coords="639,364,636,427,729,435,728,367" shape="poly">
                <area alt="window" title="window" href="" class="padlock" onclick="showMessage()" coords="825,96,824,267,896,264,897,273,912,274,921,259,947,258,946,61,937,55" shape="poly">
            </map>

            <!-- UNLOCK BOX WITH THE KEY -->
            <map name="image-map2">
                <area alt="drawer3" title="drawer3" href="" class="padlock" onclick="showMessage()" coords="557,428,556,457,609,449,610,433,585,436" shape="poly">
                <area alt="box" title="box" href="box.php" coords="109,450,111,497,177,508,275,469,272,429,214,427" shape="poly">
                <area alt="box2" title="box2" href="" class="padlock" onclick="showMessage()" coords="819,332,814,349,813,379,910,386,911,334" shape="poly">
                <area alt="box3" title="box3" href="" class="padlock" onclick="showMessage()" coords="639,364,636,427,729,435,728,367" shape="poly">
                <area alt="window" title="window" href="" class="padlock" onclick="showMessage()" coords="825,96,824,267,896,264,897,273,912,274,921,259,947,258,946,61,937,55" shape="poly">
            </map>

            <!-- UNLOCK WINDOW -->
            <map name="image-map3">
                <area alt="drawer3" title="drawer3" href="" class="padlock" onclick="showMessage()" coords="557,428,556,457,609,449,610,433,585,436" shape="poly">
                 <area alt="box2" title="box2" href="" class="padlock" onclick="showMessage()" coords="819,332,814,349,813,379,910,386,911,334" shape="poly">
                <area alt="box3" title="box3" href="" class="padlock" onclick="showMessage()" coords="639,364,636,427,729,435,728,367" shape="poly">
                <area alt="window" title="window" href="window.php" coords="825,96,824,267,896,264,897,273,912,274,921,259,947,258,946,61,937,55" shape="poly">
            </map>

            <!-- UNLOCK WHISKEY & OUTSIDE -->
            <map name="image-map4">
                <area alt="whiskey" title="whiskey" href="whiskey.php" coords="148,153,147,172,141,175,141,207,153,210,155,155" shape="poly">
                <area alt="freedom" title="freedom" href="freedom.php" coords="825,96,824,267,896,264,897,273,912,274,921,259,947,258,946,61,937,55" shape="poly">
            </map>
            
            <!-- UNLOCK OUTSIDE -->
            <map name="image-map5">
                <area alt="freedom" title="freedom" href="freedom.php" coords="825,96,824,267,896,264,897,273,912,274,921,259,947,258,946,61,937,55" shape="poly">
            </map>

             <script>
                const padlocks = document.getElementsByClassName("padlock");
                for (let i = 0; i < padlocks.length; i++) {
                    padlocks[i].addEventListener("click", showMessage);
                }
                function showMessage(event) {
                    event.preventDefault();
                    const h1Element = document.createElement("h1");
                    h1Element.className = "keys";
                    h1Element.textContent = "The key does not fit!";
                    document.body.appendChild(h1Element);
                    setTimeout(function() {
                        h1Element.style.display = "none";
                    }, 2000);
                }
            </script> 

            <table>
                <tr>
                    <td>
                        <?php   
                            if ($x == 1) {
                                echo "<img src='img/key.png' class='equipment' alt='key' />";
                            } 
                            else if ($x ==2) {
                                echo "<img src='img/key2.png' class='equipment' alt='key' />";
                            } 
                            else if ($x == 3) {
                                echo "<img src='img/key3.png' class='equipment' alt='key' />";
                            } 
                            else if ($x == 4 || $x == 5) {
                                echo "<img src='img/penknife.png' class='equipment' alt='penknife' />";
                            } 
                        ?>
                    </td>
                    <td>
                        <?php
                            if ($x == 1 || $x == 2 || $x == 3) {
                                echo "<img src='img/penknife.png' class='equipment' alt='penknife' />";
                            } 
                            else if ($x == 4 || $x == 5) {
                                echo "<img src='img/lighter.png' class='equipment' alt='lighter' />";
                            } 
                        
                        ?>
                    </td>	
                    <td>
                        <?php
                            if ($x == 2 || $x == 3) {
                                echo "<img src='img/lighter.png' class='equipment' alt='lighter' />";
                            } 
                            if ($x == 5) {
                                echo "<img src='img/whiskey.png' class='equipment' alt='whiskey' />";
                            }
                        ?>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </table> 
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table> 
    
            <h1><a href="restart.php">Restart</a></h1>  
        </div> 
    </div>
</body>
</html>
