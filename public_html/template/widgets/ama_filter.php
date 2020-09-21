<?
   
    class Filter{

        private $disabled = false;

        public function buildFilter($arr){

            if($this->disabled){
                return '';
            }

            $fl_collection = [];
            $fl_size = [];
            $fl_zhest = [];
            $fl_status = [];

            foreach($arr as $prod){
                array_push($fl_collection, $prod['outlet_q']['collection']);
                array_push($fl_zhest, $prod['attr_cat_product3']);
                array_push($fl_status, $prod['outlet_q']['status']);
                array_push($fl_size, $prod['outlet_q']['size']);
            }

            $sz6 = [];
            $sz7 = [];

            $fl_size = array_unique($fl_size);

            foreach($fl_size as $size){
                if(strlen($size) == 6){
                    array_push($sz6, $size);
                } else {
                    array_push($sz7, $size);
                }
            }

            sort($sz6);
            sort($sz7);

            $fl_size = array_merge($sz6, $sz7);

            $html = '<div class="outlet_filter">';
                $html .= '<div class="ama-filter-btn" style="display: none;"><img src="/img/adjust.png" />Все настройки</div>';
                $html .= ' <div class="switcher_main"> <p>'. $title .'</p>';
                    $html .= ' <div class="bld_switcher">';
                        $html .= '<span class="filter_switcher reset active">Все</span>';
                    $html .= '</div>';
                $html .= '</div>';
                $html .= $this->buildSwitcher($fl_status, 'status');
                $html .= $this->buildSwitcher($fl_collection,  'collection');
                $html .= $this->buildSelect($fl_zhest, 'Жесткость', 'zhest');
                $html .= $this->buildSelect($fl_size, 'Выбрать размер', 'size');
            $html .= '</div>';

            return $html;
        }


        private static function buildSelect($arr, $name, $flag){

            $title = '';

            switch ($name){
                case 'Выбрать размер': 
                    $title = 'нужный размер';
                    break;
                case 'Жесткость': 
                    $title = 'жесткий или мягкий';
                    break;
            }

            $arr = array_unique($arr);  
            $html = ' <div class="switcher_main"> <p>'. $title .'</p>';
            $html .= '<div class="bld_select">
            <select class="filter_slct"><option selected disabled>'.$name.'</option>';      
            foreach($arr as $key => $option){
                $html .= '<option value="'. $flag . '&'. $option .'">'. $option.'</option>';
            }
            $html .= '</select></div>';
            $html .= '</div>';

            return $html;
        }

        private static function buildSwitcher($arr, $flag, $all = true){
            $arr = array_unique($arr);
            $title = '';
            switch ($flag){
                case 'status': 
                    $title = 'состояние матраса';
                    break;
                case 'collection': 
                    $title = 'коллекция';
                    break;
            }

            $html = ' <div class="switcher_main"> <p>'. $title .'</p>';    
                $html .= ' <div class="bld_switcher">';  


                foreach($arr as $key => $option){
                    $html .= '<span class="filter_switcher btn" data-name="'. $flag .'">'. $option .'</span>';
                }
                $html .= '</div>';
            $html .= '</div>';

            return $html;
        }    
    }

?>