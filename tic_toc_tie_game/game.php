<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Toc Toe</title>
    <link  href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">

    <!-- <script typ="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.mins.js"></script> -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="style.css">
</head>
<body>

         <h1>Tic Toc Toe Game.!</h1>   
        <table>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <script src="jquery/jquery-3.6.1.js"></script>

        <script>
            $(document).ready(function(){
                // alert("ok");
            
                var move=1;
                var play=true;

                $('table tr td').click(function(){
                    // alert("td")

                    if($(this).text()== '' && play)
                    {
                        if(move%2==1)
                        {
                            $(this).append("X");
                            $(this).css('color','#61892f')
                        }else{
                            $(this).append('O');
                            $(this).css('color','#e85a4f')
                        }
                          move++;
                        if(findWinner() != -1 && findWinner()!="")
                        {
                            if(findWinner()=="X")
                            {
                                $("body").append("<div class='winner'><span>Winner </span> X </div>");
                                $("body").append('<button onclick="location.reload()">Play Again</button>');
                                $('.winner').css('background-color','#61892f');
                                $("button").css('color','#61892f');
                            }else{
                                $("body").append("<div class='winner'><span>Winner </span> O </div>");
                                $("body").append("<button onclick='location.reload()'> Play Again</button>");
                                $('.winner').css('background-color','#e85a4f');
                                $("button").css('color','#e85a4f');

                            }
                            play = false;
                        }  


                    }
                })


            });


         function findWinner()
         {
            var sp1 = $("table tr:nth-child(1) td:nth-child(1)").text();
            var sp2 = $("table tr:nth-child(1) td:nth-child(2)").text();
            var sp3 = $("table tr:nth-child(1) td:nth-child(3)").text();
            var sp4 = $("table tr:nth-child(2) td:nth-child(1)").text();
            var sp5 = $("table tr:nth-child(2) td:nth-child(2)").text();
            var sp6 = $("table tr:nth-child(2) td:nth-child(3)").text();
            var sp7 = $("table tr:nth-child(3) td:nth-child(1)").text();
            var sp8 = $("table tr:nth-child(3) td:nth-child(2)").text();
            var sp9 = $("table tr:nth-child(3) td:nth-child(3)").text();
        

            //Check Rows 
            if((sp1 == sp2) && (sp2 == sp3))
            {
                return sp3;

            }else if((sp4 == sp5) && (sp5 == sp6)){
                return sp6;
            }else if((sp7 == sp8) && (sp8 == sp9)){
                
                return sp9;

            }
            //check colunms     
            else if((sp1 == sp4) && (sp4 == sp7)){
                
                return sp7;

            }else if((sp2 == sp5) && (sp5 == sp8)){
                
                return sp8;

            }else if((sp3 == sp6) && (sp6 == sp9))
            {
                
                return sp9;

            }

            //check diagonals
            else if((sp1 == sp5) && (sp5 == sp9))
            {
                return sp9;

            }else if((sp3 == sp5) && (sp5 == sp7)){
                return sp7;
            }

            //no winner
            return -1;
            alert("no Winner")

        }   


        </script>

</body>
</html>