/**
 * Created by Administrator on 2015/7/31.
 */
jQuery(document).ready(function () {
    //高亮当前选中的导航
    var btu = $("#btn_reset");
    btu.click(btn_reset);

    function btn_reset(){
        var list = $(".tab-content").find("select");
        for (var i = 0; i < list.length; i++) {
            list.eq(i).get(0).selectedIndex=0;
        }
        $("#input_search").val("");
    }
});