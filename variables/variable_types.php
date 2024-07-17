<html>
    <head>
    </head>
    <body>
        <p>Hi! My name is 
            <?php 
$name = "Leonardo";
                echo $name;
            ?>
        </p>
        <p> I am 
            <?php
                $age = 24;
                echo $age;
            ?>
            years old
        </p>
        <p> My eyes are
            <?php
                $color_eyes = "brown";
                echo $color_eyes;
            ?>
        </p>
        <?php
            $family = array(
                0 => "Maria",
                1 => "Rosa",
                2 => "Giorgio",
                3 => "Edu",
                4 => "Noe",
                5 => "Gianf"); 
        ?>
        <p>The first person in my family is <?php echo $family[0]?></p>
    </body>
</html>