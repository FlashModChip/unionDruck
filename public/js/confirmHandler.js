
    $(document).ready(function () {
        $( ".button.submitButton" ).click(function(event) {
            if(confirm("Anfrage senden?")){
                if(confirm("Möchten Sie ein eine Kopie der Anfrage downloaden?")){
                    popupWindow('http://uniondruck.test/generate-pdf', 'AnfragePDF');
                }
                $( ".button.submitButton" ).attr('href', 'sendeAnfrage');
            }
            else{
                event.preventDefault();
                // return false;
            }
        });

    });

    function popupWindow(url,winName) {
        newWindow = window.open(url,winName,'height=200,width=150');
        if (window.focus) {
            newWindow.focus();
        }
        return false;
    }


