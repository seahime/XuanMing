<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


<?php $this->footer(); ?>

    <section id="footer">
        <div class="body_container">
            <div class="foot">
                <div class="foot-left">
                    &copy;
                    <a href="/" rel="nofollow">seaHi</a>
                    <span>. Powered by</span>
                    <a rel="nofollow" target="_blank" href="//typecho.org">Typecho</a>
                    <span class="foot-icp hidden-if-sm">. 这里将来显示备案号</span>  <!-- TODO -->
                </div>
                <div class="foot-right">
                    <a rel="nofollow" target="_blank" href="/links">Links</a> .
                    <a rel="nofollow" target="_blank" href="/feed">Feed</a>
                </div>
            </div>
        </div>

    </section>

    <section class="setting-tools">
        <a class="back2top" style="display:none;" onclick="backToTop()" title="返回顶部"><i class="antd-top"></i><span class="tooltiptext">返回顶部</span></a>
        <a class="home" href="javascript:;" title="返回主页"><i class="antd-home"></i><span class="tooltiptext">返回主页</span></a>
        <a class="socenter hidden-if-lg" href="javascript:;" title="单双栏切换"><i class="antd-center"></i><span class="tooltiptext">单双栏切换</span></a>
        <script type="text/javascript">document.querySelector(".socenter").addEventListener("click",
                function() {
                    var post = document.querySelector(".posts");
                    var center = document.querySelector(".posts").querySelectorAll(".pure-u-1");
                    if (post.getAttribute("page") == "one") {
                        localStorage.yone_post_page = 'two';
                        post.setAttribute("page", "two");
                        center[0].classList.remove("post-center");
                        center[1].classList.remove("post-sidebar");
                        center[2].classList.remove("post-center");
                    } else {
                        localStorage.yone_post_page = 'one';
                        post.setAttribute("page", "one");
                        center[0].classList.add("post-center");
                        center[1].classList.add("post-sidebar");
                        center[2].classList.add("post-center");
                    }
                });</script>
        <a class="sosearch search-form-input" href="javascript:;" title="搜索"><i class="antd-search"></i><span class="tooltiptext">搜索</span></a>
        <a class="socolor" href="javascript:;" title="切换皮肤"><i class="antd-skin"></i><span class="tooltiptext">切换皮肤</span></a>
    </section>
</div> <!-- end container -->

<script src="https://seahi.me/usr/themes/XuanMing/static/baguetteBox.js"></script>
<script src="https://seahi.me/usr/themes/XuanMing/static/script.js"></script>

<script> window.addEventListener('load', function() { baguetteBox.run('body',{ overlayBackgroundColor:'hsla(0,0%,100%,.92)', noScrollbars: true }) }); </script>
<script>$(".aim,.cp-aim,.toc a").click(function() {
        var href = $(this).attr("href");
        var pos = $(href).offset().top - 76;
        $("html,body").animate({
                scrollTop: pos
            },
            1000);
        return false;
    });</script>

<?php if ($this->options->statisticCode): ?>
    <!-- 自定义统计代码 -->
    <?php echo $this->options->statisticCode() ?>
<?php endif; ?>

</body>
</html>