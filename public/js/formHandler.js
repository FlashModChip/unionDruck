
    $(document).ready(function () {



        // #id .class
        $('#box p').click(function () {
            $("#box p").removeClass("green");
            $(this).addClass("green").parent().removeClass().addClass("boxColor-" + $("#box p").index(this));
        });


        $("input[name=formata]").change(function () {

            $('#seitenZahlenDOM').empty();
            var i=2;
            console.log("Wert geändert in: ", this.value);
            if(this.value=="berliner"){
                 i=1;
            }

            for (i; i < 9; i++) {
                $('#seitenZahlenDOM').append('<label class="radio" id="templateSeitenzahl"><input type="radio" name="seitenzahl" value="' + 4 * i + '">\n' +
                    '<span class="checkmark"></span>\n' +
                    '<span>' + 4 * i + '</span>\n' +
                    '</label>');
            }
        });

        $("#seitenZahlenDOM").on("change","input[name=seitenzahl]", function () {
            console.log("Wert geändert in: ", this.value);
            var seitenZahl = this.value;

            $('#seitenFarben p').empty();
            $('.firstCol').empty();
            $('.secondCol').empty();
            seitenZahl++;

            for (var i=1; i < seitenZahl; i++) {
                if (i < (seitenZahl / 2)) {
                    $('.firstCol').append('<div class="row"> <label for="seite1">S. ' + i +
                        ' :</label> <input type="text" name="seite[' + i +
                        ']" size="10" maxlength="10" value="black" required="required"/> </div>');
                } else {
                    $('.secondCol').append('<div class="row"> <label for="seite1">S. ' + i +
                        ' :</label> <input type="text" name="seite[' + i +
                        ']" size="10" maxlength="10" value="black" required="required"/> </div>');
                }
            }
        });

        $("input[name=farbenPreset]").change(function () {
            if(this.value=="cmyk"){
                $(".row input").val('CMYK');
            } else {
                $(".row input").val('black');
            }
        });

    });


// //  CSS-Class Zuweisung mit JavaScript
//
//     window.onload = function() {
//         var elements = document.getElementById("box").getElementsByTagName("p");
//         for (var i=0; i<elements.length; i++) {
//             if (elements[i].firstChild.data == "Zweiter Absatz") {
//                 elements[i].className = "newClass";
//             }
//         }
//     }
//
//
// //   CSS-Class Zuweisung mit jQuery
//
//     $(document).ready(function() {
//         $("#box p:contains('Zweiter Absatz')").addClass("newClass");
//     })

