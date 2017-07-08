
<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
    <h5>Footer</h5>
    <a href="#" class="w3-button w3-dark-gray w3-padding-small w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>


<script>
    // Toggle between hiding and showing blog replies/comments
    document.getElementById("myBtn").click();
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    function likeFunction(x) {
        x.style.fontWeight = "bold";
        x.innerHTML = "✓ Liked";
    }
</script>


<script>
    // Accordion
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
        } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
<script type="application/javascript" src="/js/app.js"></script>
</body>
</html>
