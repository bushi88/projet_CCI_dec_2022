<?php

$sql_azert = "SELECT * FROM azert";

for ($i = 1; $i < 11; $i++) {

    $id_user = 1;
    $id_article = 1;
    $note = 1;
    $comment = 1;
    $created_date = 1;
    $updated_date = 1;

    $sql_azert = 'INSERT INTO azert(
                                id_user, 
                                id_article,
                                note,
                                comment,
                                created_date,
                                updated_date
                            )
            VALUES          (
                            ' . $ . ',
                            ' . $ . ',
                            ' . $ . ',
                            ' . $ . ',
                            ' . $ . ',
                            ' . $ . '
                            )';

    if (mysqli_query($conn, $sql_azert)) {
        echo 'insert into table azert ok <br>';
    } else {
        echo 'error ' . $sql_azert . '<br>' . $mysqli_error($conn);
    }
};

echo '<br>';

?>