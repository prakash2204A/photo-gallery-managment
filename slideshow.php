<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: 300;
}
.css-slideshow{
  position: absolute;
  top:-67px;
  max-width: 1280px;
  margin: 130px 1000px 0px 0px;
}

.css-slideshow figure{
  margin: 0;
  max-width: 1280px;
  height: 700px;
  background: #000;
  position: absolute;
}
.css-slideshow img{
  box-shadow: 0 0 2px #666;
}
.css-slideshow figcaption{
  position: absolute;
  top: 0;
  color: #fff;
  background: rgba(0,0,0, .3);
  font-size: .8em;
  padding: 8px 12px;
  opacity: 0;
  transition: opacity .5s;
}
.css-slideshow:hover figure figcaption{
  transition: opacity .5s;
  opacity: 1;
}
.css-slideshow-attr{
  max-width: 1280px;
  text-align: right;
  font-size: .7em;
  font-style: italic;
  margin:0 auto;
}
.css-slideshow-attr a{
  color: #666;
}
.css-slideshow figure{
  opacity:0;
}
figure:nth-child(1) {
  animation: xfade 48s 42s infinite;
}
figure:nth-child(2) {
  animation: xfade 48s 36s infinite;
}
figure:nth-child(3) {
  animation: xfade 48s 30s infinite;
}
figure:nth-child(4) {
  animation: xfade 48s 24s infinite;
}
figure:nth-child(5) {
  animation: xfade 48s 18s infinite;
}
figure:nth-child(6) {
  animation: xfade 48s 12s infinite;
}
figure:nth-child(7) {
  animation: xfade 48s 6s infinite;
}
figure:nth-child(8) {
  animation: xfade 48s 0s infinite;
}

@keyframes xfade{
  0%{
    opacity: 1;
  }
  10.5% {
    opacity: 1;
  }
  12.5%{
    opacity: 0;
  }
  98% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
</style>
</head>
<body>
<div class="css-slideshow">
  <figure>
    <img src="pictures/pic1_unsplash.jpg" alt="Gallery" alt="class-header-multimedia" width="1500" height="620" class="alignnone size-large wp-image-175" />
    <figcaption><strong>See More at the Artists Page</strong> </figcaption>
  </figure>
  <figure>
    <img src="pictures/DJI_0223.jpg" alt="artists" alt="class-header-multimedia" width="1500" height="620" class="alignnone size-large wp-image-175" />
    <figcaption><strong>See More at the Artists Page</strong> </figcaption>
  </figure>
  <figure>
    <img src="pictures/marian-lake-darran-mountain-range-new-zealand.jpg" alt="artists" alt="class-header-multimedia" width="1500" height="620" class="alignnone size-large wp-image-175" />
    <figcaption><strong>See More at the Artists Page</strong> </figcaption>
  <figure>
    <img src="pictures/misurina-sunset.jpg" alt="class-header-performance" width="1500" height="620" class="alignnone size-large wp-image-173" />
    <figcaption><strong>Home Page &amp; </strong> </figcaption>
  </figure>

</div>
</body>
</html>
