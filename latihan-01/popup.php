<?php 

function popup(string $pesan, string $href = NULL) {
    if (!is_null($href)) {
        echo <<<ALERT
            <script>
                alert("{$pesan}");
                document.location.href = "{$href}";
            </script>
        ALERT;
    } else {
        echo <<<ALERT
            <script>
                alert("{$pesan}");
            </script>
        ALERT;
    }
}