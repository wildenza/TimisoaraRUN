let counter = document.querySelector('h1');
let count =1;

setInterval(()=>{
 counter.innerText= count;
 count=count+1;

},1000)