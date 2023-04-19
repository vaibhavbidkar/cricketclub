// const addplayer=document.querySelector('.addplayer');
// const addplayerform=document.querySelector('.addplayerform')

// const playername=document.querySelector('.playername')
// const playerage=document.querySelector('.playerage')
// const playerrole=document.querySelector('.playerrole')
// const playernamevalue=playerage.textContent;
// const playeragevalue=playerage.textContent;
// const playerrolevalue=playerage.textContent;

console.log('hello')

const form = document.getElementById('player-form')
function done(e){
    e.preventDefault()
    const data = new FormData(e.target)
    console.log(data.get('name'),data.get('age'),data.get('role'))
    
    
    
    
//    const orglist=document.querySelector(".list");
//    console.log(orglist);

//    const newlist=document.createElement("li");
//    newlist.innerHTML+=`<h2>07</h2>  <h3>${data.get('name')}</h3><br> <p>   age :7 <br><br> batsman </p>  <a href="statssru.html" class="next"><button>Stats</button></a>`
//     orglist.appendChild(newlist);

   const select =document.querySelector(".list");
   select.insertAdjacentHTML("afterbegin",`<h2>07</h2>  <h3>${data.get('name')}</h3><br> <p>   age :7 <br><br> batsman </p>  <a href="statssru.html" class="next"><button>Stats</button></a>`)
}
// form.addEventListener('submit',done)



// addplayer.addEventListener("click",()=>
// {
//     const orglist=document.querySelector(".list");
//    const newlist=document.createElement("li");
//    newlist.innerHTML+=`<h2>07</h2>  <h3>${playernamevalue}</h3><br> <p>   age :21 <br><br> batsman </p>  <a href="statssru.html" class="next"><button>Stats</button></a>`
//    console.log(playernamevalue);
//     orglist.appendChild(newlist);
   
// })

