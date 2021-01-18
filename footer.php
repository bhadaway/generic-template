</article>

</main>

<?php include( 'sidebar.php' ); ?>

</div>

<footer id="footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">

<div id="social">

<a href="https://www.facebook.com/example/" title="Facebook" rel="me" target="_blank" itemprop="sameAs"><img src="images/fb.svg" alt="Facebook" class="svg" itemprop="image" /></a>
<a href="https://twitter.com/example" title="Twitter" rel="me" target="_blank" itemprop="sameAs"><img src="images/tw.svg" alt="Twitter" class="svg" itemprop="image" /></a>
<a href="https://www.instagram.com/example/" title="Instagram" rel="me" target="_blank" itemprop="sameAs"><img src="images/ig.svg" alt="Instagram" class="svg" itemprop="image" /></a>
<a href="https://www.pinterest.com/example/" title="Pinterest" rel="me" target="_blank" itemprop="sameAs"><img src="images/pn.svg" alt="Pinterest" class="svg" itemprop="image" /></a>
<a href="https://www.youtube.com/example" title="YouTube" rel="me" target="_blank" itemprop="sameAs"><img src="images/yt.svg" alt="YouTube" class="svg" itemprop="image" /></a>

</div>

<div id="copyright">

&copy; <?php echo date( 'Y' ); ?> Company Name

</div>

</footer>

</div>

<script>
jQuery(document).ready(function($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
$(".menu-icon").on("click", function () {
$("#menu").toggleClass("toggled");
});
$(".menu-toggle").on("keypress", function(e) {
if(e.which == 13) {
$("#menu").toggleClass("toggled");
}
});
$("img.svg").each(function () {
var $img = $(this);
var imgURL = $img.attr("src");
var attributes = $img.prop('attributes');
$.get(imgURL, function (data) {
var $svg = $(data).find("svg");
$svg = $svg.removeAttr("xmlns:a");
$.each(attributes, function () {
$svg.attr(this.name, this.value);
});
$img.replaceWith($svg);
}, "xml");
});
$('a').each(function() {
var a = new RegExp('/' + window.location.host + '/');
if(!a.test(this.href)) {
$(this).click(function(event) {
event.preventDefault();
event.stopPropagation();
window.open(this.href, '_blank');
});
}
});
});
</script>

</body>

</html>