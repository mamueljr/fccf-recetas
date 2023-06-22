window.addEventListener('DOMContentLoaded', ()=>{
    const search =document.querySelector('#search')
    const tableContainer=document.querySelector('#results tbody')
    const resultsContainer=document.querySelector('#resultsContainer')
    const errorsContainer=document.querySelector('.errors-container')
    let search_criteria=''

    if (search){
        search.addEventListener('input', event=>{
            search_criteria=event.target.value.toUpperCase()
            showResults()
        })
    }

    //enviar peticion usando fetch
    const searchData= async () => {
        let searchData =new FormData()
        searchData.append('search_criteria',search_criteria)

try{
    const response=await fetch('/controlador/search_data.php', {
        method:'POST',
        body: searchData
    })
    return response.json()
} catch (error){
    alert("Hay un error y no se puede proceder en este momento")
    console.log(error)
}
}
//Funcion para mostrar datos
const showResults=()=>{
    searchData()
    .then(dataResults =>{
        console.log(dataResults)
    })
}
})