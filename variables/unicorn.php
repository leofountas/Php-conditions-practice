<html>
    <head></head>
    <body>
        <form>
            <label for="cat">cat</label>
            <input type="radio" name="type" value="cat" id="cat">
            <label for="human">human</label>
            <input type="radio" name="type" value= "human" id="human">
            <label for="unicorn">unicorn</label>
            <input type="radio" name="type" value="unicorn" id="unicorn">
            <br>
            <input type="submit" name="submit" value="confirm">
        </form>
        <?php
            $human_gif= "https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExdzcwaHMzZG11cTQ1NzBjaTNkaWFic2JiZmgya3drMm92djk5aTV1diZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/KSmTeghSLeCtwvPUHk/giphy.webp";
            $unicorn_gif= "https://i.giphy.com/2A75RyXVzzSI2bx4Gj.webp";
            $cat_gif= "https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExemU5bzh6cHlpM3lkZW1weDYyZHVjNzR3bmhiMnJkd2g1aXl5MjA4ciZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/Lq0h93752f6J9tijrh/giphy.webp";
           
            if(isset($_GET['type']) and !empty($_GET['type'])){
                $type = $_GET['type'];

                switch ($type) {
                    case "cat":
                        echo '<img src="' . $cat_gif . '">';
                        break;
                    case "unicorn":
                        echo '<img src="' . $unicorn_gif . '">';
                        break;
                    default:
                        echo '<img src="' . $human_gif . '">';
                }
            }
        ?>
    </body>
</html> 