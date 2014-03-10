    </div>
    <script>
        $(window).scroll(function(){
            if ($(window).scrollTop() > 178) {
                $("nav").addClass("sticky");
            } else if ($(window).scrollTop() < 178) {
                $("nav").removeClass("sticky");
            }
        });
    </script>
</body>
</html>