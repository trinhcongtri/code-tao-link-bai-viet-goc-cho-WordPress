<!--Copyright for WordPress-->
<script type="text/javascript">
    function addLink() {
        var body_element = document.getElementsByTagName('body')[0];
        var selection;
        selection = window.getSelection();
        var pagelink = "<br /><br /> Nguồn bài viết: <a href='"+document.location.href+"'>"+document.location.href+"</a><br />"; // change this if you want
        var copytext = selection + pagelink;
        var newdiv = document.createElement('div');
        body_element.appendChild(newdiv);
        newdiv.innerHTML = copytext;
        selection.selectAllChildren(newdiv);
        window.setTimeout(function() {
            body_element.removeChild(newdiv);
        },0);
    }
    document.oncopy = addLink;
</script>
<!--End Copyright for WordPress-->
