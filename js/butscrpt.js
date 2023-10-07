$(function(){
       $('.gender-man').on('click', function(){
            $('.gender-man ').addClass('gender-man--active')
            $('.gender-woman ').removeClass('gender-woman--active')
        });
         $('.gender-woman').on('click', function(){
            $('.gender-woman').addClass('gender-woman--active')
            $('.gender-man ').removeClass('gender-man--active')
        });
});
