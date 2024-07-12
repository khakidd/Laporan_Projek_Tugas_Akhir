<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['subscriberName'];
    $email = $_POST['subscriberEmail'];
    $preferences = $_POST['preferences'];
    $frequency = $_POST['frequency'];
    $comments = $_POST['comments'];

    $subscriptionDetails = array(
        "Name" => $name,
        "Email" => $email,
        "Preferences" => $preferences,
        "Frequency" => $frequency,
        "Comments" => $comments
    );

    function saveToFile($data) {
        $file = fopen('subscribers.txt', 'a');
        foreach ($data as $key => $value) {
            fwrite($file, "$key: $value\n");
        }
        fwrite($file, "------------------------\n");
        fclose($file);
    }

    saveToFile($subscriptionDetails);
    echo "Subscription details saved successfully!";
}
?>
