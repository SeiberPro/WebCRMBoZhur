'set strict'
// function clientList(){
//     let diversButton = document.querySelectorAll('.linkIcon');
//     let clientList = document.createElement('div');
//     clientList.innerHTML = "linkPhp";
//     clientList.style.width = "20px";
//     clientList.style.height = "50px";
//     let needDiv = document.querySelector('.change');
//     clientList.classList.add('newDiv');
//     clientList.style.display = "inline-block";
//     alert("hell");
//     clientList.addEventListener('click',event => event.target.remove());
//     needDiv.prepend(clientList);
//     for(let divs of diversButton){
//         divs.addEventListener('click', function(){
//             console.log(this.divs);
//         });
//     }
// }

// document.body.onclick = function(e){
//     let foundNewBlock = document.querySelector('.showKList');
//     if(e.target.className != "showKList"){
//         if(create == 1){
//             foundNewBlock.remove();
//         }
//     }
// }
let create = 0;
function showClientList(){
    let heightWindow = window.innerHeight;
    let widthWindow = window.innerWidth;
    let needIcon = document.querySelectorAll('.linkIconLeft');
    let tours = document.querySelectorAll('.tours');
    for(let i = 0;i < needIcon.length;i++){
        let parent = tours[i];
        let iconClick = needIcon[i];
        iconClick.addEventListener('click',()=>{
            if(create == 0){
                let coorParent = parent.getBoundingClientRect();
                let coorIcon = iconClick.getBoundingClientRect();
                let polObjY = parent.offsetTop;
                let polObjX = parent.offsetLeft;
                let heightTours = parent.clientHeight;
                let widthTours = parent.clientWidth;
                let needCoorX = (polObjX + widthTours)-(widthTours/1.8);
                let needCoorY = polObjY + heightTours; 
                console.log("top: "+ polObjY + " left: " + polObjX + "\n" + heightTours);
                // alert(coorParent.top + " " + coorParent.left);
                let clientList = document.createElement('div');
                clientList.classList.add('showKList');
                clientList.style.top = needCoorY + "px";
                clientList.style.left = needCoorX + "px";
                clientList.innerHTML = "<span>Иванов Иван </span><button style = 'border-radius: 20px; padding: 3px;'>Предложить</button>\
                <span>Васин Антон </span><button style = 'border-radius: 20px; padding: 3px;'>Предложить</button>";
                clientList.style.zIndex = "1000";
                parent.after(clientList);
                let getAllElem = document.getElementsByTagName("*");
                window.addEventListener("resize",()=>{
                    clientList.remove();
                    for(let delAllChar = 0;delAllChar<getAllElem.length;delAllChar++){
                        getAllElem[delAllChar].style.opacity = "1";
                        getAllElem[delAllChar].style.background = "";
                    }
                    create = 0;
                });

                for(let m=0;m<getAllElem.length;m++){
                    // getAllElem[m].style.background = "rgb(94, 93, 93)"; Строка для затемнения всего окружающего
                    clientList.style.opacity = "1";
                    clientList.style.background = "white";  
                }
                create = 1;
            }else{ 
                let needDeleteClientList = document.querySelector('.showKList');
                needDeleteClientList.classList.remove('showKList');
                needDeleteClientList.classList.add('hideKList');
                setTimeout(()=>{needDeleteClientList.remove();needDeleteClientList.innerHTML = "";},300);
                let getAllElem = document.getElementsByTagName("*");
                for(let m=0;m<getAllElem.length;m++){
                    getAllElem[m].style.opacity = "1";
                    getAllElem[m].style.background = "";
                    getAllElem[m].style.border = "";
                }
                create = 0;
            }
        });
    }
}
showClientList();
//////////////////////////////////Первый вариант вывода информации о туре//////////////////////////////////////////
// let newInnerHtml;
// let infoTour = document.querySelectorAll('.info-tour');
// let infoButton = document.querySelectorAll('.linkIconInfo');
// for(let colInfo = 0;colInfo < infoButton.length;colInfo++){
//     infoButton[colInfo].addEventListener('click',()=>{
//         // infoTour[colInfo].style.opacity = "0";
//         newInnerHtml = document.createElement('div');
//         newInnerHtml.classList.add('newInfoBlock');
//         newInnerHtml.innerHTML = "<div class='exampleBlock'>\
//         <p>Создано:</p>\
//         <p>Кем:</p>\
//         <p>Ож. клиент</p>\
//         <p>цена</p>\
//         </div>\
//         <a class='linkIconInfo' href='#'>\
//         <i class='fa fa-info-circle fa-lg' id = 'infoReturn' aria-hidden = 'true'></i>\
//         </a>"; 
//         infoTour[colInfo].style.pointerEvents = "none";
//         infoTour[colInfo].style.userSelect = "none";
//         infoTour[colInfo].style.display = "none";
//         console.log(infoTour[colInfo].classList);
//         // infoTour[colInfo].style.opacity = 0;
//         newInnerHtml.style.margin = "5px";
//         infoTour[colInfo].before(newInnerHtml);
//         document.querySelector('#infoReturn').addEventListener('click',()=>{
//             infoTour[colInfo].style = "";
//             newInnerHtml.remove();
//         })
//     })
// }
//////////////////////////////////Первый вариант вывода информации о туре//////////////////////////////////////////

