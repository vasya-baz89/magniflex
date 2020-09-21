<?php

    include_once($_SERVER["DOCUMENT_ROOT"] . "/data/reviews.php");


    $rate = $_POST['rate'];
	$tag = $_POST['tag'];
	$modal_id = $_POST['id'];
	if(isset($review_tag)) $tag = $review_tag;
    //$cat = $_POST['cat'];
    //$product = $_POST['product'];

    function buildChildLink($arr_links, $reviews){
        $html = '';
        foreach($arr_links as $link){
            $count_r = 0;
            foreach($reviews as $rev){
                if(in_array($link[0], $rev['tags']) && $rev['active']){
                    $count_r++;
                }
            }
            if($count_r > 0){
                $html .= '<li><a data-url="/reviews/about/'. $link[0] .'/">'. $link[1] .' <span>('. $count_r .')</span></a></li>';
            }
        }
        return $html;
    }

    function buildMainLink($tag, $text, $reviews, $child = null){        

        $html = '';
        
        $count = countReviews($tag, $reviews);        
        if($count > 0){
            if($child != null){
                $html .= '
                    <li class="hasSub"><a  data-url="/reviews/about/'. $tag .'/">
                        <a data-url="/reviews/about/'. $tag .'/">'. $text .'('. $count .')</a>
                        <ul class="reviews_link" style="display: block;">' . buildChildLink($child, $reviews) . '</ul>
                    </li>
                ';
            } else {
                $html .= '<li class="main-m"><a  data-url="/reviews/about/'. $tag .'/">'. $text .' ('. $count .')</a></li>';
            }
        } 

        return $html;        
    }
    
    function countReviews($tag, $reviews){
        $count_r = 0;
        foreach($reviews as $rev){
            if(in_array($tag, $rev['tags']) && $rev['active']){
                $count_r++;
            }
        }
        return $count_r;
    }

    function getAllReviewsCount($reviews){
        $count_r = 0;
        foreach($reviews as $rev){
            if($rev['active']){
                $count_r++;
            }
        }
        return $count_r;
    }

    function getFilters($arr, $full_arr){   
        
        $links_matrases = [
            ['merinos', 'Merino (Merinos)'],
            ['merino-childrens', 'Merino (Merinos) для детей'],
            ['bambo', 'B-Bamboo'],
            ['stile', 'Stile'],
            ['stile-childrens', 'Stile для детей'],
            ['waterlattex', 'WaterLattex'],
            ['pensiero', 'Pensiero'],
            ['pensiero-childrens', 'Pensiero для детей'],
            ['new-naturcomfort', 'Naturalmente (New Naturcomfort)'],
            ['memorie', 'Memorie'],
            ['merino', 'Orthomemo Merino'],
            ['topper', 'Topper Best Top'],
            ['rest', 'Rest'],
            ['comfort', 'New Comfort Plus'],
            ['carezza', 'Carezza'],
            ['freshgel', 'FreshGel'],
            ['stretching', 'Stretching'],
            ['memoform', 'Exchange Memoform dual'],
            ['maestro', 'Maestro'],
            ['virtus', 'Virtus'],
        ];    

        $links_pillows = [
            ['relaxsan', 'Relaxsan'],
            ['classico', 'Classico'],
            ['freshgel-pillow', 'Freshgel'],
            ['superiore', 'Superiore'],
            ['virtuoso', 'Virtuoso'],
            ['sushi', 'Sushi'],
        ];

        $html = '     
            <div class="sr_sizes2 ama_hide_sidebar">
                <div>
                    <ul class="worlmagniflex left_sidebar" id="rev-nav-ul">
                        '. buildMainLink('mattresses', 'Отзывы о матрасах Magniflex', $full_arr, $links_matrases) .'
                        '. buildMainLink('pillows', 'Отзывы о подушках Magniflex', $full_arr, $links_pillows) .'
                        '. buildMainLink('tracks', 'Отзывы о пледах IWT SRL', $full_arr) .'
                        '. buildMainLink('company', 'Отзывы о компании Magniflex', $full_arr) .'                    
                        <li class="all main-m"><a href="/reviews" data-url="/reviews/">Все отзывы ('. getAllReviewsCount($full_arr) .')</a></li>
                        '. buildMainLink('delivery', 'Отзывы о работе службы доставки', $full_arr) .'
                        <li class="main-m send-rev-menu"><a href="/send-review">Оставить свой отзыв</a></li>
                    </ul>
                </div>            
            </div>
        ';

        return $html;
    }

    function getReviews($reviews, $title = ''){

        $all = 0;
        $good = 0;
        $bad = 0;

        $rev_average = 0;
        $rev_sum = 0;
        $rev_count = 0;

        $recommended_r = 0;

        foreach($reviews as $key => $review){
            if($review['active']){
                $all++;
                $rev_count++;
                if($review['rate'] <= 4){
                    $bad++;
                } else {
                    $recommended_r++;
                    $good++;
                }
                $rev_sum += $review['rate'];
            }            
        }

        $recommended_percent = round(($recommended_r / $rev_count) * 100) . '%';
        $rev_average = round($rev_sum / $rev_count, 1);

        $stars_html = '';

        for($i = 1; $i <= 5; $i++){
            $tmp_v = 5 - $rev_average;
            if($i <= $rev_average){
                $width = '100%';
            } else {
                $width = 100 - ($tmp_v * 100) . '%';
            }
            $stars_html .= '
                <div class="stars-outer">
                    <div class="stars-filler" style="width: '.$width .';"></div>
                    <img src="/img/star_active_b.svg">
                </div>
            ';   
        }

        if($rev_average == 5){
            $rev_average = '5.0';
        }


        $html = '                   
            <h1 class="title_textpage" style="opacity: 1;">'. $title .'</h1>
            <!--<div class="reviews_switcher_block">
                <p class="reviews_switcher_btn" onclick="showOnlyReviews()">показать только отзывы</p>
                <p class="reviews_switcher_btn" onclick="showReviewsAndRates()">показать отзывы и оценки</p>
            </div>-->
            <div class="reviews__types">
                <a class="reviews__types-item reviews__types-item_active_yes good" onclick="reviewFilter(\'good\')">
                    <div class="reviews__types-item-count good">'. $good .'</div>
                    <div class="reviews__types-item-text">положительные</div>
                </a>
                <a class="reviews__types-item active " onclick="reviewFilter(\'all\')">
                    <div class="reviews__types-item-count ">'. $all .'</div>
                    <div class="reviews__types-item-text">все</div>
                </a>
                <a class="reviews__types-item bad" onclick="reviewFilter(\'bad\')">
                    <div class="reviews__types-item-count bad">'. $bad .'</div>
                    <div class="reviews__types-item-text">отрицательные</div>
                </a>
            </div>

            <div class="sp-summary">
                <div class="sp-summary-content">
                    <div class="sp-summary-rating sp-summary-block" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                        <div class="sp-summary-block-label">Общий рейтинг</div>
                        <div class="sp-summary-rating-stars-and-value">
                            <div class="sp-summary-rating-stars">'. $stars_html .'</div>
                            <div class="sp-summary-rating-value">
                                <span itemprop="ratingValue">'. $rev_average .'</span>
                                <span class="sp-summary-rating-value-max">/5.0</span>
                            </div>
                        </div>
                        <div class="sp-summary-rating-description">
                            <span itemprop="reviewCount">'. $rev_count .'</span>
                            отзывов
                        </div>
                    </div>   
                    <div class="sp-summary-recommended sp-summary-block">
                        <div class="sp-summary-recommended-label sp-summary-block-label"> Этот товар рекомендуют </div>
                        <div class="sp-summary-recommended-value">'. $recommended_percent .' покупателей</div>
                    </div>                
                </div>
            </div>
        ';
        
        $html .= '<ul class="ama_reviews">';  
            foreach ($reviews as $key => $review){	
                if($review['active']){
                    $html .= '<li class="rate-rate" data-rate="'. $review["rate"] .'">';  
                        $title = mb_strimwidth($review['html'], 0, 400, "...");

                        $stars_html = '';
                        for($i = 1; $i <= 5; $i++){
                            if($i <= $review['rate']){
                                $stars_html .= '<img class=" star3" data-id="3" src="/img/product/star_active.svg" alt="">';
                            } else {
                                $stars_html .= '<img class=" star3" data-id="3" src="/img/product/star_grey.svg" alt="">';
                            }
                        }

                        if($review["rate"] == 5){
                            $recommend_html = '<span class="recommend_rev"> <img src="/img/revrec.svg"/> Я рекомендую этот товар!</span>';
                        } else {
                            $recommend_html = '';
                        }

                        $img_html = '';
                        foreach($review['images'] as $img){
                            $img_html .= '<img class=" star3" data-id="3" src="'. $img .'" alt="">';
                        }

                        if($review['advantages']){
                            $advant = '<br><span class="rev_advant">Достоинства: </span>' . $review['advantages'];
                        } else {
                            $advant = '';
                        }
                        if($review['limitations']){
                            $advant .= '<br><span class="rev_limit">Недостатки: </span>' . $review['limitations'];
                        } 

                        if($review['size'] != ''){
                            $size = '<span class="rev_size">Размер: </span><span style="color: #000;">' . $review['size'] . ' см</span>';
                        } else {
                            $size = '';
                        }

            
                        $html .= '                           
                            <p>
                                <b>'. $review['author'] .'</b>'. $recommend_html .'<br>
                                <span>'. $stars_html .'</span> '. $size .'
                                <br>'. $review['html'] . $advant .'
                                <span class="rev_images">'. $img_html .'</span>
                                <!--<a onclick="showModalReview('. $key .')" class="rev_link" style="cursor: pointer;">читать отзыв целиком</a>-->
                            </p>
                        ';     

                    $html .= '</li>';        
                }           
            }
        $html .= '</ul>';

        return $html;
    }

    function in_array_all($needles, $haystack) {
        return empty(array_diff($needles, $haystack));
     }

    if($rate || $tag){ 
        $newArr = array();
        $title = '';
		foreach($reviews as $key => $review){
            if($key > 0){
                $need_review = false;
                if($rate){
                    if($rate == 'good' && $review['rate'] > 4){
                        $need_review = true;
                    }
                    if($rate == 'bad' && $review['rate'] <= 4){
                        $need_review = true;
                    }
                    if($rate == 'all'){
                        $need_review = true;
                    }
                }
                if($tag){
                    if(in_array($tag,$review['tags'])){
                        if($tag != 'mattresses' && $tag != 'pillows'){
                            $title = 'Отзывы клиентов о ' . $tag . ' Magniflex';
                        }
                        if($tag == 'mattresses'){
                            $title = 'Отзывы клиентов о матрасах Magniflex';
                        }
                        if($tag == 'pillows'){
                            $title = 'Отзывы клиентов о подушках Magniflex';
                        }
                        if($tag == 'tracks'){
                            $title = 'Отзывы клиентов о пледах Magniflex';
                        }
                        $need_review = true;
                    }
                }
                if($need_review) array_push($newArr, $review);
            }	
		}
		if(count($newArr) == 0){
			$new_html = 'По данным критериям отзывов нет';
		} else {
			$new_html = getReviews($newArr, $title);
		}
		
		if(isset($review_tag)){
			$page['text'] = str_replace('<!--{filters}-->', getFilters($newArr, $reviews), $page['text']);
            $page['text'] = str_replace('<!--{reviews}-->', $new_html, $page['text']);
            
			echo($page['text']);
		}
		else {
			echo json_encode(array("html"=>$new_html));
		}
    }
    
    if($modal_id){ 
		echo json_encode($reviews[$modal_id]);
	}

    
?>