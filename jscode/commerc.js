'set strict';
// let admin = "";
// let user = "Джон";
// let message = prompt("Сколько тебе лет", 5);
// let boss = confirm("Ты босс?");
// alert(boss);
// admin =  user;
// alert(message);
// alert ("Hello world");
// alert(`hello, ${admin}`);
mainForm = document.querySelector(".mainform");
function clickMouse(){
    mainer = document.querySelector("#mainform");
    text = document.querySelector("#text");
    if(mainer .classList . contains('mainform')){
        mainer.classList.remove('mainform');
        mainer .classList . add('hideMainForm');
        text . classList . remove('textShow');
        text . classList . add('textHide');
        // document.getElementById('textMain').innerHTML = "hello";
    }else{
        mainer . classList . remove('hideMainForm');
        mainer . classList . add('mainform');
        text . classList . remove('textHide');
        text . classList . add('textShow');
        document.querySelector("#mainform").style.display = 'flex';
        // document.getElementById('textMain').innerHTML="Hello world";
    }
    // if(document.querySelector("#mainform").style.display == 'flex'){
    //     main = document.querySelector("#mainform");
    //     main . classList . add('hideMainForm');
    //     document.querySelector("#mainform").style.display = "none";
    // }else{
    //     mainForm . classList . remove("hideMainForm");
    //     mainForm . classList . add("mainform");
    //     document.querySelector(".mainform").style.display = "flex"; 
    // }
}
let x = 1;
let x2 = 0.1;
function changeButton(){
    let text = document.getElementById('textMain').innerHTML;
    if(text == "great"|| text== "super"){
        if(x>0){
            // document.getElementById('textMain').innerHTML = "super";
            document.getElementById('textMain').style.opacity = x;
            x = x-0.1;
            setTimeout('changeButton()',15);
        }else{
            document.getElementById('textMain').innerHTML = "super";
            document.getElementById('textMain').style.opacity = x2;
            x2 = x2 + 0.1;
            setTimeout('changeButton()',15);
        }
        
    }
}
function createDiv(){
    let diver = document.createElement('div');
    let but = document.createElement('button');
    but.onclick=function(){
        document.querySelector('.newDiv').remove();
    }
    but.classList.add('button');
    but.innerHTML="del";
    let link = document.createElement('a');
    link.href = "index.php";
    link.innerHTML = "Переход";
    diver.classList .add('newDiv');
    diver.id="diver";
    diver.innerHTML = "newBlock";
    diver.style.display = "inline-block";
    diver.style.margin = "5px";
    mainDiv = document.getElementById('text');
    diver.prepend(link);
    mainDiv.append(diver);
    diver.append(but);
}
function deleteBlock(){
    let p = 0;
    let div =  document.querySelector('.newDiv');
    divka = document.getElementsByClassName('newDiv').length;
    while(p<divka){
        document.querySelector('.newDiv').remove();
        p++;
    }
}



// Обучение javascript
function alertBlock(func){
let newBlockAlert = document.createElement('div');
newBlockAlert.innerHTML = "В консоли есть список массива";
newBlockAlert.style.width = "300px";
newBlockAlert.style.height = "300px";
newBlockAlert.style.background = "red";
let mainBlock = document.querySelector('.hello');
newBlockAlert.classList.add('newAlert');
mainBlock.before(newBlockAlert);
func();
}
function goUp(){
    let timeOut;
    let top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
    if(top > 0) {
        window.scrollBy(0,-100);
        timeOut = setTimeout('goUp()',20);
    } else clearTimeout(timeOut);
}
let array = [];
let schet = 0, numberMass = 1;
while(schet < 105){
    array[schet] = numberMass;
    numberMass+=numberMass;
    schet+=1;
    console.log(`${schet} - ${array[schet-1]}`);
}

function createTable(){
    function randNum(min,max){
        return Math.random()*(max-min)+(min);
    }
    if(document.getElementById('createTab')){
        alert("Удалим");
        document.getElementById('createTab').remove();
        let vTable = document.getElementById('vTable');
        let tableCreat = document.createElement('table');
        let inpTable = document.getElementById('inpTable').value;
        tableCreat.id = "createTab";
        tableCreat.setAttribute('border','2');
        tableCreat.style.color = "red";
        tableCreat.style.width ="200px";
        tableCreat.style.height = "100px";
        vTable.after(tableCreat);
        let randOurNum = randNum(0,inpTable-1);
        console.log(Math.ceil(randOurNum));
        for(let i = 1; i<=inpTable; i++){
            let tr =document.createElement('tr');
            
            for(let j=1;j<=inpTable;j++){
                let td = document.createElement('td');
                if(j==Math.ceil(randOurNum)){
                    td.innerHTML = "to";
                }else{
                    td.innerHTML = "td";
                }
                tr.appendChild(td);
            }
            tableCreat.appendChild(tr);
        }
    }else{
    let vTable = document.getElementById('vTable');
    let tableCreat = document.createElement('table');
    let inpTable = document.getElementById('inpTable').value;
    tableCreat.id = "createTab";
    tableCreat.setAttribute('border','2');
    tableCreat.style.color = "red";
    tableCreat.style.width ="200px";
    tableCreat.style.height = "100px";
    vTable.after(tableCreat);
    let randOurNum = randNum(0,inpTable-1);
    console.log(Math.ceil(randOurNum));
    for(let i = 1; i<=inpTable; i++){
        let tr =document.createElement('tr');
        
        for(let j=1;j<=inpTable;j++){
            let td = document.createElement('td');
            if(j==Math.ceil(randOurNum)){
                td.innerHTML = "to";
            }else{
                td.innerHTML = "td";
            }
            tr.appendChild(td);
        }
        tableCreat.appendChild(tr);
    }
    alert(`hello ${vTable}`);
    // document.getElementById('createTab').remove();
    }
}

