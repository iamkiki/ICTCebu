    </div>
    
    <hr>
    <footer>
        <p>&#169; <?php echo date('Y', time()); ?> ictcebu.com | Email us at <a href="/contact">info@ictcebu.com</a></p>
    </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/common.js"></script>
    <script src="/js/bootstrap-transition.js"></script>
    <script src="/js/bootstrap-alert.js"></script>
    <script src="/js/bootstrap-modal.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>
    <script src="/js/bootstrap-scrollspy.js"></script>
    <script src="/js/bootstrap-tab.js"></script>
    <script src="/js/bootstrap-tooltip.js"></script>
    <script src="/js/bootstrap-popover.js"></script>
    <script src="/js/bootstrap-button.js"></script>
    <script src="/js/bootstrap-collapse.js"></script>
    <script src="/js/bootstrap-carousel.js"></script>
    <script src="/js/bootstrap-typeahead.js"></script>

    <?php
    if (isset($a_js))
    {
        foreach( $a_js as $s_jsname )
        {
            echo '<script type="text/javascript" src="/js/',$s_jsname,'.js" ></script>',"\n\t";
        }
    }
    ?>

  </body>
</html>