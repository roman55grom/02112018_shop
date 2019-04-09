var buttonBurger = document.querySelector('.navigation-burger');
var burgerStick = document.querySelectorAll('.navigation-burger__stick');
var navigation = document.querySelector('.navigation');

buttonBurger.addEventListener('click', function() {

    if (navigation.classList.contains('navigation_active')) {
        navigation.classList.remove('navigation_active');
        burgerStick.forEach(function(value, index) {
            burgerStick[index].classList.remove('navigation-burger__stick_active');
        });
    } else {
        navigation.classList.add('navigation_active');
        burgerStick.forEach(function(value, index) {
            burgerStick[index].classList.add('navigation-burger__stick_active');
        });
    }
});