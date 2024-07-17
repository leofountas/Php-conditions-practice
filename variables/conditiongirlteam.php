<html>
    <head></head>
    <body>
        <form>
            <div>
            <label for="name">What's your name?</label>
            <input type="text" name="name" id="name">
            <div>
                <input type="radio" name="sex" value="female" id="female">
                <label for="female">female</label>
                <input type="radio" name="sex" value="male" id="male">
                <label for="male">male</label>
            </div>
            <label for="age">How old are you?</label>
            <input type="text" name="age" id="age">
            <br>
            <input type="submit" name="submit" value="send">
        </form>
        <br>
        <?php 
            if($_GET['age'] >= 21 and $_GET['age'] <= 40 and $_GET['sex'] == "female"){
                echo "welcome to the team !";
            } else {
                echo "Sorry you don't fit the criteria !";
            }
        ?>
        <!-- same exercise but simplified -->
        <?php 
            $message = "Sorry you don't fit the criteria !";
            if($_GET['age'] >= 21 and $_GET['age'] <= 40 and $_GET['sex'] == "female"){
                $message = "welcome to the team !";
            }
            echo $message;
        ?>
        </div>
        <div>
            <form>
                <label for="note">Your note is: </label>
                <input type="text" name="note" id="note">
                <br>
                <input type="submit" name="submit" value="confirm">
            </form>
            <?php 
                if(isset($_GET['note'])){
                    if($_GET['note'] <= 4){
                        echo "This work is really bad. What a dumb kid!";
                    }else if ($_GET['note'] >= 5 and $_GET['note'] <= 9){
                        echo "This is not sufficient. More studying is required.";
                    }else if ($_GET['note'] == 10){
                        echo "barely enough!";
                    }else if ($_GET['note'] >= 11 and $_GET['note'] <= 14){
                        echo "Not bad!";
                    }else if ($_GET['note'] >= 15  and $_GET['note'] <= 18){
                        echo "Bravo, bravissimo!";
                    }else if ($_GET['note'] == 19 or $_GET['note'] == 20 ){
                        echo "Too good to be true : confront the cheater!";
                    }else {
                        echo 'Teacher are you drunk?';
                    }
                } 
            ?>
        </div>
    </body>
</html>