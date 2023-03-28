<div class="agileits_copyright">
  <p>© <?php echo date('Y') ?> Deeper Christian Life Ministry</p>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42290414-11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());
  gtag("config", "UA-42290414-11");
</script>
<!-- Form tracker -->
<script type="text/javascript">
  jQuery(document).ready(function () {
  jQuery("#prayer-form").submit(function () {
    _gaq.push(
    ["_setAccount", "UA-42290414-11"],
    ["_trackEvent", "request", "submit"]
      );
    });
  });
</script>
<script type="text/javascript">
  jQuery(document).ready(function () {
  jQuery("#contact-form").submit(function () {
    _gaq.push(
    ["_setAccount", "UA-42290414-11"],
    ["_trackEvent", "message", "submit"]
      );
    });
  });
</script>
<script>
  var form = document.getElementById("babel");
  function noForm() {
    form.style.display = "none";
  }
</script>
<!-- Scripts... -->
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/card.js"></script>
<script src="assets/js/prequest_form.js"></script>
<script src="assets/js/contact_form.js"></script>
<script src="assets/js/validator.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="assets/mejs/build/mediaelement-and-player.js"></script>
<script src="assets/mejs/build/demo.js"></script>
<script src="assets/mejs/build/renderers/dailymotion.js"></script>
<script src="assets/mejs/build/renderers/facebook.js"></script>
<script src="assets/mejs/build/renderers/soundcloud.js"></script>
<script src="assets/mejs/build/renderers/twitch.js"></script>
<script src="assets/mejs/build/renderers/vimeo.js"></script>