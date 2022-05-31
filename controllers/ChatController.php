<?php

class ChatController
{
    public function insertChat()
    {
        if (isset($_POST['message'])) {
            echo "An hna ldakhel";
            $data = array(
                'outgoing_id' = $_SESSION['userID'],
                'incoming_id' = $_POST['incoming_id'],
                'message' => $_POST['message']
            );

            $isCreatedSuccessfully = Chat::insert($data);
        }
    }
}