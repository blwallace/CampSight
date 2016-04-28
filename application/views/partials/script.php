<script type="text/javascript">
$( document ).ready(function() {

    $(function() {
        $( "#startdate" ).datepicker({
            dateFormat: "D mm/dd/yy",
            }); 
        });
    $(function() {
        $( "#enddate" ).datepicker({
            dateFormat: "D mm/dd/yy", 
        });
      });   

    $( ".list-group-item" ).click(function() {
       var text = $(this).text();
       $("#site-name-selected").text("Site: "+text);
       console.log($(this).attr("ref"));
    });   

    $( "#submit-date" ).click(function(event) {
        console.log("TEST")
        event.preventDefault();
       var start = $(startdate).val();
       var end = $(enddate).val();
       console.log(start + end);
       data = {"start":start,"end":end,}

        $.ajax({
          type: "POST",
          url: "/sites/book",
          data: data,
          success: success,
          dataType: dataType
        });       
    });   



    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });    
});    

</script>