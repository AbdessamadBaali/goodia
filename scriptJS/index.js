const types_mat = [
    "souris","clavier","Clavier/Souris","casque","Webcam","Haut-parleur",
    "Ecran","Imprimante","cartable","sac a dos","usb","pc Portable","Pc Bureau","Pc All-in-One"
    ,"Chargeur","Disque dur Externe","Disque dur interne","Lecteur Carte mémoire",
    "Switch","cle wifi","Chargeur Type-c","Chargeur ios","Chargeur PC","Support Pc ",
    "Tapis de Souris","Bluetooth speaker","cable","toner"
]

let list = document.querySelector("#list-mat");
console.log(list);

let list_content = "<option value='' >-- Veuillez choisir une option --</option>";
let openOPt = "<option class='text-capitalize' value='";
let closeOPt = "</option>";
for (let index = 0; index < types_mat.length; index++) {
 
    list_content = list_content + openOPt + types_mat[index] + "'>" +
    types_mat[index] + closeOPt;  
}

list.innerHTML = list_content;