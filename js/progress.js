

        $(".step").click(function () {
            $(this).addClass("active").prevAll().addClass("active");
            $(this).nextAll().removeClass("active");
        });


        $(".step01").click(function () {
            $("#line-progress").css("width", "3%");
            $(".discovery").addClass("active").siblings().removeClass("active");
        });

        $(".button01").click(function(){           
            $(".step02").addClass("active");
            $("#line-progress").css("width", "25%");
            $(".strategy").addClass("active").siblings().removeClass("active");
        });


        $(".step02").click(function () {
            $("#line-progress").css("width", "25%");
            $(".strategy").addClass("active").siblings().removeClass("active");
        });
        
        $(".button02").click(function(){           
            $(".step03").addClass("active");
            $("#line-progress").css("width", "50%");
            $(".creative").addClass("active").siblings().removeClass("active");
        });
        

        $(".step03").click(function () {
            $("#line-progress").css("width", "50%");
            $(".creative").addClass("active").siblings().removeClass("active");
        });
    
        $(".button03").click(function(){           
            $(".step04").addClass("active");
            $("#line-progress").css("width", "75%");
            $(".production").addClass("active").siblings().removeClass("active");
        });

        $(".step04").click(function () {
            $("#line-progress").css("width", "75%");
            $(".production").addClass("active").siblings().removeClass("active");
        });

        $(".button04").click(function(){           
            $(".step05").addClass("active");
            $("#line-progress").css("width", "100%");
            $(".analysis").addClass("active").siblings().removeClass("active");
        });
      
        $(".step05").click(function () {
            $("#line-progress").css("width", "100%");
            $(".analysis").addClass("active").siblings().removeClass("active");
        });


        const startingMinutes = 5;
        let time = startingMinutes * 60;
        const countdownEl = document.getElementById('countdown');
        
        const starting = 25;
        let timeTwo = starting * 60;
        const countdownElTwo = document.getElementById('time-left');

        setInterval(updateCountdown, 1000);

        function updateCountdown() {
            const minutes = Math.floor(time/60);
            let seconds = time % 60;

            seconds = seconds < 10 ? '0' + seconds : seconds;

            countdownEl.innerHTML = `${minutes}: ${seconds}`;
            time--;
            time = time < 0 ? 0 : time; 

            if(time === 0){

                countdownEl.innerHTML = "COMPLETE";
                
            }
        
        }

       setInterval(updateCountdownTwo, 1000);

        function updateCountdownTwo() {
            const minute = Math.floor(timeTwo/60);
            let second = timeTwo % 60;

            second = second < 10 ? '0' + second : second;

            countdownElTwo.innerHTML = `${minute}: ${second}`;
            timeTwo--;
            timeTwo = timeTwo < 0 ? 0 : timeTwo; 

            if(timeTwo === 0){

                countdownElTwo.innerHTML = "COMPLETE";
                
            }
        
        }