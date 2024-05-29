<?php

class FormHandler
{public function handleForm()
    {
        if (isset($_POST['action'])) {
            $encodedText="please put the text  that you want to encode ";
            ## to validate without client server 
            if ($_POST['action'] === 'enc') {
                if (isset($_POST["data1"]) && isset($_POST["encoding_type"])) {
                    $data1 = $_POST["data1"];
                    $encodingType = $_POST["encoding_type"];
    
                    switch ($encodingType) {
                        case "1":
                            $encodedText = urlencode($data1);
                            break;
                        case "2":
                            $encodedText = base64_encode($data1);
                            break;
                        case "3":
                            $encodedText = json_encode($data1);
                            break;
                        case "4":
                            $encodedText = str_rot13($data1);
                            break;
                        case "5":
                            $encodedText = mb_convert_encoding($data1, "UTF-8", mb_detect_encoding($data1));
                            break;
                        case "6":
                            $encodedText = htmlentities($data1);
                            break;
                        case "7":
                            $encodedText = convert_uuencode($data1);
                            break;
                        default:
                            // Invalid encoding type
                            break;
                    }
    
                    $_SESSION['encoded_text'] = $encodedText;
    
                    echo '<div class="shadow-lg p-3 m-5 bg-body-tertiary rounded"><p>Encoded Text:<br>' . $encodedText . '</p></div>';
                } else {
                    echo "<p>Please select an encoding type and provide data to encode</p>";
                }
            }
        }
    }
    





    public function handleFormdec()
    {
        if (isset($_POST['action'])) {
           ## $decoded_text="please put the txt that you want to decode ";
           
            if ($_POST['action'] === 'dec') {
                
                if (isset($_POST["data1"])) {
                    $data1 = $_POST["data1"];
                    $decoded_text = base64_decode($data1);
                    $_SESSION['decoded_text'] = $decoded_text;
                    echo '<div class="shadow-lg p-3 m-5 bg-body-tertiary rounded"><p>Decoded Text:<br>' . $decoded_text . '</p></div>';
                } else {
                    echo "<p>No data to decode</p>";
                }
            }
        }
    }

    // Remove unused method 'encrypt'
}

