196
a:4:{s:8:"template";a:1:{s:74:"/Users/daifuye/ThinkUp/webapp/plugins/twitter/view/twitter.inline.view.tpl";b:1;}s:9:"timestamp";i:1282639943;s:7:"expires";i:1282640243;s:13:"cache_serials";a:0:{}}<div class="">
  </div>
      <div class="ui-state-highlight ui-corner-all" style="margin: 20px 0px; padding: .5em 0.7em;"> 
    <p>
      <span class="ui-icon ui-icon-info" style="float: left; margin:.3em 0.3em 0 0;"></span>
      No tweets to display.
    </p>
  </div>






 








<script type="text/javascript" src="/thinkup/assets/js/linkify.js"></script>

<script type="text/javascript">
  
  $(function() {
    // Begin reply assignment actions.
    $(".button").click(function() {
      var element = $(this);
      var Id = element.attr("id");
      var oid = Id;
      var pid = $("select#pid" + Id + " option:selected").val();
      var u = 'HugeIdea';
      var t = 'inline.view.tpl';
      var ck = 'HugeIdea-daifu.ye@gmail.com-tweets-convo';
      var dataString = 'u=' + u + '&pid=' + pid + '&oid[]=' + oid + '&t=' + t + '&ck=' + ck;
      $.ajax({
        type: "GET",
        url: "/thinkup/post/mark-parent.php",
        data: dataString,
        success: function() {
          $('#div' + Id).html("<div class='success' id='message" + Id + "'></div>");
          $('#message' + Id).html("<p>Saved!</p>").hide().fadeIn(1500, function() {
            $('#message'+Id);  
          });
        }
      });
      return false;
    });
  });
  
</script>