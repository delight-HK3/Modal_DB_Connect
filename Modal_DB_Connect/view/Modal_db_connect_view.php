<html>
    <head>
        <!-- bootstrap 4.5 css -->
        <link rel="stylesheet" href="/css/bootstrap.css">
        <!-- people_select css -->
        <link rel="stylesheet" href="/css/people_select.css">
        <!-- bootstrap 4.5 js -->
        <script src="/js/jquery-3.6.0.js"></script>
        <script src="/js/bootstrap.js"></script>
        <!-- people_select js -->
        <script src="/js/Modal_DB_Connect.js"></script>
    </head>
    <body>
        <?php
            foreach($list as $row)
            {
        ?>
                <button class="view_data" id="<?php echo($row->(기본키 컬럼이름)); ?>">상세보기</button>
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