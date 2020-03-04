<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<script type="text/javascript">
$( document ).ready(function() {
  //alert(screen.width);
  //alert(screen.availWidth);
  //alert(screen.height);
  //alert(screen.availHeight);
  $("#myImg").width(screen.availWidth);
  //$("#myImg").height(screen.availHeight);
});
</script>

<body>
  <section id="pdfcontainer">   
      <img src="/assets/img/sunn.jpg" alt="" id="myImg" />          
  </section> 
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
  <script>
    $(document).ready(function(){
        download();
    });    
    function download() {       
        let pdf = 
        /*new jsPDF({
          orientation: 'landscape',
          unit: 'in',
          format: [500, 950]
        });*/        
        new jsPDF('p', 'mm', [148, 360]);       
        let options = {
            pagesplit: false,
            margin: 0,
        };
        //pdf.setDisplayMode({zoom : '5' })
        pdf.addHTML($("#pdfcontainer"), 0, 0, options, () => {
            pdf.save("test.pdf");
        });       
    }
  </script>
</body>
</html>