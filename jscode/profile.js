'set strict';

document.querySelector("#photoChange").addEventListener('click',()=>{
    document.location.href = "photoProfile.php";
});

let blockList = document.querySelectorAll('.aboba');
let textInput = document.querySelectorAll(".noteNeed");
if(textInput[0].value == 0){
    let inpSost = false;
    document.querySelector('.listNote').remove();
    let plusClient = document.createElement('i');
    plusClient.classList.add('fa');
    plusClient.classList.add('fa-plus-circle');
    plusClient.classList.add('fa-5x');
    blockList[2].append(plusClient);
    plusClient.style.width = '20%';
    plusClient.style.marginLeft = '40%';
    plusClient.style.textAlign = 'center';
    plusClient.addEventListener('mouseover', ()=>{
        plusClient.style.cursor = 'pointer';
    })
    plusClient.addEventListener("click", ()=>{
        let plusAnimate = plusClient.animate([
            {transform: 'rotate(180deg)'},
            {transform: 'rotate(360deg)'},
            {transform: 'scale(0.5)'}
        ],500);
        plusAnimate.addEventListener('finish',()=>{
            let newNoteInp = document.createElement("div");
            let styleBlock = ".newBlock{color: red;}";
            newNoteInp.innerHTML = "<div><h3 class = 'newBlock'>hello</h3>\
            <h2 id = 'textIn'>notHI</h2>\
            <button id = 'close'>Закрыть</button>\
            </div>";
            newNoteInp.style = styleBlock;
            plusClient.replaceWith(newNoteInp);
            document.querySelector('#close').addEventListener('click',()=>{
                newNoteInp.replaceWith(plusClient);
            });
        })
    })
}