const music = new Audio ('songs/LEO - Ordinary Person Lyric Thalapathy Vijay, Anirudh Ravichander, Lokesh Kanagaraj, NikhitaGandhi.mp3');
music.play();












let popsongleft = document.getElementById('popsongleft');
let popsongright = document.getElementById('popsongright');
let popsong = document.getElementsByClassName('popsong');

popsongright.addEventListener('click',()=>{
    popsong.scrollLeft += 330;
})
popsongleft.addEventListener('click',()=>{
    popsong.scrollLieft -= 330;
})