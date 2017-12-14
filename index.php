<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>AJAX</title>
</head>
<body>
<input type="text" id="text">
<div id="element"></div>
<div id="load"></div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const text = document.getElementById('text');
        const element = document.getElementById('element');
        const loading = document.getElementById('load');
        text.addEventListener("keyup", () => {
            const xhttp = new XMLHttpRequest();
            loading.innerHTML = "<img src='ajax-loader.gif'>";
            xhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    element.innerHTML = this.responseText;
                }
                loading.innerHTML = "";
            };
            xhttp.open("GET", "ajaxtest.php?naam=" + text.value, true);
            xhttp.send();
        });
    });
</script>
</body>
</html>