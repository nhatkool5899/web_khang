$('#inputImg').on('change', function(){
    const file = this.files[0];
    if (file){
        let reader = new FileReader();
        reader.onload = function(event){
          console.log(event.target.result);
          $('#img-preview').attr('src', event.target.result);
        }
        reader.readAsDataURL(file);
    }
})

$('.show-submenu').click(function(){
    $(this).toggleClass('side-menu--open');
    $('.drop-submenu').toggleClass('side-menu__sub-open');
    $('.icon-submenu').toggleClass('active');
});


function checkUrl(){
    var url = location.href;
    if(url.indexOf('home-banner') == 24){
        $('.show-submenu').addClass('side-menu--open');
        $('.show-submenu').addClass('side-menu--active');
        $('.drop-submenu').addClass('side-menu__sub-open');
    }
}
checkUrl();


$('#select-layout').change(function(){
    var value = $(this).val();
    $('.layout-block').removeClass('active');
    $('.layout-' + value).addClass('active');
})


// Show modal layout
var count_key = $('#count_key').val();
for (let i = 0; i <= count_key; i++) {
    $('.btn-show-layout_'+i).click(function(){
        $('.modal-layout_'+i).addClass('active');
    })
}
$('.modal-layout').click(function(e){
    if(e.target == e.currentTarget){
        $(this).removeClass('active');
    }
})
$('.modal-close').click(()=>{
    $('.modal-layout').removeClass('active');
})



// Change danh mục sản phẩm
$('#change_cate').change(function(){
    var danhmuc_id = $(this).val();
    for (let i = 0; i <= 3; i++) {
        if(i != danhmuc_id){
            $('.cate_' + i).addClass('hide');
        }else{
            $('.cate_' + i).removeClass('hide');
        }
    }
    if(danhmuc_id == 0){
        $('.table-item').removeClass('hide');
    }
})