<?php

    

    function getProductsMsl($products){

        $sl_products = array(
            'mattresses' => array('waterlattex', 'pensiero-6', 'carezza-10', 'freshgel-10'),
            'pillows' => array('memoform_wave_classico', 'magnigel-deluxe-standard', 'memoform-superiore-deluxe-orthomassage', 'memoform_superiore_deluxe_wave')
        );

        $html = '';

        $html .= '<div class="new-main-sliderok">';
        foreach ($sl_products['mattresses'] as $sl_prod){            
            foreach ($products as $product){
                if($sl_prod == $product['address']){
                    $price = 'нет цены';
                    if($product['sizes']){ 		
                        $price = $product['sizes'][0][1];
                    } 		
                    $html .= '                           
                        <div class="category_product mattresses-height">
                            <div class="ama_product_block">
                                <a href="/catalog/'. $product['parent_address'] . '/' . $product['address'] . '/" class="category_product_img" title="Ортопедический матрас Stile 6">
                                    <img class="vategMadeItaly" src="/img/made_in_italy.png" alt="Сделано в Италии">
                                    <img src="'. $product['small_img'] . '" alt="матрас Stile 6 Magniflex">
                                </a>
                                <a href="/catalog/'. $product['parent_address'] . '/' . $product['address'] . '/" class="category_product_name" title="Ортопедический матрас Stile 6">'. $product['name'] . '</a>							
                                <div class="small_desc">
                                    <div class="ama_product_desc">
                                        <div>
                                        <p class="spec-left">ВЫСОТА</p>
                                        <p class="spec-right">'. $product['attr_cat_product1'] . '</p>
                                        </div>
                                        <div>
                                        <p class="spec-left">ЧЕХОЛ</p>
                                        <p class="spec-right">'. $product['attr_cat_product2'] . '</p>
                                        </div>
                                        <div>
                                        <p class="spec-left">ЖЕСТКОСТЬ</p>
                                        <p class="spec-right">'. $product['attr_cat_product3'] . '</p>
                                        </div>
                                        <div class="ama_desc_hide_on_mobile">
                                        <p class="spec-left">Сделано</p>
                                        <p class="spec-right">Италия</p>
                                        </div>
                                        <style data-styleurl_id="styletag_37">
                                        .ama_product_desc > div:nth-child(2) {
                                        display: none;
                                        }
                                        </style>
                                    </div>
                                </div>
                                <div class="category_product_price">
                                    <p>
                                        <span> от '. $price .' <span class="rub_price">P</span></span>							
                                    </p>
                                    <div class="category_product_buy">
                                        Купить
                                    </div>
                                </div>
                                <div class="category_product_link">
                                    <a href="/catalog/collectio-stile/stile-6/" title="Ортопедический матрас Stile 6">
                                    Подробнее
                                    </a>
                                </div>
                                <div class="category_product_quantity">
                                    <a href="javascript:void(0)" class="sf_minus" rel="nofollow">-</a>
                                    <input type="text" class="sf_base_quantity" name="quantity" value="1">
                                    <a href="javascript:void(0)" class="sf_plus" rel="nofollow">+</a>
                                    <span>шт</span>
                                </div>
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