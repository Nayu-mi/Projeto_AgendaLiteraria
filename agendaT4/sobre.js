//inserir iframe do google maps na div mapa

var mapaDiv = document.getElementById("mapa");
var mapaIframe = document.createElement("iframe");

mapaIframe.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.2836186295817!2d-46.68491282634165!3d-23.558255178801872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce579b10268dab%3A0x2fdb79c4dfeddc35!2sBiblioteca%20Alceu%20Amoroso%20Lima!5e0!3m2!1spt-BR!2sbr!4v1713656199899!5m2!1spt-BR!2sbr";

mapaIframe.width = "600";
mapaIframe.height = "450";
mapaIframe.style.border = "0";
mapaIframe.allowFullscreen = true;

mapaDiv.appendChild(mapaIframe);