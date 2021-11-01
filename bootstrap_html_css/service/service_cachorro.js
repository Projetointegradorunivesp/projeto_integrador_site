const criaNovaLinha = (nome, raca, sexo, idade, cor, descricao, foto1) => {
    const linhaNovoCachorro = document.createElement('ul')
    const conteudo = `
    <li>${nome}</li>
    <li>${raca}</li> 
    <li>${sexo}</li> 
    <li>${idade}</li> 
    <li>${cor}</li>     
    <li>${descricao}</li> 
    <li><img src="${foto1}"></li>    
                    
	<div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                     <img class="card-img-top" src="${foto1}" alt="..." />
                         <div class="card-body p-4">
                             <div class="text-center">
                             <h5 class="fw-bolder">${nome}</h5>
                             <li>${raca}</li> 
    						 <li>${sexo}</li> 
    						 <li>${idade}</li> 
    						 <li>${cor}</li>     
    						 <li>${descricao}</li>
                             </div>
                         </div>
                         <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                             <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                         </div>
                </div>
           </div>
       </div>
     </div>
					`
    linhaNovoCachorro.innerHTML = conteudo
    return linhaNovoCachorro
}

const lista = document.querySelector('[data-lista]')

const listaCachorro = () => {
    return fetch( `http://127.0.0.1:8000/cachorros/`)
    .then( resposta => {
        return resposta.json()
    })
}

listaCachorro()
.then(data => {
    data.forEach(elemento => {
    lista.appendChild(criaNovaLinha(elemento.nome, elemento.raca, elemento.sexo, elemento.idade, elemento.cor, elemento.descricao, elemento.foto1))
})})