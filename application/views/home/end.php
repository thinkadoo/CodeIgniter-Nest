</div><!-- container -->

<!-- JS
================================================== -->
<script src="javascripts/jquery.min.js"></script>
<script src="javascripts/tabs.js"></script>

<script>
$('.hidden-code').click(function(e) {
    e.preventDefault();
    $(this).children('.gist').slideToggle();
})

var originalText;
$('.example-grid').children().hover(
    function() {
        originalText = $(this).text();
        $(this).html($(this).width()+'px');
    },
    function() {
        $(this).html(originalText);
    })
</script>

</body>
</html>