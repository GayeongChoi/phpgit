const sliderWrap = document.querySelector(".slider__wrap");
const sliderImg = document.querySelector(".slider__img");       //이미지 한칸만 움직이는 영역
const sliderInner = document.querySelector(".slider__inner");    //이미지 움직이는 영역
const slider = document.querySelectorAll(".slider");            //각각의 이미지
const sliderBtn = document.querySelector(".slider__btn");        //슬라이드 버튼 선언
const sliderBtnPrev = sliderBtn.querySelector(".prev");            //슬라이드 버튼(이전)
const sliderBtnNext = sliderBtn.querySelector(".next");             //슬라이드 버튼(이후)
const sliderDot = document.querySelector(".slider__dot");            // 닷 영역

let currentIndex = 0;

let sliderWidth = sliderImg.offsetWidth;    //이미지 가로 값
let sliderLength = slider.length; //이미지 갯수
let sliderFirst = slider[0]; //첫번째이미지
let sliderLast = slider[sliderLength - 1]; //마지막이미지
let cloneFirst = sliderFirst.cloneNode(true); //첫번째 이미지 복사
let cloneLast = sliderLast.cloneNode(true); //마지막 이미지 복사

let posInitial = "";
let dotIndex = "";
let sliderTimer = "";
let interval = 2000;

console.log(sliderWidth);

 // 이미지 복사 - jQuery = appendTo/prependTo : append/prepend
sliderInner.appendChild(cloneFirst);
sliderInner.insertBefore(cloneLast, sliderFirst);

function gotoSlider(index){
    sliderInner.classList.add("transition");
    sliderInner.style.left = -100 * (index+1)+"vw";
    currentIndex = index;
    dotActive();
}

//닷 메뉴 세팅
function dotInit(){
    for(let i=0; i<sliderLength; i++){
        dotIndex += "<a href='#' class='dot'></a>"
    }
    dotIndex += "<a href='#' class='play'>play</a>";
    dotIndex += "<a href='#' class='stop show'>stop</a>";
    sliderDot.innerHTML = dotIndex;
    sliderDot.firstElementChild.classList.add("active");
}
dotInit();

//닷 버튼 활성화
function dotActive(){
    let dotAll = document.querySelectorAll(".slider__dot .dot");

    dotAll.forEach(dot => {
        dot.classList.remove("active"); //전체 닷 메뉴 비활성화
    })

    if(currentIndex == sliderLength) { //마지막 이미지 왔을 때
        dotAll[0].classList.add("active"); // : dotAll[0]을 활성화
    } else if (currentIndex == -1) {   //처음 이미지 왔을 때
        dotAll[sliderLength - 1].classList.add("active"); 
    } else { //현재 보고 있는 이미지 닷 활성화
        dotAll[currentIndex].classList.add("active");
    }
}

//닷 버튼 누르면 선택 이미지 이동
document.querySelectorAll(".slider__dot .dot").forEach((dot, index) => {
    dot.addEventListener("click", () => {
        gotoSlider(index);
    })
})

//자동 이동
function autoPlay(){
    sliderTimer = setInterval(()=>{
        gotoSlider(currentIndex + 1);
    }, interval);
}

//이동 멈춤
function stopPlay(){
    clearInterval(sliderTimer);
}

//이전 버튼 클릭
sliderBtnPrev.addEventListener("click", ()=>{
    let prevIndex = currentIndex - 1;
    gotoSlider(prevIndex);
    stopPlay();
});

//다음 버튼 클릭
sliderBtnNext.addEventListener("click", ()=>{
    let nextIndex = currentIndex + 1;
    gotoSlider(nextIndex);
    stopPlay();
});

//애니메이션 완료 후
sliderInner.addEventListener("transitionend", () => {
    sliderInner.classList.remove("transition");
    
    if(currentIndex == -1){
        sliderInner.style.left = -(sliderLength * 100) + "vw";
        currentIndex = sliderLength -1;
    }
    if(currentIndex == sliderLength){
        sliderInner.style.left = -(1 * 100) + "vw";
        currentIndex = 0;
    }
});


//마우스 효과 : 마우스를 올렸을 때        
sliderInner.addEventListener("mouseenter", ()=>{ 
    stopPlay();
})
sliderInner.addEventListener("mouseleave", ()=>{

    if(document.querySelector(".play").classList.contains("show")){
        stopPlay();
    } else {
        autoPlay();
    }
})

//버튼 클릭하기
document.querySelector(".play").addEventListener("click", ()=>{
    document.querySelector(".play").classList.remove("show");
    document.querySelector(".stop").classList.add("show");
    autoPlay();
})
document.querySelector(".stop").addEventListener("click", ()=>{
    document.querySelector(".stop").classList.remove("show");
    document.querySelector(".play").classList.add("show");
    stopPlay();
})