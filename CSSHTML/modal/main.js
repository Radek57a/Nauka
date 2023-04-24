const actionBtn = document.querySelector('.action-btn');              

const modal = (body) =>{
    return `<div tabindex="10" index class="modal">
            <p class="modal-title ${body.type}">
                <i class="modal-title-icon"
                data-feather="${body.modal_icon}"></i>
                ${body.title}
            </p>
            <p class="modal-description">
                ${body.description}
            </p>
            <div class="modal-buttons">
                <button class="modal-accept modal-action-btn">${body.accept_btn}</button>
                <button class="modal-decline modal-action-btn">${body.decline_btn}</button>
            </div>
            <button class="modal-close-icon"><i data-feather="x"></i></button>
        </div>`
}

const createModal = (value)=>{

    const modalContainer = document.createElement('div');
    modalContainer.className = 'modal-container';
    modalContainer.innerHTML= modal(value);
    document.body.appendChild(modalContainer);
    feather.replace();

    const closeIcon = document.querySelector(".modal-close-icon");
    closeIcon.addEventListener("click", ()=>{
        const modal = document.querySelector(".modal-container");
        modal.remove();
        document.body.style.overflow = "auto";
    });

    const closeButtons = document.querySelectorAll(".modal-action-btn");
    closeButtons.forEach(btn => btn.addEventListener("click",()=>{
        const modal = document.querySelector(".modal-container");
        modal.remove();
        document.body.style.overflow = "auto";
    }));

    const modalActive = document.querySelector(".modal");
    modalActive.focus();
    modalActive.addEventListener('keydown',(e)=>{
        if(e.key ==='Escape'){
            const modal = document.querySelector(".modal-container");
            modal.remove();
            document.body.style.overflow = "auto";
        }
    });

    const modalActiveContainer = document.querySelector(".modal-container");
    modalActiveContainer.addEventListener("click",(e)=>{
        if(e.target.classList.contains('modal-container')) {
            e.target.remove();
        }
    });



    document.body.style.overflow = "hidden";
};




const showModal = () =>{

    createModal({
        modal_icon: "alert-triangle",
        type: "warning",
        title: "Lorem ipsun dolor title",
        description:"Lorem ipsun super dlugi opis wyskakujacego okienka",
        accept_btn: "Zaakceptuj",
        decline_btn: "Anuluj",
        });

   
};


actionBtn.addEventListener("click", showModal);

      const actionTwoBtn = document
    .querySelector(".action-two-btn")
    .addEventListener("click",()=> {
        createModal({
            modal_icon: "info",
            type: "",
            title: "Drugi przycisk tytul",
            description:"Lorem Lorem ipsun super dlugi opis wyskakujacego okienka",
            accept_btn: "Zaakceptuj",
            decline_btn: "Anuluj",
            });

    }); 

    const actionThreeBtn = document
    .querySelector(".action-three-btn")
    .addEventListener("click",()=> {
        createModal({
            modal_icon: "alert-circle",
            type: "danger",
            title: "Trzeci przycisk tytul",
            description:"Monitor ipsun super dlugi opis wyskakujacego okienka",
            accept_btn: "Zaakceptuj",
            decline_btn: "Anuluj",
            });

    }); 
