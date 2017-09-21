<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task 9</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    </head>
    <body>

        <div class="alert alert-success" role="alert">
           <?php
           $options = [
                   0 =>'text_text',
                   1 =>'text_text1',
                   2 =>'text_text2',
                   3 =>'text_text3',
           ];
           echo HtmlHelper::Select(
                   "test",
                   $options,
                   ["id"=>"ttt", "class"=>"form-control", "style"=>"width: 250px;"],
                   true
           );?>
        </div>

        <div class="alert alert-success" role="alert">
            <?php
            $thRows = [
                ['td1','td2','td3','td4']
            ];
            $trRows = [
                ['td1','td2','td3','td4'],
                ['td1','td2','td3','td4'],
                ['td1','td2','td3','td4'],
            ];
            echo HtmlHelper::Table($thRows, $trRows, ["class"=>"table table-bordered"]);
            ?>
        </div>

        <div class="alert alert-success" role="alert">
            <?php
            $options = [
                0 =>'text_text1',
                1 =>'text_text2',
                2 =>'text_text3',
                3 =>'text_text4',
            ];
            echo HtmlHelper::ItemList(
                    'ul',
                    'disc',
                    $options,
                    ['style' => 'font-size:18px; color: #555;']

                );
            ?>
        </div>

        <div class="alert alert-success" role="alert">
            <?php

         $options = [
             [
                 'dt'=>[
                         'content'=>'text_dt1',
                         'htmlOptions'=>['style' => 'font-size:18px; color: #555;'],
                 ],
                 'dd'=>[
                        'content'=>'text_dt1',
                        'htmlOptions'=>['style' => 'font-size:14px; color: #f00;'],
                 ]
            ],
             [
                 'dt'=>[
                     'content'=>'text_dt2',
                     'htmlOptions'=>['style' => 'font-size:18px; color: #555;'],
                 ],
                 'dd'=>[
                     'content'=>'text_dt2',
                     'htmlOptions'=>['style' => 'font-size:14px; color: #f00;'],
                 ]
             ],
             [
                 'dt'=>[
                     'content'=>'text_dt3',
                     'htmlOptions'=>['style' => 'font-size:18px; color: #555;'],
                 ],
                 'dd'=>[
                     'content'=>'text_dt3',
                     'htmlOptions'=>['style' => 'font-size:14px; color: #f00;'],
                 ]
             ]
         ] ;
            echo HtmlHelper::listOfDefinitions(
                $options,
                ["id"=>"dldtdd", "class"=>"list", "style"=>"font-size:18px;"]
            );
            ?>

        </div>
            <div class="alert alert-success" role="alert">
                <?php
                $options = [
                    [
                    'input'=>    [
                        'name'=>'gender',
                        'value'=>'male',
                        'text'=>'Male',
                        'checked'=>'true'
                        ]
                    ],
                    [
                    'input'=>    [
                        'name'=>'gender',
                        'value'=>'female',
                        'text'=>'Female',
                        ]
                    ],
                    [
                    'input'=>    [
                        'name'=>'gender',
                        'value'=>'other',
                        'text'=>'Other',
                        'htmlOptions'=>["style"=>'color: #0DFF92;','id'=> "option"]
                        ]
                    ]
                ];
                //var_dump($options);
                echo HtmlHelper::radioButton(
                    $options
                );
                ?>
            </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
