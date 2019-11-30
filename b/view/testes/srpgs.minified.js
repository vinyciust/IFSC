/*
* Project	:	Single Responsive Photo Gallery plus Slideshow
* Author	:	Phong Thai (http://www.javascriptbank.com/)
* Support	:	http://www.javascriptbank.com/single-responsive-photo-gallery-plus-slideshow.html
* Version	:	1.0.1
*/

/*
	You are free to use this plugin in any personal, commercial project without my permission.
	But please help me by leaving the Copyright sign, it just occupies about 10 pixels, 
	otherwise please help me with a milk coffee (https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2MEPB69L9E5VQ) to remove this sign.
*/

/****************************************/
// PLEASE DO NOT CHANGE any variable or function below to keep the script works properly
/****************************************/

$(document).ready(function(){for(var s=1,t="1.0.1",r=0;r<srpgs_photos.length;r++)srpgs_photos[r].image.length&&$("#srpgs-thumbs-gallery").html($("#srpgs-thumbs-gallery").html()+'<img src="'+srpgs_path_thumb+srpgs_photos[r].image+'" id="srpgs-thumb-'+r+'" title="'+(srpgs_photos[r].title&&srpgs_photos[r].title.length?srpgs_photos[r].title:"")+'" />')
if($(".srpgs-thumbs-nav").click(function(){i($(this).attr("class").split(" ")[1])}),$(".copyright").length){var e="* Project	:	Single Responsive Photo Gallery plus Slideshow\n* Author	:	Phong Thai (http://www.javascriptbank.com/)\n* Version	:	"+t+"\n\n\n"
$("a",$(".copyright")).attr("title",$("a",$(".copyright")).attr("title")+" - version "+t).click(function(){return confirm(e+"Click 'Ok' if you want to open the website of author\n          ")&&window.open($(this).attr("href")),!1})}var l=function(){$("img",$(".srpgs-holder")).css("max-width",$(window).width()-4+"px"),$("img",$(".srpgs-holder")).css("max-height",$(window).height()-4+"px")}
l()
var i=function(t){switch(t){case 0:$("#srpgs-thumbs-gallery").animate({scrollTop:0},srpgs_scroll_delay)
break
case"up":s--,$("#srpgs-thumbs-gallery").animate({scrollTop:$("#srpgs-thumbs-gallery").scrollTop()-$("#srpgs-thumbs-gallery").height()},srpgs_scroll_delay)
break
case"down":s++,$("#srpgs-thumbs-gallery").animate({scrollTop:$("#srpgs-thumbs-gallery").scrollTop()+$("#srpgs-thumbs-gallery").height()},srpgs_scroll_delay)}}
$("img",$("#srpgs-thumbs-gallery")).click(function(){a(this.id.substring(12))}),$("#srpgs-control-back").click(function(){u(),a("back")}),$("#srpgs-control-next").click(function(){u(),a("next")})
var g
$("#srpgs-control-play-pause").toggle(function(){u()},function(){$(this).css({"background-image":"url(images/btn_pause.png)"}),a("next"),g=setInterval(function(){a("next")},srpgs_slideshowSpeed)})
var p=1,o=0,n=!1,a=function(t){if(!n){parseInt(t)>=0?o=parseInt(t)+1:"next"==t?(o++,o==srpgs_photos.length+1&&(o=1)):(o--,0==o&&(o=srpgs_photos.length)),$("img",$("#srpgs-thumbs-gallery")).removeClass("active"),$("img#srpgs-thumb-"+(o-1),$("#srpgs-thumbs-gallery")).addClass("active"),1==o?(i(0),s=1):o*($("img",$("#srpgs-thumbs-gallery")).height()+4)>$("#srpgs-thumbs-gallery").height()*s&&i("down")
var r=p
p=1==p?2:1,h(srpgs_photos[o-1],r,p)}},c=-1,h=function(s,t,r){n=!0,c--,$("#srpgs-rotate-"+r).css({display:"block","z-index":c}),$("img",$("#srpgs-rotate-"+r)).attr("src",srpgs_path_pics+s.image),$("#srpgs-rotate-"+t).fadeOut(function(){setTimeout(function(){$("#srpgs-picture").css({display:"block"}),n=!1},500)}),$("#srpgs-picture").css({display:"none"}),s.title&&s.title.length?($("#srpgs-picture-title").show(),$("#srpgs-picture-title").html(s.title)):$("#srpgs-picture-title").hide(),s.url&&s.url.length&&s.subject&&s.length?($("#srpgs-picture-url").attr("href",s.url).html(s.subject),$(".srpgs-picture-link").show()):$(".srpgs-picture-link").hide()},u=function(){$("#srpgs-control-play-pause").css({"background-image":"url(images/btn_play.png)"}),clearInterval(g)}
a("next"),g=setInterval(function(){a("next")},srpgs_slideshowSpeed),$(window).resize(function(){l()})})