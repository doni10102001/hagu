var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var year = date.getFullYear();
 
document.getElementById("date").innerHTML =" " + day + " " + months[month] + " " + year;