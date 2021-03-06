<?php include "../../assets/template/sample_header.html";?>
<div class="area_directions">
    <div class="title">文档说明</div>
    <ul>
        <li>模块来源：<a href="http://192.168.1.158:700/order/ticket_index">m.cncn.net门票列表页</a></li>
        <li>引入模块后，只需要全局FastClick.attach(document.body);命名一下。就能绑定默认的click事件了。可以很顺畅的过渡旧代码。</li>
        <li>无毒副作用</li>
    </ul>
</div>
<div class="area_code">
    <div class="title">代码结构</div>
    <pre class="brush: js"> 
    <script src="<{$smarty.const.B2B_URL}>static/js/mobile/fastclick.min.js"></script> 

    <script>
    $(function() {
        FastClick.attach(document.body);
    });
    </script>
    </pre> 
</div>
<div class="area_demo">
    <div class="title">模块展示</div>
    <div class="content none">
        无
    </div>
</div>
<div class="area_path">
    <div class="title">模块位置</div>
    <div class="mt10">
        b2b/static/js/mobile/fastclick.min.js<br />
        <a href="http://192.168.1.158:701/static/js/mobile/fastclick.min.js">链接下载</a>
    </div>
</div>
<div class="area_path">
    <div class="title">版本记录</div>
    <div class="mt10">
        外部插件，不需要更新 <a href="https://github.com/ftlabs/fastclick">https://github.com/ftlabs/fastclick</a>
    </div>
</div>
<?php include "../../assets/template/sample_footer.html";?>