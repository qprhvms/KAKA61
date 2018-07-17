<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data["content"];
 
    switch($content)
    {
            case "IMO":
                echo '
                {
                    "message":
                    {
                        "text": "IMO selected."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["IMO", "GREEN SCREEB", "ETC"]
                    }
                }';
            break;
 
        case "GREEN SCREEN":
            echo '
                {
                    "message":
                    {
                        "text": "GREEN SCREEN selected."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["IMO", "GREEN SCREEB", "ETC"]
                    }
                }';
            break;
 
        case "ETC":
            echo '
                {
                    "message":
                    {
                        "text": "ETC selected."
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["IMO", "GREEN SCREEB", "ETC"]
                    }
                }';
            break;
 
        default:
            echo '
                {
                    "message":
                    {
                        "text": "Wrong Value"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["IMO", "GREEN SCREEB", "ETC"]
                    }
                }';
            break;
    }
?>
