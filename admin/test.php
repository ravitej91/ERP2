<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
     <script type="text/javascript">     
        function PrintDiv() {    
     var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open(document.location.href,'index.php', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()"></html>');
            popupWin.document.close();
                }
     </script>
   </head>
        <body >
                other contents
            <div id="divToPrint" >
               <div style="width:200px;height:300px;background-color:teal;">
                  This is the div to print
                </div>
            </div>
            <div>
                <input type="button" value="print" onclick="PrintDiv();" />
            </div>
        </body> 
</html>
