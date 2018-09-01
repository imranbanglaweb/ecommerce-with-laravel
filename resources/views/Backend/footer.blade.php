
    <script>
   $(window).load(function(){
     $('.loader').fadeOut();
});
 </script>
 
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
<script>
var toggle = true;

$(".sidebar-icon").click(function() {                
if (toggle)
{
$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
$("#menu span").css({"position":"absolute"});
}
else
{
$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
setTimeout(function() {
$("#menu span").css({"position":"relative"});
}, 400);
}               
toggle = !toggle;
});
</script>
<!--scrolling js-->
<script src="{{ asset('public/Backend/')}}/js/jquery.nicescroll.js"></script>
<script src="{{ asset('public/Backend/')}}/js/scripts.js"></script>
<!--//scrolling js-->
<script src="{{ asset('public/Backend/')}}/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>  