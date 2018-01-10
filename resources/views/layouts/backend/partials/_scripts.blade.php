<!-- Classie -->
    <script src="js/classie.js"></script>
    <script>
        var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
            showLeftPush = document.getElementById( 'showLeftPush' ),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle( this, 'active' );
            classie.toggle( body, 'cbp-spmenu-push-toright' );
            classie.toggle( menuLeft, 'cbp-spmenu-open' );
            disableOther( 'showLeftPush' );
        };

        function disableOther( button ) {
            if( button !== 'showLeftPush' ) {
                classie.toggle( showLeftPush, 'disabled' );
            }
        }
    </script>
    <!-- Bootstrap Core JavaScript --> 

    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/dev-loaders.js"></script>
    <script type="text/javascript" src="js/dev-layout-default.js"></script>
    <script type="text/javascript" src="js/jquery.marquee.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.jqcandlestick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jqcandlestick.css" />

    <!--max-plugin-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--//max-plugin-->

    <!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->