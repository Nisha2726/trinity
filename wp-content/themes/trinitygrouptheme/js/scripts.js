document.addEventListener( 'DOMContentLoaded', function() {

  var current;


    var splide = new Splide( '#splide-vert', {
        direction: 'ttb',
        perPage    : 1,
        heightRatio: 1,
        cover      : true,   
        arrows: false, 
        wheel       : false,
        releaseWheel: false, 
        infinite: false,
        type         : 'loop',
        autoplay     : true,
        interval     : 10000,

        // autoplay    : true,
        breakpoints: {
          900: {
            direction: 'ltr',
            arrows: true,
            wheel       : false,
            releaseWheel: false, 
          },
        }
    } );

    splide.on( 'mounted', function (data) {
      console.log("write code to load active splide slide");


      var main = document.getElementsByClassName("home-container");

      if (main.length > 0) {
        var content = main[0].getElementsByClassName("splide");
        featuredPropertyTitle = document.getElementById("featured_property_location");
        featuredPropertyCopy = document.getElementById("featured_property_copy");
        info = content[0].getElementsByClassName('splide__slide');
        featuredPropertyTitle.innerHTML = info[0].getAttribute("data-location-name");
        featuredPropertyCopy.innerHTML = info[0].getAttribute("data-location-copy");
        console.log(info);
      }

    } );

    splide.mount();

    splide.on( 'active', function( data )  {

      featuredPropertyTitle = document.getElementById("featured_property_location");
      featuredPropertyCopy = document.getElementById("featured_property_copy");

      featuredPropertyTitle.innerHTML = data.slide.dataset["locationName"]
      featuredPropertyCopy.innerHTML = data.slide.dataset["locationCopy"]

      console.log(data.slide.dataset["locationName"]);
    } );


});




document.addEventListener( 'DOMContentLoaded', function() {
  var splideHor = new Splide( '#splide-hor', {
      perPage    : 1,
      arrows: true,
      // heightRatio : 0.3, 
      height     : '700px',
      infinite: false,
      type       : 'loop',
      width: '100%',
      // cover: true,

      // wheel       : true,
  } );
  splideHor.mount();
});



//   rewind:false,
//   direction: 'ttb',
//   // heightRatio: 1,
//   // autoHeight: true,
//height     : '10rem',
//   cover      : true,
//   gap: 0,
//   arrows: false,
//   wheel       : true,
//   releaseWheel: true,     


// const showDetail = document.getElementById('show-executive-detail');
// const execClicked = document.querySelectorAll('.executive-profile');

// for(i = 0; i < execClicked.length; i++){

//   execClicked[i].addEventListener('click', function(e) {

//     data = this.dataset.info;

//     if (this.classList.contains('exec-active')) {
//       this.classList.remove('exec-active');
//       showDetail.classList.remove('active');

//     } else {

//       for(let x = 0; x < execClicked.length; x++) {
//         execClicked[x].classList.remove('exec-active');  
//       }

//       this.classList.add('exec-active');

//       if (showDetail.classList.contains('active')) { 
//         showDetail.classList.remove('active');  
//         showDetail.addEventListener('transitionend', function(e) {
//           if (e.propertyName === 'max-height') {
//              showDetail.classList.add('active');
//              document.getElementById('something').innerHTML = data;

//           }
//         }, {
//             once: true
//           });
//         } else {
//             showDetail.classList.add('active');
//             document.getElementById('something').innerHTML = data;

//         }

//     }

//   });

// }





//nav 
  // search-box open close js code
  let navbar = document.querySelector(".navbar");
  let searchBox = document.querySelector(".search-box .bx-search");
  // let searchBoxCancel = document.querySelector(".search-box .bx-x");
  
  // searchBox.addEventListener("click", ()=>{
  //   navbar.classList.toggle("showInput");
  //   if(navbar.classList.contains("showInput")){
  //     searchBox.classList.replace("bx-search" ,"bx-x");
  //   }else {
  //     searchBox.classList.replace("bx-x" ,"bx-search");
  //   }
  // });
  
  // sidebar open close js code
  let navLinks = document.querySelector(".nav-links");
  let menuOpenBtn = document.querySelector(".navbar .bx-menu");
  let menuCloseBtn = document.querySelector(".nav-links .bx-x");
  menuOpenBtn.onclick = function() {
  navLinks.style.left = "0";
  }
  menuCloseBtn.onclick = function() {
  navLinks.style.left = "-100%";
  }
  
  
  // sidebar submenu open close js code
  // let htmlcssArrow = document.querySelector(".htmlcss-arrow");
  // htmlcssArrow.onclick = function() {
  //  navLinks.classList.toggle("show1");
  // }
  // let moreArrow = document.querySelector(".more-arrow");
  // moreArrow.onclick = function() {
  //  navLinks.classList.toggle("show2");
  // }
  // let jsArrow = document.querySelector(".js-arrow");
  // jsArrow.onclick = function() {
  //  navLinks.classList.toggle("show3");
  // }



  const execClicked = document.querySelectorAll('.executive-profile');

  for(i = 0; i < execClicked.length; i++){

    // execBioOverLay = document.getElementsByClassName("test");


    execClicked[i].addEventListener('click', function(e) {

        bioName = document.getElementsByClassName("bio-name")[0];
        bioPosition = document.getElementsByClassName("bio-position")[0];
        bioQuote = document.getElementsByClassName("bio-quote")[0];
        bioInfo = document.getElementsByClassName("bio-info")[0];

        bioName.innerHTML = this.dataset.name;
        bioPosition.innerHTML = this.dataset.position;
        bioQuote.innerHTML = this.dataset.quote;
        bioInfo.innerHTML = this.dataset.info;

        console.log(bioName);


        var overLay = document.getElementsByClassName("full-page-overlay")[0];
        overLay.classList.add("active");

      // console.log(data);
    })
  }

  document.getElementById("close-overlay").addEventListener("click", function(e) {
      console.log("close clicked");
      var overLay = document.getElementsByClassName("full-page-overlay")[0];
      overLay.classList.remove("active");
  }
  
  );

  

  // bioName = document.getElementsByClassName("bio-name")[0];
  // bioPosition = document.getElementsByClassName("bio-position")[0];
  // bioQuote = document.getElementsByClassName("bio-quote")[0];
  // bioInfo = document.getElementsByClassName("bio-info")[0];

  // bioName.innerHTML = test[0].getAttribute("data-name");
  // bioPosition.innerHTML = test[0].getAttribute("data-position");
  // bioQuote.innerHTML = test[0].getAttribute("data-quote");
  // bioInfo.innerHTML = test[0].getAttribute("data-info");

