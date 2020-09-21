jQuery(document).ready(function(){
    // $('.see_oll_oll').click(function(){
    //     console.log('sda')
    //     $(".opus").toggleClass("hiderrr")
      
    // })
    //    $('.see_oll_oll1').click(function(){
    //     $(".serti").toggleClass("hiderrr")
        
    // })
    //  $('.see_oll_oll2').click(function(){
    //     $(".ama_review_tab_content").toggleClass("hiderrr")
        
    // })
    //  $('.see_oll_oll3').click(function(){
    //      console.log('per')
    //     $(".hnb_contcenter").toggleClass("hiderrr")
        
    // })

    $('.makarB').click(function(){
        let attr = $(this).attr('data-button')
        $(`.makar`).hide()
        $(`.makar[data-target=${attr}]`).show()
    })
})