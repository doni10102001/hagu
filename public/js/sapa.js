var d = new Date(); 
            var time = d.getHours(); 
            if (time>=0 && time<10){
                document.write("<h2>Selamat pagi,</h2>"); 
            } else if (time>=10 && time<16){
                document.write("<h2>Selamat siang,</h2>"); 
            } else if (time>=16 && time<18){
                document.write("<h2>Selamat sore,</h2>"); 
            } else{
                document.write("<h2>Selamat Malam,</h2>"); 
            }