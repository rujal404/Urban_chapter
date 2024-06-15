document.onscroll = () =>{
    if(window.scrolly > 80){
        document.querySelector('.navber').classList.add('sctual');
    } else {
        document.querySelector('.navbar').classList.remove('actual');
    }
};