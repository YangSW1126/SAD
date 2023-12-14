var SubMenu = document.getElementById("SubMenu1");

function switchMenu(){
    if( SubMenu.style.display == 'none' ){ 
        SubMenu.style.display = 'block';
  }
}

function hideMenu(){
  if( SubMenu.style.display == 'block' ){ 
    SubMenu.style.display = 'none';
}
}