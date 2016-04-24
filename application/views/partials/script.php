    <script type="text/javascript">
        $(function() {

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