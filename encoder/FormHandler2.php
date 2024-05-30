<?php


class FormHandeler2
{


    public function handleFormha()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'md5') {
                if (isset($_POST["data2"])) {
                    $data2 = $_POST["data2"];
                    $hashed_text = md5($data2);
                    $_SESSION['hashed_text'] = $hashed_text;
                    echo '<div class="shadow-lg p-3 m-5 bg-body-tertiary rounded"><p>Hashed Text:<br>' . $hashed_text . '</p></div>';
                } else {
                    echo "<p>No data to hash</p>";
                }
            }
        }
    }


    public function handleFormha2()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'hash') {
                if (isset($_POST["data21"])) {
                    $data21 = $_POST["data21"];
                    $hashed_text = sha1($data21);
                    $_SESSION['hashed_text'] = $hashed_text;
                    echo '<div class="shadow-lg p-3 m-5 bg-body-tertiary rounded"><p>Hashed Text:<br>' . $hashed_text . '</p></div>';
                } else {
                    echo "<p>No data to hash</p>";
                }
            }
        }
    }






}