// function clickCommerc(){
//     let clickBlockCommerc = document.querySelector('.clickCommerc');
//     // clickBlockCommerc.classList.add('blockShow');
//     // clickBlockCommerc.classList.remove('clickCommerc');
//     clickBlockCommerc.classList.add('blockShow');
//     setTimeout(()=>{
//         clickBlockCommerc.classList.remove('blockShow');
//     },200);
//     console.log(clickBlockCommerc.classList);
//     let h3 = document.getElementById('h3');
//     h3.style.fontSize = "2em";
//     setTimeout(()=>{h3.style.fontSize = "3em";},200);
//     setTimeout(()=>{h3.style.fontSize = "4em";},500);
// }

let timeH3 = document.querySelector('#h3');
let hour = 23;
let minute = 60;
let second = 0;
let start = false;
timeH3.addEventListener("click",()=>{
    if(start === false){
        start = true;
        startTimer();
    }else{
        start = false;
    }
});
function startTimer(){
    if(second < 10 && second > 0) {
        timeH3.innerHTML = hour + ":" + minute + ": 0" + second;
    }else if(second === 0){
        timeH3.innerHTML = hour + ":" + minute + ":" + second + "0";
    }else if(hour > 10 && minute > 10 && second > 10){
        timeH3.innerHTML = hour + ":" + minute + ":" + second;
    }else if(minute < 10){
        timeH3.innerHTML = hour + ": 0" + minute + ":" + second;
    }
    if(second > 0){
        second = second - 1;
    }else if(minute > 0 && second === 0){
        second = 59;
        minute = minute - 1;
    }else{
        hour = hour - 1;
        minute = 59;
    }
    if(start == true){
        setTimeout('startTimer()', 1000);
    }else{
        let pauseTimer = document.createElement('h3');
        pauseTimer.innerHTML = "Pause";
        pauseTimer.style.display = "flex";
        pauseTimer.style.justifyContent = "center";
        h3.append(pauseTimer);
    }
}

let needBlocker = document.querySelector('.uprazh');

let buttonAnsw = document.querySelector("#but");

let inper = document.querySelector('#textInper');

function prim1(a1,a2){
    return a1*a2;
}

function prim2(name = "",surname = "",age){
    let fullName = "Ваше имя " + name + " " + surname + "Ваш возраст: " + age;  
    return  fullName;
}

function prim3(gender){
    if(gender == "M"){
        needBlocker.innerHTML = "Ваш пол мужской";
    }else if(gender == "F"){
        needBlocker.innerHTML = "Ваш пол женский";
    }else{
        needBlocker.innerHTML = "Ваш пол неопределен";
    }
}

function prim4(num){
    switch(num){
        case 1:
            needBlocker.innerHTML = "Понедельник";
            break;
        case 2:
            needBlocker.innerHTML = "Вторник";
            break;
        case 3:
            needBlocker.innerHTML = "Среда";
            break;
        case 4:
            needBlocker.innerHTML = "Четверг";
            break;
        case 5:
            needBlocker.innerHTML = "Пятница";
            break;
        case 6:
            needBlocker.innerHTML = "Суббота";
            break;
        case 7:
            needBlocker.innerHTML = "Воскресенье";
            break;
        default:
            needBlocker.innerHTML = "Не робит";
    }
}
prim4(4);

function primer5Stroki(){
    buttonAnsw.addEventListener('click', ()=>{
        let strMass = inper.value.split(",");
        let innerStrMass = [];
        let newStrMass = [];
        for(let i = 0;i<strMass.length;i++){
            newStrMass = strMass[i].split(" ");
            innerStrMass[i] = newStrMass[0];
        }
        needBlocker.innerHTML = innerStrMass;
    })
    let deleteButInper = document.getElementById('delInner');
    deleteButInper.addEventListener('click',()=>{
        needBlocker.innerHTML = "";
        inper.value = "";
    })
}
primer5Stroki();

function getTime(){
    let time = new Date();
    let herHour = time.getHours();
    if(herHour > 6 && herHour < 22){
        alert("Добрый день")
    }else{
        alert("Доброй ночи");
    }
}
// getTime();

function stolbAge(){
    let fullList = "";
    for(let i = 0; i < 100; i++){
        if(i < 30){
            fullList = fullList + "\n" + i + " - Молодой\n";
        }else if(i == 30 || i > 30 && i < 60){
            fullList = fullList + "\n" + i + " - Зрелый\n";
        }else{
            fullList = fullList + "\n" + i + " - Старый\n";
        }
    }
    alert(fullList);
}
// stolbAge();


function randomMassiv(){
    function randInt(min,max){
        let randNum = Math.random()*(max-min)+min;
        return Math.ceil(randNum);
    }
    let randMass = [];
    for(let i = 0;i < 10;i++){
        randMass[i] = randInt(0,10);
        if(randMass[i] % 2 != 0){
            randMass.splice(i,1,"_");
        }
    }
    alert(randMass);
}
// randomMassiv();

function okrugNum(){
    needBlocker.innerHTML = inper.value + " - ваше число";
    but.style.background = "red";
    setTimeout(()=>{
        but.style.background = "";
    },500);
}

buttonAnsw.addEventListener('click',okrugNum);

let buttonMassive = document.querySelector('#buttonMassive');
buttonMassive.addEventListener('click', ()=>{
    let numFromMassive = document.querySelector('#inputMassive').value;
    addMassive(numFromMassive);
})

let massiveFive = [];

function addMassive(number){
    massiveFive.push(number);
    document.querySelector('.uprazh').innerHTML = massiveFive;
    alert(massiveFive.length);
}