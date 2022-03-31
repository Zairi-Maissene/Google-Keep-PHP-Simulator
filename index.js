 const button= document.querySelector(".Edit-btn");
 const notediv=document.querySelectorAll(".container");
 const modalTitle=document.querySelector(".modal-title");
 const modalBody=document.querySelector(".modal-body");
 var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
for(let i=0;i<notediv.length;i++)
{notediv[i].addEventListener("click",(e)=>{ 
     myModal.show(notediv[i]);
   
 
    })


    
}
const myModalEl = document.getElementById('myModal')

myModalEl.addEventListener("shown.bs.modal",(e)=>{
    modalTitle.innerText=e.relatedTarget.firstElementChild.firstElementChild.innerText
    e.relatedTarget.childNodes[2].classList.remove('note'); 
    modalBody.classList.add('full-note')
    modalBody.innerText=e.relatedTarget.childNodes[2].innerText;
    e.relatedTarget.childNodes[2].classList.add('note');

})



  


 