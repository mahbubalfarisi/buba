<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300);

.transition(@transition) {
  transition:         @transition;
	-webkit-transition: @transition;
	-moz-transition:    @transition;
	-ms-transition:     @transition;
	-o-transition:      @transition;
}

* {
  margin:0;
  padding:0;
  outline:none;
  list-style:none;
  text-decoration:none;
  box-sizing:border-box;
  color:#000;
  background: transparent;
  border:none;
}

html, body {
  height: 100%;
  width: 100%;  
}

body {
  background: #202020;
  font-family: 'Roboto', sans-serif;
}

.wrap {
  height: 100%;
  max-width:1280px;
  margin:0 auto;
  text-align:center;
  position: relative;
  .perspective {
    width: 100%;
    height: 100%;
    perspective: 1000px;
    transform-style: preserve-3d;
    overflow: hidden;
  }
}

.book-wrap {
  height: 100%;
  width: 100%;
  transform-style:preserve-3d;
  .transition(all ease-out 0.6s);
}

.book {
  width: 400px;
  height: 600px;
  background: url(http://img07.deviantart.net/747c/i/2015/114/b/0/typography_book_cover_thing_y_by_jiyulie-d5cujji.jpg) no-repeat center center;
  background-size: cover;
  position: absolute;
  top: 0;left: 0;right: 0;bottom: 0;
  margin: auto;
  cursor:pointer;
}
.title {
  content: "";
  height: 600px;
  width: 30px;
  position: absolute;
  right: 0;
  left: -401px;
  top: 0;
  bottom: 0;
  margin: auto;
  background: #AB4747;
  transform: rotateY(-80deg) translateX(-14px);
}

.book-back {
  width: 400px;
  height: 600px;
  background-color: #D06255;
  position: absolute;
  top: 0;left: 0;right: 0;bottom: 0;
  margin: auto;
  cursor:pointer;
  transform:rotate(180deg) translateZ(-30px) translateX(5px);
  .text {
    transform: rotateX(180deg);
    position: absolute;
    bottom: 30px;
    padding: 20px;
    text-align:left;
    h3 {
      margin-bottom: 20px;
      color:#fff;
    }
    span {
      display: block;
      margin-bottom:20px;
      color:#fff;
      &:last-of-type {
        margin-top:30px;
      }
    }
  }
}




.rotate {
  transform:rotateY(20deg);
}
.flip {
  transform:rotateY(180deg);
}
		</style>
		<script type="text/javascript">
			$(".book").mouseenter(function(){
			  $(this).parent(".book-wrap").addClass("rotate");
			});

			$(".book").mouseleave(function(){
			  $(this).parent(".book-wrap").removeClass("rotate");
			});

			$(".book").click(function(){
			  $(this).parent(".book-wrap").addClass("flip");
			});

			$(".book-back").click(function(){
			  $(this).parent(".book-wrap").removeClass("flip");
			});
		</script>
	</head>
	<body>
		<div class="wrap">
		  <div class="perspective">
		    <div class="book-wrap">
		      <div class="book book-1"></div>
		      <div class="title book-1"></div>
		      <div class="book-back book-1">
		        <div class="text">
		          <h3>The Great Fall</h3>
		          <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt earum doloremque aliquam culpa dolor nostrum consequatur quas dicta? Molestias repellendus minima pariatur libero vel, reiciendis optio magnam rerum, labore corporis.</span><span>Blanditiis alias, omnis eveniet corporis ipsam at odio, iste, expedita praesentium ullam voluptas similique distinctio? Dicta facilis doloribus recusandae, minima facere veritatis veniam quasi quis, tempora fugit assumenda fuga laborum.</span><span>This is the great fall</span></p>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</body>
</html>