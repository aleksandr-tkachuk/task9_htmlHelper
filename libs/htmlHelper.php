<?php

class HtmlHelper {

    public static function Select($name, $options, $htmlOptions = [], $multiple = false){

        $template = "<select name='{name}' {multiple} {htmlOptions}>{options}</select>";
        $select = str_replace("{name}", $name, $template);

        if($multiple==true){
            $select = str_replace("{multiple}", "multiple", $select);
        }else{
            $select = str_replace("{multiple}", "", $select);
        }
        $option = "";
        foreach ($options as $key=>$value){
              $option .= "<option value=".$key.">".$value."</option>";
        }
        $select = str_replace("{options}", $option, $select);

        $htmlOpt = '';
        foreach ($htmlOptions as $key=>$value){
            $htmlOpt .= $key.' = "'.$value.'"';
        }
        $select = str_replace("{htmlOptions}", $htmlOpt, $select);
        return $select;
    }

    public static function Table($thRows, $trRows,$htmlOptions){

        $template = "<table {htmlOptions}>{tableContent}</table>";
        $tableContent = "";
        $htmlOpt = '';
        foreach ($htmlOptions as $key=>$value){
            $htmlOpt .= $key.' = "'.$value.'"';
        }
        $table = str_replace("{htmlOptions}", $htmlOpt, $template);
        foreach ($thRows as $key=>$value){
            $tableContent .= "<tr>";
            foreach ($value as $k=>$v){
                $tableContent .="<th>".$v."</th>";
            }
            $tableContent .= "</tr>";
        }

        foreach ($trRows as $key=>$value){
            $tableContent .= "<tr>";
            foreach ($value as $k=>$v){
                $tableContent .="<td>".$v."</td>";
            }
            $tableContent .= "</tr>";
        }
        $table = str_replace("{tableContent}",$tableContent,$table) ;
        return $table;
    }

    public static function ItemList($ulOl,$type,$options, $htmlOptions){

        $template = "<{ul_ol} {htmlOptions}>{items}</{ul_ol}>";

        $htmlOpt = '';
        foreach ($htmlOptions as $key=>$value){
            $htmlOpt .= $key.' = "'.$value.'"';
        }
        $template = str_replace("{htmlOptions}", $htmlOpt, $template);

        $itemList = str_replace("{ul_ol}", $ulOl, $template);
        $ulType = " type=".$type;
        $itemList = str_replace("{type}", $ulType, $itemList);
        $htmlOpt = '';
        foreach ($options as $opVal) {
                $htmlOpt .= "<li>$opVal</li>";
        }
        $itemList = str_replace("{items}", $htmlOpt, $itemList);
        return $itemList;
    }

    public static function listOfDefinitions($option,$htmlOptions){

        $template = "<dl {htmlOptions}>{Content}</dl>";
        $htmlOpt = '';
        foreach ($htmlOptions as $key=>$value){
            $htmlOpt .= $key.' = "'.$value.'"';
        }
        $definitions = str_replace("{htmlOptions}", $htmlOpt, $template);
        $define = "";
        foreach ($option as $key=>$value){
            $define .= "<dt {htmlOptions}>".$value['dt']['content']."</dt>";
            $htmlOpt = '';
            foreach ($value['dt']['htmlOptions'] as $k=>$v){
                $htmlOpt .= $k.' = "'.$v.'"';
            }
            $define = str_replace("{htmlOptions}", $htmlOpt, $define);

            $define .= "<dd {htmlOptions}>".$value['dd']['content']."</dd>";
            $htmlOpt = '';
            foreach ($value['dd']['htmlOptions'] as $k=>$v){
                $htmlOpt .= $k.' = "'.$v.'"';
            }
            $define = str_replace("{htmlOptions}", $htmlOpt, $define);
        }
        $definitions =  str_replace("{Content}", $define, $definitions);
        return $definitions;
    }

    public function radioButton($options){

        $htmlOpt = '';
        $template = '';
        foreach ($options as $key=>$value){
            $name = $value['input']['name'];
            $values = $value['input']['value'];

            $template .= "<input type = radio name={name} value={value} {htmlOptions} {checked}>".$value['input']['text']."<br>";

            $template = str_replace("{name}", $name, $template);
            $template = str_replace("{value}", $values, $template);

            if(isset($value['input']['htmlOptions'])){
                foreach ($value['input']['htmlOptions'] as $k=>$v){
                    $htmlOpt .=  $k.' = "'.$v.'"';
                }
                $template = str_replace("{htmlOptions}", $htmlOpt, $template);
            }else{
                $template = str_replace("{htmlOptions}", $htmlOpt, $template);
            }

            if(isset($value['input']['checked'])){
                $checked = " checked ";
                $template = str_replace("{checked}", $checked, $template);
            }else{
                $template = str_replace("{checked}", $htmlOpt, $template);
            }

    }

        return $template;

    }

}
