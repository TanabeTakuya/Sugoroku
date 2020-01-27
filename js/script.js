const btnBGM = document.querySelector("#BGM-btn");
  
  btnBGM.addEventListener("click", ()=>{
    const bgm1 = document.querySelector("#TitleBGM");

    if( ! bgm1.paused ){
      bgm1.pause();
      btnBGM.innerHTML = 'ミュート中';
    }
    else{
      bgm1.play();
      btnBGM.innerHTML = '再生中';
    }
  });

