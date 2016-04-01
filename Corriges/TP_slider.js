var imgs = [
  'http://www.gigasmiley.com/assets/img/produit/GigaSmiley.4c4207c44e5fa18f4fbbdff8c355a3f0.jpg',
  'http://38.media.tumblr.com/avatar_8f1ac442d592_128.png',
  'http://papillonvolant.p.a.pic.centerblog.net/s1vh7z1n.jpg',
  'https://33.media.tumblr.com/avatar_17135998b3f5_128.png',
  'https://33.media.tumblr.com/avatar_52e80e3ad564_128.png',
  'http://38.media.tumblr.com/avatar_1d84667d2b3a_128.png',
  'http://38.media.tumblr.com/avatar_77caa9553877_128.png',
  'http://ediogames.com/uploaded_files/avatars/a54b5695412c7e55d449f1146cd2a6ab128.png'
];

var htmlImg = $('#slider');
var stopBtn = $('#stopBtn');
var startBtn = $('#startBtn');
var prevBtn = $('#prevBtn');
var nextBtn = $('#nextBtn');
var nb = 0, id;

function change(){
  do{
    nb = Math.floor(Math.random() * imgs.length);
  // source image must be different and tab must contain more than 1 image
  }while(htmlImg.attr('src', imgs[nb]) === imgs[nb] && imgs.length > 1);
  htmlImg.attr('src', imgs[nb]);
}

function startSlider(e){
  // If there is not an interval running
  if(!id){
    id = setInterval(change, 2000);
  }
}

function stopSlider(e){
  clearInterval(id);
  id = 0;
}

startBtn.click(startSlider);

stopBtn.click(stopSlider);

prevBtn.click(function(e){
  // // stop value at 0
  // if(nb !== 0){
  //   nb--;
  //   htmlImg.src = imgs[nb];
  // }

  // // Cycle through the tab
  nb = (nb - 1 + imgs.length) % imgs.length;
  htmlImg.attr('src', imgs[nb]);

  // // Equivalent to
  // nb--;
  // if(nb === -1){
  //   nb = imgs.length -1;
  // }
  // htmlImg.src = imgs[nb];
});

nextBtn.click(function(e){
  // // stop value at 0
  // if(nb !== imgs.length -1){
  //   nb++;
  //   htmlImg.src = imgs[nb];
  // }

  // // Cycle through the tab
  nb = (nb + 1) % imgs.length;
  htmlImg.attr('src', imgs[nb]);

  // // Equivalent to
  // nb++;
  // if(nb === imgs.length){
  //   nb = 0;
  // }
  // htmlImg.src = imgs[nb];

});

nextBtn. css("background-color", 'purple');
