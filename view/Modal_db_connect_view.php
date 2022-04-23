<html>
    <head>
        <!-- bootstrap 4.5 css -->
        <link rel="stylesheet" href="/my/css/bootstrap.css">
        <link rel="stylesheet" href="/my/css/bootstrap.css.map">
    </head>
    <body>
        <?php
            foreach($list as $row)
            {
        ?>
                <button class="view_data" id="<?php echo($row->no); ?>">상세보기</button>
                <!--view data 버튼을 누르면 Modal_DB_Connect.js로 이동-->
        <?php
            }	
        ?>
        <div id="dataModal" tabindex="-1" class="modal fade" role="dialog" aria-labelledby="exampleModelLabel">  
            <div class="modal-dialog " role="document" style="width:600px; max-width:600px; padding-top:55px;">  
                <div class="modal-content target" style="width:600px; height:800px; overflow:auto; ">  
                    <div class="modal-body" id="employee_detail" style="padding:0; height:750px">
                        
                    </div>  
                </div>  
            </div>  
        </div>
    </body>
</html>
<!-- bootstrap 4.5 js -->
<script src="/my/js/jquery-3.6.0.js"></script>
<script src="/my/js/bootstrap.js"></script>
<script src="/my/js/bootstrap.js.map"></script>
<!-- people_select js -->
<script src="/my/js/Modal_DB_Connect.js"></script>