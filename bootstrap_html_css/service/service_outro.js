const criaNovaLinha = (nome, raca, sexo, idade, cor, descricao, foto1) => {
    const linhaNovoOutro = document.createElement('ul')
    const conteudo = `
    <li>${nome}</li>
    <li>${raca}</li> 
    <li>${sexo}</li> 
    <li>${idade}</li> 
    <li>${cor}</li>     
    <li>${descricao}</li> 
    <li><img src="${foto1}"></li>    
                    `
    linhaNovoOutro.innerHTML = conteudo
    return linhaNovoOutro
}

const lista = document.querySelector('[data-lista]')

const listaOutro = () => {
    return fetch( `http://127.0.0.1:8000/outros/`)
    .then( resposta => {
        return resposta.json()
    })
}

listaOutro()
.then(data => {
    data.forEach(elemento => {
    lista.appendChild(criaNovaLinha(elemento.nome, elemento.raca, elemento.sexo, elemento.idade, elemento.cor, elemento.descricao, elemento.foto1))
})})