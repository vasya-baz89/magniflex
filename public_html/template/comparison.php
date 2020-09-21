<?php
    function get_products_for_comparison($a){
        $b = '';

        foreach($a as $prod){
            $b .= "
            <div class='compare_block_line' style='display: none;'>
                <div class='compaire_img'>
                    <div class='absolute remove_compare_from_page' data-name='{$prod["name"]}'>x</div>
                    <a href='/catalog/{$prod["parent_address"]}/{$prod["address"]}'>
                        <img src='{$prod["small_img"]}' alt=''>
                    </a>
                    <a class='comparison_go_to_cart_button' href='/catalog/{$prod["parent_address"]}/{$prod["address"]}'> Перейти к товару </a>
                    <p class='compaire_img_name'>{$prod["name"]}</p>
                </div>
                <div class='compare_dot'>
                    <p>.</p>
                </div>";

                $b .= "
                    <span class='size_price_group'>
                        <div class='compare_decription_block'>
                            <p class='main_decrp'>Размер</p>
                            <p class='size_special_for_script'>Выберите для сравнения</p>
                        </div>
                    </span>
                ";

                foreach($prod['sizes'] as $size){
                    $price = number_format($size[1], 0, '', ' ');

                    $b .= "
                        <span style='display: none;' class='size_price_group ama' data-size='{$size[0]}'>
                            <div class='compare_decription_block'>
                                <p class='main_decrp'>Размер</p>
                                <p class='size_special_for_script'>{$size[0]}</p>
                            </div>
                            <div class='compare_decription_block'>
                                <p class='main_decrp'>Цена</p>
                                <p>{$price} руб</p>
                            </div>
                        </span>
                    ";
                }

                $b .= "
                    <span class='not_allow' style='display: none;'>
                        <div class='compare_decription_block'>
                            <p class='main_decrp'>Размер</p>
                            <p class='size_special_for_script'></p>
                        </div>
                        <div class='compare_decription_block'>
                            <p class='main_decrp'>Цена</p>
                            <p class='price_special_for_script'></p>
                        </div>
                    </span>
                ";


            $b .= "<div class='compare_decription_block'>
                    <p class='main_decrp'>Высота</p>
                    <p>{$prod["attr_cat_product1"]}</p>
                </div>
                <div class='compare_decription_block'>
                    <p class='main_decrp'>Чехол</p>
                    <p>{$prod["attr_cat_product2"]}</p>
                </div>
                <div class='compare_decription_block'>
                    <p class='main_decrp'>Жесткость</p>
                    <p>{$prod["attr_cat_product3"]}</p>
                </div>
                <div class='compare_decription_block'>
                    <p class='main_decrp'>Материалы</p>
                    <p>{$prod["block_attr_materials"]}</p>
                </div>
                <div class='compare_decription_block'>
                    <p class='main_decrp'>Сертификаты</p>
                    <p>{$prod["block_attr_certifications"]}</p>
                </div>
                <div class='compare_decription_block'>
                    <p class='main_decrp'>Преимущества</p>
                    <p>{$prod["block_attr_benefits"]}</p>
                </div>
                <div class='compare_decription_block'>
                    <p class='main_decrp'>Уровень комфорта</p>
                    <p>{$prod["block_attr_comfort_level"]}</p>
                </div>
                <div class='compare_decription_block'>
                    <p class='main_decrp'>Гарантия</p>
                    <p>{$prod["block_attr_warranty"]}</p>
                </div>
                <div class='compare_decription_block'>
                    <p class='main_decrp'>Дополнительно</p>
                    <p>{$prod["block_attr_extra"]}</p>
                </div>
            </div>
            ";
        }

        return $b;
    }
?>

<script>

    

</script>