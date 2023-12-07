const header = document.querySelector(".login")
fetch("login.php")
.then(res => res.text())
.then(data =>{
    header.innerHTML = data
})
