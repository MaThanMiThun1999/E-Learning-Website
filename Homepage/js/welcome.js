var tl = new TimelineMax({ repeat: 6, repeatDelay: 1, yoyo: true });
tl.staggerTo(
  "h2",
  0.2,
  { className: "+=superShadow", top: "-=10px", ease: Power1.easeIn },
  "0.3",
  "start"
);

//animation powered by GSAP JS
//http:www.greensock.com/gsap-js/

/*
special thanks to Daniel Riemer who created the text-shadow style and original pen

https://codepen.io/zitrusfrisch

*/
