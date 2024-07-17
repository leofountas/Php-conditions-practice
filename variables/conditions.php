<?php
/**
 * Exercises to practice conditions in php 
*/
// / 1.1 Clean your room Exercise 

$room_is_filthy = false;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	// cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

echo "<br>";
// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = array (0 => "health hazard", 1 => "filthy", 2 => "dirty", 3 => "clean", 4 => "immaculate");

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[2]; 

if( $room_filthiness == "health hazard" ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == "filthy" ){
	echo "Yuk, Room is dirty : let's clean it up !";
} else if ( $room_filthiness == "dirty" ){
    echo "Yuk, Room is dirty : let's clean it up !";
} else if ( $room_filthiness == "clean" ){
    echo "Yuk, Room is clean : clean mine then !";
} else if ( $room_filthiness == "immaculate" ){
    echo "Yuk, Room is immaculate : here come take a candy!";
} else {
	echo "<br>Nothing to do, room is neat.";
}

echo "<br>";
// 2. "Different greetings according to time" Exercise

$now = date("h:i"); // How to get the current time in PHP ?(date is a functions used for time and days display)

// Test the value of $now and display the right message according to the specifications.
if( $now >= "5:00" and $now <= "9:00"){
    echo "Good morning !";
}else if ( $now >= "9:01" and $now <= "12:00" ){
    echo "Good day !";
}else if ( $now >= "12:01" and $now <= "16:00" ){
    echo "Good afternoon !";
}else if ( $now >= "16:01" and $now <= "21:00" ){
    echo "Good evening !";
}else if ( $now >= "21:01" and $now <= "4:59" ){
    echo "Good night !";
}
?>
<html>
    <body>
        <form method="get" action="">
        <div>
            <input type="radio" name="sex" value="female" id="female">
            <label for="female">female</label>
            <input type="radio" name="sex" value="male" id="male">
            <label for="male">male</label>
        </div>
        <div>
            Do you speak English?
            <input type="radio" name="english" value="yes" id="yes">
            <input type="radio" name="english" value="no" id="no">
        </div>
	    <label for="age">Please type your age :</label>
	    <input type="text" name="age">
	    <input type="submit" name="submit" value="Greet me now">
        </form>
        <?php 
        if($_GET['english'] == "yes"){
            if (isset($_GET['age']) and $_GET['sex'] == "female"){
                // Form processing
                if ($_GET['age'] <= 12){
                    echo "Hello kiddo female!";
                }else if ($_GET['age'] > 12 and $_GET['age'] < 18 ){
                    echo "Hello Miss Teen!";
                }else if ($_GET['age'] >= 18 and $_GET['age'] < 115 ){
                    echo "Hello Woman !";
                }else if ($_GET['age'] >= 115 ){
                    echo "Wow! Still alive Woman ? Are you a robot, like me ? Can I hug you ?";
                }    
            } else {
                if ($_GET['age'] <= 12){
                    echo "Hello kiddo!";
                }else if ($_GET['age'] > 12 and $_GET['age'] < 18 ){
                    echo "Hello mister Teen!";
                }else if ($_GET['age'] >= 18 and $_GET['age'] < 115 ){
                    echo "Hello Man!";
                }else if ($_GET['age'] >= 115 ){
                    echo "Wow! Still alive Man? Are you a robot, like me ? Can I hug you ? no gay";
                }    
            }
        }else {
            if (isset($_GET['age']) and $_GET['sex'] == "female"){
                // Form processing
                if ($_GET['age'] <= 12){
                    echo "Aloha kiddo female!";
                }else if ($_GET['age'] > 12 and $_GET['age'] < 18 ){
                    echo "Aloha Miss Teen!";
                }else if ($_GET['age'] >= 18 and $_GET['age'] < 115 ){
                    echo "Aloha Woman !";
                }else if ($_GET['age'] >= 115 ){
                    echo "Aloha! Still alive Woman ? Are you a robot, like me ? Can I hug you ?";
                }    
            } else {
                if ($_GET['age'] <= 12){
                    echo "Aloha kiddo!";
                }else if ($_GET['age'] > 12 and $_GET['age'] < 18 ){
                    echo "Aloha mister Teen!";
                }else if ($_GET['age'] >= 18 and $_GET['age'] < 115 ){
                    echo "Aloha Man!";
                }else if ($_GET['age'] >= 115 ){
                    echo "Aloha! Still alive Man? Are you a robot, like me ? Can I hug you ? no gay";
                }    
            }
        }
        ?>
    </body>
</html>

