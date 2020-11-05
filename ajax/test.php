<button onclick="fetchServer()">Fetch</button>
<p id="text"></p>
<script>
    function fetchServer() {
        var req = new XMLHttpRequest();

        req.onreadystatechange = function () {
            // req.readyState
            // req.responseText
            if(req.readyState == 4) {
                console.log(req.responseText);
                var pT = document.getElementById('text');
                pT.innerText = req.responseText;
            } else {
                pT.innerText = 'error';
            }
        }
        req.open('GET', 'http://localhost/web_dev/php_advancd/ajax/afsd.txt');
        req.send();
    }
</script>
