<?php
    function build_mapsite($products, $categories, $pages){

        $html = '<ul class="mapsite-wrapper">';

        $html .= '<li><h3>Страницы</h3></li>';

        foreach($pages as $page){
            $link = '';
            if($page['parent_address'] != ''){
                
                $link = '/' . $page['parent_address'] . '/' . $page['address'] . '/';
            } else {
                $link = '/' . $page['address'] . '/';
            }
            $html .= '
            <li>
                <a href="'.$link.'">'.$page["name"].'</a>
            </li>
            ';
        }

        $html .= '<li><h3>Категории</h3></li>';

        foreach($categories as $category){
            $link = '';
            if($category['parent_address'] != ''){
                
                $link = '/catalog/' . $category['parent_address'] . '/' . $category['address'] . '/';
            } else {
                $link = '/catalog/' . $category['address'] . '/';
            }
            $html .= '
            <li>
                <a href="'.$link.'">'.$category["name"].'</a>
            </li>
            ';
        }

        $html .= '<li><h3>ТОВАРЫ</h3></li>';

        foreach($products as $product){
            $link = '';
            if($product['parent_address'] != ''){
                
                $link = '/catalog/' . $product['parent_address'] . '/' . $product['address'] . '/';
            } else {
                $link = '/catalog/' . $product['address'] . '/';
            }
            $html .= '
            <li>
                <a href="'.$link.'">'.$product["name"].'</a>
            </li>
            ';
        }

        $html .= '</ul>';

        return $html;
    }
?>
