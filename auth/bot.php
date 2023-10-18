<?php
// Replace 'YOUR_BOT_TOKEN' with your actual bot token
$botToken = '5909916263:AAEe9lalkY3PoFpFZr71hWonwDgFxs8cLOk';

// Get the incoming update data from Telegram
$update = json_decode(file_get_contents('php://input'), true);

// Check if the update contains a message and the message is '/start'
if (isset($update['message']['text']) && $update['message']['text'] == '/start') {
    $chatId = $update['message']['chat']['id'];
        $welcomeMessage = "Welcome to your bot! This is your welcome message.";

            // Send the welcome message to the user
                sendMessage($chatId, $welcomeMessage);
                }

                // Function to send a message to the user
                function sendMessage($chatId, $message) {
                    global $botToken;
                        $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
                            file_get_contents($url);
                            }
?>