// test button
$(document).ready(function(){
       $('#enviar').click(function () {
                    $.get("ip.php",
                        {
                        'sttrinca': $('#sttrinca').val(),
                        'ndtrinca': $('#ndtrinca').val(),
                        'rdtrinca': $('#rdtrinca').val(),
                        'thtrinca': $('#thtrinca').val(),
                        'masc':     $('#masc').val()
                      },
                      function(data){
                     $(".result").html(data);
                    });

                     $(".result").css("background-color","white")
                     $(".result").css("whidth","auto")
                     $(".result").css("margin","40px")
                     $(".result").css("border-radius","20px")
                     $(".result").css("border","#771a0b 10px solid")
                     $(".result").css("color","black")
        

                    });


                    $("#test").click(function(){
                      alert("tudo em ordem com o jquery!")
                    });


});


// <input type="text" name="sttrinca" id="sttrinca" placeholder="1ª trinca">
//
// <input type="text" name="ndtrinca" id="ndtrinca" placeholder="2ª trinca">
//
// <input type="text" name="rdtrinca" id="rdtrinca" placeholder="3ª trinca">
//
// <input type="text" name="thtrinca" id="thtrinca" placeholder="4ª trinca">
