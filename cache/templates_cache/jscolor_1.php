
<script type="text/javascript">
var d = new Date();
d.setTime(d.getTime() + (30*24*60*60*1000));
var expires = "expires="+d.toUTCString() ;
var origincolorcookie = '#0f6ebf' ;
var colorcookieStart, colorcookieEnd, colorcookieValue;
var x = document.getElementsByClassName('pkr');
var xl = document.getElementsByClassName('pkr-light');
var ob = document.getElementsByClassName('pkr-obj');
var z = document.getElementsByClassName('pkr-b');
var y = document.getElementsByClassName('pkr-c');
var r = document.getElementsByClassName('borderRightColor');
var l = document.getElementsByClassName('borderLeftColor');
var border_button = document.getElementsByClassName('button_b');
var i;
if (document.cookie.length > 0){
colorcookieStart = document.cookie.indexOf("jscolor=");
if (colorcookieStart != -1){
colorcookieStart = colorcookieStart + "jscolor=".length;
colorcookieEnd = document.cookie.indexOf(";", colorcookieStart);
if (colorcookieEnd == -1) colorcookieEnd = document.cookie.length;
colorcookieValue = document.cookie.substring(colorcookieStart, colorcookieEnd);
colorcookie = colorcookieValue;
} else {
document.cookie = "jscolor = " +origincolorcookie+ ";" + expires ;
colorcookie = origincolorcookie;
}
} else {

if (!document.cookie.length){
colorcookieStart = document.cookie.indexOf("jscolor=");
if (colorcookieStart != -1){
colorcookieStart = colorcookieStart + "jscolor=".length;
colorcookieEnd = document.cookie.indexOf(";", colorcookieStart);
if (colorcookieEnd == -1) colorcookieEnd = document.cookie.length;
colorcookieValue = document.cookie.substring(colorcookieStart, colorcookieEnd);
colorcookie = colorcookieValue;
} else {
document.cookie = "jscolor = " +origincolorcookie+ ";" + expires ;
colorcookie = origincolorcookie;
}
}

}

function updatecolor() {
for (i = 0; i < x.length; i++) {
x[i].style.backgroundColor = colorcookie;
}
for (i = 0; i < xl.length; i++) {
xl[i].style.backgroundColor = hexToRgb(colorcookie,'0.1');
}
for (i = 0; i < ob.length; i++) {
ob[i].style.backgroundColor = hexToRgb(colorcookie,'0.7');
}
for (i = 0; i < y.length; i++) {
y[i].style.color = hexToRgb(colorcookie,'0.6');
}
for (i = 0; i < z.length; i++) {
z[i].style.borderColor = hexToRgb(colorcookie,'0.3');
}
for (i = 0; i < l.length; i++) {
l[i].style.borderLeftColor = hexToRgb(colorcookie,'0.3');
}
for (i = 0; i < r.length; i++) {
r[i].style.borderRightColor = hexToRgb(colorcookie,'0.3');
}
for (i = 0; i < border_button.length; i++) {
border_button[i].style.borderColor = hexToRgb(origincolorcookie,'0.4');
}
}
$(document).ready(function(){
$(".remove-picker").click(function(){
colorcookie = origincolorcookie ;
document.cookie = "jscolor = " +origincolorcookie+ ";" + expires ;
updatecolor() ;
});
updatecolor() ;
});
function update(jscolor) {
colorcookie = '#' + jscolor ;
document.cookie = "jscolor = " +colorcookie+ ";" + expires ;
updatecolor() ;
}

</script>
<?php
$PowerBB->_COOKIE['jscolor'] = $PowerBB->functions->CleanVariable($PowerBB->_COOKIE['jscolor'],'sql');
$PowerBB->_COOKIE['jscolor'] = $PowerBB->functions->CleanVariable($PowerBB->_COOKIE['jscolor'],'html');
$border_color = $PowerBB->functions->hex2rgba($PowerBB->_COOKIE['jscolor'],'0.3');
?>
<style type="text/css">
header, #logo, .submit-id, #header_bar, .mainbar, .pp-tabon, .tcat, .f_read, .button, #buttons_link, .buttons, .pbbmenu, .popmenubutton, #primary_nav{
background-color: <?php echo $PowerBB->_COOKIE['jscolor'];?>;
border-color: <?php echo $border_color;?>;
}
div.pbboard_body{
border-bottom-color: <?php echo $border_color;?>;
border-right-color: <?php echo $border_color;?>;
border-left-color: <?php echo $border_color;?>;
}
.sub_forums,.address_bar,.forum-last-post,.UserPhoto_tiny_RCS,.row_sidebar
{
border-color: <?php echo $border_color;?>;
}
</style>
