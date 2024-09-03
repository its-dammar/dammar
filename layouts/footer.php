<footer class=" ">
    <div class="interest py-3">
        <div class="container interest">
            <div class="row footer-row">
                <div class="col-lg-6 col-sm-12">
                    <h3>Dammar Khadayat</h3>
                    <p>dammarkhadayat.com.np</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <a class="btn btn-light btn-sm " href="https://www.linkedin.com/in/its-dammar/" role="button">
                        <i class="fa-brands fa-linkedin"></i> </a>
                    <a class="btn btn-light btn-sm " href="https://www.facebook.com/ItsDammar20" role="button"> <i
                            class="fa-brands fa-facebook"></i> </a>
                    <a class="btn btn-light btn-sm " href="https://github.com/its-dammar" role="button"> <i
                            class="fa-brands fa-github"></i> </a>
                    <a class="btn btn-light btn-sm " href="https://www.instagram.com/its_dammar/" role="button"> <i
                            class="fa-brands fa-instagram"></i> </a>
                    <a class="btn btn-light btn-sm " href="https://www.youtube.com/@Dammar200" role="button"> <i
                            class="fa-brands fa-youtube"></i> </a>
                    <p class="text-success">Thank You, Visit Again !!!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center bg-light py-3">
        <p>© Copyright Dammar Khadayat. All Rights Reserved <br>
            <span>Designed by <a href="https://www.dammarkhadayat.com.np" class="text-decoration-none">Dammar
                    khadayat</a></span>
        </p>
    </div>
</footer>

 <!---->
    <!-- ============================================================== -->
    <!-- chat API -->
    <!-- ============================================================== -->
    
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "2134310760216618");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
</body>

</html>
