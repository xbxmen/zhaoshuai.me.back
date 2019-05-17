<footer class="mod-footer" role="contentinfo" id="footer_in">
    <p class="f_bq">
        <?php if ($word_t2 != "") {
            echo $word_t2;
        } else {
            echo 'Copyright';
        } ?> &copy;
        <?php echo date("Y") . " ";
        bloginfo('name');
        echo " Powered by <a class=\"banquan\" target=\"_blank\" href=\"http://www.2zzt.com\">WordPress</a>"; ?>
    </p>

    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cspan id='cnzz_stat_icon_1260972202'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260972202%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));
    </script>
</footer>
<?php wp_footer(); ?>
</body></html>