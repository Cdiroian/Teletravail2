const getUsers = async function () {
    let response = await fetch('javascript/volcan.json')
    if(response.ok) {
        let data = await response.json()
        console.log(data)
    } else {
        console.error('Retour du serveur : ', response.status )
    }
    
}

getUsers()