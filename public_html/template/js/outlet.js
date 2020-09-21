    var data_filter = {}

    function filterProducts(){
        $('.filter_switcher.reset').removeClass('active')
        var products = $('.outlet-product')

        products.fadeIn()
        products.each(function(){
            for(var key in data_filter){
                var el = $(this).find('[data-filter='+ key +']');
                if(key == "size"){
                    if(el.text() != data_filter['size'] + ' см'){
                        $(this).hide()
                        continue;
                    } 
                }else if(key == "status"){
                    var fc = false;
                    data_filter['status'].forEach(function(item){
                        if(el.text() == item){
                            fc = true;
                        }
                    })   
                    if(!fc){
                        $(this).hide() 
                    }
                } else {
                    if(el.text() != data_filter[key]){
                        $(this).hide()
                        continue;
                    } 
                }    
            }
        });      
          
    }

    $(document).ready(function(){

        $(".filter_title_h1").insertAfter(".main_menu_wrap");
        $(".outlet_filter").insertAfter(".filter_title_h1");
           
        $('.filter_slct').change(function(){
            var value = event.target.value.split('&')
            data_filter[value[0]] = value[1];
            filterProducts()
        })
        $('.filter_switcher.btn').click(function(){
            var value = event.target.innerText
            var prop = event.target.getAttribute('data-name')
            if(prop == 'status'){
                if(data_filter['status']){
                    data_filter['status'] = [...data_filter['status'], value];
                } else {
                    data_filter['status'] = [value]
                }             
                data_filter['status'] = [...new Set(data_filter['status'])]
                
            } else {
                $(`.filter_switcher[data-name=${prop}]`).removeClass('active')
                data_filter[prop] = value;  
            }
            event.target.classList.add('active')     
            filterProducts()
        })
        $('.filter_switcher.reset').click(function(){
            data_filter = {}
            $('.filter_switcher').removeClass('active')
            event.target.classList.add('active')       
            $('.filter_slct').each(function(){
                $(this).get(0).selectedIndex = 0;
            })             
            $('.outlet-product').fadeIn()
        })
    })
    
    
  