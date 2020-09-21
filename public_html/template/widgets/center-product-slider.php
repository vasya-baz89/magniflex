<?php

    

    function getProductsMcl($products){

        $sl_products = array(
            'mattresses' => array('carezza-10', 'freshgel-10', 'carezza-10', 'freshgel-10')
        );

        $html = '';

        $html .= '<div class="new-center-sliderok">';
        foreach ($sl_products['mattresses'] as $sl_prod){            
            foreach ($products as $product){
                if($sl_prod == $product['address']){
                    $price = 'нет цены';
                    if($product['sizes']){ 		
                        $price = $product['sizes'][0][1];
                    } 		
                    $html .= '                           
                    <div class="swap-line">
                        <h3 class="swap-line-title">'. $product['name'] .'</h3>
                        <div class="swap-line-block">
                            <div class="swap-line-block">
                                <img class="swap-line-img" src="'. $product['small_img'] .'" alt="sds">
                            </div>
                            <div class="swap-info-wrap">
                                <div class="swap-info-block">
                                    <span class="swap-info-title">Высота</span>
                                    <span class="swap-info-value">'. $product['attr_cat_product1'] .'</span>
                                </div>
                                <div class="swap-info-block">
                                    <span class="swap-info-title">Жесткость</span>
                                    <span class="swap-info-value">'. $product['attr_cat_product3'] .'</span>
                                </div>
                            </div>
                            <a href="#" class="swap-See">Подробней</a>
                        </div>
                    </div>   
                    ';
                }                    
            }
        }
        $html .= '</div>';

        return $html;
    }

?>