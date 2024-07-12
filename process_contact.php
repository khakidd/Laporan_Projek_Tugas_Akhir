<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $contactDetails = array(
        "Name" => $name,
        "Email" => $email,
        "Phone" => $phone,
        "Message" => $message,
        "Subject" => $subject
    );

    function saveToFile($data)
    {
        $file = fopen('contacts.txt', 'a');
        foreach ($data as $key => $value) {
            fwrite($file, "$key: $value\n");
        }
        fwrite($file, "------------------------\n");
        fclose($file);
    }

    saveToFile($contactDetails);
    echo "Contact details saved successfully!";
}
