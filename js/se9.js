/* 
document.getElementsByClassName('img-item');بترجع لسته من العناص
document.getElementsByTagName("h2")/بترجع لسته من العناصر 
document.quarySelector(" css code  هنا بحط نفس طريقة كود css   ودى بترجع اول واحد بس على العنصر اللى عاوز اشتغل عليه")
document.quarySelectorAll(" css code  هنا بحط نفس طريقة كود css  ودى بترجع كله على العنصر اللى عاوز اشتغل عليه")

*/

var allimg=Array.from(document.querySelectorAll(".container img"));
var itembox=document.getElementById("lightboxitem");
var imgcontainer=document.getElementById("lightbox-container");
var currentIndex=0;
var next=document.getElementById("next");
var prev=document.getElementById("prev");
var closeimg=document.getElementById("close");
var yesbtn=document.getElementById("yesbtn");
var nobtn=document.getElementById("nobtn");
var khtab=document.getElementById("khtabbox");
for(var i=0;i<allimg.length;i++){
   allimg[i].addEventListener("click",Show);
}
// allimg.addEventListener("click",Show);
function Show(e){
   // console.log(e);
currentIndex=allimg.indexOf(e.target);
console.log(currentIndex);
   var imgsrc=e.target.src;
   // console.log(imgsrc);
   
   itembox.style.backgroundImage=`url(${imgsrc})`;
   imgcontainer.style.display="flex";
  
}
function nextslid(){
currentIndex++;
if(currentIndex==allimg.length){
   currentIndex=0;
}
imgsrc=allimg[currentIndex].src;
itembox.style.backgroundImage=`url(${imgsrc})`;
}



function prevslid(){
   currentIndex--;
   if(currentIndex<0){
      currentIndex=allimg.length-1;
   }
   imgsrc=allimg[currentIndex].src;
   itembox.style.backgroundImage=`url(${imgsrc})`;
   }
   
  
   
   function closse(){
      khtabbox.style.display="block";
      // imgcontainer.style.display="none";
   }
   yesbtn.addEventListener("click",function(){
      khtabbox.style.display="none";
    imgcontainer.style.display="none";

   })
   nobtn.addEventListener("click",function(){
      khtabbox.style.display="none";
   })
      
   prev.addEventListener("click",prevslid);
   next.addEventListener("click",nextslid);
   closeimg.addEventListener("click",closse);

document.addEventListener("keydown",function(e){
   if(e.keyCode==39){
     nextslid();
   }
   else if(e.keyCode==37){
   prevslid();
   }
   else if(e.keyCode==27){
   closse();
}
})
var box=document.getElementById("closebox");
box.style.background="red";
// box.style.left=170;
box.style.textAlign="center";














// var mimg=document.getElementById("movimg");
// document.addEventListener("click",chngpos);
// mimg.cssText
// // document.addEventListener("click",chngpos)

// function chngpos(e){
//    mimg.style.left=e.clientX;
//    mimg.style.top=e.clientY;
//    console.log(e);
// }

// var imgs=document.getElementsByClassName("");
// for(var i=0;i<imgs.length;i++){
//    imgs[i].addEventListener("click",function(e){
// console.alert(e);})
// // console.log(e.clientY);
// }


// var element=document.getElementById("asd");
// element.addEventListener("click",test);
// function  test(){
//    window.alert("Welow");

// }
// var h222=document.getElementById("asd");
// h222.style.color="blue";
// console.log(h222);
//  function changcolor(){
//     var h222=document.getElementById("asden");
//     h222.style.backgroundColor="red";
//     h222.style.position="relative";
//     h222.style.left="200px";
//     h222.style.top="50px";

//  }

//  function changclass(){
//    var cl=document.querySelector(".one");
//    cl.classList.remove("one ");
   // h222.style.backgroundColor="red";
   // h222.style.position="relative";
   // h222.style.left="200px";
   // h222.style.top="50px";

// }

//  var pic=document.getElementById("myimg");

// document.addEventListener("mousemove"  ,function(e){
//     SayHello(e);
// })
// function SayHello(e){
//     pic.style.left=e.clientX+"px";
//     pic.style.top=e.clientY+"px";
//     console.log(e.ClientX);
//     console.log(e.ClientY);
// }
