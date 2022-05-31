<?php

class Chat
{
    static public function insert($data)
    {
        $stmt = Database::connect()->prepare("INSERT INTO messages (outgoing_msg_id, incoming_msg_id, message)
        VALUES (:outgoing_id, :incoming_id, :message)");
        echo "ana hna";
        $stmt->bindParam(':outgoing_id', $data['outgoing_id']);
        $stmt->bindParam(':incoming_id', $data['incoming_id']);
        $stmt->bindParam(':message', $data['message']);

        $isCreatedSuccessfully = $stmt->execute();

        if ($isCreatedSuccessfully) {
            return true;
        } else {
            echo 'Erreur lors de la création du message au niveau de la base de données.';
        }
    }
}
