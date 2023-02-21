url = window.location['href'];
console.log(url);
addEventListener('load', (event) => {
    switch(url){
        case 'http://localhost/PST/inicio.php':
            document.getElementById('inicio').classList.add('active');

            break;
        case 'http://localhost/PST/usuarios.php':
            document.getElementById('usuarios').classList.add('active');
            break;
        case '':
            
            break;
        case '':
            
            break;
        case '':
            
            break;
        case '':
            
            break;
        case '':
            
            break;
    }
});