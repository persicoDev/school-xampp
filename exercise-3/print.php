<!DOCTYPE html>
<html>
    <body>
        <table border="5" style="width: 400px;">
            <tr><td>Username</td><td>Password</td></tr>
            <?php
                foreach (file('data.txt') as $value) {
                    $p = explode('|', $value);
                    $first_column = $p[0];
                    $second_column = $p[1];
                    echo '<tr><td>'.$first_column.'</td><td>'.$second_column.'</td></tr>';
                }
            ?>
        </table>
    </body>
</html>