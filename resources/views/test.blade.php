<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
  height: 50px;
}

nav {
  text-align: center;
  padding: 10px;
  margin-top: 20px;
}

nav a {
  color: #000000;
  transition: all 1s ease-in-out 0s;
  text-decoration: none;
  display: inline-block;
  padding: 5px;
  border-bottom: 2px solid transparent;
}

nav a:link {
  color: #000000;
  text-decoration-line: none;
}

nav a:nth-of-type(1):hover {
  border-color: rgb(255, 29, 142);
}

nav a:nth-of-type(2):hover {
  border-color: rgb(133, 52, 146);
}

nav a:nth-of-type(3):hover {
  border-color: rgb(255, 128, 55);
}

nav a:nth-of-type(4):hover {
  border-color: rgb(0, 182, 223);
}

nav a:nth-of-type(5):hover {
  border-color: rgb(63, 190, 150);
}

nav a:nth-of-type(6):hover {
  border-color: rgb(255, 222, 32);
}

nav a:hover {
  color: #000000;
}

#logo {
  width: 100%;
  max-width: 100%;
  height: 750px;
}

#whatwedo {
  width: 100%;
  max-width: 100%;
  height: 750px;
}

#whoweare {
  width: 100%;
  max-width: 100%;
  height: 750px;
}

#partners {
  width: 100%;
  max-width: 100%;
  height: 750px;
}

#contact {
  width: 100%;
  max-width: 100%;
  height: 750px;
}
    </style>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<header>
  <nav>
    <a href="#logo">Home</a>
    <a href="#whatwedo">What we do</a>
    <a href="#whoweare">Who we are</a>
    <a href="#partners">Who we work with</a>
    <a href="#contact">Say hello</a>
    <a href="Blog">Blog</a>
  </nav>

</header>

<section id="logo">Logo</section>

<section id="whatwedo">What we do </section>

<section id="whoweare"> Who we are </section>

<section id="partners"> Our Partners </section>

<section id="contact"> Contact </section>

<script>
    $('a[href^="#"]').click(function(event) {
  var id = $(this).attr("href");
  var target = $(id).offset().top;
  $('html, body').animate({
    scrollTop: target
  }, 500);
  event.preventDefault();
});

function getTargetTop(elem) {
  var id = elem.attr("href");
  var offset = 60;
  return $(id).offset().top - offset;
}


$(window).scroll(function(e) {
  isSelected($(window).scrollTop())
});

var sections = $('a[href^="#"]');

function isSelected(scrolledTo) {

  var threshold = 100;
  var i;

  for (i = 0; i < sections.length; i++) {
    var section = $(sections[i]);
    var target = getTargetTop(section);

    if (scrolledTo > target - threshold && scrolledTo < target + threshold) {
      sections.removeClass("active");
      section.addClass("active");
    }

  };
}
</script>
</body>
</html>
