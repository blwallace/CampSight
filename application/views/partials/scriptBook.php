<script type="text/javascript">
$( document ).ready(function() {

    var flag = <?= $sites[0]['id'] ?>;

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
       var site = $(this).attr("ref");
       console.log(site);
       $("#site-name-selected").text("Site: "+text);
       $("#site-id-selected").val(site);
    });   

    // $( "#submit-date" ).click(function(event) {
    //    var start = $(startdate).val();
    //    var end = $(enddate).val();
    //    data = {"startdate":start,"enddate":end,"id":flag}
    //     $.ajax({
    //       type: "POST",
    //       url: "/sites/book",
    //       data: data,
    //       // success: success,
    //       // dataType: dataType
    //     });       
    // });   



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