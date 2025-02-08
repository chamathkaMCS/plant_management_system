<div style="position:absolute;top:122px;right:376px;">
    <input type="text" class="adminAction" id ="live_search" placeholder="Search..">
    <script type="text/javascript">
        $(document).ready(function(){
        $("#live_search").keyup(function(){
            var input = $(this).val();
            //alert(input);
            if(input !=""){
                $.ajax({
                    url:"searchResults.php",
                    method:"POST",
                    data:{input:input},

                    success:function(data){
                        $("#searchresult").html(data);
                    }
                })
            }else{
                $.ajax({
                    url:"searchResults.php",
                    method:"POST",
                    data:{input:input},

                    success:function(data){
                        $("#searchresult").html(data);
                    }
                })
            }
            });
        });
    </script>
</div>
