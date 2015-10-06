var youTubeChannelURL = "https://www.youtube.com/channel/UCIHCQrXm0CQ3W-VUKj2ypXA";

//optional parameters-----------------------------------------------
var youTubePlaylistURL = "http://www.youtube.com/playlist?list=PLCh9LPHVsiA9BzAz4ohL1DlZJI1yXmYMi";
var youmaxDefaultTab = "featured";
var youmaxColumns = 3;
var youmaxWidgetWidth = 550;
//var youmaxWidgetHeight = 1000;
var showFeaturedVideoOnLoad = false;
var showVideoInLightbox = false;


function goClicked() {
$('#youmax').empty().append(' loading ...');
youTubeChannelURL=$('#youTubeChannelUrl').val();
youTubePlaylistURL=$('#youTubePlaylistUrl').val();
youmaxFeaturedPlaylistId = null;
prepareYoumax();
}