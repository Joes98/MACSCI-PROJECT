<script>
        const targetDiv = document.getElementById("now");
        const btn = document.getElementById("now-hide");
        btn.onclick = function () {
          if (targetDiv.style.display !== "none") {
            targetDiv.style.display = "none";
          } else {
            targetDiv.style.display = "block";
          }
        };

        var date = new Date();
        document.getElementById("date-time").innerHTML=dt;
    </script>
    


</body>
</html>