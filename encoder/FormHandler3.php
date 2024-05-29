<?php


class FormHandler3
{
    public function validateIP($data3)
    {
        // IPv4 pattern
        $ipv4Pattern = "/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/";

        // IPv6 pattern (optional)
        // $ipv6Pattern = "/^([0-9a-fA-F]{1,4}:){7}([0-9a-fA-F]{1,4})$/";

        // Check if the IP matches either IPv4 or IPv6 pattern
        if (preg_match($ipv4Pattern, $data3) /* || preg_match($ipv6Pattern, $ip) */) {
            return true;
        }

        return false;
    }

    public function handleForm3()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'geoip') {
                if (isset($_POST["data3"])) {
                    $data3 = $_POST["data3"];
                    if ($this->validateIP($data3)) {
                        // API endpoint URL
                        $api_url = 'https://reallyfreegeoip.org/json/' . $data3;

                        // Make the GET request to the API
                        $response = file_get_contents($api_url);

                        // Decode the JSON response into an associative array
                        $data = json_decode($response, true);

                        // Display the IP information
                        if ($data && isset($data['ip'])) {
                            echo "IP: " . $data['ip'] . "<br>";
                            echo "Country Code: " . $data['country_code'] . "<br>";
                            echo "Country Name: " . $data['country_name'] . "<br>";
                            echo "Region Code: " . $data['region_code'] . "<br>";
                            echo "Region Name: " . $data['region_name'] . "<br>";
                            echo "City: " . $data['city'] . "<br>";
                            echo "Zip Code: " . $data['zip_code'] . "<br>";
                            echo "Time Zone: " . $data['time_zone'] . "<br>";
                            echo "Latitude: " . $data['latitude'] . "<br>";
                            echo "Longitude: " . $data['longitude'] . "<br>";
                            echo "Metro Code: " . $data['metro_code'] . "<br>";
                        } else {
                            echo "Failed to fetch IP information";
                        }
                    } else {
                        echo "Invalid IP address";
                    }
                }
            }
        }
    }

    public function validateEMAIL($data4)
    {
        $v = "/[a-zA-Z0-9_\-+.]+@[a-zA-Z0-9\-]+\.[a-zA-Z]+/";
        return (bool) preg_match($v, $data4);
    }

    public function handleForm4()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'pwned') {
                if (isset($_POST["data4"])) {
                    $data4 = $_POST["data4"];


                  



                }
            }
        }
    }
}
?>