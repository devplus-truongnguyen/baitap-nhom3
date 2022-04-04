<?php
    class Replace
    {
        public function replaceText($input_text, $find_text, $replace_text)
        {
            $output_text = str_replace($input_text, $find_text, $replace_text);
            return $output_text;
        }
    }
    $input_text = isset($_POST['input_text']) ? $_POST['input_text'] : '';  
    $find_text = isset($_POST['find_text']) ? $_POST['find_text'] : '';    
    $replace_text = isset($_POST['replace_text']) ? $_POST['replace_text'] : '';
    
    $replace = new Replace();
    $output_text = $replace->replaceText($find_text, $replace_text, $input_text);
  
?>