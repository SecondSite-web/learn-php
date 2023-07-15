<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {

        // CUSTOM PHP LOGIC
        if ($_POST['action'] === 'get_render_value') {
            $result = 'Return Data';
        }


        // CUSTOM LOGIC END
        $okMessage = 'Quote details successfully saved';
        $responseArray = array('type' => 'success', 'message' => $okMessage, 'result' => $result);

    } catch (Exception $e) {
        $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
    }

    // if requested by AJAX request return JSON response
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'
    ) {
        $encoded = json_encode($responseArray);
        header('Content-Type: application/json');
        echo $encoded;
    } else {
        echo $responseArray['message'];
    }
} else {
    header("Location: /");
}