<?php
/**
 * Created by PhpStorm.
 * User: Sajjad
 * Date: 20-Oct-16
 * Time: 2:37 AM
 */

?>

<footer class="site-footer">
    <div class="text-right">
        <p><strong>Copyright &copy; <?php echo date("Y") ?> <a href="http://webdesignernet.com" target="_blank">Sajjad Hossain</a>.</strong> All rights reserved.</p>
    </div>
</footer>
<script src="{{URL::asset('dashboard/js/core/plugins.js')}}"></script>
<script src="{{URL::asset('dashboard/js/dashboard/dashboard.js')}}"></script>
@yield('footerscript')
</body>
</html>


