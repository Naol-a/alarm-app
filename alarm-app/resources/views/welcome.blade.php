<!DOCTYPE html>
<html lang="am">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Alarm App</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #eef2f7; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); text-align: center; width: 80%; max-width: 400px; }
        #clock { font-size: 3.5rem; font-weight: bold; color: #2d3436; margin-bottom: 20px; }
        input[type="time"] { padding: 12px; font-size: 1.2rem; border: 2px solid #dfe6e9; border-radius: 10px; margin-bottom: 20px; width: 80%; }
        button { background: #6c5ce7; color: white; border: none; padding: 15px 30px; font-size: 1rem; border-radius: 10px; cursor: pointer; transition: 0.3s; }
        button:hover { background: #a29bfe; }
        #msg { margin-top: 15px; color: #d63031; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h2>የላራቬል አላርም</h2>
        <div id="clock">00:00:00</div>
        <input type="time" id="alarmTime">
        <br>
        <button onclick="setAlarm()">አላርም አቁም</button>
        <div id="msg"></div>
    </div>

    <script>
        // ሰዓቱን በየሴኮንዱ ለማደስ
        setInterval(() => {
            const now = new Date();
            document.getElementById('clock').innerText = now.toLocaleTimeString('en-GB');
            
            // አላርሙ ከደረሰ ቼክ ለማድረግ
            const current = now.getHours().toString().padStart(2, '0') + ":" + now.getMinutes().toString().padStart(2, '0');
            const setTime = document.getElementById('alarmTime').value;
            if(setTime === current) {
                document.getElementById('msg').innerText = "🔔 ሰዓቱ ደርሷል! ተነስ!";
            }
        }, 1000);

        function setAlarm() {
            const time = document.getElementById('alarmTime').value;
            if(time) {
                document.getElementById('msg').innerText = "አላርም ለ " + time + " ተቆርጧል ✅";
                document.getElementById('msg').style.color = "green";
            }
        }
    </script>
</body>
</html>