//////////////////////////////////Второй вариант вывода информации о туре//////////////////////////////////////////
let allTours = document.querySelectorAll(".linkIconInfo");
let finishShowBlock = document.querySelectorAll(".tours");
for(let chetTours = 0;chetTours < allTours.length;chetTours++){
    allTours[chetTours].addEventListener('click', ()=>{
        clickTours(finishShowBlock[chetTours]);
    });
}
function clickTours(idTours){
    let needHtml = idTours.innerHTML;
    let content = document.querySelector('.content');
    let fon = document.createElement('div');
    let needValueMin = window.innerHeight * 0.12;
    fon.style.width = window.innerWidth  + "px";
    fon.style.height = window.innerHeight - needValueMin  + "px";
    fon.style.position = "absolute";
    fon.style.zIndex = "999";
    fon.classList.add("fonStyle");
    fon.style.cursor = "pointer";
    content.before(fon);
    let newBigTours = document.createElement('div');
    newBigTours.style.height = content.clientHeight - 200 + "px";
    newBigTours.style.width = content.clientWidth - 400 + "px";
    newBigTours.classList.add('newBigTour');
    newBigTours.innerHTML = "<h3 id = 'closeNewBlock' style ='position: absolute;top:5px;right: 20px;'>X</h3>" + needHtml;
    console.log(needHtml);
    content.prepend(newBigTours);
    document.querySelector('#closeNewBlock').addEventListener('click',()=>{
        fon.click();
    })
    window.addEventListener('resize',()=>{
        fon.remove();
        newBigTours.remove();
    })
    fon.addEventListener('click',()=>{
        newBigTours.remove();
        fon.remove();
    })
}
//////////////////////////////////Второй вариант вывода информации о туре//////////////////////////////////////////

function findBlocks(block){
    let foundBlocks = document.querySelectorAll(block);
    return foundBlocks;
};

function dragTours(){
    let exampleCursor = document.querySelector(".createTourButton");
    let logo1 = findBlocks('.logo1');
    logo1.ondragstart = function(){
        return false;
    }
    let toursDrag = findBlocks('.tours');
    let cloneTourMassive = [];
    for(let i = 0;i < logo1.length;i++){
        let newDragClone = toursDrag[i].cloneNode(true);
        cloneTourMassive.push(newDragClone);   
        logo1[i].addEventListener('dragstart',()=>{
            cloneTourMassive[i].style.position = 'absolute';
            cloneTourMassive[i].style.zIndex = 1000;
            toursDrag[i].style.opacity = 0;
            toursDrag[i].after(cloneTourMassive[i]);
        });
        logo1[i].addEventListener('drag', (e)=>{
            let x = e.pageX;
            let y = e.pageY;
            exampleCursor.value = "x - " + x + "y - " + y + "left" + toursDrag[i].offsetLeft;
            cloneTourMassive[i].style.left = x + window.pageXOffset - cloneTourMassive[i].clientWidth + "px";
            cloneTourMassive[i].style.top = y + window.pageYOffset - cloneTourMassive[i].clientHeight + "px";
        });
        logo1[i].addEventListener('dragend', ()=>{
            cloneTourMassive[i].style = "";
            cloneTourMassive[i].remove();
            toursDrag[i].style = "";
        });
    };
};
dragTours();