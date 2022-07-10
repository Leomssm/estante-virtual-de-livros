
const cadastroForm = document.getElementById("cad-livro-form");
const msgAlert = document.getElementById("msgAlert");
const msgSucess = document.getElementById("msgAlertSuccessCad");

const cadFormUser = document.getElementById("cad-usuario-form");


if (cadastroForm) {
    
    cadastroForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    
    const dadosForm = new FormData(cadastroForm);
        
    const dados = await fetch("cadastrar.php", {
        method: "POST",
        body: dadosForm 
    });
    

    const resposta = await dados.json();

    // console.log(resposta);

    if(resposta['erro']) {
        msgAlertErroCad.innerHTML = resposta['msg'];
        setTimeout(() => {
            const box = document.getElementById('msgAlertErroCad');
            box.style.display = 'none';
          }, 3000);
    } else {
        cadastroForm.reset();
        msgAlertSuccessCad.innerHTML = resposta['msg'];
        window.location.reload(true);
        setTimeout(() => {
            const box = document.getElementById('msgAlertSuccessCad');
            box.style.display = 'none';
          }, 3000);
    }
});
};


const listarUsuarios = async () => {
    const dados2 = await fetch("listar.php");
    const resposta = await dados2.json();
    const conteudo = document.querySelector(".listar-usuarios");
        if (conteudo) {
            conteudo.innerHTML = resposta['dados'];
        }
    
}


if (cadastroForm) {
    listarUsuarios();
};
 

 if (cadFormUser) {
    
    cadFormUser.addEventListener("submit", async (e) => {
    e.preventDefault();

    const datasForm = new FormData(cadFormUser);

    const datas = await fetch("registro.php", {
        method: "POST",
        body: datasForm
    });

   const resp = await datas.json();

   if(resp['erro']) {
    msgAlertErroCad.innerHTML = resp['msg'];
    setTimeout(() => {
        const box = document.getElementById('msgAlertErroCad');
        box.style.display = 'none';
      }, 4000);
} else {
    cadFormUser.reset();
    msgAlertSuccessCad.innerHTML = resp['msg'];
}
});
 };

 let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
