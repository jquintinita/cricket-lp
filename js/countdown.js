(function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
  
    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = 2024,
        nextYear = yyyy + 1,
        time = "23:59:59";
        dayMonth = "03/14/",
            targetDate = dayMonth + yyyy +" "+time ;
    
    today = mm + "/" + dd + "/" + yyyy;
    // if (today > birthday) {
    //   birthday = dayMonth + nextYear;
    // }
    //end
    
    const countDown = new Date(targetDate).getTime(),
        x = setInterval(function() {    
  
          const now = new Date().getTime(),
                distance = countDown - now;
  
          document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
  
          //do something later when date is reached
          if (distance < 0) {
            document.getElementById("days").innerText = "0",
                   document.getElementById("hours").innerText = "00",
                   document.getElementById("minutes").innerText = "00",
                   document.getElementById("seconds").innerText = "00";
             clearInterval(x);
           }
          //seconds
        }, 0)
    }());