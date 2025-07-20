<?php
class Connection
{
    private $baseURL;

    public function __construct()
    {
        // Your Firebase Realtime Database base URL
        $this->baseURL = 'https://drrrm-36c85-default-rtdb.firebaseio.com/';
    }

    // Read data from a specific path
public function read($node) {
    $url = $this->baseURL . "/$node.json";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true); // 👈 decode as array
}


    // Write data (push)
    public function write($path, $data)
    {
        $url = $this->baseURL . $path . '.json';

        $options = [
            'http' => [
                'method'  => 'POST',
                'header'  => "Content-Type: application/json",
                'content' => json_encode($data)
            ]
        ];

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        return json_decode($result, true);
    }
}
?>
