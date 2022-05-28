document.querySelector('.imageTour').addEventListener('click',()=>{
    document.querySelector('#fileDivChange').click();
});
let findInput = document.querySelector('#nameTour');
findInput.style.width = findInput.value.length  + 1 + "ch";
findInput.addEventListener('keyup',()=>{
    let colNumInp = findInput.value;
    findInput.style.width = colNumInp.length + 2 + "ch";
});

document.querySelector(".backtotour").addEventListener('click',()=>{
    document.location.replace('tourlist.php');
});
