

window.addEventListener('DOMContentLoaded', () => {


    const icons = document.getElementsByTagName("i");
    
    Array.from(icons).forEach(element => {
        element.onclick = () => {
            window.location.href ="http://localhost:3300/app/controllers/delete.php?id="+element.dataset.id;
            
        }
    });
    
    
})


